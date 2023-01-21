<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Primary extends BaseButton
{
    const NORMAL_STYLES = 'rounded-md text-cyan-50 bg-cyan-600 border-2 border-transparent';
    const HOVER_STYLES = 'hover:bg-cyan-500 hover:text-white';
    const ACTIVE_STYLES = 'active:bg-cyan-700 active:text-white';
    const FOCUS_STYLES = 'focus:bg-cyan-700';
    const DISABLED_STYLES = '';

    /**
     * Get the variant-specific classes for a Primary button.
     *
     * @return string
     */
    public function getVariantClasses(): string
    {
        $sizeClasses = $this->getSizeClasses();

        return sprintf(
            "%s %s %s %s %s",
            self::NORMAL_STYLES,
            self::HOVER_STYLES,
            self::ACTIVE_STYLES,
            self::FOCUS_STYLES,
            $sizeClasses,
        );
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('components.button');
    }
}
