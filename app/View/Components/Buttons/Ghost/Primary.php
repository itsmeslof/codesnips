<?php

namespace App\View\Components\Buttons\Ghost;

use App\View\Components\Buttons\BaseButton;

class Primary extends BaseButton
{
    const NORMAL_STYLES = 'rounded-md text-cyan-500 bg-transparent border-2 border-transparent';
    const HOVER_STYLES = 'hover:text-cyan-400 hover:bg-cyan-500/10';
    const ACTIVE_STYLES = 'active:text-cyan-400 active:bg-cyan-700/10';
    const FOCUS_STYLES = 'focus:text-cyan-400 focus:bg-cyan-700/10';
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
