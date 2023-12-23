<?php 
session_start(); 
include "../db.php";

if (isset($_POST['login']))
{

// 	function validate($data){
//       $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}

// 	$uname = validate($_POST['uname']);
// 	$pass = validate($_POST['password']);

	if (empty($_POST['uname'])) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($_POST['password'])){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $uname = $_POST['uname'];
        $pass = md5($_POST['password']);
   
		$row =  mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE user_name='$uname' AND password='$pass'"));
	    
	    if(empty($row))
	    {
	        header("Location: index.php?error=Incorect User name or password");
	    }
	    
	    
	    
    	$_SESSION['user_name'] = $row['user_name'];
    	$_SESSION['name'] = $row['name'];
    	$_SESSION['id'] = $row['id'];
    	
    	echo '<script>
    	    window.location="home.php";
    	</script>';
    // 	header("Location: index.php?error=Incorect User name or password");
    	

// 		if (mysqli_num_rows($result) === 1) {
// 			$row = mysqli_fetch_assoc($result);
//             if ($row['user_name'] === $uname && $row['password'] === $pass) {
//             	$_SESSION['user_name'] = $row['user_name'];
//             	$_SESSION['name'] = $row['name'];
//             	$_SESSION['id'] = $row['id'];
//             	header("Location: home.php");
// 		        exit();
//             }else{
// 				header("Location: index.php?error=Incorect User name or password");
// 		        exit();
// 			}
// 		}else{
// 			header("Location: index.php?error=Incorect User name or password");
// 	        exit();
// 		}
	}
	
}else{
	header("Location: index.php");
	exit();
}