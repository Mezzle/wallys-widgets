<?php
/**
 * @copyright (c) Martin Meredith 2016
 */

namespace WallysWidgets;

class Pack
{
    /**
     * @var int $size
     */
    private $packSize;

    /**
     * Pack constructor.
     * @param int $size
     */
    public function __construct(int $packSize)
    {
        $this->packSize = $packSize;
    }

    /**
     * getPackSize
     *
     * @return int
     */
    public function getPackSize()
    {
        return $this->packSize;
    }
}
