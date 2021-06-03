<?php

declare(strict_types=1);

namespace chaser\stream\traits;

use chaser\stream\interfaces\part\ContextInterface;
use chaser\stream\Port;

/**
 * 服务器的流资源上下文特征
 *
 * @package chaser\stream\traits
 *
 * @see ContextInterface
 */
trait ServerContext
{
    /**
     * 端口复用设置
     */
    protected function reusePort(): void
    {
        if (Port::reusable()) {
            $this->contextualize(['socket' => ['so_reuseport' => 1]]);
        }
    }
}
