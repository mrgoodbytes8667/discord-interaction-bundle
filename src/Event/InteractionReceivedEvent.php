<?php

namespace Bytes\DiscordInteractionBundle\Event;

use Bytes\DiscordInteractionBundle\Event\Interfaces\InteractionReceivedEventInterface;
use Bytes\DiscordInteractionBundle\Message\InteractionReceived;
use Bytes\ResponseBundle\Event\EventTrait;

/**
 *
 */
class InteractionReceivedEvent extends InteractionReceived implements InteractionReceivedEventInterface
{
    use EventTrait;
}