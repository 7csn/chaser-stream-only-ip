<?php

declare(strict_types=1);

namespace chaser\stream\interfaces\part;

/**
 * 网络地址接口
 *
 * @package chaser\stream\interfaces\part
 */
interface NetworkAddressInterface
{
    /**
     * 获取远程地址
     *
     * @return string
     */
    public function getRemoteAddress(): string;

    /**
     * 获取本地地址
     *
     * @return string
     */
    public function getLocalAddress(): string;

    /**
     * 获取本地 IP
     *
     * @return string
     */
    public function getLocalIp(): string;

    /**
     * 获取本地 PORT
     *
     * @return int
     */
    public function getLocalPort(): int;

    /**
     * 获取远程 IP
     *
     * @return string
     */
    public function getRemoteIp(): string;

    /**
     * 获取远程 PORT
     *
     * @return false|int
     */
    public function getRemotePort(): int;

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
