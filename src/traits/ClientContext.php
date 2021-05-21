<?php

declare(strict_types=1);

namespace chaser\stream\traits;

/**
 * 客户端的资源流上下文特征
 *
 * @package chaser\stream\traits
 */
trait ClientContext
{
    use Context;

    /**
     * @inheritDoc
     */
    protected function createSocket(string $address, int &$errno, string &$errStr, int $timeout, int $flags)
    {
        $context = $this->getContext();
        $socket = stream_socket_client($address, $errno, $errStr, $timeout, $flags, $context);
        return $socket === false ? null : $socket;
    }
}
