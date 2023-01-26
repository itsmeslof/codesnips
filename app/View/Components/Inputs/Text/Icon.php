<?php

namespace App\View\Components\Inputs\Text;

use App\View\Components\Inputs\Text\Standard as StandardInput;

class Icon extends BaseTextInput
{
    const PADDING = 'py-2 pr-3 pl-10';

    /**
     * Get the variant-specific classes for a text-based input.
     *
     * @return string
     */
    public function getVariantClasses(): string
    {
        return sprintf(
            "%s %s %s %s %s",
            StandardInput::NORMAL_STYLES,
            StandardInput::HOVER_STYLES,
            StandardInput::ACTIVE_STYLES,
            StandardInput::FOCUS_STYLES,
            $this::PADDING,
        );
    }

    public function render()
    {
        return view('components.inputs.text.icon');
    }
}
