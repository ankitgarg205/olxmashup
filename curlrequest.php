<?php
    $olxDATA=sendCurlRequest("http://olx.in/ajax/suggest/get/?q=honda&q=honda");
    var_dump($olxDATA);
    function sendCurlRequest($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 500);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
        $output = curl_exec($ch);
        return $output;
    }
?>

<script>
var string = document.getElementsByTagName("a")[0].outerHTML.slice(document.getElementsByTagName("a")[0].outerHTML.indexOf("url: '")+6);
var fullstring=string.slice(0,string.indexOf("'"));
window.location.assign(fullstring);
</script>

