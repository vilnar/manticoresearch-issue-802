<?php

function generateRandomString($length = 5)
{
    $characters = '0123456789,.abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $max = mb_strlen($characters) - 1;
    $result = "";
    for ($i = 0; $i < $length; $i++) {
        $result .= mb_substr($characters, rand(0, $max), 1);
    }
    return $result;
}

function generateIntToString($to)
{
    return rand(0, $to) . "";
}

function generateUint($to)
{
    return rand(0, $to);
}

function generateFloat($to)
{
    return rand(0, $to) / 10;
}

function generatePrice()
{
    return rand(1, 1000);
}

for ($n = 1; $n <= 10000; $n++) {
    $jsonUint = "{" . generateUint(1000) . "," . generateUint(1000) . "}";
    $group = '{}';
    $notUint = -1;


    printf(
        "%s|%s|%s|%s|%s|%s|%s|%s|%s|%s\n",
        $n,
        generateIntToString(1000),  // code
        generateRandomString(),     // title
        generateFloat(100),         // search_rank
        generateUint(1000),         // producer_id
        $jsonUint,                  // options
        $group,                     // group
        generatePrice(),            // price
        generateIntToString(1000),  // remains_count
        $notUint                    // expire_timers
    );
}
