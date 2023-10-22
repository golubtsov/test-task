<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlueButton extends Component
{
    public string $text;

    public string $link;

    public string $id;

    public bool $typeLink;

    public function __construct(
        string $text,
        string $link = '',
        string $id = '',
        bool $typeLink = false,
    )
    {
        $this->text = $text;
        $this->link = $link;
        $this->id = $id;
        $this->typeLink = $typeLink;
    }

    public function render(): View|Closure|string
    {
        return view('components.blue-button');
    }
}
