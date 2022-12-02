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

#
# Initialization
#
$userid = get_userid();
$startelement = 0;
$pagenum = 1;
$agelimit = -1;
$key1 = -1;
$key2 = -1;
$key3 = -1;
$input_title = '';
$input_authorname = '';
$input_authoremail = '';
$input_status = -1;
$pagelimit = 10000;
$query = 'SELECT * FROM '.REVIEWMANAGER_TABLE_COMMENTS;
$cquery = 'SELECT count(id) AS count FROM '.REVIEWMANAGER_TABLE_COMMENTS;
$where = array();
$qparms = array();
$order = 'ORDER BY modified DESC,created DESC';
$thispage = 1;

#
# Setup
#
$key1 = get_preference($userid,'rmf_filter_key1',$key1);
$key2 = get_preference($userid,'rmf_filter_key2',$key2);
$key3 = get_preference($userid,'rmf_filter_key3',$key3);
$input_title = get_preference($userid,'rmf_filter_title',$input_title);
$input_authorname = get_preference($userid,'rmf_filter_authorname',$input_authorname);
$input_authoremail = get_preference($userid,'rmf_filter_authoremail',$input_authoremail);
$agelimit = get_preference($userid,'rmf_filter_agelimit',$agelimit);
$pagelimit = get_preference($userid,'rmf_filter_pagelimit',$pagelimit);
$input_status = get_preference($userid,'rmf_filter_status',$input_status);

#
# Process Parameters
#
if ( isset($params['pagenum']) ) $thispage = (int)$params['pagenum'];

#
# Process Form Data
#
if ( isset($params['bulk_submit']) ) {
    if ( isset($params['selected']) ) {
        $tmp = implode(',', $params['selected']);
        $params['selected_str'] = $tmp;
        unset($params['selected']);
    }
    $this->Redirect($id, 'admin_bulkactions', $returnid, $params);
}
if ( isset($params['filter_submit']) ) {
    if ( isset($params['input_key1']) ) $key1 = $params['input_key1'];
    if ( isset($params['input_key2']) ) $key2 = $params['input_key2'];
    if ( isset($params['input_key3']) ) $key3 = $params['input_key3'];
    if ( isset($params['input_title']) ) $input_title = $params['input_title'];
    if ( isset($params['input_authorname']) ) $input_authorname = $params['input_authorname'];
    if ( isset($params['input_authoremail']) ) $input_authoremail = $params['input_authoremail'];
    if ( isset($params['input_status']) ) $input_status = $params['input_status'];
    if ( isset($params['agelimit']) ) $agelimit = (int)$params['agelimit'];
    if ( isset($params['pagelimit']) ) $pagelimit = (int)$params['pagelimit'];

    set_preference($userid, 'rmf_filter_key1', $key1);
    set_preference($userid, 'rmf_filter_key2', $key2);
    set_preference($userid, 'rmf_filter_key3', $key3);
    set_preference($userid, 'rmf_filter_title', $input_title);
    set_preference($userid, 'rmf_filter_authorname', $input_authorname);
    set_preference($userid, 'rmf_filter_authoremail', $input_authoremail);
    set_preference($userid, 'rmf_filter_status', $input_status);
    set_preference($userid, 'rmf_filter_agelimit', $agelimit);
    set_preference($userid, 'rmf_filter_pagelimit', $pagelimit);
}

$have_filter = (
    ($key1 != '-1') || ($key2 != '-1') || ($key3 != '-1') || $input_title || $input_authorname || $input_authoremail || ($agelimit != '-1') || ($pagelimit < 10000) || ($input_status != '-1') 
);

#
# Build the query
#
if ( $key1 != -1 ) {
    $where[] = 'key1 = ?';
    $qparms[] = $key1;
}
if ( $key2 != -1 ) {
    $where[] = 'key2 = ?';
    $qparms[] = $key2;
}
if ( $key3 != -1 ) {
    $where[] = 'key3 = ?';
    $qparms[] = $key3;
}
if ( !empty($input_title) ) {
    $where[] = 'title LIKE ?';
    $qparms[] = '%'.$input_title.'%';
}
if ( !empty($input_authorname) ) {
    $where[] = 'author_name LIKE ?';
    $qparms[] = '%'.$input_authorname.'%';
}
if ( !empty($input_authoremail) ) {
    $where[] = 'author_email LIKE ?';
    $qparms[] = '%'.$input_authoremail.'%';
}
if ( !empty($input_status) && $input_status != -1 ) {
    $where[] = 'status = ?';
    $qparms[] = $input_status;
}
if ( $agelimit > 0 ) {
    $where[] = 'modified >= SUBDATE(NOW(),?)';
    $qparms[] = $agelimit;
}


#
# Get The Data
#
if ( $where ) {
    $query .= ' WHERE '.implode(' AND ',$where);
    $cquery .= ' WHERE '.implode(' AND ',$where);
}

// get the count
$matchcount = $db->GetOne($cquery,$qparms);

// calculate page variables
$npages = (int)($matchcount / $pagelimit);
if ( $matchcount % $pagelimit > 0 ) $npages++;
$startoffset = ($thispage - 1)*$pagelimit;
$query .= ' '.$order;

