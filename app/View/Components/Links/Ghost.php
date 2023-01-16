<?php

namespace App\View\Components\Links;

use App\View\Components\Buttons\BaseButton;
use App\View\Components\Buttons\Ghost as GhostButton;

class Ghost extends BaseLink
{
    const STYLES = GhostButton::STYLES;

    public function getClasslist(string $size): string
    {
        $sizeClasses = BaseButton::SIZE_CLASSES[$size] ?? BaseButton::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
