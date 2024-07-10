<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CustomerTable extends Component
{
    public $titleColumnName;
    public $data;

    public function __construct($titleColumnName, $data)
    {
        $this->titleColumnName = $titleColumnName;
        $this->data = $data;

        // Debugging line
        //dd($this->data);  // Remove or comment out this debugging line after confirming data is present
    }

    public function render()
    {
        return view('components.customer-table', [
            'titleColumnName' => $this->titleColumnName,
            'data' => $this->data,
        ]);
    }
}