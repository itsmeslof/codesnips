<?php

namespace App\View\Components\Inputs\Text;

use Illuminate\View\Component;

abstract class BaseTextInput extends Component
{
    /**
     * Base classes shared across all text inputs.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center font-semibold transition ease-in-out duration-150 rounded-md  focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0';

    /**
     * The final computed classlist for a Text input.
     *
     * @var string
     */
    public $computedClasses = '';

    /**
     * Get the class list for the specific button type.
     *
     * @return string
     */
    abstract public function getClasslist(): string;

    abstract public function getView(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $baseClasses = self::BASE_CLASSES;
        $inputTypeClasses = $this->getClasslist();

        $this->computedClasses = "{$baseClasses} {$inputTypeClasses}";
    }

    public function render()
    {
        return $this->getView();
    }
}
