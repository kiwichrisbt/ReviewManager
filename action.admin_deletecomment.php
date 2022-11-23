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
if( !$this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) return false;

#
# Initialization
#
$this->SetCurrentTab('comments');

if( !isset($params['cid']) ) {
    $this->SetError($this->Lang('error_missingparam'));
    $this->RedirectToTab($id);
}


$cid = (int)$params['cid'];
$comment = $this->_commentops->load( $cid );
if( !$cid ) {
    $this->SetError('internal error: comment not found');
    $this->RedirectToTab($id);
}

\CMSMS\HookManager::do_hook('CGFeedback::BeforeDeleteComment',$comment);
$this->_commentops->delete_by_id($cid);

$this->SetMessage($this->Lang('msg_commentdeleted'));
$this->RedirectToTab($id);

#
# EOF
#
