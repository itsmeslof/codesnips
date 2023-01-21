<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Secondary extends BaseButton
{
    const NORMAL_STYLES = 'rounded-md text-zinc-100 bg-zinc-600 border-2 border-transparent';
    const HOVER_STYLES = 'hover:bg-zinc-500 hover:text-white';
    const ACTIVE_STYLES = 'active:bg-zinc-700 active:text-white';
    const FOCUS_STYLES = 'focus:bg-zinc-700';
    const DISABLED_STYLES = '';

    /**
     * Get the variant-specific classes for a Secondary button.
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
