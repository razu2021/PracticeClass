<?php

namespace App\View\Components\comon_com;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class success_massages extends Component
{
    /**
     * Create a new component instance.
     */
    // massages
    public $msg;
    // erroe massages 
    public $class;
   

    public function __construct($msg,$class)
    {
        $this->msg=$msg;
        $this->class=$class;
      
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comon_com.success_massages');
    }
}
