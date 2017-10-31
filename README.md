# php-api-endpoint
An api endpoint based in php



This api project was originally placed in a /api folder under the www root. 

Htaccess was updated with the command: 

   RewriteCond %{REQUEST_URI} api/v1
      RewriteRule api/v1/(.*)$ api/v1/apiconsumer.php?request=$1 [QSA,NC,L]
