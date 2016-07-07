<?php
/**
 * @copyright (c) Martin Meredith 2016
 */

namespace WallysWidgets;


class PackListFactory implements PackListFactoryInterface
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
        $list = new PackList();

        foreach ($packs as $packSize) {
            $list->addPack(new Pack($packSize));
        }

        return $list;
    }
}
