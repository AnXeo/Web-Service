<?php

function connect_get($url)
{
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $output=curl_exec($ch);
 
    curl_close($ch);
    return json_decode($output);
}

function connect_post($url,$data)
{
 
    $ch = curl_init();  
 
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return json_decode($output);
 
}
?>