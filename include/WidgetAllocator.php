<?php
/**
 * @copyright (c) Martin Meredith 2016
 */

namespace WallysWidgets;


class WidgetAllocator
{
    /**
     * @var int $required
     */
    private $required;

    /**
     * @var int $remaining
     */
    private $remaining;
    
    /**
     * @var PackList $packs
     */
    private $packs;

    /**
     * WidgetAllocator constructor.
     * 
     * @param int $required
     * @param PackList $packs
     */
    public function __construct(int $required, PackList $packs)
    {
        $this->required = $required;
        $this->remaining = $required;
        $this->packs = $packs;
    }
    
    public function process()
    {
        
    }
}
