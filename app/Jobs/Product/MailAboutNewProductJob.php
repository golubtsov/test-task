<?php

namespace App\Jobs\Product;

use App\Mail\Product\NotificationNewProduct;
use App\Models\Product;
use App\Models\User;
use App\Notifications\Product\NewProductNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MailAboutNewProductJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private User $user;

    private Product $product;

    public function __construct(Product|Builder $product, User|Builder $user)
    {
        $this->product = $product;
        $this->user = $user;
    }

    public function handle(): void
    {
        Notification::send(auth()->user()->informUserAboutNewProduct(), new NewProductNotification($this->user, $this->product));
    }
}
