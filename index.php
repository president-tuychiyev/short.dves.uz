<?php

// Define the request method
$method = $_SERVER['REQUEST_METHOD'];

// Get data from request body
$formData = getFormData($method);

// Getting data from the request body
function getFormData($method) {
 
    // GET or POST: return data as is
    if ($method === 'GET') return $_GET;
    if ($method === 'POST') return $_POST;
 
    // PUT, PATCH or DELETE
    $data = array();
    $exploded = explode('&', file_get_contents('php://input'));
 
    foreach($exploded as $pair) {
        $item = explode('=', $pair);
        if (count($item) == 2) {
            $data[urldecode($item[0])] = urldecode($item[1]);
        }
    }
 
    return $data;
}

// Parse url
$url = (isset($_GET['q'])) ? $_GET['q'] : '';
$url = rtrim($url, '/');
$urls = explode('/', $url);

// Define the router and url data
$router = $urls[0];
$urlData = array_slice($urls, 1);

// Connect the file router and run the main function
if($router == 'api'):
    require './app/routes/api.php';
    route($method, $urlData, $formData);
else:
    require './app/routes/web.php';
    route($method, $urls, $formData);
endif;