$data = array();
$dbr = $db->SelectLimit($query, $pagelimit, $startoffset, $qparms);
while( $dbr && ($row = $dbr->FetchRow()) ) {
    $row['edit_url'] = $this->CreateURL($id, 'admin_editcomment', $returnid, array('cid'=>$row['id']));
    $row['delete_url'] = $this->CreateURL($id, 'admin_deletecomment', $returnid, array('cid'=>$row['id']));
    $data[] = $row;
}

#
# Give everything to smarty
#
$tmp = array();
$tmp = array('-1'=>$this->Lang('lbl_any'));
$tmp[REVIEWMANAGER_STATUS_DRAFT] = $this->Lang(REVIEWMANAGER_STATUS_DRAFT);
$tmp[REVIEWMANAGER_STATUS_SPAM] = $this->Lang(REVIEWMANAGER_STATUS_SPAM);
$tmp[REVIEWMANAGER_STATUS_PUBLISHED] = $this->Lang(REVIEWMANAGER_STATUS_PUBLISHED);
$smarty->assign('statuses',$tmp);

$query = 'SELECT DISTINCT key1 FROM '.REVIEWMANAGER_TABLE_COMMENTS;
$tmp = $db->GetArray($query);
$tmp2 = array('-1'=>$this->Lang('lbl_any'));
if ( is_array($tmp) && count($tmp) ) {
    foreach( $tmp as $one ) {
        if ( $one['key1'] == '__page__' ) {
            $tmp2['__page__'] = $this->Lang('lbl_page');
        } else {
            $tmp2[$one['key1']] = $one['key1'];
        }
    }
}
$smarty->assign('key1_opts',$tmp2);

$query = 'SELECT DISTINCT key2 FROM '.REVIEWMANAGER_TABLE_COMMENTS;
$tmp = $db->GetArray($query);
$tmp2 = array('-1'=>$this->Lang('lbl_any'));
if ( is_array($tmp) && count($tmp) ) {
    foreach( $tmp as $one ) {
        if ( !empty($one['key2']) ) $tmp2[$one['key2']] = $one['key2'];
    }
}
$smarty->assign('key2_opts', $tmp2);

$query = 'SELECT DISTINCT key3 FROM '.REVIEWMANAGER_TABLE_COMMENTS;
$tmp = $db->GetArray($query);
$tmp2 = array('-1'=>$this->Lang('lbl_any'));
foreach( $tmp as $one ) {
    if ( !empty($one['key3']) ) $tmp2[$one['key3']] = $one['key3'];
}
$smarty->assign('key3_opts', $tmp2);

$tmp = array('10000'=>$this->Lang('lbl_all'), '100'=>'100', '50'=>'50', '25'=>'25', '10'=>'10');
$smarty->assign('pagelimit_opts', $tmp);

$smarty->assign('recordcount', $matchcount);
$smarty->assign('numpages', $npages);
$smarty->assign('curpage', $thispage);
if ( $thispage > 1 ) {
    $smarty->assign('firstpage_url', $this->CreateURL($id, 'defaultadmin', $returnid, array('pagenum'=>1)));
    $smarty->assign('prevpage_url', $this->CreateURL($id, 'defaultadmin', $returnid, array('pagenum'=>$thispage-1)));
}
if ( $thispage < $npages ) {
    $smarty->assign('nextpage_url', $this->CreateURL($id, 'defaultadmin', $returnid, array('pagenum'=>$thispage+1)));
    $smarty->assign('lastpage_url', $this->CreateURL($id, 'defaultadmin', $returnid, array('pagenum'=>$npages)));
}
$smarty->assign('key1', $key1);
$smarty->assign('key2', $key2);
$smarty->assign('key3', $key3);
$smarty->assign('input_title', $input_title);
$smarty->assign('input_authorname', $input_authorname);
$smarty->assign('input_authoremail', $input_authoremail);
$smarty->assign('input_status', $input_status);
$smarty->assign('input_pagelimit', $pagelimit);
$smarty->assign('input_agelimit', $agelimit);
$smarty->assign('formstart', $this->CreateFormStart($id, 'defaultadmin', $returnid));
$smarty->assign('formend', $this->CreateformEnd());
$smarty->assign('have_filter', $have_filter);
$smarty->assign('allow_add_comments', $this->GetPreference('allow_add_comments', 0));

if ( is_array($data) && count($data) > 0 ) $smarty->assign('comments', $data);
$tmp = array();
$tmp['delete'] = $this->Lang('delete');
$tmp['published'] = $this->Lang('mark_published');
$tmp['draft'] = $this->Lang('mark_draft');
$tmp['spam'] = $this->Lang('mark_spam');
$smarty->assign('bulk_options', $tmp);

$smarty->assign('agelimit_opts', array(-1=>$this->Lang('unlimited'), 1=>1, 7=>7, 30=>30, 90=>90, 365=>365));
#
# Process template
#
echo $this->ProcessTemplate('admin_comments_tab.tpl');


