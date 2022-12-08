<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    
 
    <form action="welcome.php" method="post">
        <input type="text" name="name" placeholder="User Name"> <br> <br>
       <input type="email" name="email" placeholder="Email"> <br><br>
       <input type="password" name="password" placeholder="password"><br><br>
       <input type="password" name="repeatPassword" placeholder="Repeat Password"><br><br>
       Comment: <textarea name="comment" rows="5" cols="40"></textarea>
       Gender:
       <input type="radio" name="gender" value="female">Female
       <input type="radio" name="gender" value="male">Male
       <br><br>
       <input type="submit" name="signUp" value="Sign Up">
    </form>
</body>
</html>
