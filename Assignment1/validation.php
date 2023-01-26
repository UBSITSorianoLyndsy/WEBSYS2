<?php 
$fname_err = $lname_err = $fname = $lname = "";
$email_err = $date_err = $email = $date = "";


    
    if (isset($_POST["submit"])) {
        session_start();
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = ($_POST["email"]);
        $date = ($_POST["date"]);

        $_SESSION['namef'] = $fname;
        $_SESSION['namel'] = $lname;
        $_SESSION['mail'] = $email;
        $_SESSION['dob'] = $date;

        //First Name Validation
        if (empty($_POST["fname"])) {
            $fname_err = "Name required";
        } else {
            $fname = ($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fname_err = "Only letters and white space allowed";
            } else {
                $fname = $_POST["fname"];
            }    
        }
        //Last Name Validation
        if (empty($_POST["lname"])) {
            $lname_err = "Name required";
        } else {
            $lname = ($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lname_err = "Only letters and white space allowed";
            } else {
                $lname = $_POST["lname"];
            }
        }

        //Email Validation
        if (empty($_POST["email"])) {
            $email_err = "Email is required";
            } else {
            $email = ($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
            }
        }

        //Date Validation 
        if (empty($_POST["date"])) {
            $date_err = "Date is required";
            } else {
            $date = ($_POST["date"]);
        }

        //
        if (empty($date_err)&& empty($email_err) && empty($lname_err) && empty($fname_err)) {
            header('Location: welcome.php');
            }
            
            
    }
?>
