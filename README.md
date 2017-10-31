# php-api-endpoint
An api endpoint based in php

-----DIRECTIONS-----

Htaccess was updated with these commands inside <IfModule mod_rewrite.c>: 

   RewriteCond %{REQUEST_URI} api/v1
   RewriteRule api/v1/(.*)$ api/v1/apiconsumer.php?request=$1 [QSA,NC,L]


From your webroot folder you clone with:

   sudo git clone https://github.com/xRedLeader/php-api-endpoint.git api/v1


Then, from the webroot folder run these commands:

   sudo chown www-data:www-data api/ -R
   sudo find api/ -type f -exec chmod 664 {} \;
   sudo find api/ -type d -exec chmod 775 {} \;   


Current example endpoints: 

   If you navigate to example.com/api/v1/john (replace example.com with your url)
   or example.com/api/v1/steve you will see the response "Your name is John"
   or "Your name is Steve"


If you would like to add more endpoints:

   sudo vim api/v1/apiendpoints.php
   In this file, add more functions with the endpoint name as follows:

   example.com/api/v1/customer would be created as so:
      protected function Customer(){ 
         //insert what you want this function to do 
      } 
