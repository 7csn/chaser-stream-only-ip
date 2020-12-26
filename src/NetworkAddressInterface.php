<?php

declare(strict_types=1);

namespace chaser\stream;

/**
 * 网络地址
 *
 * @package chaser\stream
 */
interface NetworkAddressInterface
{
    /**
     * 获取本地 IP
     *
     * @return false|string
     */
    public function getLocalIp();

    /**
     * 获取本地 PORT
     *
     * @return int
     */
    public function getLocalPort();

    /**
     * 获取远程 IP
     *
     * @return false|string
     */
    public function getRemoteIp();

    /**
     * 获取远程 PORT
     *
     * @return false|int
     */
    public function getRemotePort();

    /**
     * 是否 ipv4
     *
     * @return bool
     */
    public function isIpv4(): bool;

    /**
     * 是否 ipv6
     *
     * @return bool
     */
    public function isIpv6(): bool;
}
