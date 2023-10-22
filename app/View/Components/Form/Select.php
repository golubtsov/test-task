<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public string $text;

    public string $name;

    public array $values;

    public function __construct(string $text = '', string $name = '', array $values = [])
    {
        $this->text = $text;
        $this->name = $name;
        $this->values = $values;
    }

    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
