# Php.url_post_getFW
PHP coding for creating MVC (Modal View Control) and using glob function
The url rewrite must be enabled and use regular expression on the .htaccess at your document root
or where you want it to be applies.
Note .htaccess file it only work on its directory and subdirectory(child)
# the htaccess code
RewriteEngine On
RewriteBase /  
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
