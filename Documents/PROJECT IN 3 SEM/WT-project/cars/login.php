<?php
          if(isset($_POST['login']))
          {
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,'mytable');

            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "select * from tab where username='$username' and  password='$password'";

            $query_run = mysqli_query($con,$query);
            if($query_run){
              if(mysqli_num_rows($query_run) > 0)
              {
                $_SESSION['username'] = $username;
               // header('location: index.php');
                $me="Successfully logged in";
				 echo "<script type='text/javascript'>alert('$me');
                  window.location.href = 'http://localhost/cars/menu.html';
                  </script>";
				  //header("Location: http://localhost/cars/menu.html");
              }
              else{
				   $me1="Invaid Credentials";
               echo "<script type='text/javascript'>alert('$me1');
                    window.location.href = 'http://localhost/cars/menu.html';
                    </script>";
	              }
            }
            else{
              echo '<script type="text/javascript"> alert("database error") </script>';
            }
          }
		  
		 
?>