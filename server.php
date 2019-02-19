<?php
 session_start();
 $username ="";
 $email="";
$error= array();
 // this the database connection
$db= mysqli_connect('CSDM-WEBDEV','1809441','1809441','db1809441_trade');
//if($db-> connect_error) {die('Error'.('.$db->connect_errno.'));} else {echo "connected";}

//register user
if(isset($_POST['userRej'])){
    $f_name= mysqli_real_escape_string($db,$_POST['1name']);
    $L_name= mysqli_real_escape_string($db,$_POST['u2name']);
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
    $user_check= " SELECT* FROM user WHERE (username='$username' OR email= '$email') LIMIT 1";
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

        $password= md5($password_1); // encrypt the password be for save it in our database
        echo " we done it ";

       $put= "INSERT INTO test (1name, u2name, add1, add2, city, postcode, username, email, password)
VALUES ('$f_name','$L_name','$add_1','$add_2','$city','$postcode','$username','$email','$password')";
        echo " we done it 1";
        header('Location: /ourProjecrtCM0004?case1');

     //   $put= "INSERT INTO table login (username,email,password)
       //         VALUES ('$username','$email','$password')";
        echo " we done it 2";
       // $put= "INSERT INTO table login(username,email,password) VALUES ('$username','$email','$password')";
        mysqli_query($db,$put);
        $_SESSION['username']= $usermane;
        $_SESSION['success'] = "you are now logged in Successfully !";
        //header('location: index.php);
        echo " we done it 3";
    }

} // end of the  IF  for the user application

// LOGIN OF USER
if (isset($_POST['login'])){

    $username = mysqli_real_escape_string($db,$_POST['username5']);
    $password = mysqli_real_escape_string($db,$_POST['password5']);

    if(empty($username)){ array_push($error,"username is required");}
    if(empty($password)){ array_push($error,"password is required");}

    if (empty($error)){
        //$password= md5($password);
        $do= "SELECT* FROM login WHERE username ='$username' and password='$password'";
        $result= mysqli_query($db,$do);
        echo " we done it ";
        if(mysqli_num_rows($result)<2){
            echo " we done it 1";
            $_SESSION ['username']= $username;
            $_SESSION['success']= "you are no logged in Successfully";
            echo " we done it 2";
            //header('location: index.php');

        }else{array_push($error,"wrong username/or password");}
    }

}