<?php

namespace ByTIC\Payments\Librapay\Message;

use ByTIC\Omnipay\Librapay\Message\CompletePurchaseResponse as AbstractCompletePurchaseResponse;
use ByTIC\Payments\AbstractGateway\Message\Traits\CompletePurchaseResponseTrait;

/**
 * Class CompletePurchaseResponse
 * @package ByTIC\Payments\Librapay\Message
 */
class CompletePurchaseResponse extends AbstractCompletePurchaseResponse
{
    use CompletePurchaseResponseTrait;

    /** @noinspection PhpMissingParentCallCommonInspection
     * @return bool
     */
    protected function canProcessModel()
    {
        return true;
    }
}