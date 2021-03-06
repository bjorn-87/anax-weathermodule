<?php

namespace Bjos\Curl;

/**
 * A mock class.
 * @SuppressWarnings("unused")
 */
class CurlMockGeo extends Curl
{
    public function curlApi(string $url = null)
    {
        $json = [
            "continent_name" => "Asia",
            "country_name" => "Thailand",
            "region_name" => "Nakhon Ratchasima",
            "city" => "Nakhon Ratchasima",
            "zip" => "30000",
            "latitude" => 14.970279693603516,
            "longitude" => 102.10360717773438,
            "location" => [
                "country_flag" => "http://assets.ipstack.com/flags/th.svg",
            ],
        ];

        return $json;
    }
}
