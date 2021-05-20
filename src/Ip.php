<?php

declare(strict_types=1);

namespace chaser\stream;

/**
 * ip 相关类
 *
 * @package chaser\stream
 */
class Ip
{
    /**
     * 获取 ip
     *
     * @param string $address
     * @return string
     */
    public static function get(string $address): string
    {
        $position = strrpos($address, ':');
        return $position ? (string)substr($address, 0, $position) : '';
    }

    /**
     * 是否 ipv4
     *
     * @param string $address
     * @return bool
     */
    public static function isV4(string $address): bool
    {
        return !str_contains(self::get($address), ':');
    }

    /**
     * 是否 ipv6
     *
     * @param string $address
     * @return bool
     */
    public static function isV6(string $address): bool
    {
        return !str_contains(self::get($address), ':');
    }
}
