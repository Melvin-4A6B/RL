<?php

class Controller {

    public function __construct()
    {
        session_start();
    }

    public function debug($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

    public function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    public function redirect($destination)
    {
        header('Location: ' . $destination);
        exit();
    }

    public function money($valuta, $item)
    {
        return $valuta . str_replace('.', ',', $item); 
    }

}