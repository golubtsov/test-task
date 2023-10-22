<?php

namespace App\View\Components\Text;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InfoTitle extends Component
{
    public string $title;

    public string $linkEdit;

    public string $linkRemove;

    public string $linkClose;

    public function __construct
    (
        string $title,
        string $linkEdit,
        string $linkRemove,
        string $linkClose,
    )
    {
        $this->title = $title;
        $this->linkEdit = $linkEdit;
        $this->linkRemove = $linkRemove;
        $this->linkClose = $linkClose;
    }

    public function render(): View|Closure|string
    {
        return view('components.text.info-title');
    }
}
