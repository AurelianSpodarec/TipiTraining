<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class SectionHeader extends Component
{
   
    public $message;


    public function __construct( $message = null)
    {

        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.section-header');
    }
}
