<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;
use App\View\Components\Links\BaseLink;

class Anchor extends BaseButton
{
    const STYLES = 'rounded-md text-zinc-400 hover:text-zinc-200 active:text-zinc-50 focus:text-zinc-50 underline focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0';

    public function getClasslist(string $size): string
    {
        $sizeClasses = BaseLink::SIZE_CLASSES[$size] ?? BaseLink::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
