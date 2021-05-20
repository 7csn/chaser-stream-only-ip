<?php

declare(strict_types=1);

namespace chaser\stream\traits;

use chaser\stream\interfaces\parts\NetworkAddressInterface;
use chaser\stream\Ip;
use chaser\stream\Port;

/**
 * 网络地址特征
 *
 * @package chaser\stream\traits
 *
 * @see NetworkAddressInterface
 */
trait NetworkAddress
{
    /**
     * 获取本地 IP
     *
     * @return string
     */
    public function getLocalIp(): string
    {
        return Ip::get($this->getLocalAddress());
    }

    /**
     * 获取本地 PORT
     *
     * @return int
     */
    public function getLocalPort(): int
    {
        return Port::get($this->getLocalAddress());
    }

    /**
     * 获取远程 IP
     *
     * @return string
     */
    public function getRemoteIp(): string
    {
        return Ip::get($this->getRemoteAddress());
    }

    /**
     * 获取远程 PORT
     *
     * @return int
     */
    public function getRemotePort(): int
    {
        return Port::get($this->getRemoteAddress());
    }

    /**
     * 是否 ipv4
     *
     * @return bool
     */
    public function isIpv4(): bool
    {
        return Ip::isV4($this->getRemoteAddress());
    }

    /**
     * 是否 ipv6
     *
     * @return bool
     */
    public function isIpv6(): bool
    {
        return Ip::isV6($this->getRemoteAddress());
    }
}
