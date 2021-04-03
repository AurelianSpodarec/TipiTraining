<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{

    // TODO: Add error handling

    public $buttonVariant;
    public $buttonKind;
    public $buttonRadius;
    public $buttonSize;
//    public $buttonDisabled;

    public $message;


    public $variant = [
        'primary'   => 'button-primary',
        'secondary' => 'button-secondary',
        'teritary'  => 'button-teritary',
        'success'   => 'button-success',
        'warning'   => 'button-warning',
        'danger'    => 'button-danger',
        'info'      => 'button-info',
        'white'     => 'button-white',
    ];

    public $kind = [
        'solid'   => 'button-solid',
        'outline' => 'button-outline',
        'clear'   => 'button-clear',
    ];

    public $radius = [
        'none'   => 'button-radius-none',
        'small'  => 'button-radius-small',
        'medium' => 'button-radius-black',
        'large'  => 'button-radius-black',
        'full'   => 'button-radius-full',
    ];

    public $size = [
        'sm'     => 'button-sm',
        'medium' => 'button-medium',
        'large'  => 'button-large',
    ];

    public $disabled;


    public function __construct($variant = 'primary', $kind = 'solid', $radius = 'none', $size = 'medium', $message = null)
    {
        $this->buttonVariant = $this->variant[$variant] ?? $this->variant['default'];
        $this->buttonKind = $this->kind[$kind] ?? $this->kind['default'];
        $this->buttonRadius = $this->radius[$radius] ?? $this->radius['medium'];
        $this->buttonSize = $this->size[$size] ?? $this->size['medium'];
        $this->buttonDisabled = $disabled ?? 'disabled';

        $this->message = $message;
    }

    public function render()
    {
        return $this->view('components.button');
    }
}
