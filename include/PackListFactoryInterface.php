<?php
/**
 * @copyright (c) Martin Meredith 2016
 */
namespace WallysWidgets;

interface PackListFactoryInterface
{
    /**
     * create
     *
     * @param int[] ...$packs
     *
     * @return PackList
     */
    public static function create(int ...$packs) : PackList;
}
