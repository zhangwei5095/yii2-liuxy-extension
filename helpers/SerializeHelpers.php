<?php
/**
 * FileName:SerializeHelpers.php
 * Author:Administrator
 * Create Date:2015-11-26
 */

namespace yii\liuxy\helpers;


class SerializeHelpers {
    public static function serialize($input) {
        return igbinary_serialize($input);
    }

    public static function unserialize($input) {
        return igbinary_unserialize($input);
    }
}