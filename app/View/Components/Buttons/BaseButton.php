<?php

namespace App\View\Components\Buttons;

use Illuminate\View\Component;

abstract class BaseButton extends Component
{
    /**
     * Base classes shared across all buttons.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center font-semibold transition ease-in-out duration-150 focusable';

    /**
     * Size-specific classes.
     *
     * @var array<string, string>
     */
    const SIZE_CLASSES = [
        'sm' => 'text-sm px-2 py-1',
        'md' => 'text-md px-3 py-2',
    ];

    /**
     * Get the class list for the specific button type.
     *
     * @return string
     */
    abstract public function getClasslist(string $size): string;

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
        $buttonTypeClasses = $this->getClassList($size);

        $this->computedClasses = "{$baseClasses} {$buttonTypeClasses}";
    }

    public function render()
    {
        return view('components.button');
    }
}
