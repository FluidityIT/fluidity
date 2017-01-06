<?php
$message="";

$to="hello@fluidity.it";

$subject="Fluidity Web Contact Form";

foreach ($_POST as $key => $value) {
	$message .= htmlspecialchars($key).": " .htmlspecialchars($value). "\n";
}

$sm=mail($to, $subject, $message);

?>