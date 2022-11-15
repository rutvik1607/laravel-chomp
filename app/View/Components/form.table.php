<?php

namespace App\View\Components;

use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * The table label.
     *
     * @var array
     */
    private $label = array();

    /**
     * The table data.
     *
     * @var array
     */
    private $data = array();

    /**
     * The table data.
     *
     * @var array
     */
    private $unsetFields = array();

    /**
     * The table data.
     *
     * @var array
     */
    private $action = array();

    /**
     * The table tableId.
     *
     * @var string
     */
    private $tableId = '';

    public function __construct($label, $data, $tableId, $unsetFields, $action)
    {
        //
        $this->label = $label;
        $this->data = $data;
        $this->unsetFields = $unsetFields;
        $this->tableId = $tableId;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.table');
    }
}
