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
use \CGFeedback\utils;
use \CGFeedback\comment_query;
use \CGFeedback\param_cleaner;

#
# Initialization
#
// clean params
$cleaner = new param_cleaner;
$cleaner->set_string(['detailpage','detailtemplate','key1','key2','key3','sortorder','sortby','since','summarytemplate']);
$cleaner->set_int(['pagelimit','pagenum']);
$cleaner->set_bool(['inline','showall']);
$cleaner->set_dflt('detailpage',$returnid);
$qparms = $cleaner->go( $params );

// post-process params.
$qparms['detailpage'] = $this->resolve_alias_or_id($qparms['detailpage'],$returnid);
$qparms['key1'] = \xt_param::get_string($qparms,'key1','__page__');
$qparms['key2'] = \xt_param::get_string($qparms,'key2',$returnid);

// setup the query
$query = new comment_query($qparms);
if( ($pagelimit = \xt_param::get_int($qparms,'pagelimit')) ) $query['limit'] = $pagelimit;
if( ($pagenum = \xt_param::get_int($qparms,'pagenum') ) ) $query['offset'] = (int) ($pagenum - 1) * $query['limit'];

// todo: pagenum param to offset

$rs = $query->execute();
$data = $rs->FetchAll();
$pagination = $rs->get_pagination();
$pagination->set_pageid($returnid);

#
# Give everything to smarty
#
$thetemplate = utils::find_layout_template($qparms,'summarytemplate','CGFeedback::Summary View');
$tpl = $this->CreateSmartyTemplate($thetemplate);

$path = $config['root_url'].'/modules/'.$this->GetName().'/images/';
$tmp = array('img_on'=>$path.'star.gif','img_off'=>$path.'starOff.gif','img_half'=>$path.'starHalf.gif');
$tpl->assign('rating_imgs',$tmp);
$tpl->assign('total_matches',$rs->TotalMatches());
$tpl->assign('comments',$data);
$tpl->assign('pagination',$pagination);
$tpl->assign('detailpage',$qparms['detailpage']);
$tpl->display();

#
# EOF
#
