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
# This projects homepage is: http://www.cmsmadesimple.org
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
if( !isset($gCms) ) exit;
if( !$this->CheckPermission('Modify Site Preferences') ) return;

#
# Initialization
#
$status = '';
$msg = '';
$this->SetCurrentTab('fields');
$field = array('name'=>'','type'=>REVIEWMANAGER_TYPE_TEXT,'attribs'=>'','iorder'=>1);
$field['attrib'] = array();
$yesno = array(1=>$this->Lang('yes'),0=>$this->Lang('no'));
$types = array(REVIEWMANAGER_TYPE_TEXT=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_TEXT),
	       REVIEWMANAGER_TYPE_EMAIL=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_EMAIL),
	       REVIEWMANAGER_TYPE_TEXTAREA=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_TEXTAREA),
	       REVIEWMANAGER_TYPE_DROPDOWN=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_DROPDOWN),
	       REVIEWMANAGER_TYPE_MULTISELECT=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_MULTISELECT));

#
# Setup
#

#
# Get the data
#
if( isset($params['fid']) ) {
    $query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDDEFS.' WHERE id = ?';
    $tmp = $db->GetRow($query,array((int)$params['fid']));
    if( $tmp ) {
        $field = $tmp;
        $field['attrib'] = unserialize($field['attribs']);
    }
}

#
# Process form values
#
if( isset($params['cancel']) ) $this->RedirectToAdminTab();
if( isset($params['name']) ) $field['name'] = trim($params['name']);
if( isset($params['type']) ) $field['type'] = (int)$params['type'];
foreach( $params as $key => $value ) {
    if( !startswith($key,'attrib_') ) continue;

    $attrib = substr($key,7);
    $field['attrib'][$attrib] = $value;
}
if( isset($params['submit']) ) {
    // validate
    if( !isset($field['name']) || empty($field['name']) ) $status = $this->Lang('error_missingvalue','name');

    if( empty($status) ) {
        switch( $field['type'] ) {
        case REVIEWMANAGER_TYPE_TEXT:
        case REVIEWMANAGER_TYPE_EMAIL:
            if( !isset($field['attrib']['length']) || $field['attrib']['length'] <= 0 ) {
                $status = $this->Lang('error_missingvalue','length');
            }
            else if( !isset($field['attrib']['maxlength']) || $field['attrib']['maxlength'] <= 0 ) {
                $status = $this->Lang('error_missingvalue','maxlength');
            }
            break;
        case REVIEWMANAGER_TYPE_DROPDOWN:
        case REVIEWMANAGER_TYPE_MULTISELECT:
            if( !isset($field['attrib']['options']) ) {
                $status = $this->Lang('error_missingvalue','options');
            }
            else {
                $tmp = explode("\n",$field['attrib']['options']);
                $count = 0;
                foreach( $tmp as $one ) {
                    $x = trim($one);
                    if( !empty($x) ) $count++;
                }
                if( $count == 0 ) $status = $this->Lang('error_missingvalue','options');
            }
            break;
        }
    }

    if( empty($status) ) {
        // double check a field by this name doesn't already exist
        if( isset($field['id']) && $field['id'] > 0 ) {
            $query = 'SELECT id FROM '.REVIEWMANAGER_TABLE_FIELDDEFS.' WHERE name = ? AND id != ?';
            $tmp = $db->GetOne($query,array($field['name'],$field['id']));
            if( $tmp ) $status = $this->Lang('error_nameexists');
        }
        else {
            $query = 'SELECT id FROM '.REVIEWMANAGER_TABLE_FIELDDEFS.' WHERE name = ?';
            $tmp = $db->GetOne($query,array($field['name']));
            if( $tmp ) $status = $this->Lang('error_nameexists');
        }
    }

    // now we're ready to save.
    if( empty($status) ) {
        $field['attribs'] = serialize($field['attrib']);
        unset($field['attrib']);

        $dbr = '';
        if( isset($field['id']) && $field['id'] > 0 ) {
            // it's an update
            $msg = $this->Lang('msg_field_updated');
            $query = 'UPDATE '.REVIEWMANAGER_TABLE_FIELDDEFS.' SET name = ?, type = ?, attribs = ?
                      WHERE id = ?';
            $dbr = $db->Execute($query,array($field['name'],$field['type'],$field['attribs'],$field['id']));
        }
        else {
            $msg = $this->Lang('msg_field_added');
            $query = 'SELECT MAX(iorder) FROM '.REVIEWMANAGER_TABLE_FIELDDEFS;
            $tmp = $db->GetOne($query);
            $field['iorder'] = ($tmp > 0)?$tmp+1:1;

            // it's an insert
            $query = 'INSERT INTO '.REVIEWMANAGER_TABLE_FIELDDEFS.'  (name,type,attribs,iorder)
                      VALUES (?,?,?,?)';
            $dbr = $db->Execute($query,array($field['name'],$field['type'],$field['attribs'],$field['iorder']));
        }

        if( !$dbr ) $status = $this->Lang('error_dberror').'<br/>'.$db->sql.'<br/>'.$db->ErrorMsg();
    }

    if( empty($status) ) {
        // all done
        $this->SetMessage($msg);
        $this->RedirectToAdminTab();
    }
}

#
# Give everything to smarty
#
$smarty->assign('yesno',$yesno);
$smarty->assign('fldtypes',$types);
$smarty->assign('fld',$field);

#
# Process the template
#
if( !empty($status) ) echo $this->ShowErrors($status);
echo $this->ProcessTemplate('admin_add_field.tpl');

#
# EOF
#