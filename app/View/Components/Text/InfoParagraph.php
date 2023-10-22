<?php

namespace App\View\Components\Text;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoParagraph extends Component
{
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.text.info-paragraph');
    }
}
