<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Authors: Chris Taylor, Magal, with CMS Made Simple Foundation able to assign new administrators.
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

if ( !defined('CMS_VERSION') ) exit;

#
# Initialize
#
$types = array(REVIEWMANAGER_TYPE_TEXT=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_TEXT),
    REVIEWMANAGER_TYPE_EMAIL=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_EMAIL),
    REVIEWMANAGER_TYPE_TEXTAREA=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_TEXTAREA),
    REVIEWMANAGER_TYPE_DROPDOWN=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_DROPDOWN),
    REVIEWMANAGER_TYPE_MULTISELECT=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_MULTISELECT),
	REVIEWMANAGER_TYPE_FILEUPLOAD=>$this->Lang('fieldtype_'.REVIEWMANAGER_TYPE_FILEUPLOAD));

#
# Get the data
#
$query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_FIELDDEFS.' ORDER BY iorder ASC';
$data = $db->GetArray($query);

#
# Give Everything to Smarty
#
$tpl = $smarty->CreateTemplate( $this->GetTemplateResource('admin_fields_tab.tpl'), null, null, $smarty );

$tpl->assign('fieldtypes', $types);
if ( is_array($data) && count($data) > 0 ) {
    for ( $i = 0; $i < count($data); $i++ ) {
	    $edit_url = $this->CreateURL( $id, 'admin_add_field', $returnid, array('fid'=>$data[$i]['id']) );
	    $delete_url = $this->CreateURL( $id, 'admin_del_field', $returnid, array('fid'=>$data[$i]['id']) );
	    if ( $i > 0 ) {
	        $moveup_url = $this->CreateURL( $id, 'admin_order_field', $returnid, 
			    array('fid'=>$data[$i]['id'], 'dir'=>'up', 'cur'=>$data[$i]['iorder']) );
	        $data[$i]['moveup_url'] = $moveup_url;
	    }
	    if ( $i < (count($data) - 1) ) {
	        $movedown_url = $this->CreateURL( $id, 'admin_order_field', $returnid, 
				array('fid'=>$data[$i]['id'], 'dir'=>'down', 'cur'=>$data[$i]['iorder']) );
	        $data[$i]['movedown_url'] = $movedown_url;
	    }
        $data[$i]['edit_url'] = $edit_url;
        $data[$i]['delete_url'] = $delete_url;
    }
    $tpl->assign('fields',$data);
}

$tpl->display();


