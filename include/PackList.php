<?php
/**
 * @copyright (c) Martin Meredith 2016
 */

namespace WallysWidgets;

use OutOfBoundsException;

class PackList
{
    private $packs = [];

    /**
     * getPack
     *
     * @param $index
     *
     * @return Pack
     */
    public function getPack($index) : Pack
    {
        if (isset($this->packs[$index])) {
            return $this->packs[$index];
        }
        
        throw new OutOfBoundsException('That pack does not exist');
    }

    /**
     * addPack
     *
     * @param Pack $pack
     */
    public function addPack(Pack $pack)
    {
        $this->packs[] = $pack;
    }
}
