<?php
  class Maps{
    static function buscaLugar($direccion){
        $direccion= sr_replace (" ", "+", $direccion);
        $url ="http://maps.google.com/maps/api/geocode/json?address=$direccion$sensor=false";
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        CURL_SETOPT($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
        $response = curl_exec($ch);
        curl_close($ch);
        $responde_a = json_decode($response);
        if($response_a->{"status"} == "OK"){
            $latitud = $response_a->results[0]->geometry->location->lat;
            $longitud = $responde_a->results[0]->geometry->location->lng;
                return array($latitud, $longitud);
        }else{
            return false;
        }
   }
  }
?>
