<?php

function getJoke()
{
        $ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, "https://icanhazdadjoke.com/");
  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json',
        ));
 
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Dad Joke CLI (https://github.com/RiversideRocks/DadJokeCli)");
        // $output contains the output string
        $output = curl_exec($ch);
         // close curl resource to free up system resources
        curl_close($ch); 
  
        return $output;
}

$joke = json_decode(getJoke(), true);

echo $joke["joke"];
