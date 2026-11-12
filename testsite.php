<?php 
    //Create user login
    $user = new User();
    $user->username = 'testuser';
    $user->password = 'testpassword';
    $user->email =  'testemail@email.com';
    $user->first_name = 'testfirstname';
    $user->last_name = 'testlastname';
    $user->save();

    //Create user login form
    $login = new Login();
    $login->username = 'testuser';
    $login->password = 'testpassword';
    $login->save();

    //Create a user sign up form
    $signupform = new SignupForm();
    $signupform->username = 'testuser';
    $signupform->password = 'testpassword';
    $signupform->email = 'testemail';
    $signupform->first_name = 'testfirstname';
    $signupform->last_name = 'testlastname';
    $signupform->save();
?>

<html>
<head>
    <title>Test Site</title>
</head>
    <body>
        <!--create login form-->
        <form action="<?php echo $login->getFormAction(); ?>" method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="submit" value="login" />
        </form>
        
        <!--create signup form-->
        <form action="<?php echo $signupform->getFormAction(); ?>" method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="text" name="email" placeholder="email" />
            <input type="text" name="first_name" placeholder="first name" />
            <input type="text" name="last_name" placeholder="last name" />
            <input type="submit" value="signup" />
        </form>


        <!--create user login form-->
        <form action="<?php echo $login->getFormAction(); ?>" method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <input type="submit" value="login" />
        </form>


        <h1>Test Site</h1>
        <p>
            <?php echo $user->username; ?>
        </p>
        <p>
            <?php echo $user->email; ?>
        </p>
        <p>
            <?php echo $user->first_name; ?>
        </p>
        <p>
            <?php echo $user->last_name; ?>
        </p>
        <p>
            <?php echo $login->username; ?>
        </p>
        <p>
            <?php echo $login->password; ?>
        </p>

        <p>hi<p>
    </body>

    <style>
        p {
            color: red;
        }

        /*make background red*/
        body {
            background-color: red;
        }

    </style>

</html>