<?php

namespace App\View\Components\Buttons\Ghost;

use App\View\Components\Buttons\BaseButton;

class Secondary extends BaseButton
{
    const NORMAL_STYLES = 'rounded-md text-zinc-200 bg-transparent border-2 border-transparent';
    const HOVER_STYLES = 'hover:text-white hover:bg-zinc-200/5';
    const ACTIVE_STYLES = 'active:text-white active:bg-zinc-200/10';
    const FOCUS_STYLES = 'focus:text-white focus:bg-zinc-200/10';
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
