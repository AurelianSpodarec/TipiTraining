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
        'default'   => 'section--bg-transparent',
        'primary'   => 'section--bg-primary-default',
        'secondary' => 'section--bg-secondary-default',
        'teritary'  => 'section--bg-teritary-default',
        'gray'     =>  'bg-gray-50',
    ];

    public $gutter = [
        'none'    => 'gutter-none',
        'default' => 'gutter-md',
        '2xs'     => 'gutter-2xs',
        'xs'      => 'gutter-xs',
        'sm'      => 'gutter-sm',
        'md'      => 'gutter-md',
        'lg'      => 'gutter-lg',
        'xl'      => 'gutter-xl',
        '2xl'     => 'gutter-2xl',
        '3xl'     => 'gutter-3xl',
        '4xl'     => 'gutter-4xl',
        '5xl'     => 'gutter-5xl',
    ];

    public $kindY = [
        'clear-ly' => 'gutter-clear-ly',
        'clear-ry' => 'gutter-clear-ry',
        'clear-y'  => 'gutter-clear-y',
    ];

    public $kindX = [
        'clear-lx' => 'gutter-clear-lx',
        'clear-rx' => 'gutter-clear-rx',
        'clear-x'  => 'gutter-clear-x',
    ];


    public $sectionInner = [

    ];

    public $container;

    public function __construct($bgColor = 'default', $gutter = 'md', $container = null, $message = null)
    {
        $this->bgColor = $this->bgColor[$bgColor] ?? $this->bgColor['default'];
        $this->gutter = $this->gutter[$gutter] ?? $this->gutter['md'];
        $this->container = $container;

        $this->message = $message;
    }


    public function render()
    {
        return $this->view('components.section');
    }
}
