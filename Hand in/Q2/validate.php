

<!-- This is "validate.php" file.Please copy and create a php file named "validate.php"-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

<div class="container p-5"><a href="form.php"><button class="btn btn-primary my-5">Back to Forms</button></a>
<?php 
$username = $_POST["username"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];

if (isset($username)
&& isset($pass1)
&& isset($pass2)
&& isset($email1)
&& isset($email2)
&&$username!=""&&$email1!=""&&$email2!=""&&$pass1!=""&&$pass2!="") {
    function confirmthevalues($value,$confirmvalue)
    {   if($value == $confirmvalue){return 1; }
    return 0;
    }
    
    $username = stripslashes($username);
    $email1 =  stripslashes($email1);
    $email2 =  stripslashes($email2); 
    $pass1 =   stripslashes($pass1);
    $pass2 =   stripslashes($pass2);
    if (confirmthevalues($pass1,$pass2)&&confirmthevalues($email1,$email2)){
        ?><div class="container"><div class="card">
        <div class="card-body text-center">
          <h4 class="card-title">Entered Data</h4>
          <p class="card-text">Username:  <?php echo "$username" ?></p>
          <p class="card-text">Email:  <?php echo "$email1" ?></p>
          <p class="card-text">Password:  <?php echo "$pass1" ?></p>
          <a href="form.php" class="btn btn-success">Final Submit</a>
          
        </div>
      </div><?php     


    }else{
        if (!confirmthevalues($pass1,$pass2)){
            ?><div class="alert alert-danger" role="alert">Password doesnt match!</div><?php
        }

        if (!confirmthevalues($email1,$email2)){
            ?> <div class="alert alert-danger" role="alert">Email doesnt match!</div><?php
        }
        }
}
else{
?> 
    <div class="alert alert-danger" role="alert">
    One or more fields are empty!
    </div>
<?php
}
?>
</div>