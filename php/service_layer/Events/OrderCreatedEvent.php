<?php

namespace App\Mail\Events;

class OrderCreatedEvent implements MailEventInterface
{
    private $order;

    public function __construct(array $data)
    {
        $this->order = $data['order'];
    }

    public function getView(): string
    {
        return 'mail.order_created';
    }

    public function getData(): array
    {
        return [
            'order' => $this->order
        ];
    }

    public function getEmail(): string
    {
        return $this->order->email;
    }

    public function getMailSubject(): string
    {
        return trans('mail/order_created.mail_title');
    }
}
