<?php

declare(strict_types=1);

namespace chaser\stream;

/**
 * port 相关类
 *
 * @package chaser\stream
 */
class Port
{
    /**
     * 是否端口复用
     *
     * @var bool
     */
    private static bool $reuse;

    /**
     * 获取 port
     *
     * @param string $address
     * @return int
     */
    public static function get(string $address): int
    {
        $position = strrpos($address, ':');
        return $position ? (int)substr($address, $position + 1) : 0;
    }

    /**
     * 是否端口复用
     *
     * @return bool
     */
    public static function reusable(): bool
    {
        return self::$reuse ??= version_compare(php_uname('r'), '3.9', '>=');
    }
}
