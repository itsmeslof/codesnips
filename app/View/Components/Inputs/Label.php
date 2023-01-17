<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Label extends Component
{
    /**
     * Base classes shared across all labels.
     *
     * @var string
     */
    const BASE_CLASSES = 'text-sm font-semibold text-zinc-300';

    /**
     * The final computed classlist for a Label.
     *
     * @var string
     */
    public $computedClasses = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->computedClasses = self::BASE_CLASSES;
    }

    public function render()
    {
        return view('components.inputs.label');
    }
}
