<?php
/**
 * @copyright (c) Martin Meredith 2016
 */

namespace WallysWidgets;

class SortedPackListFactory implements PackListFactoryInterface
{

    /**
     * create
     *
     * @param int[] ...$packs
     *
     * @return PackList
     */
    public static function create(int ...$packs) : PackList
    {
        rsort($packs, SORT_NUMERIC);
        
        return PackListFactory::create($packs);
    }
}
