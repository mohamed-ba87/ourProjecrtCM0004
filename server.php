<?php
 session_start();
 $username ="";
 $email="";
$error= array();
 // this the database connection
$db= mysqli_connect("servername","1808234","1808234","database name");

//register user
if(isset($_POST['userRej'])){
    $f_name= mysqli_real_escape_string($db,$_POST['1name']);
    $L_name= mysqli_real_escape_string($db,$_POST['2name']);
    $add_1= mysqli_real_escape_string($db,$_POST['add1']);
    $add_2= mysqli_real_escape_string($db,$_POST['add2']);
    $city= mysqli_real_escape_string($db,$_POST['city']);
    $postcode= mysqli_real_escape_string($db,$_POST['postcode']);
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1= mysqli_real_escape_string($db,$_POST['password']);
    $password_2 = mysqli_real_escape_string($db,$_POST['password1']);

    //to make sure all or most of the places are filled correctly
    if(empty($f_name)){ array_push($error,"First name is required");}
    if(empty($L_name)){ array_push($error,"Last name is required");}
    if(empty($add_1)){ array_push($error,"the first line is required");}
    if(empty($city)){ array_push($error,"city name is required");}
    if(empty($postcode)){ array_push($error,"postcode is required");}
    if(empty($username)){ array_push($error,"username is required");}
    if(empty($email)){ array_push($error,"email is required");}
    if(empty($password_1)){ array_push($error,"Password is required");}
    if($password_1 != $password_2){array_push($error,"the password do not match");}

    // check the data base to make sure the user does not already exist with
    //username/ or password and email
    $user_check= "SELECT* FROM table WHERE username=$username OR email= $email LIMIT 1";
    $result= mysqli_query($db,$user_check);
    $user= mysqli_fetch_assoc($result);

    if($user){ //if user EXISTS do ...
        if($user['username']===$username){
            array_push($error,"this Username is already exists");
        }
        if($user['email']===$email){
            array_push($error,"this email is already exists");
        }
    }

    // then do the register this user IF they are no error in the array
    if(empty($error)){
        $password= md5($password_2); // encrypt the password be for save it in our database
        $put = "INSERT INTO 'table name'() VALUES ('$f_name','$L_name','$add_1','$city','$postcode','$username','$email','$password')";

        mysqli_query($db,$put);
        $_SESSION['username']= $usermane;
        $_SESSION['success'] = "you are now logged in Successfully !";
        //header('location: index.html);
    }

} // end of the  IF  for the user application

// LOGIN OF USER
if (isset($_POST['username'])){

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    if(empty($username)){ array_push($error,"username is required");}
    if(empty($password)){ array_push($error,"password is required");}

    if (empty($error)){
        $password= md5($password);
        $do= "SELECT* FROM table name WHERE username='$username' AND password='$password'";
        $result= mysqli_query($db,$do);
        if(mysqli_num_rows($result)==1){
            $_SESSION ['username']= $username;
            $_SESSION['success']= "you are no logged in Successfully";
            header('location: index.html');

        }else{array_push($error,"wrong username/or password");}
    }

}