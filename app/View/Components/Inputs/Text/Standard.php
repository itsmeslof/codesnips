<?php

namespace App\View\Components\Inputs\Text;

class Standard extends BaseTextInput
{
    const NORMAL_STYLES = 'text-zinc-50 bg-black/20 border-2 border-zinc-600 placeholder:text-zinc-600';
    const HOVER_STYLES = 'hover:bg-black/40 hover:border-zinc-500';
    const ACTIVE_STYLES = 'active:bg-black/60 active:border-zinc-500';
    const FOCUS_STYLES = 'focus:bg-black/60 focus:border-zinc-500';
    const DISABLED_STYLES = '';
    const PADDING = 'py-2 px-3';

    /**
     * Get the variant-specific classes for a text-based input.
     *
     * @return string
     */
    public function getVariantClasses(): string
    {
        return sprintf(
            "%s %s %s %s %s",
            $this::NORMAL_STYLES,
            $this::HOVER_STYLES,
            $this::ACTIVE_STYLES,
            $this::FOCUS_STYLES,
            $this::PADDING,
        );
    }

    public function render()
    {
        return view('components.inputs.text.standard');
    }
}
