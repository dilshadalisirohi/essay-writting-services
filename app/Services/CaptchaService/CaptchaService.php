<?php

namespace App\Services\CaptchaService;

use App\Services\CaptchaService\Contracts\CaptchaServiceInterface;
use GuzzleHttp\Client;
use Brian2694\Toastr\Facades\Toastr;

class CaptchaService implements CaptchaServiceInterface
{
    /**
     * @var string
     */
    private $apiEndPoint = 'https://www.google.com/recaptcha/api/';


    public function checkCaptcha()
    {
        $client = new Client([
            'base_uri' => $this->apiEndPoint,
            'timeout' => 2.0
        ]);

        $response = $client->request('POST', 'siteverify', [
            'query' => [
                'secret' => env('CAPTCHA_SECRET'),
                'response' => request('g-recaptcha-response'),
                'remoteip' => request()->ip(),
            ]
        ]);
        $json = json_decode($response->getBody()->getContents(), true);

        return $json['success'] === true ? true : false;
    }
}
