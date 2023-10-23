<?php

namespace App\Mail\Product;

use App\Models\Product;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationNewProduct extends Mailable
{
    use Queueable, SerializesModels;

    private User $user;

    private Product $product;

    public function __construct(Product $product, User $user)
    {
        $this->product = $product;
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject(__('products.mail.subject', ['name' => $this->product->name]))
            ->view('mails.product.new')
            ->with([
                'user' => $this->user,
                'product' => $this->product,
            ]);
    }

}
