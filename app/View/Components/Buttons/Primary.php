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

    public function getVariantClasses(): string
    {
        $sizeClasses = $this->getSizeClasses();

        return sprintf(
            "%s %s %s %s %s",
            $this::NORMAL_STYLES,
            $this::HOVER_STYLES,
            $this::ACTIVE_STYLES,
            $this::FOCUS_STYLES,
            $sizeClasses,
        );
    }
}
