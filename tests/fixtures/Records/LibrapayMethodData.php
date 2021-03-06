<?php

namespace Paytic\Payments\Librapay\Tests\Fixtures\Records;

use Symfony\Component\HttpFoundation\Request as HttpRequest;

/**
 * Class LibrapayMethodData
 * @package Paytic\Payments\Librapay\Tests\Fixtures\Records
 */
class LibrapayMethodData
{
    /**
     * @return string
     */
    public static function getMethodOptions()
    {
        $data = 'a:2:{'
            . 's:15:"payment_gateway";s:8:"librapay";s:8:"librapay";'
            . 'a:7:{s:7:"sandbox";s:2:"no";s:8:"merchant";s:15:"' . env('LIBRAPAY_MERCHANT') . '";s:12:"merchantName";s:36:"' . env('LIBRAPAY_MERCHANTNAME') . '";s:13:"merchantEmail";s:17:"' . env('LIBRAPAY_MERCHANTEMAIL') . '";s:11:"merchantUrl";s:16:"register.42km.ro";s:8:"terminal";s:8:"' . env('LIBRAPAY_TERMINAL') . '";s:3:"key";s:32:"' . env('LIBRAPAY_KEY') . '";}}';
        return $data;
    }

    /**
     * @return HttpRequest
     */
    public static function getServerCompletePurchaseRequest()
    {
        $httpRequest = new HttpRequest();

        $httpRequest->query->add(['hash' => "2fe4c45ebabc6f90b826180e67840f411f81e8e0"]);

        $post = [
            'AMOUNT' => 50.00,
            'CURRENCY' => 'RON',
            'ORDER' => 172490,
            'DESC' => 'Plata RUN IOR - 17 oct 2020 [#1602436479-343556]',
            'MERCH_NAME' => '',
            'MERCH_URL' => '',
            'MERCHANT' => '',
            'TERMINAL' => '88002369',
            'EMAIL' => '',
            'TRTYPE' => 0,
            'COUNTRY' => '',
            'MERCH_GMT' => '',
            'ACTION' => 0,
            'TIMESTAMP' => 20201011171601,
            'RC' => '00',
            'MESSAGE' => 'Approved',
            'RRN' => '028584881920',
            'INT_REF' => '1111',
            'APPROVAL' => '1111',
            'NONCE' => 'c3c18b5fce9ea177def8f1433630449b',
            'SO' => '',
            'P_SIGN' => '4348995B1491E5DA26337C7E331EF40199FF28FF'
        ];
        $httpRequest->request->add($post);

        return $httpRequest;
    }

    /**
     * @return HttpRequest
     */
    public static function getServerCompletePurchaseRequestTimeout()
    {
        $httpRequest = new HttpRequest();

        $post = [
            'ACTION' => '',
            'AMOUNT' => '0.00',
            'APPROVAL' => '1111',
            'CURRENCY' => '',
            'DESC' => '',
            'INT_REF' => '1111',
            'MESSAGE' => 'Transaction timeout',
            'NONCE' => '5b8ec8212f41b7251f9a335066466b35',
            'ORDER' => '188512',
            'P_SIGN' => '20F0B7B6839E7969D92B02E642FA74D696F7C734',
            'RC' => '990',
            'RRN' => '',
            'TIMESTAMP' => 20201011171601,
            'TRTYPE' => ''
        ];
        $httpRequest->request->add($post);

        return $httpRequest;
    }
}
