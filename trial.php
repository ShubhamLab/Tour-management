<?php

$username=filter_input(INPUT_POST,'username');



if(!empty($username)){


else{
	echo "Username should not be empty";
	die();
}


?>