<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class subcategoria extends Component
{
    
    public $categorias;
    public function __construct($categorias)
    {
        $this->categorias =$categorias;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.subcategoria' , ["categorias" , $this->categorias]);
    }
}
