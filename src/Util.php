<?php


use payload\Payload;

class Util
{
    private string $privateKeyPath;
    private string $privateKeyPassword;
    public static function send(Payload $payload) {
        $api = $api = new RestClient([
            'base_url'=>"https://efristest.ura.go.ug/efrisws/ws/taapp/getInformation",
            'format' => "json"
        ]);
        $api->register_decoder('json', function ($data){
            return json_decode($data, TRUE);
        });

        $response = $api->execute("/", 'POST', json_encode($payload));

        if ($response->info->http_code == 200)
            var_dump($response);
    }

    private function getAESKey() {

    }
}