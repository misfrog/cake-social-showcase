cake-social-showcase
====================

This sample app demonstrates many of the capabilities of the cake-sociall project.

How to run
====================

1. Install composer

	```bash
	curl -s https://getcomposer.org/installer | php
	```
	
2. Download libraries and plugins

	```bash
	php composer.phar install
	```
	
3. Change tmp directory permissions

	```bash
	chown -R www-data app/tmp
	```
	
4. Create database and CakePHP database configuration
	
	[Check here](http://book.cakephp.org/2.0/en/getting-started.html#blog-tutorial)
	
5. Set up URL rewriting

	[Check here](http://book.cakephp.org/2.0/en/installation/url-rewriting.html)

6. Set up CakePHP email configuration

	[Check here](http://book.cakephp.org/2.0/en/core-utility-libraries/email.html)
	

7. Create tables

	```bash
	Console/cake schema create users --plugin Users
	Console/cake schema create --plugin Social
	```

8. Set up provider key and secret.

	Twitter
	```php
	Configure::write('Opauth.Strategy.Twitter', array(
        'key' => 'Your key',
        'secret' => 'Your secret'
	));
	```

	Facebook
	```php
	Configure::write('Opauth.Strategy.Facebook', array(^M
        'app_id' => 'Your app ID',^M
        'app_secret' => 'Your app secret'^M
	));^M
	```
	