<?php

namespace App\Mail\Events;

interface MailEventInterface
{
    public function getView() : string;
    public function getData() : array;
    public function getEmail() : string;
    public function getMailSubject() : string;
}
