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

		// Retrieve the currency from the 'your-currency' field value
		/* $currency = (array) $submission->get_posted_data( 'your-currency' );
		$currency = (string) array_shift( $currency );
		$params['currency'] = strtolower( $currency ); */

		// Calculate the amount
		/* $amount = 1000 * SOME_CONSTANT;
		$params['amount'] = $amount; */

		// Retrieve the buyer's email from the 'email-123' field value
		$receipt_email = $submission->get_posted_data( 'Email' );
		$name = $submission->get_posted_data( 'Full_name' );
		$description = $submission->get_posted_data( 'Sert_number' );

		if ( is_email( $receipt_email ) ) {
			$params['receipt_email'] = $receipt_email;
            $params['description'] = 'Sert. number: ' . $description . ', Name: ' . $name;
		}
		
		

		// See https://stripe.com/docs/api/payment_intents/create
		// for the full list of available parameters

		return $params;
	},

	10, 1
);
/* 
add_action('wpcf7_before_send_mail', 'block_spam_by_keywords', 10, 1);

function block_spam_by_keywords($contact_form) {
    $submission = WPCF7_Submission::get_instance();

    if ($submission) {
				$data = $submission->get_posted_data(); // Получаем все поля формы

        // Список ключевых слов для блокировки
				$blocked_keywords = array(
            'SEO',
            'link building',
            'outreach',
            'DA',
            'traffic',
            'dofollow',
            'nofollow',
            'algorithm' ,
            'do-follow',
            'Back-links',
            'backlinks',
        );
				
				foreach ($data as $field_value) {
						foreach ($blocked_keywords as $keyword) {
								if (stripos($field_value, $keyword) !== false) {
									$contact_form->clear_posted_data();
									$contact_form->skip_mail = true;
									break;
								}
						}
				}
        

    }
} */
