<?php

namespace App\Notifications\Product;

use App\Models\Product;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use function Symfony\Component\String\u;

class NewProductNotification extends Notification
{
    use Queueable;

    private User $user;

    private Product $product;

    public function __construct(User $user, Product|Builder $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Новый продукт: ' . $this->product->name)
            ->view('mails.product.new')
            ->with([
                'user' => $this->user,
                'product' => $this->product,
            ]);
    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
