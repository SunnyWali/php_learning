<?php
function parseUrl($url)
{
    $host=parse_url($url,PHP_URL_HOST);
    if(strpos($host,'www')===0)
    {
        $host=substr($host,4);
    }
    return $host;
}

$url="https://www.google.com?q='php";
$domain=parseUrl($url);
echo "The domain is: ".$domain;
?>