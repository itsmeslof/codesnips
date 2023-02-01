<?php

namespace App\View\Components\Links;

class Primary extends BaseLink
{
    const NORMAL_STYLES = 'font-bold text-cyan-500 underline';
    const HOVER_STYLES = 'hover:text-cyan-400 hover:bg-cyan-500/10';
    const FOCUS_STYLES = 'focus:text-cyan-400 focus:bg-cyan-500/10';
    const ACTIVE_STYLES = 'active:text-cyan-400 active:bg-cyan-500/25';

    public function getVariantClasses(): string
    {
        $sizeClasses = $this->getSizeClasses();

        return sprintf(
            "%s %s %s %s %s",
            self::NORMAL_STYLES,
            self::HOVER_STYLES,
            self::FOCUS_STYLES,
            self::ACTIVE_STYLES,
            $sizeClasses,
        );
    }
}
