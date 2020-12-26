<?php

declare(strict_types=1);

namespace chaser\stream;

/**
 * ip 相关
 *
 * @package chaser\stream
 */
class Ip
{
    /**
     * 获取 ip
     *
     * @param string $address
     * @return false|string
     */
    public static function get(string $address)
    {
        return strstr($address, ':', true);
    }

    /**
     * 是否 ipv4
     *
     * @param string $address
     * @return bool
     */
    public static function isV4(string $address): bool
    {
        $ip = self::get($address);
        return $ip && strpos($ip, ':') === false;
    }

    /**
     * 是否 ipv6
     *
     * @param string $address
     * @return bool
     */
    public static function isV6(string $address): bool
    {
        $ip = self::get($address);
        return $ip && strpos($ip, ':') !== false;
    }
}
