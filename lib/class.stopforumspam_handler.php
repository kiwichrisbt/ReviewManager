<?php
namespace ReviewManager;

class stopforumspam_handler extends spam_handler
{
    const TEST_URL = 'https://api.stopforumspam.org/api';

    public function is_spam( comment $comment )
    {
        // only test comments from frontend requests that do not have an id yet
        if( $comment->id ) return FALSE;
        if( !\CmsApp::get_instance()->is_frontend_request() ) return FALSE;

        if( $comment->author_name ) $parms['author_name'] = $comment->author_name;
        if( $comment->author_ip ) $parms['ip'] = $comment->author_ip;
        if( $comment->author_email ) $parms['emailhash'] = md5($comment->author_email);
        if( !count($parms) ) return FALSE;
        $parms['json'] = '';

        $response_str = \cge_http::post(self::TEST_URL,$parms);
        if( !$response_str ) {
            @trigger_error('ReviewManager - No response from StopForumSpam');
            audit('','ReviewManager','StopForumSpam returned  no response');
            return FALSE;
        }

        $data = json_decode($response_str);
        if( !$data->success ) {
            @trigger_error('ReviewManager - Unsuccessful query to StopForumSpam');
            audit('','ReviewManager','Unsuccessful query to StopForumSpam');
            return FALSE;
        }

        $freq = (isset($data->emailhash->frequency)) ? $data->emailhash->frequency : 0;
        $freq += (isset($data->ip->frequency)) ? $data->ip->frequency : 0;
        if( $freq < 10 ) {
            return FALSE;
        }

        // more than 10 occcurances... it's prolly spam
        return TRUE;
    }

    public function report_spam( comment $comment )
    {
        // nothing here.
    }
}