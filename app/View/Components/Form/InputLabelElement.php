<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputLabelElement extends Component
{
    public string $name;

    public string $text;

    public string $value;

    public bool $disabled;

    public function __construct(
        string $name,
        string $text,
        string $value = '',
        bool $disabled = false,
    )
    {
        $this->name = $name;
        $this->text = $text;
        $this->value = $value;
        $this->disabled = $disabled;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.input-label-element');
    }
}
