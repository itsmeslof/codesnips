<?php

namespace App\View\Components\Buttons\Ghost;

use App\View\Components\Buttons\Ghost\BaseGhostButton;

class Secondary extends BaseGhostButton
{
    const NORMAL_STYLES = 'rounded-md text-zinc-200 bg-transparent border-2 border-transparent';
    const HOVER_STYLES = 'hover:text-white hover:bg-zinc-200/5';
    const ACTIVE_STYLES = 'active:text-white active:bg-zinc-200/10';
    const FOCUS_STYLES = 'focus:text-white focus:bg-zinc-200/10';
    const DISABLED_STYLES = '';
}
