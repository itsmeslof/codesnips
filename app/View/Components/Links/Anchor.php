<?php

namespace App\View\Components\Links;

class Anchor extends BaseLink
{
    const NORMAL_STYLES = 'font-semibold text-zinc-400 underline';
    const HOVER_STYLES = 'hover:text-zinc-200 hover:bg-white/10';
    const FOCUS_STYLES = 'focus:text-white focus:bg-white/10';
    const ACTIVE_STYLES = 'active:text-white active:bg-white/25';

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
