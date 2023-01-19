<?php

namespace App\View\Components\Inputs\Text;

class Standard extends BaseTextInput
{
    const STYLES = 'text-zinc-50 bg-black/20 border-2 border-zinc-600 hover:bg-black/40 hover:border-zinc-500 active:bg-black/60 focus:bg-black/60 active:border-zinc-500 focus:border-zinc-500 placeholder:text-zinc-600 py-2 px-3';

    public function getClasslist(): string
    {
        return self::STYLES;
    }

    public function getView(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('components.inputs.text.standard');
    }
}
