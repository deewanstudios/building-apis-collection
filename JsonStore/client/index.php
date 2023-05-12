<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\GuzzleException;

require __DIR__ . '/vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>JSON Store Client</title>
</head>

<body>
    <h1 class="text-center">JSON Store Client</h1>
    <div class="text-center text-bold"></div>
    <?php
    $client = new \GuzzleHttp\Client();

    $request_method = ['get' => 'GET', 'post' => 'POST', 'put' => 'PUT', 'patch' => 'PATCH', 'delete' => 'DELETE'];
    $collection_id = '21a647e5-5500-407c-b556-911279b9084d';
    $access_token = 'fa7a8257-ee3a-42a4-bf97-43d3e9341cbb';
    $endpoint = 'https://api.myjson.online/v1/records';


    /* Call to make GET request to my JSON Store */
    /*
    $json = $client->request('GET', $endpoint.'/e9db01eb-11b9-4206-aef8-082e15657796');
    echo$json->getBody();
    */

    /* Call to make POST request to JSON Store  */
    /* 
    $body = '{"name":"SuperTed", "type":"Bear", "age":55}';
    $post_options = [
        'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'x-collection-access-token' => $access_token
        ],
        'allow_redirects' => true,
        'form_params' => [
            'jsonData' => $body,
            'collectionId' => $collection_id
        ]
    ]; 
    */
    /* Call to make PUT request to JSON Store  */

    /* $body = '{"name":"Garfield", "type":"Immortal", "age":39}';
    $uri_id = '/50966e31-6670-4eb5-b179-27f704926a99';
    $put_options = [
        'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'x-collection-access-token' => $access_token
        ],
        'allow_redirects' => true,
        'form_params' => [
            'jsonData' => $body,
            'collectionId' => $collection_id
        ]
    ]; */ 
    /* Call to make PATCH request to JSON Store  */

   /*  $body = '{"age":45}';
    $uri_id = '/50966e31-6670-4eb5-b179-27f704926a99';
    $patch_options = [
        'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
            'x-collection-access-token' => $access_token
        ],
        'allow_redirects' => true,
        'form_params' => [
            'jsonData' => $body,
            // 'collectionId' => $collection_id
        ]
    ];  */
    /* Call to make DELETE request to JSON Store  */

    $uri_id = '/e9db01eb-11b9-4206-aef8-082e15657796';
    $delete_options = [
        'headers' => [
            'x-collection-access-token' => $access_token
        ],
        'allow_redirects' => true,
        'body'=>'Deleted'
        /* 'form_params' => [
            'jsonData' => $body,
            // 'collectionId' => $collection_id
        ] */
    ]; 
    try {
        $response = $client->request(
            $request_method['delete'],
            $endpoint.$uri_id,
            $delete_options
        );
        if ($response->getStatusCode() == 200) {
            // $obj = json_decode($response->getBody());
           /*  $uri = $endpoint . '/' . $obj->id;
            $get_options = [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-collection-access-token' => $access_token
                ]
            ];
            $json = $client->request('GET', $uri, $get_options); */
            echo '<div class"">';
            echo $response->getBody();
            echo '</div>';
        } else {
            echo 'Unexpected HTTP status: ' . $response->getStatusCode() . ' ' . $response->getReasonPhrase();
        }
    } catch (GuzzleException $e) {
        echo 'Error: ' . $e->getMessage();
    }

    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>