<?php


include "connection.php";

if(empty($_SESSION['email'])){
    
    header("location: index.php");
}

if(isset($_POST["signup"])){

    function valididate($input) {

        $input = trim($input);
        $input = htmlspecialchars($input);
        $input = htmlspecialchars($input);
        $input = htmlspecialchars($input);

    }

    $password = $_POST["pswd"];
    $password = md5($password);
    $firstname = $_POST["fname"];
    $lastname =$_POST["lname"];
    $email = $_POST["email"];

    if(empty($firstname)) {

        header("location: index.php?error= All The Field must not be empty");
    }

    $emailValidation = "SELECT * FROM maindb WHERE email = '$email'";

    $answer = $conn->query($emailValidation);



    if($answer->num_rows > 0){

        header("location: index.php?error= This Email is Already taken");
        exit();

        // echo "This Email is Already taken";


        


    }else {

        $Insert = "INSERT INTO maindb(firstname, lastname, email,password)
        
                    VALUES ('$firstname','$lastname','$email','$password')";



    if($conn->query($Insert) == true) {

        // header("loaction: home.php");

        // echo "Succesfully Registered";

        header("location: index.php?error=Succesfully Registered!");
    } else {

        header("location: index.php?error=Something went wrong! try again");
    }




    }

}


if(isset($_POST["login"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["pswd"]);
    $password = md5($password);

    $checkValues = "SELECT * FROM maindb WHERE email = '$email' and password ='$password'";
    $answer = $conn->query($checkValues);

    if($answer->num_rows > 0){

        session_start();

        $row = $answer->fetch_assoc();
        
        $_SESSION['email']  = $row['email'];

        header("location: home.php");
        exit();
    } else {
        // echo "Incorrect email or password";

        header("location: index.php?error=Incorrect Password or email");
    }
}