<?php

declare(strict_types=1);

namespace chaser\stream\traits;

use chaser\reactor\Driver;
use chaser\stream\Port;

/**
 * 服务器的流资源上下文
 *
 * @package chaser\stream\traits
 */
trait ServerContext
{
    /**
     * @inheritDoc
     */
    public function __construct(Driver $reactor, string $address)
    {
        parent::__construct($reactor, $address);
        if (Port::reusable()) {
            $this->contextualize(['socket' => ['so_reuseport' => 1]]);
        }
    }
}
