<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Services\NotificationService;

class OrderController
{
    private $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function createOrder(CreateOrderRequest $request)
    {
        // create order ...

        $this->notificationService->notify(new OrderCreatedEvent($order));

//        $this->notificationService->notify('order_created', [
//            'order' => $order
//        ]);
    }
}
