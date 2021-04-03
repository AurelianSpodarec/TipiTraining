<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Section extends Component
{

    public $children;
    public $sectionSize;

    // section insdie

    // You can set breakpoints for the fluid prop. Setting it to a breakpoint (sm, md, lg, xl) will set the Container as fluid until the specified breakpoint.

    // public $container = [
    //     'default' => 'container',
    //     'fluid' => '',
    //     // '' => '',
    // ];

    public $bgColor = [
        'default'   => 'bg-transparent',
        'primary'   => 'bg-primary-default',
        'secondary' => 'bg-secondary-default',
        'teritary'  => 'bg-teritary-default'
    ];

    public $section = [
        'default' => '16px',
        '2xs'     => 'section-2xs',
        'xs'      => 'section-xs',
        'sm'      => 'section-sm',
        'md'      => 'section-md',
        'lg'      => 'section-lg',
        'xl'      => 'section-xl',
        '2xl'     => 'section-2xl',
        '3xl'     => 'section-3xl',
        '4xl'     => 'section-4xl',
        '5xl'     => 'section-5xl',
    ];

    public $kindY = [
        'clear-ly' => 'section-clear-ly',
        'clear-ry' => 'section-clear-ry',
        'clear-y'  => 'section-clear-y',
    ];

    public $kindX = [
        'clear-lx' => 'section-clear-lx',
        'clear-rx' => 'section-clear-rx',
        'clear-x'  => 'section-clear-x',
    ];


    public $sectionInner = [

    ];

    public $container;

    public function __construct($bgColor = 'default', $container = null, $message = null)
    {
        $this->bgColor = $this->bgColor[$bgColor] ?? $this->bgColor['default']; 
        $this->container = $container;

        $this->message = $message;
    }


    public function render()
    {
        return $this->view('components.section');
    }
}
