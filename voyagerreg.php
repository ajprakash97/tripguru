<?PHP
session_start();
if(isset($_POST['submit']))
 {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];
   $phone=$_POST['phone'];
   $gender=$_POST['gender'];
     if($password===$cpassword)
      {
        include('connection.php');
        $sql0="select * from voyagerreg where phone='$phone'";
        $result0=mysqli_query($conn,$sql0) or die(mysqli_error($conn));
        $num=mysqli_num_rows($result0);
        
        if($num>0)
         {$error="voyager exists!!!";
          $_SESSION['error']=$error;
          header('Location:login.php');}
         
        else
         {
        $sql1="insert into voyagerreg(name,email,phone,gender) values('$name','$email','$phone','$gender')";
        $result1=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
   
        $sql2="insert into login(phone,password) values('$phone','$password')";
        $result2=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
         
         if($result1&&$result2)
          {  
            $_SESSION['phone']=$phone;
            header('Location:main.php');}
         else
          { $error="Something went wrong during Registration!!!";
            $_SESSION['error']=$error;
            header('Location:login.php');}
       
      }
     }    
   else
     { $error="password doesn't match. Please check it!!!";
       $_SESSION['error']=$error;
       header('Location:login.php');}
  
  }
  ?>
