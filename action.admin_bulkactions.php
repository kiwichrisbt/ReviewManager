<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGUFeedback (c) 2009 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
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
if( !$this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) return false;

#
# Initialization
#
$this->SetCurrentTab('comments');

if( !isset($params['selected_str']) ) {
    $this->SetError($this->Lang('error_missingparam'));
    $this->RedirectToTab($id);
}
if( !isset($params['bulk_action']) ) {
    $this->SetError($this->Lang('error_missingparam'));
    $this->RedirectToTab($id);
}

$selected = explode(',',$params['selected_str']);
if( !count($selected) ) {
    $this->SetError($this->Lang('error_missingparam'));
    $this->RedirectToTab($id);
}



$count = 0;
foreach( $selected as $one ) {
  switch($params['bulk_action']) {
  case 'delete':
      $ret = $this->_commentops->delete_by_id($one);
      if( $ret == TRUE ) $count++;
      break;

  case 'published':
      $comment = $this->_commentops->load($one);
      $ret = $this->_commentops->change_comment_status($one,REVIEWMANAGER_STATUS_PUBLISHED);
      if( $ret == TRUE ) {
          if( $comment->status != REVIEWMANAGER_STATUS_PUBLISHED ) {
              // previous status was not published, so we can notify users.
              \CMSMS\HookManager::do_hook('ReviewManager::UserNotify',$comment);
          }
          $count++;
      }
      break;

    case 'draft':
      $ret = $this->_commentops->change_comment_status($one,REVIEWMANAGER_STATUS_DRAFT);
      if( $ret == TRUE ) $count++;
      break;

    case 'spam':
      $ret = $this->_commentops->change_comment_status($one,REVIEWMANAGER_STATUS_SPAM);
      if( $ret == TRUE ) {
          $count++;
      }
      break;
  }
}

if( $count ) {
    $this->SetMessage($this->Lang('msg_bulk_operation_complete'));
}
else {
    $this->SetError($this->Lang('error_bulk_operation_failed'));
}
$this->RedirectToTab($id);

#
# EOF
#
