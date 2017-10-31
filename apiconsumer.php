<?php
    require_once "apiendpoints.php";
   
//phpinfo(INFO_ENVIRONMENT|INFO_VARIABLES);
 
    // Requests from the same server don't have a HTTP_ORIGIN header
    if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
        $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
    }
    try {
        $API = new ApiEndpoints($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);
        echo $API->processAPI();
    } 
    catch (Exception $e) {
        echo json_encode(Array('error' => $e->getMessage()));
    }

?>