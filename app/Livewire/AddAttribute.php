<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class AddAttribute extends Component
{
    public int $countAttributes = 0;

    public function addAttribute(): void
    {
        $this->countAttributes++;
    }

    public function removeAttribute(): void
    {
        $this->countAttributes--;
    }

    public function render(): View
    {
        return view('livewire.products.add-attribute');
    }
}
