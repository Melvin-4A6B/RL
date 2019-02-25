<?php
class Load extends Controller {

    public static function view($view_file, $params = [])
    {  
        // Extract the parameters
        extract($params);

        // Explode the view file
        $check = explode(',', $view_file);

        // If the extension is not set add the php extension
        if(!isset($check[1]))
        {
            $view_file .= '.php';
        }

        // Check if the user wants to use a template
        if(TEMPLATE)
        {
            require_once "app/views/template/header.php";
            require_once "app/views/" . $view_file;
            require_once "app/views/template/footer.php";    
        }
        else
        {
            require_once "app/views/" . $view_file;
        }
        
    }

}