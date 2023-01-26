<!DOCTYPE html>
<html>
<head>
    <!--MetaTags--->
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Lyndsy Soriano">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body bgcolor=”#76BA1B">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<?php 
include 'validation.php';
?>

<!--opening-->
<div class="container align-items-center justify-content-center d-flex" >
<h1 class="display-7">Welcome</h1>
</div>
<!--InputForm-->
<div class="container d-flex justify-content-center align-items-center">
    <span class="border border-secondary rounded-4 p-3 border border-5">
    <form method="post">

        <!--FirstName-->
        <span class="error" style="color:red;"> <?php echo $fname_err;?></span>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default" >First Name</span>
            <input type="text" name="fname" value="<?php echo $fname;?>"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <!--LastName-->
        <span class="error" style="color:red;"> <?php echo $lname_err;?></span>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default" >Last Name</span>
            <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <!--Email-->
        <span class="error" style="color:red;"> <?php echo $email_err;?></span>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default" >Email</span>
            <input type="text" name="email" value="<?php echo $email;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <!--Date-->
        <span class="error" style="color:red;"> <?php echo $date_err;?></span>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default" >Date of Birth</span>
            <input type="date" name="date" value="<?php echo $date;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <!--SubmitBttn-->
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">

    </form> 
    </span>
</div>

    
</body>

</html>