<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BanerPublicacion extends Component
{
    /**
     * Create a new component instance.
     */
    public $post;
    public $admin;
      
    public function __construct($post , $admin)
    {
          $this->post = $post;
          $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.baner-publicacion' , ['post' => $this->post  , 'admin' => $this->admin ] );
    }
}
