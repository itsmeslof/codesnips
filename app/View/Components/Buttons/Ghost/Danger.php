<?php

namespace App\View\Components\Buttons\Ghost;

use App\View\Components\Buttons\Ghost\BaseGhostButton;

class Danger extends BaseGhostButton
{
    const NORMAL_STYLES = 'rounded-md text-rose-500 bg-transparent border-2 border-transparent';
    const HOVER_STYLES = 'hover:text-rose-400 hover:bg-rose-500/10';
    const ACTIVE_STYLES = 'active:text-rose-400 active:bg-rose-700/10';
    const FOCUS_STYLES = 'focus:text-rose-400 focus:bg-rose-700/10';
    const DISABLED_STYLES = '';
}
