<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Alert extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;
    public $kind;

    /**
     * The alert message.
     *
     * @var string
     */
    public $message;

    /**
     * The alert types.
     *
     * @var array
     */
    public $types = [
        'default' => 't1',
        'success' => '  t2',
        'caution' => ' t3',
        'warning' => 't4',
    ];

    public $kinds = [
        'default' => 'defaultTkind',
        'success' => 'bg-green-50 ',
        'caution' => 'text-yellow-50  ',
        'warning' => 'text-red-50  ',
    ];

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($type = 'default', $kind = 'success', $message = null)
    {
        $this->type = $this->types[$type] ?? $this->types['default'];
        $this->kind = $this->kinds[$kind] ?? $this->kinds['success'];
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.alert');
    }
}
