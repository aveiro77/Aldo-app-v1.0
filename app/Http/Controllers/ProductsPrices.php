<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsPrices extends Controller
{

    public function mycurl($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Accept: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }

    public function countries()
    {
        $mycurl = $this->mycurl('https://5sim.net/v1/guest/countries');
        $result = json_decode($mycurl, true);
        return $result;
    }

    public function productsRequest($country = 'indonesia', $operator = 'any')
    {
        $mycurl = $this->mycurl('https://5sim.net/v1/guest/products/' . $country . '/' . $operator);
        $result = json_decode($mycurl, true);
        return view('dashboard.products_prices.products-request', [
            'title' => 'Products Request',
            'data' => $result
        ]);
    }


    public function pricesByCountry($country = 'singapore')
    {
        $mycurl = $this->mycurl('https://5sim.net/v1/guest/prices?country=' . $country);

        $result = json_decode($mycurl, true);
        return view('dashboard.products_prices.prices-by-country', [
            'title' => 'Prices By Country',
            'data' => $result,
            'countries' => $this->countries()
        ]);
    }
}
