<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomerTable extends Component
{
    public $titleColumnName;
    public $data;
    public $editModalId;
    public $deleteModalId;
    public $editFunction;
    public $deleteFunction;

    public function __construct($titleColumnName, $data, $editModalId, $deleteModalId, $editFunction, $deleteFunction)
    {
        $this->titleColumnName = $titleColumnName;
        $this->data = $data;
        $this->editModalId = $editModalId;
        $this->deleteModalId = $deleteModalId;
        $this->editFunction = $editFunction;
        $this->deleteFunction = $deleteFunction;

        // Debugging line
        //dd($this->data);  // Remove or comment out this debugging line after confirming data is present
    }

    public function render()
    {
        return view('components.customer-table', [
            'titleColumnName' => $this->titleColumnName,
            'data' => $this->data,
            'editModalId' => $this->editModalId,
            'deleteModalId' => $this->deleteModalId,
            'editFunction' => $this->editFunction,
            'deleteFunction' => $this->deleteFunction,
        ]);
    }
}