<?php

namespace App\View\Components\Links;

use App\View\Components\Buttons\Anchor as AnchorButton;

class Anchor extends BaseLink
{
    const STYLES = AnchorButton::STYLES;

    public function getClasslist(string $size): string
    {
        return self::STYLES;
    }
}
