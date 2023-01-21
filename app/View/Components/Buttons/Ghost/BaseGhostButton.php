<?php

namespace App\View\Components\Buttons\Ghost;

use App\View\Components\Buttons\BaseButton;

class BaseGhostButton extends BaseButton
{
    const NORMAL_STYLES = '';
    const HOVER_STYLES = '';
    const ACTIVE_STYLES = '';
    const FOCUS_STYLES = '';
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

    public function render()
    {
        return view('components.button');
    }
}
