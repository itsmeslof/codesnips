<?php

namespace App\View\Components;

use Illuminate\View\Component;

/**
 * An abstract component class to help manage components with multiple
 * variants that share common base styles and properties.
 *
 * The only classes that should extend AbstractComponent are other
 * abstract classes, such as a BaseButton class that manages shared
 * styles for all button components to avoid repeating styles in every
 * button variant.
 *
 * For components that don't have variants,
 * extending \Illuminate\View\Component is a better choice.
 */
abstract class AbstractComponent extends Component
{
    /**
     * The final, full class string for a component.
     *
     * @var string
     */
    public $computedClasses = '';

    /**
     * Get the final computed classes for a component.
     *
     * @return string
     */
    abstract public function getComputedClasses(): string;

    /**
     * Prepare the component to be rendered.
     *
     * @return void
     */
    public function prepareForRender()
    {
        $this->computedClasses = $this->getComputedClasses();
    }
}
