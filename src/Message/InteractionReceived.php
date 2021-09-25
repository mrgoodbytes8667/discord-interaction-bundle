<?php

namespace Bytes\DiscordInteractionBundle\Message;

use Bytes\DiscordInteractionBundle\Event\InteractionReceivedEvent;
use Bytes\DiscordInteractionBundle\Event\Interfaces\EventFactoryInterface;
use Bytes\DiscordResponseBundle\Objects\Slash\Interaction;
use DateTimeImmutable;

/**
 *
 */
class InteractionReceived extends Interaction implements EventFactoryInterface
{
    /**
     * @param DateTimeImmutable|null $messageCreatedAt
     */
    public function __construct(private ?DateTimeImmutable $messageCreatedAt = null)
    {
        if (empty($messageCreatedAt)) {
            $this->messageCreatedAt = new DateTimeImmutable();
        }
    }

    /**
     * @param Interaction $interaction
     * @return static
     */
    public static function createFromInteraction(Interaction $interaction): static
    {
        $static = new static();
        return $static->setApplicationId($interaction->getApplicationId())
            ->setChannelID($interaction->getChannelID())
            ->setData($interaction->getData())
            ->setGuildId($interaction->getGuildId())
            ->setId($interaction->getId())
            ->setMember($interaction->getMember())
            ->setMessage($interaction->getMessage())
            ->setToken($interaction->getToken())
            ->setType($interaction->getType())
            ->setUser($interaction->getUser())
            ->setVersion($interaction->getVersion());
    }

    /**
     * The child event class
     * @return string
     */
    public static function getEventClass(): string
    {
        return InteractionReceivedEvent::class;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getMessageCreatedAt(): DateTimeImmutable
    {
        return $this->messageCreatedAt;
    }

    /**
     * @param DateTimeImmutable|null $messageCreatedAt
     * @return $this
     */
    public function setMessageCreatedAt(?DateTimeImmutable $messageCreatedAt = null): self
    {
        $this->messageCreatedAt = $messageCreatedAt ?? new DateTimeImmutable();
        return $this;
    }
}