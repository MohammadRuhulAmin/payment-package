# payment-package

#Step-1)composer require teambravo/paymentgateway_pkg

#Step-2)set database name inside  .env file
	and add this two field 
	
	STORE_ID=asaup5ffbc7af41bd5
	STORE_PASSWORD=asaup5ffbc7af41bd5@ssl
	(after creating sandbox account they will provide store_id and store_password)

#Step-3)
add the service provider inside config/app.php  inside providers section 

	\TeamBravo\Payment\PaymentServiceProvider::class,
  
  
#Step-4) go to Middleware/verifyCsrfToken.php and inside 

	protected     $except=	[ '/pay-via-ajax', '/success','/cancel','/fail','/ipn'];
  
 #Step-5)Run

php artisan migrate

#Step-6)Run :

 php artisan vendor:publish 
	
after running the command , a file sslcommerz.php file will be published inside config folder

then Run php artisan serve


#Step-6)hit :http://localhost:8000/example1

#Step-7)hit :http://localhost:8000/example2
