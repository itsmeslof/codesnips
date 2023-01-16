<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Anchor extends BaseButton
{
    const STYLES = 'rounded-md text-zinc-400 hover:text-zinc-200 active:text-zinc-50 focus:text-zinc-50 underline';

    public function getClasslist(string $size): string
    {
        return self::STYLES;
    }
}
