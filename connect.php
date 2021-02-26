<?php

$name=filter_input(INPUT_POST,'name');
$start=filter_input(INPUT_POST,'start');
$dest=filter_input(INPUT_POST,'dest');
$d=filter_input(INPUT_POST,'d');
$d1=filter_input(INPUT_POST,'d1');
$mode=filter_input(INPUT_POST,'mode');



if(!empty($name)){
	if(!empty($start)){
		if(!empty($dest)){
			if(!empty($d)){
				if(!empty($d1)){
					if(!empty($mode)){
						$host="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="db_connect";
				
					
				$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
				
				
				
				if(mysqli_connect_error()){

					die('Connection Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
				}
				else{
					$sql="INSERT INTO travel1(name,starting_point,destination,start_date,return_date,travel_mode) values ('$name','$start','$dest','$d','$d1','$mode')";
			
					if($conn->query($sql)){
						echo "New record inserted";
					}
					else{
						echo "Error: ".$sql."<br>".$conn->error;
					}
					$conn->close();
				}
						
					}
					else{
						echo "Travel mode should not be empty";
						die();
		
						}
				}
				else{
					echo "Date 1 should not be empty";
					die();
		
					}
			}
			else{
				echo "Date should not be empty";
				die();
		
				}

		}
		else{
			echo "Destination should not be empty";
			die();
		
		}

	}
	else{
		echo "Start should not be empty";
		die();
		
	}
}
else{
		echo "Name should not be empty";
		die();
		
}




?>