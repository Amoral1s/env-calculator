<?php
@include('inc/main.php');
@include('inc/posts.php');
@include('inc/seo.php');
function create_custom_field() {
    $database_field = 'sert_number_meta'; // Имя вашего поля в базе данных
    $initial_value = 714021; // Начальное значение

    add_option($database_field, $initial_value);
}

add_action('init', 'create_custom_field');


add_action('wpcf7_mail_sent', 'increment_database_value');
function increment_database_value($contact_form) {
    $form_names = array('Buy a coupon 200', 'Buy a coupon'); // Укажите имена ваших форм
    $database_field = 'sert_number_meta'; // Имя вашего поля в базе данных
    $custom_field_name = 'Sert_number'; // Имя вашего поля Sert_number

    if (in_array($contact_form->title(), $form_names)){
        
        $current_value = get_option($database_field);
        $updated_value = $current_value + 1;

        // Обновление значения в базе данных
        update_option($database_field, $updated_value);
    }
}




add_filter(
	'wpcf7_stripe_payment_intent_parameters',

	function ( $params ) {

		// Get the WPCF7_Submission object
		$submission = WPCF7_Submission::get_instance();

		// Calculate the amount
		$amount_value = $submission->get_posted_data( 'amount' );
		$amount = 100 * $amount_value;
		$params['amount'] = $amount;

		// Retrieve the buyer's email from the 'email-123' field value
		$receipt_email = $submission->get_posted_data( 'Email' );
		$name = $submission->get_posted_data( 'Full_name' );
		//$description = $submission->get_posted_data( 'Sert_number' );
		

		// Присвоить значения "name" и "email" в поле customer
		$params['receipt_email'] = $receipt_email;
		
		

		// See https://stripe.com/docs/api/payment_intents/create
		// for the full list of available parameters

		return $params;
	},

	10, 1
);

