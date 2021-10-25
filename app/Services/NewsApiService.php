<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsApiService
{
    protected $key;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
    }

    public function __construct()
    {
        self::setKey('6c3fc1dc053b4972b61509c2c0afbf69');
    }

    public function getNews()
    {
        $apiKey = $this->getKey();
        $response = Http::get("https://newsapi.org/v2/everything?q=holistic&from=2021-10-19&sortBy=popularity&apiKey=$apiKey");
//        die(var_dump($response->json()));
    }
}