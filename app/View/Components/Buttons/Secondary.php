<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Secondary extends BaseButton
{
    const STYLES = 'rounded-md text-zinc-50 bg-black/20 border-2 border-zinc-600 hover:bg-black/40 hover:border-zinc-500 active:bg-black/60 focus:bg-black/60 active:border-zinc-500 focus:border-zinc-500 focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0';

    public function getClasslist(string $size): string
    {
        $sizeClasses = static::SIZE_CLASSES[$size] ?? static::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
