<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public string $text;

    public string $redirectLink;

    public function __construct(string $text, string $redirectLink)
    {
        $this->text = $text;
        $this->redirectLink = $redirectLink;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.title');
    }
}
