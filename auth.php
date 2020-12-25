<?php
    session_start();
    
    // include 'connect.php';

    // echo "I am already here at auth.php<br>";
    /*
    if( isset($_POST['username']) ){

        echo "username is set <br>";
       
        if( !empty($_POST['username']) ){

            $username = $_POST['username'];
            echo "username is not empty, Value = $username <br>";  

        }else{
            echo "username is empty<br>";
        }
        // echo "Yes, this is the username: ".$_POST['username'];

    }else{

        echo "username is not given.";

    }
    */
    if( isset($_POST['username']) && isset($_POST['password'])) {

        if( !empty($_POST['username']) && !empty($_POST['password']) ){

            // $usernameSubmit = mysqli_real_escape_string($conn, $_POST['username']);
            // $passwordSubmit = mysqli_real_escape_string($conn, $_POST['password']);
            $usernameSubmit = $_POST['username'];
            $passwordSubmit = $_POST['password'];

            if( ($usernameSubmit == 'kervi') && ($passwordSubmit = 'password') ){
                header('Location: test.html');
            }else{
                $_SESSION['message'] = "Login Username and Password Error";
                header('Location: index.php');
            }

            // $sql = "SELECT * FROM `users` WHERE `username` =  '$usernameSubmit' and `password` = '$passwordSubmit' ";
            
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //     header('Location: test.html');
            //     // // output data of each row
            //     // while($row = $result->fetch_assoc()) {
            //     //     echo "id: " . $row["username"]. " - Name: " . $row["password"]. "<br>";
            //     // }
            // } else {
            //     $_SESSION['message'] = "Login Username and Password Error";
            //     header('Location: index.php');
            // }
            // $conn->close();
        }else{
            $_SESSION['message'] = "Login Username and Password Error";
            header('Location: index.php');
        }
    }else{
        $_SESSION['message'] = "Login Username and Password Error";
        header('Location: index.php');
    }
    
    