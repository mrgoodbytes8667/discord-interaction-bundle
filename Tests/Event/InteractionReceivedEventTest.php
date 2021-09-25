<?php

namespace Event;

use Bytes\DiscordInteractionBundle\Event\InteractionReceivedEvent;
use PHPUnit\Framework\TestCase;

class InteractionReceivedEventTest extends TestCase
{
    /**
     *
     */
    public function testIsPropagationStopped()
    {
        $int = new InteractionReceivedEvent();

        $this->assertFalse($int->isPropagationStopped());
    }
}