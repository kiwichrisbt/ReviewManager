<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Author: Chris Taylor
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

if ( !defined('CMS_VERSION') ) exit;

echo $this->StartTabHeaders();
    if ( $this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) {
        echo $this->SetTabHeader('comments', $this->Lang('lbl_comments'));
    }
    if ( $this->CheckPermission('Modify Site Preferences') ) {
        echo $this->SetTabHeader('fields', $this->Lang('lbl_fields'));
        echo $this->SetTabHeader('settings',$this->Lang('lbl_settings'));
    }
echo $this->EndTabHeaders();

echo $this->StartTabContent();
    if ( $this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) {
        echo $this->StartTab('comments');
        include(__DIR__.'/function.admin_comments_tab.php');
        echo $this->EndTab();
    }
    if ( $this->CheckPermission('Modify Site Preferences') ) {
        echo $this->StartTab('fields');
        include(__DIR__.'/function.admin_fields_tab.php');
        echo $this->EndTab();

        echo $this->StartTab('settings');
        include(__DIR__.'/action.admin_settings_tab.php');
        echo $this->EndTab();
    }
echo $this->EndTabContent();


