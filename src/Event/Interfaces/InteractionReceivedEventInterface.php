<?php

namespace Bytes\DiscordInteractionBundle\Event\Interfaces;

use Bytes\DiscordResponseBundle\Objects\Slash\Interfaces\InteractionInterface;

/**
 *
 */
interface InteractionReceivedEventInterface extends EventInterface, InteractionInterface
{

}