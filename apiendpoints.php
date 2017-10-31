<?php
require_once 'apibase.php';

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
 }
?>