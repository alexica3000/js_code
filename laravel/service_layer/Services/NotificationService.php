<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\Events\MailEventInterface;
use App\Mail\Events\OrderCreatedEvent;
use App\Mail\Events\OrderUpdatedEvent;
use App\Mail\Events\CustomerRegisterEvent;

class NotificationService
{
    public function notify(string $event, array $data)
    {
        $event = $this->makeNotificationEvent($event, $data);

        Mail::send($event->getView(), $event->getData(), function ($message) use ($event) {
            $message->to($event->getEmail())
                ->subject($event->getMailSubject());
        });
    }

    private function makeNotificationEvent(string $event, array $data) : MailEventInterface
    {
        switch ($event) {
            case 'order_created':
                return new OrderCreatedEvent($data);
            case 'order_updated':
                return new OrderUpdatedEvent($data);
            case 'customer_register':
                return new CustomerRegisterEvent($data);
            default:
                throw new \InvalidArgumentException("Undefined event $event");
        }
    }
}
