<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Categoria;
class CategoriaBaner extends Component
{
    /**
     * Create a new component instance.
     */
    public $categotia;

    public function __construct()
    {
        $this->categotia = Categoria::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.categoria-baner' , ['categorias' => $this->categotia]);
    }
}
