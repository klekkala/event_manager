
      
    <?php  
      
    include("db_connection.php");  
      
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from membersinformationTable WHERE email='$user_email' AND pass='$user_pass'";  
        echo $user_email;
	echo $user_pass;
        $run=mysqli_query($dbcon,$check_user);  
      
        if(mysqli_num_rows($run))  
        {  
            echo "<script>window.open('welcome.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
    ?>  
