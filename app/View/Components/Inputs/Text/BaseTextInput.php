<?php

namespace App\View\Components\Inputs\Text;

use App\View\Components\AbstractComponent;

abstract class BaseTextInput extends AbstractComponent
{
    /**
     * Base classes that apply to all text-based inputs.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center font-semibold transition ease-in-out duration-150 rounded-md focusable';

    public function __construct()
    {
        $this->prepareForRender();
    }

    /**
     * Get the variant-specific classes for a text-based input.
     *
     * @return string
     */
    abstract public function getVariantClasses(): string;

    /**
     * Get the final computed classes for a text-based input.
     *
     * @return string
     */
    public function getComputedClasses(): string
    {
        return sprintf(
            "%s %s",
            self::BASE_CLASSES,
            $this->getVariantClasses()
        );
    }
}
