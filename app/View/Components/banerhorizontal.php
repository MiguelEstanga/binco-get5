<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class banerhorizontal extends Component
{
    /**
     * Create a new component instance.
     */
    public $type = true;
    public $categoria = '' ;
    public function __construct($type , $categoria)
    {
        $this->type = $type;
        $this->categoria = $categoria;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banerhorizontal'   );
    }
}
