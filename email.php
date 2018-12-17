<?
require_once "Mail.php";

function email(){
	$from = 'benchwarmer.user1@gmail.com'; //change this to your email address
	$to = 'michael.neill.4@us.af.mil'; // change to address
	$subject = 'Mail Subject'; // subject of mail
	$body = "Welcome to the mailing list"; //content of mail

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'benchwarmer.user1@gmail.com', //your gmail account
			'password' => 'Wooden_Elevator32' // your password
		));

	// Send the mail
	$mail = $smtp->send($to, $headers, $body);
}
//check mail sent or not

?>