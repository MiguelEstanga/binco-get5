<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class post-cart extends Component
{
    /**
     * Create a new component instance.
     */

    public $post;
     public $user;
    public function __construct($post , $user)
    {
        $this->post = $post;
        $this->user =$user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-cart' , ['post' => $this->post , "user" => $this->user]);
    }
}
