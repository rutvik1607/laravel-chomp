<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $title;
    public $description;
    public $category;
    public $image;
    public $ref1;
    
    public function __construct($name, $title, $description, $category, $image, $ref1)
    {
        //
        $this->name;
        $this->title;
        $this->description;
        $this->category;
        $this->image;
        $this->ref1;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog');
    }
}
