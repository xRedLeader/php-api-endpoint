<?php
require_once __DIR__.'/apibase.php';
require_once __DIR__.'/oauthfiles/server.php';

class ApiEndpoints extends API
{
//    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

        /* Abstracted out for example
        $APIKey = new Models\APIKey();
        $User = new Models\User();

        if (!array_key_exists('apiKey', $this->request)) {
            throw new Exception('No API Key provided');
        } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
            throw new Exception('Invalid API Key');
        } else if (array_key_exists('token', $this->request) &&
             !$User->get('token', $this->request['token'])) {

            throw new Exception('Invalid User Token');
        }

        $this->User = $User;*/
    }

     

     // A endpoint at api/v1/John that will return John's name
     protected function John() {
        if ($this->method == 'GET') {
            return "Your name is John"; //. $this->User->name;
        } else {
            return "Only accepts GET requests";
        }
     }

     // A endpoint at api/v1/Steve that will return Steve's name
     protected function Steve() {
        if ($this->method == 'GET') {
            return "Your name is Steve"; //. $this->User->name;
        } else {
            return "Only accepts GET requests";
        }
     }

    // A endpoint for token controller using OAuth2.0
    protected function token() {
        global $server;
        $server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();
    }

    // A endpoint for resource controller for OAuth2.0
    protected function resource() {
        global $server;
        // Handle a request to a resource and authenticate the access token
        if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
            $server->getResponse()->send();
            die;
        }
        echo json_encode(array('success' => true, 'message' => 'You accessed my APIs!'));
    }
 }
?>