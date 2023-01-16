<?php

namespace App\View\Components\Buttons;

use App\View\Components\Buttons\BaseButton;

class Primary extends BaseButton
{
    const STYLES = 'rounded-md text-cyan-50 bg-cyan-600 border-2 border-cyan-600 hover:bg-cyan-500 hover:border-cyan-500 active:bg-cyan-700 focus:bg-cyan-700 active:border-cyan-700 focus:border-cyan-700 focus:outline focus:outline-2 focus:outline-white focus:outline-offset-2 focus:ring-0 focus:ring-offset-0';

    public function getClasslist(string $size): string
    {
        $sizeClasses = static::SIZE_CLASSES[$size] ?? static::SIZE_CLASSES['md'];
        return self::STYLES . " {$sizeClasses}";
    }
}
