<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Ghost extends BaseButton
{
    const STYLES = 'rounded-md text-zinc-50 bg-transparent border-2 border-transparent hover:bg-black/40 hover:border-zinc-500 active:bg-black/60 focus:bg-black/60 active:border-zinc-500 focus:border-zinc-500';

    public function getClasslist(string $size): string
    {
        $sizeClasses = static::SIZE_CLASSES[$size] ?? static::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
