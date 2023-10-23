<?php

namespace App\View\Components\Text;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoTd extends Component
{
    public string $name;

    public string|array $value;

    public function __construct(string $name, string|array $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.table.info-td');
    }
}
