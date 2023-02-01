<?php

namespace App\View\Components\Links;

use App\View\Components\AbstractComponent;

abstract class BaseLink extends AbstractComponent
{
    /**
     * Base classes shared across all links.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center transition ease-in-out duration-150 focusable underline-offset-4 hover:decoration-2';

    /**
     * Size-specific classes.
     *
     * @var array<string, string>
     */
    const SIZE_CLASSES = [
        'sm' => 'text-sm',
        'md' => 'text-md',
        'lg' => 'text-lg',
    ];

    /**
     * The size of the link.
     *
     * @var string
     */
    protected $size = 'md';

    /**
     * Get the variant-specific classes for a link.
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
     * Get the final computed classes for a link.
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
     * Get the size-specific classes for a link.
     *
     * @return string
     */
    public function getSizeClasses(): string
    {
        $default = self::SIZE_CLASSES['md'];
        return self::SIZE_CLASSES[$this->size] ?? $default;
    }

    public function render()
    {
        return view('components.link');
    }
}
