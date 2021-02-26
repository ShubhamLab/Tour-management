<?php

$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
$password=filter_input(INPUT_POST,'password');
$cpassword=filter_input(INPUT_POST,'cpassword');
$gender=filter_input(INPUT_POST,'gender');


if(!empty($name))
{
	if(!empty($email))
	{
		if(!empty($address))
		{
			if(!empty($password))
			{
				if(!empty($cpassword))
				{
					if(!empty($gender))
					{	
						
						$host="localhost";
						$dbusername="root";
						$dbpassword="";
						$dbname="db_connect";
						
						$conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
						
						
						if(mysqli_connect_error()){
			
							die('Connect Error ('. mysqli_connect_errno().')'.mysqli_connect_error());
			
						}
						else
						{
								$sql="INSERT INTO register(name,email,address,password,confirm_password,gender) values ('$name','$email','$address','$password','$cpassword','$gender')";
				
								if($conn->query($sql)){
									echo "New record inserted";
								}
								else{
									echo "Error: ".$sql."<br>".$conn->error;
								}
							$conn->close();
						}
	
					}
					else
					{
						echo "Gender should not be empty";
						die();
					}		
	
				}
				else
				{
					echo "C Password should not be empty";
					die();
				}
	
			}
			else
			{
				echo "Password should not be empty";
				die();
			}
	
		}
		else
		{
			echo "Address should not be empty";
			die();
		}
	
	}
else
{
	echo "Email should not be empty";
	die();
}
	
}
else
{
	echo "Name should not be empty";
	die();
}



?>