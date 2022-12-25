I.XAMPP configuration in Windows for local server.

1. Set Config in httpd-vhost.conf


<VirtualHost *:80>
    ServerAdmin webmaster@php-developer-backend.com
    DocumentRoot "C:/xampp/htdocs/php-developer-backend/public"
    ServerName php-developer-backend.com
    ErrorLog "logs/php-developer-backend.com-error.log"
    CustomLog "logs/php-developer-backend.com-access.log" common
</VirtualHost>

2.Config ..\ect\hosts :

127.0.0.1       php-developer-backend.com



II.Can not represent a work plan because it take too long time for realisation the first point of a task. Its result of my lower condition.

III.The same is for unit test. Here were created some PHPUnit tests for console commands.

Crate PHPUnit test with "php artisan make:test UserTest --unit" command

1. For run PHPUnit test add "./vendor/bin/phpunit" command on terminal and run

2. CrateUserCommad console command PHPUnit test
    
	public function test_create_user()
    {
        $this->artisan('user:create Demo demo@demo.com 123456')->assertExitCode(0);
    }
	
	(I can not do user email dynamic)
3. LoginUserCommand console command PHPUnit test

    public function test_login_user()
    {
        $this->artisan('user:login admin@admin.com 123456')->assertExitCode(0);
    }
	
	To work run "php artisan passport:install" for generate client access key.
