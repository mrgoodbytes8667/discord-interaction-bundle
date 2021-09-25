<?php


namespace Bytes\DiscordInteractionBundle\Event\Interfaces;


/**
 * 
 */
interface EventFactoryInterface
{
    /**
     * The child event class
     * @return string
     */
    public static function getEventClass(): string;
}