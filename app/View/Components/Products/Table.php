<?php

namespace App\View\Components\Products;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Table extends Component
{
    public array|Collection $data;

    public function __construct(array|Collection $data)
    {
        $this->data = $data;
    }

    public function render(): View|Closure|string
    {
        return view('components.products.table')
            ->with(['data' => $this->data]);
    }
}
