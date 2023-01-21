<?php

namespace App\View\Components\Buttons;

use App\View\Components\AbstractComponent;

abstract class BaseButton extends AbstractComponent
{
    /**
     * Base classes that apply to all buttons.
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
        'sm' => 'text-sm px-3 py-1.5',
        'md' => 'text-base px-4 py-2',
    ];

    /**
     * The size of the button.
     *
     * @var string
     */
    protected $size = 'md';

    /**
     * Get the variant-specific classes for a button.
     *
     * @return string
     */
    abstract public function getVariantClasses(): string;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size = 'md')
    {
        $this->size = $size;
        $this->prepareForRender();
    }

    /**
     * Get the final computed classes for a button.
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

    /**
     * Get the size-specific classes for a button.
     *
     * @return string
     */
    public function getSizeClasses(): string
    {
        $default = self::SIZE_CLASSES['md'];
        return self::SIZE_CLASSES[$this->size] ?? $default;
    }
}
