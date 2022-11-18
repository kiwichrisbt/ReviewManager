<?php
namespace ReviewManager;

class DraftMessageAlert extends \CMSMS\AdminAlerts\TranslatableAlert
{
    public function __construct($count)
    {
        parent::__construct([ 'Manage Site Feedback'] );
        $this->name = __CLASS__;
        $this->priority = self::PRIORITY_LOW;
        $this->titlekey = 'title_draft_comments';
        $this->module = 'ReviewManager';
        $this->msgkey = 'notify_n_draft_items';
        $this->msgargs = $count;
    }
}