<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class AddAttribute extends Component
{
    public int $countAttributes = 0;

    public array|null $elemAttributes;

    public function __construct(array|null $elemAttributes = null)
    {
        $this->elemAttributes = $elemAttributes;
        if (!is_null($elemAttributes)) {
            $this->countAttributes = count($elemAttributes);
        }
    }

    public function addAttribute(): void
    {
        $this->countAttributes++;
    }

    public function removeAttribute(int|null $index = null): void
    {
        if (is_null($index)) {
            $this->countAttributes--;
        } else {
            array_splice($this->elemAttributes, $index, 1);
        }
    }

    public function render(): View
    {
        return view('livewire.products.add-attribute');
    }
}
