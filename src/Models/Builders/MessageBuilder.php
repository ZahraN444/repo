<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use CypressTestAPILib\Models\Message;

/**
 * Builder for model Message
 *
 * @see Message
 */
class MessageBuilder
{
    /**
     * @var Message
     */
    private $instance;

    private function __construct(Message $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new message Builder object.
     */
    public static function init(int $code, string $text): self
    {
        return new self(new Message($code, $text));
    }

    /**
     * Initializes a new message object.
     */
    public function build(): Message
    {
        return CoreHelper::clone($this->instance);
    }
}
