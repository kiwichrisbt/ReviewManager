<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Author: Chris Taylor
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

if( !defined('CMS_VERSION') ) exit;

// Remove all tables
$db = $this->GetDb();
$dict = NewDataDictionary($db);

$sqlarray = $dict->DropTableSQL(REVIEWMANAGER_TABLE_FIELDVALS);
$dict->ExecuteSQLArray($sqlarray);

$sqlarray = $dict->DropTableSQL(REVIEWMANAGER_TABLE_FIELDDEFS);
$dict->ExecuteSQLArray($sqlarray);

$sqlarray = $dict->DropTableSQL(REVIEWMANAGER_TABLE_COMMENTS);
$dict->ExecuteSQLArray($sqlarray);

// Remove all preferences for this module
$this->RemovePreference();

// Remove all database templates for this module
$this->DeleteTemplate();

// Remove permissions
$this->RemovePermission(REVIEWMANAGER_PERM_FEEDBACK);

// template stuff
try {
    $types = \CmsLayoutTemplateType::load_all_by_originator($this->GetName());
    if ( is_array($types) && count($types) ) {
        foreach( $types as $type ) {
            $templates = $type->get_template_list();
            if ( is_array($templates) && count($templates) ) {
                foreach( $templates as $template ) {
                    $template->delete();
                }
            }
            $type->delete();
        }
    }
} catch( \Exception $e ) {
    \cge_utils::log_exception( $e );
    audit('',$this->GetName(),'Uninstall error: '.$e->GetMessage());
}


