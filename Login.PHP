<!DOCTYPE html>
<!-- saved from url=(0044)file:///C:/xampp/htdocs/Rehan/Login.php.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Login_files/login form.Css">
    <link rel="stylesheet" href="./Login_files/bootstrap-icons.css">
    <link rel="stylesheet" href="login form.css?v=<?php echo time(); ?>">

  
  
    <script src="./Login_files/jquery.min.js.download"></script>
  
    <script src="./Login_files/jquery.validate.min.js.download"></script>


</head>
<body>
    <div>
        <form id="myform" method="post" >
<h1>login</h1>

<label class="user"> 
    <i class="bi bi-person"></i>
    Username or Email</label>



<br><br>




<input type="text" name="user" class="text1" placeholder="Type your Username" id="user">
<br>
<br>
<br>
<br>

<label class="pass">
    <i class="bi bi-pass"></i>
    Password</label>
    

<br><br>


<input type="password" name="pass" class="text2" placeholder="Type your Password" id="pass">
<br>
<label class="forget">forget Password?</label>

<br><br>
<br>
<br>
<br>







<button class="btn1" type="submit" name="Login"> LOGIN</button>


<br>
<label class="label1"> Sign Up With</label>
<div class="icon">
    <span class="span1">
      <a href="https://www.facebook.com/">  <i class="bi bi-facebook"></i></a>
    </span>

</div>
<div class="icon2">
<span class="span2">
<a href="https://accounts.google.com/">    <i class="bi bi-google"></i></a>
</span>
</div>
<div class="icon3">
<span class="span3">
<a href="https://support.apple.com/en-us/HT204053"><i class="bi bi-apple"></i></a>

</span>

</div>

    </form></div>

    
   
 <?php
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "registerdb";




$con = mysqli_connect($server,$user,$pass,$database);




      if(isset($_POST['Login'])){


          $username = $_POST['user'];
		
         $password = $_POST['pass'];
		
	  
	$selectquery = mysqli_query($con,"select * from registertbl where FirstName = '$username' And Password = '$password'");
		
		
			
		$results = mysqli_fetch_array($selectquery);
		
		if($results){
			
			$_SESSION['FirstName'] = $username;
			  echo "log in Success ";
		
		
		
	  }
		else{
			echo "log in Failed";
			}	
						
	  
	  }
?>
   
    
    
    
     <script>
////    var abc = document.getElementById('user');
////	var def = document.getElementById('pass');
////	function myfunc(){
////        if(abc.value == 'Noor' && def.value == 'Rehan'){
////            window:location.href = "https://www.google.com/"
////
////
////        }
////        else{
////            alert("your password or username incorrect");
////        }
////		
////		}
//    $(document).ready(function(e){
//        $("#myform").validate({
//            
//			rules:{
//                user:{
//                    required:true,
//                    
//                },
//                pass:{
//                    required:true,
//                    
//            },
//			},
//            messages:{
//                user:{
//                    required:"please enter value",
//                },
//				pass:{
//					required:"Enter correct password",
//					},
//            }
//			
//			
//			
//          
//
//    })
//
//})
// 
//    
//    
//    </script>

</body></html>