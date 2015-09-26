<script>

</script>

<?php
    $dataEhomePik=sendCurlRequest("http://olx.in/ajax/suggest/get/?q=honda&q=honda");
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