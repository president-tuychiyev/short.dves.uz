<?php

require __DIR__ . '/../config/params.php';
require __DIR__ . '/../controller/short.php';

function route($method = 'GET', $urlData = null, $formData = null)
{
    if($method == "POST"):
        switch($urlData[0]):
            //create short link
            case "create":
                $sh = new Short();
                echo json_encode($sh->create($formData));
            break;


        endswitch;
    else:
        switch($urlData[0]):
            case "create":
                $sh = new Short();
                print_r($sh->create("INSERT INTO `links` (`ip`, `url`, `shortUrl`) VALUES ('123123', 'sadasd', 'asdasd')"));
            break;
        endswitch;
    endif;
}