<?php
namespace ReviewManager;

abstract class spam_handler
{
    abstract public function is_spam(comment $comment);
    abstract public function report_spam(comment $comment);
}