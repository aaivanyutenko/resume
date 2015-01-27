<?php
$field_names = array (
		'firstname',
		'lastname',
		'dateofbirth',
		'sex',
		'email',
		'password',
		'phone'
);
$field_notes = array (
		'firstname' => 'Please retupe your firstname.',
		'lastname' => 'Please retupe your lastname.',
		'dateofbirth' => 'Please retupe your date of birth.',
		'sex' => 'Please choose your sex.',
		'email' => 'Please retupe your email.',
		'password' => 'Please retupe your password.',
		'phone' => 'Please retupe your phone.',
		'photo' => 'Please reload your photo.' 
);
$field_validation_patterns = array(
		'firstname' => '[A-Za-zА-Яа-яёЁ- ]+',
		'lastname' => '[A-Za-zА-Яа-яёЁ-]+',
		'dateofbirth' => '\d{4}-\d{2}-\d{2}',
		'sex' => '(fe)?male',
		'email' => FILTER_VALIDATE_EMAIL,
		'password' => '(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}',
		'phone' => '\+[\d\-]+'
);
$form_is_valid = true;
$server_validation_note = '';
$user = array ();
foreach ( $field_names as $field_name ) {
	echo $_POST[$field_name].'<br>';
	echo ($_POST[$field_name]=='').'<br>';
}
// $user ['firstname'] = $_POST ['firstname'];
// $user ['lastname'] = $_POST ['lastname'];
// $user ['dateofbirth'] = $_POST ['dateofbirth'];
// $user ['sex'] = $_POST ['sex'];
// $user ['email'] = $_POST ['email'];
// $user ['password'] = $_POST ['password'];
// $user ['phone'] = $_POST ['phone'];
// $user ['photo'] = $_FILES ['photo']['name'];
// $finfo = new finfo(FILEINFO_MIME_TYPE);
// echo $finfo -> file($_FILES['photo']['tmp_name']).'<br>';
// echo $_POST ['firstname'] . '<br>';
// echo $_POST ['lastname'] . '<br>';
// echo $_POST ['dateofbirth'] . '<br>';
// echo $_POST ['sex'] . '<br>';
// echo $_POST ['email'] . '<br>';
// echo $_POST ['password'] . '<br>';
// echo $_POST ['phone'] . '<br>';
// echo $user ['photo'] . '<br>';
// echo $_FILES ['photo']['tmp_name'] . '<br>';
// echo implode ( ", ", getimagesize($_FILES ['photo']['tmp_name']) ) . '<br>';
// echo implode ( ", ", $field_names );
?>
<br>
<a href="registration.php">Back to the regiostration</a>