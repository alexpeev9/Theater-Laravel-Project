<?php
 
namespace App\Models;
 
class Joke
{
    public static function find() {
        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, "https://api.chucknorris.io/jokes/random");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
 
        $response = curl_exec($ch);
        curl_close($ch);
 
        $repsonse = json_decode($response, true);
 
        return $repsonse;
    }
}