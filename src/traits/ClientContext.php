<?php

declare(strict_types=1);

namespace chaser\stream\traits;

/**
 * 客户端的资源流上下文
 *
 * @package chaser\stream\traits
 */
trait ClientContext
{
    use Context;

    /**
     * 资源流上下文配置
     *
     * @var array[]
     */
    protected array $contextOptions = [];

    /**
     * @inheritDoc
     */
    protected function openConnection(string $address, int &$errno, string &$errStr, int $timeout, int $flags)
    {
        if (empty($this->contextOptions)) {
            $stream = stream_socket_client($address, $errno, $errStr, $timeout, $flags);
        } else {
            $context = stream_context_create($this->contextOptions);
            $stream = stream_socket_client($address, $errno, $errStr, $timeout, $flags, $context);
        }

        return $stream;
    }
}