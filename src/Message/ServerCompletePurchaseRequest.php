<?php

namespace Paytic\Payments\Librapay\Message;

use Paytic\Omnipay\Librapay\Message\ServerCompletePurchaseRequest as AbstractServerCompletePurchaseRequest;
use Paytic\Payments\Librapay\Message\Traits\CompletePurchaseTrait;

/**
 * Class ServerCompletePurchaseRequest
 * @package Paytic\Payments\Librapay\Message
 */
class ServerCompletePurchaseRequest extends AbstractServerCompletePurchaseRequest
{
    use CompletePurchaseTrait;
}
