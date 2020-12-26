<?php

declare(strict_types=1);

namespace chaser\stream;

/**
 * port 相关
 *
 * @package chaser\stream
 */
class Port
{
    /**
     * 获取 port
     *
     * @param string $address
     * @return false|int
     */
    public static function get(string $address)
    {
        $index = strstr($address, ':');
        return $index === 0 ? false : (int)substr(strstr($address, ':'), 1);
    }

    /**
     * 是否端口复用
     *
     * @return bool
     */
    public static function reusable(): bool
    {
        static $reuse = null;
        return $reuse ??= version_compare(php_uname('r'), '3.9', '>=');
    }
}
