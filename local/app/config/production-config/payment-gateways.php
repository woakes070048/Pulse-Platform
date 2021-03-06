<?php
/*
 |--------------------------------------------------------------------------
 | Payment gateway config
 |--------------------------------------------------------------------------
 |
 | Here you can configure the payment gateways clients can use to pay
 | their subscriptions. Please consult the manual for any special settings.
 |
 */
return array(

	/*
	|--------------------------------------------------------------------------
	| Use these payment gateways
	|--------------------------------------------------------------------------
	|
	| This will ONLY work if the avangate.php active is set to false.
	|
	*/

	'active' => true,

	/*
	|--------------------------------------------------------------------------
	| Admin mail address
	|--------------------------------------------------------------------------
	|
	| The email address(es) that will receive a copy of the order.
	| Seperate multiple email addresses with a comma (,).
	|
	*/

	'admin_mail' => '',

	/*
	|--------------------------------------------------------------------------
	| Auto update subscription
	|--------------------------------------------------------------------------
	|
	| If true, a subscription will be automatically upgraded after the order,
	| even if the payment is cancelled. If set to false, you will have to manually
	| update the subscription. 
	|
	*/

	'auto_update_subscription' => true,

	'gateways' => array(

		/*
		|--------------------------------------------------------------------------
		| Bank
		|--------------------------------------------------------------------------
		|
		| Bank Transfer requires you to manually check payments
		|
		*/

		'bank' => array(
			'active' => true,
			'account' => 'XXXX.XXXX.XXXX Attn BUSINESS NAME' /* Enter your bank account number and name here */
		),

		/*
		|--------------------------------------------------------------------------
		| PayPal
		|--------------------------------------------------------------------------
		|
		| Set sandbox to true for testing at https://www.sandbox.paypal.com/
		|
		*/

		'paypal' => array(
			'active' => false,
			'sandbox' => false,
			'email' => ''
		),

		/*
		|--------------------------------------------------------------------------
		| 2Checkout
		|--------------------------------------------------------------------------
		|
		| Set sandbox to true for testing at https://sandbox.2checkout.com/sandbox
		|
		*/

		'2checkout' => array(
			'active' => false,
			'sandbox' => false,
			'account_number' => ''
		),

		/*
		|--------------------------------------------------------------------------
		| Stripe
		|--------------------------------------------------------------------------
		|
		| This is a placeholder for future development. It's not yet functional.
		|
		*/

		'stripe' => array(
			'active' => false,
			'sandbox' => false,
			'api_key' => ''
		)
	)
);
