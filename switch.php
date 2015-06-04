

<?php

define('AJAX', (isset($_SERVER[HTTP_X_REQUESTED_WITH]) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'));

$cours = $_GET['cours'];

switch ($cours){

	case 'js':
	echo 'Le professeur de Javascript est mr. Delfosse';
	break;

	case 'ergonomie':
	echo 'Le professeur d\'ergonomie est mr. St crique';
	break;

	case 'commuvisu':
	echo 'Le professeur de commu est mr. Wathieu';
	break;


	default:

	echo 'Quel cours t\'interesse?';
	break;

}
	
?>

<html>
<body>

<p>Choisis: <a href='?cours=js'>javascript</a>, <a href='?cours=ergonomie'>ergonomie</a> ou
	<a href='?cours=commuvisu'>commuvisu</a>?</p>

</body>
</html>

