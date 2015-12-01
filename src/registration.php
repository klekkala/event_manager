   
    <?php  
    include("db_connection.php");//make connection here  

    if(isset($_POST['register']))  
    {  
        $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
        $user_pass=$_POST['pass'];//same  
        $user_email=$_POST['email'];//same  
  
 echo 4399;
      
        if($user_name=='')  
        {  
            //javascript use for input checking  
            echo"<script>alert('Please enter the name')</script>";  
    exit();//this use if first is not work then other will not show  
        }  
      
        if($user_pass=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
    //here query check weather if user already registered so can't register again.  
        $check_email_query="select * from membersinformationTable WHERE email='$user_email'";  
        $run_query=mysqli_query($dbcon,$check_email_query);  
      
        if(mysqli_num_rows($run_query)>0)  
        {  
    echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
    //insert the user into the database. 
        echo 4399; 
        $insert_user="insert into membersinformationTable (first_name,last_name,email,uname,pass,regdate,id) VALUE ('kiran','kumar','$user_email','$user_name','$user_pass',20120618, 3)";  
        if(mysqli_query($dbcon,$insert_user))  
        {  
            echo"<script>window.open('welcome.php','_self')</script>";  
        }  
        else
{
echo "not done";
}
      
      
    }  
      
    ?>  
