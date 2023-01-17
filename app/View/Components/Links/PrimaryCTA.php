<?php

namespace App\View\Components\Links;

class PrimaryCTA extends BaseLink
{
    const STYLES = 'rounded-md text-zinc-900 bg-gradient-to-br from-zinc-100 to-zinc-200 hover:from-zinc-200 hover:to-zinc-300 active:from-zinc-300 active:to-zinc-400 focus:from-zinc-300 focus:to-zinc-400 transition ease-in-out duration-150 font-bold';

    /**
     * Size-specific classes.
     *
     * @var array<string, string>
     */
    const SIZE_CLASSES = [
        'sm' => 'text-lg px-6 py-2',
        'md' => 'text-xl px-8 py-3',
    ];

    public function getClasslist(string $size): string
    {
        $sizeClasses = self::SIZE_CLASSES[$size] ?? self::SIZE_CLASSES['md'];

        return self::STYLES . " {$sizeClasses}";
    }
}
