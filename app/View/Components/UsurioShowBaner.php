<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class UsurioShowBaner extends Component
{
    public $post;
    public $masposter;
    public function __construct($post , $masposter)
    {
        $this->post = $post;
        $this->masposter = $masposter;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.usurio-show-baner' , ['post' => $this->post , 'masposter' => $this->masposter ] );
    }
}
