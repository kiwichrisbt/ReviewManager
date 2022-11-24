<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: ReviewManager
# Author: Chris Taylor
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide the ability to rate
#  and comment on specific pages or specific items in a module.
#  Includes numerous seo friendly, and designer friendly capabilities.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
#END_LICENSE
namespace ReviewManager;

final class comment_operations
{
    private $_db;

    public function __construct($db)
    {
        $this->_db = $db;
    }

    public function mark_comment_spam($id)
    {
        return $this->change_comment_status($id,REVIEWMANAGER_STATUS_SPAM);
    }

    public function change_comment_status($id,$status)
    {
        $db = $this->_db;

        switch($status) {
        case REVIEWMANAGER_STATUS_PUBLISHED:
            break;
        case REVIEWMANAGER_STATUS_DRAFT:
        case REVIEWMANAGER_STATUS_SPAM:
            break;
        default:
            return FALSE;
        }

        $query = 'UPDATE '.REVIEWMANAGER_TABLE_COMMENTS." SET status = ?, modified = NOW()
              WHERE id = ?";
        $db->Execute($query,array($status,$id));
        return TRUE;
    }

    public function load_displayable($comment_id)
    {
        $db = $this->_db;

        $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_COMMENTS.' WHERE id = ?';
        $row = $db->GetRow($query,array((int)$comment_id));

        if( is_array($row) ) {
            $mod = \cms_utils::get_module('ReviewManager');
            $obj = new displayable_comment($mod);
            $obj->from_array($row);

            $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
            $tmp = $db->GetArray($query,array((int)$comment_id));

            if( is_array($tmp) ) $obj->load_fields_from_array($tmp);
            return $obj;
        }
    }

    public function load($comment_id)
    {
        $db = $this->_db;

        $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_COMMENTS.' WHERE id = ?';
        $row = $db->GetRow($query,array((int)$comment_id));

        if( is_array($row) ) {
            $obj = new comment;
            $obj->from_array($row);

            $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
            $tmp = $db->GetArray($query,array((int)$comment_id));

            if( is_array($tmp) ) $obj->load_fields_from_array($tmp);
            return $obj;
        }
    }

    public function delete_by_id($comment_id)
    {
        $db = $this->_db;
        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
        $dbr = $db->Execute($query,array((int)$comment_id));

        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_COMMENTS.' WHERE id = ?';
        $dbr = $db->Execute($query,array((int)$comment_id));

        return TRUE;
    }

    public function save(comment& $obj)
    {
        if( !$obj->validate() ) return FALSE;

        if( is_null($obj->id) ) {
            return $this->insert( $obj );
        }
        return $this->update( $obj );
    }

    protected function insert(comment& $obj)
    {
        if( !is_null($obj->id) ) throw new Exception('Attempt to insert a comment that has an id');

        $db = $this->_db;
        $now = $db->DbTimeStamp(time());
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_COMMENTS."
              (key1,key2,key3,rating,title,data,status,author_name,author_email,author_ip,author_notify,admin_notes,notified,origurl,extra,created,modified)
              VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,$now,$now)";
        $dbr = $db->Execute($query,array($obj->key1,$obj->key2,$obj->key3,$obj->rating,$obj->title,$obj->data,$obj->status,
                                         $obj->author_name,$obj->author_email,$obj->author_ip,$obj->author_notify,$obj->admin_notes,
                                         $obj->notified,$obj->origurl,serialize($obj->get_extra())));
        if( $db->ErrorMsg() != '' ) {
            throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
            return FALSE;
        }
        $obj->id = $db->Insert_ID();
        $obj->created = $now;
        $obj->modified = $now;

        // insert fields.
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_FIELDVALS."
              (comment_id,field_id,value) VALUES (?,?,?)";
        $flds = $obj->get_fields();
        if( is_array($flds) ) {
            foreach( $flds as $fid ) {
                $dbr = $db->Execute($query,array($obj->id,$fid,$obj->get_field_by_id($fid)));
                if( !$dbr ) {
                    // undo the stuff we just did
                    $this->delete_by_id($obj->id);
                    $obj->id = null;
                    $obj->creeated = null;
                    $obj->modifed = null;

                    // throw an exception.
                    throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
                    return FALSE;
                }
            }
        }
        return TRUE;
    }


    protected function update(comment& $obj)
    {
        if( is_null($obj->id) ) throw new Exception('Attempt to update a comment that has no id');

        $db = $this->_db;
        $now = $db->DbTimeStamp(time());
        $query = 'UPDATE '.REVIEWMANAGER_TABLE_COMMENTS." set key1 = ?, key2 = ?, key3 = ?, rating = ?, title = ?, data = ?,
               status = ?, author_name = ?, author_email = ?, author_ip = ?, author_notify = ?, admin_notes = ?,
               notified = ?, origurl = ?, extra = ?, created = ?, modified = $now WHERE id = ?";
        $dbr = $db->Execute($query,
                            array($obj->key1,$obj->key2,$obj->key3,$obj->rating,$obj->title,$obj->data,
                                  $obj->status,$obj->author_name,$obj->author_email,$obj->author_ip,$obj->author_notify,
                                  $obj->admin_notes,$obj->notified,$obj->origurl,serialize($obj->get_extra()),$obj->created,$obj->id));
        if( !$dbr ) {
            throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
            return FALSE;
        }
        $obj->modifed = $now;

        // DELETE ANY FIELDS FOR THIS RECORD
        $query = 'DELETE FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id = ?';
        $dbr = $db->Execute($query,array($obj->id));

        // INSERT NEW FIELDS FOR THIS RECORD
        $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_FIELDVALS."
              (comment_id,field_id,value) VALUES (?,?,?)";
        $flds = $obj->get_fields();
        if( is_array($flds) ) {
            foreach( $flds as $fid ) {
                $dbr = $db->Execute($query,array($obj->id,$fid,$obj->get_field_by_id($fid)));
                if( !$dbr ) {
                    // undo the stuff we just did
                    self::delete_by_id($this->id);

                    // throw an exception.
                    throw new Exception('SQL ERROR: '.$db->sql.' -- '.$db->ErrorMsg());
                    return FALSE;
                }
            }
        }

        return TRUE;
    }

}; // end of class

#
# EOF
#
