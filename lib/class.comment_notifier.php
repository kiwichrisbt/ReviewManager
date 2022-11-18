<?php
namespace ReviewManager;

final class comment_notifier
{
    private function __construct() {}

    private static function prepare_smarty_vars(comment& $comment,$user = 1,&$smarty)
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        $smarty->assign('key1',$comment->key1);
        $smarty->assign('key2',$comment->key2);
        $smarty->assign('key3',$comment->key3);
        $smarty->assign('author_notify',$comment->author_notify);
        $smarty->assign('author_ip',$comment->author_ip);
        $smarty->assign('author_name',$comment->author_name);
        $smarty->assign('author_email',$comment->author_email);
        $smarty->assign('title',$comment->title);
        $smarty->assign('comment',$comment->comment);
        $smarty->assign('rating',$comment->rating);
        $smarty->assign('fields',$comment->fields);
        $smarty->assign('comment',$comment->data);
        $smarty->assign('orig_url',$comment->origurl);
        $smarty->assign('comment_obj',$comment);

        if( !$user ) {
            $smarty->assign('subject',$mod->GetPreference(CGFEEDBACK_PREF_NOTIFICATION_SUBJECT));
        }
        else {
            $smarty->assign('subject',$mod->GetPreference(CGFEEDBACK_PREF_USERNOTIFICATION_SUBJECT));
        }
    }

    public static function notify_admins(comment& $comment)
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        $smarty = $mod->CreateSmartyTemplate(CGFEEDBACK_PREF_NOTIFICATION_TEMPLATE);
        self::prepare_smarty_vars($comment,0,$smarty);
        $gid = $mod->GetPreference('notification_group',-1);
        if( $gid == -1 ) return TRUE;

        $mailer = new \cms_mailer();
        $count = 0;
        $userops = cmsms()->GetUserOperations();
        $users = $userops->LoadUsersInGroup($gid);
        if( !is_array($users) || count($users) == 0 ) return TRUE;
        for( $i = 0; $i < count($users); $i++ ) {
            if( !isset($users[$i]->email) || $users[$i]->email == '' ) continue;
            if( !is_email($users[$i]->email) ) continue;

            $name = $users[$i]->username;
            if( !empty($users[$i]->firstname) && !empty($users[$i]->lastname) ) {
                $name = "{$users[$i]->lastname}, {$users[$i]->firstname}";
            }
            $mailer->AddAddress($users[$i]->email,$name);
            $count++;
        }
        if( !$count ) return TRUE;

        $mailer->IsHTML(TRUE);
        $subj = $mod->GetPreference(CGFEEDBACK_PREF_NOTIFICATION_SUBJECT);
        $mailer->SetSubject($subj);

        $body = $smarty->fetch();
        $mailer->SetBody($body);
        $mailer->Send();
        if( $mailer->IsError() )  @trigger_error('Problem sending email: '.$mailer->GetErrorInfo());
        $mailer->reset();
    }

    public static function email_notify_users(comment $comment)
    {
        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        $smarty = $mod->CreateSmartyTemplate(CGFEEDBACK_PREF_USERNOTIFICATION_TEMPLATE);
        self::prepare_smarty_vars($comment,1,$smarty);

        $db = cmsms()->GetDb();
        $query = 'SELECT DISTINCT author_email,author_name FROM '.CGFEEDBACK_TABLE_COMMENTS.'
                  WHERE key1 = ? AND key2 = ? AND key3 = ? AND status = ?
                  AND author_notify = 1 AND author_email != ?';
        $users = $db->GetArray($query,array($comment->key1,$comment->key2,$comment->key3,CGFEEDBACK_STATUS_PUBLISHED,$comment->author_email));
        if( !is_array($users) ) return TRUE;

        $mailer = new \cms_mailer();
        $mailer->reset();

        $mailer->IsHTML(TRUE);
        $subj = $mod->GetPreference(CGFEEDBACK_PREF_USERNOTIFICATION_SUBJECT);
        $mailer->SetSubject($subj);

        $body = $smarty->fetch();
        $mailer->SetBody($body);

        for( $i = 0; $i < count($users); $i++ ) {
            if( !is_email($users[$i]['author_email']) ) continue;

            $mailer->ClearAddresses();
            $mailer->AddAddress($users[$i]['author_email'],$users[$i]['author_name']);
            $mailer->Send();
        }
    }
} // end of class
