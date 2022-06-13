
<!-- This is "form.php" file. Please copy and create a php file named "form.php"-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrapcdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <title>Form</title>
</head>
<body>
    <div class="container  p-5 my-5">
        <h1 class="pb-3">Form</h1>
        <div>
            <form action="validate.php" method="post">
                <div class="">
                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Example: someone@yourmail.com.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Confirm Email address</label>
                    <input type="email" name="email2" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Confirm email">
                    <small id="emailHelp" class="form-text text-muted">Example: someone@yourmail.com.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" name="pass2" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
                </div>
                <div class="text-center py-3"><button type="submit" class="btn btn-primary mb-2">Submit</button></div>
                
            </form>
        </div>
    </div>
    
</body>
</html>