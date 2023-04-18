<?php

namespace Bytes\DiscordInteractionBundle\Tests\Message;

use Bytes\Common\Faker\TestFakerTrait;
use Bytes\DiscordInteractionBundle\Event\InteractionReceivedEvent;
use Bytes\DiscordInteractionBundle\Message\InteractionReceived;
use Bytes\DiscordResponseBundle\Enums\InteractionType;
use Bytes\DiscordResponseBundle\Objects\Slash\Interaction;
use DateTimeImmutable;
use Generator;
use PHPUnit\Framework\TestCase;

class InteractionReceivedTest extends TestCase
{
    use TestFakerTrait;

    /**
     *
     */
    public function testGetEventClass()
    {
        $this->assertEquals(InteractionReceivedEvent::class, InteractionReceived::getEventClass());
    }

    /**
     *
     */
    public function testCreateFromInteraction()
    {
        $int = new Interaction();
        $int->setType(InteractionType::APPLICATION_COMMAND);

        $received = InteractionReceived::createFromInteraction($int);

        $this->assertInstanceOf(InteractionReceived::class, $received);
        $this->assertEquals(InteractionType::APPLICATION_COMMAND, $received->getType());
    }

    /**
     * @dataProvider provideMessageCreatedAt
     * @param mixed $messageCreatedAt
     */
    public function testGetSetMessageCreatedAt($messageCreatedAt)
    {
        $int = new InteractionReceived();
        $this->assertNotNull($int->getMessageCreatedAt());
        $this->assertInstanceOf(InteractionReceived::class, $int->setMessageCreatedAt(null));
        $this->assertNotNull($int->getMessageCreatedAt());
        $this->assertInstanceOf(InteractionReceived::class, $int->setMessageCreatedAt($messageCreatedAt));
        $this->assertEquals($messageCreatedAt, $int->getMessageCreatedAt());
    }

    /**
     * @return Generator
     */
    public function provideMessageCreatedAt()
    {
        $this->setupFaker();
        yield [DateTimeImmutable::createFromMutable($this->faker->dateTimeThisCentury())];
    }
}