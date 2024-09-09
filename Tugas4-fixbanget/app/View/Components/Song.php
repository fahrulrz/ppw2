<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Song extends Component
{
    public $song;
    /**
     * Create a new component instance.
     */
    public function __construct($song)
    {
        $this->song = $song;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.song');
    }
}
