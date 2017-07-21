<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 06/06/17
 * Time: 11:26
 */
namespace BlogServiceBundle\Services;


class SlugService
{
    /*
     * get title and output slug
     * @param $value
     * @return $string
     */
    public function slugTitleAction(string $value):string
    {
       $str = str_replace(" ", "-", $value);

        return $str;
    }
}