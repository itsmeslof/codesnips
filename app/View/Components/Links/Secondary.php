<?php

namespace App\View\Components\Links;

use App\View\Components\Buttons\BaseButton;
use App\View\Components\Buttons\Secondary as SecondaryButton;

class Secondary extends BaseLink
{
    const STYLES = SecondaryButton::STYLES;

    public function getClasslist(string $size): string
    {
        $sizeClasses = BaseButton::SIZE_CLASSES[$size] ?? BaseButton::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
