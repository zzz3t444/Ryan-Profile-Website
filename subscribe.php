<?php

	require_once 'mailchimp/inc/MCAPI.class.php';
	// MailChimp API Key
	// MailChimp API Key ARTICLE at http://kb.mailchimp.com/accounts/management/about-api-keys#Finding-or-generating-your-API-key
	$api = new MCAPI('YOUR_API_KEY');
	$merge_vars = array();

	// MailChimp List ID
	// MailChimp List ID ARTICLE at http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id
	$retval = $api->listSubscribe( 'YOUR_LIST_ID', $_POST["subscribe-email"], $merge_vars, 'html', false, true );

?>
