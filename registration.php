<?php
$mysqli = new mysqli('home13', 'root', '', 'Registration form');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $mysqli->real_escape_string($_POST['name']);
    $surname = $mysqli->real_escape_string($_POST['surname']);
    $age = $mysqli->real_escape_string($_POST['age']);
    $gender = $mysqli->real_escape_string($_POST['gender']);
    $hobbies = $mysqli->real_escape_string($_POST['hobbies']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = md5($_POST['password']); //md5 hashes password security
    $birthdate = $mysqli->real_escape_string($_POST['birthdate']);
    $card = $mysqli->real_escape_string($_POST['card']);
    $about = $mysqli->real_escape_string($_POST['about']);
    $category = $mysqli->real_escape_string($_POST['category']);

    $sql = "INSERT INTO 
            Registration (`Name`, `Surname`, `Age`, `Gender`, `Hobbies`, `Username`, `Password`, `Date of birth`, `Card number`, `About`, `Category`)
            VALUES ('$name', '$surname', '$age', '$gender', '$hobbies', '$username', '$password', '$birthdate', '$card', '$about', '$category')";

    if ($mysqli->query($sql) === true) {
        $_SESSION['message'] = "Registration successful! Added $username to the database!";
    }
    else {
        $_SESSION['message'] = "User cannot be added to the database!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<section class="container">
    <form action="registration.php" method="post">
        <div class="container-inputs">
            <label for="user-name">Name</label>
            <input type="text" id="user-name" name="name" required="required" value="">
        </div>
        <div class="container-inputs">
            <label for="user-surname">Surname</label>
            <input type="text" id="user-surname" name="surname" required="required" value="">
        </div>
        <div class="container-inputs">
            <label for="user-age">Age</label>
            <input type="text" id="user-age" name="age" value="">
        </div>
        <div class="container-inputs">
            <label for="user-gender">Gender</label>
            <select id="user-gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="container-inputs">
            <label for="user-hobbies">Hobbies</label>
            <select id="user-hobbies" multiple="multiple" size="1" name="hobbies">
                <option disabled="disabled">Select your hobbies</option>
                <option value="Football">Football</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Swimming">Swimming</option>
                <option value="Running">Running</option>
            </select>
        </div>
        <div class="container-inputs">
            <label for="username">Username</label>
            <input type="text" id="username" required="required" name="username" value="">
        </div>
        <div class="container-inputs">
            <label for="user-password">Password</label>
            <input type="text" id="user-password" name="password" required="required" value="">
        </div>
        <div class="container-inputs">
            <label for="user-birthday">Date of birth</label>
            <input type="date" id="user-birthday" name="birthdate" value="">
        </div>
        <div class="container-inputs">
            <label for="user-bank-account">Card number</label>
            <input inputmode="numeric" name="card"  id="user-bank-account" pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" value="" placeholder="XXXX XXXX XXXX XXXX" maxlength="23" required="required">
        </div>
        <div class="container-inputs">
            <label for="user-about">A few words about yourself</label>
            <textarea name="about" id="user-about" rows="10" cols="60" required="required"></textarea>
        </div>
        <div class="container-inputs">
            <label for="user-category">Category</label>
            <select id="user-category" name="category">
                <option disabled="disabled">Select category</option>
                <option value="Art">Art</option>
                <option value="Health">Health</option>
                <option value="Carrier">Carrier</option>
                <option value="Finance">Finance</option>
            </select>
        </div>
        <div class="container-inputs">
            <input type="submit" value="Register" name="register">
        </div>
    </form>
</section>
</body>
</html>