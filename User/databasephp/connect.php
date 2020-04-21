<?php
	
			 function make_connection(){
				$cnn=mysqli_connect("localhost","root","","bookistan");
				if(mysqli_connect_errno()){
					echo "failed to connect".mysqli_connect_errno();
				}
				return $cnn;
			}

		 
				
				
			
?>