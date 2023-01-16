<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * Base classes shared across all text inputs.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center font-semibold transition ease-in-out duration-150 rounded-md text-zinc-50 bg-black/20 border-2 border-zinc-600 hover:bg-black/40 hover:border-zinc-500 active:bg-black/60 focus:bg-black/60 active:border-zinc-500 focus:border-zinc-500 focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0 placeholder:text-zinc-600';

    // focus:outline focus:outline-offset-2 focus:outline-2

    /**
     * Size-specific classes.
     *
     * @var array<string, string>
     */
    const SIZE_CLASSES = [
        'sm' => 'text-sm px-2 py-1',
        'md' => 'text-md px-2 py-2',
    ];

    /**
     * The final computed classlist for a button.
     *
     * @var string
     */
    public $computedClasses = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size = 'md')
    {
        $baseClasses = self::BASE_CLASSES;
        $sizeClasses = self::SIZE_CLASSES[$size] ?? self::SIZE_CLASSES['md'];

        $this->computedClasses = "{$baseClasses} {$sizeClasses}";
    }

    public function render()
    {
        return view('components.inputs.text');
    }
}
