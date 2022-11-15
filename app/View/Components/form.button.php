<?php

namespace App\View\Components;

use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * The button name.
     *
     * @var string
     */
    private $name;

    /**
     * The button message.
     *
     * @var string
     */
    private $id = '';

    /**
     * The button class.
     *
     * @var string
     */
    private $class = '';

    /**
     * The button action.
     *
     * @var string
     */
    private $action = '';

    public function __construct($name, $class = '', $id = '', $action = '')
    {
        //
        $this->name = $name;
        $this->class = $class;
        $this->id = $id;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
