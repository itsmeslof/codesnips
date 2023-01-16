<?php

namespace App\View\Components\Links;

use Illuminate\View\Component;

abstract class BaseLink extends Component
{
    /**
     * Base classes shared across all links.
     *
     * @var string
     */
    const BASE_CLASSES = 'inline-flex items-center font-semibold transition ease-in-out duration-150';

    /**
     * Size-specific classes.
     *
     * @var array<string, string>
     */
    const SIZE_CLASSES = [
        'sm' => 'text-sm',
        'md' => 'text-md',
    ];

    /**
     * Get the class list for the specific link type.
     *
     * @return string
     */
    abstract public function getClasslist(string $size): string;

    /**
     * The final computed classlist for a link.
     *
     * @var string
     */
    public $computedClasses = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size = 'md')
    {
        $baseClassList = self::BASE_CLASSES;
        $linkTypeClassList = $this->getClassList($size);

        $this->computedClasses = "{$baseClassList} {$linkTypeClassList}";
    }

    public function render()
    {
        return view('components.link');
    }
}
