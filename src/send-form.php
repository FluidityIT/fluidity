<?php
$message="";

$to="benjamin@nothingrandom.com";

$subject="Fluidity Form";

foreach ($_POST as $key => $value) {
	$message .= htmlspecialchars($key).": " .htmlspecialchars($value). "\n";
}

$sm=mail($to, $subject, $message);

?>