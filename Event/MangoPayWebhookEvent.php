<?php

/**
 * Created by Graham Owens (gra@partfire.co.uk)
 * Company: PartFire Ltd (www.partfire.co.uk)
 * Console: Discovery
 *
 * User:    gra
 * Date:    21/01/17
 * Time:    00:37
 * Project: fruitful-property-investments
 * File:    MangoPayWebhookEvent.php
 *
 **/
namespace PartFire\MangoPayBundle\Event;

use PartFire\CommonBundle\Services\Output\CommonOutputInterface;
use Symfony\Component\EventDispatcher\Event;

class MangoPayWebhookEvent extends Event
{
    const NAME = 'partfire.mangopay.new_webhook';

    private $output;

    /**
     * @return mixed
     */
    public function getOutput() : CommonOutputInterface
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     */
    public function setOutput(CommonOutputInterface $output)
    {
        $this->output = $output;
    }

}