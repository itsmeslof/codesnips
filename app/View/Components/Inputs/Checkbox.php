<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Base classes shared across all checkbox inputs.
     *
     * @var string
     */
    const BASE_CLASSES = 'rounded bg-black/20 transition ease-in-out duration-150 border-2 border-zinc-600 hover:bg-black/40 hover:border-zinc-500 active:bg-black/60 focus:bg-black/60 active:border-zinc-500 focus:border-zinc-500 text-cyan-600 focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0 px-2 py-2';

    /**
     * The final computed classlist for a checkbox.
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
        $baseClasses = self::BASE_CLASSES;

        $this->computedClasses = $baseClasses;
    }

    public function render()
    {
        return view('components.inputs.checkbox');
    }
}
