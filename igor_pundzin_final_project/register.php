<?php declare(strict_types=1);


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$errors = [];

$db = mysqli_connect('localhost', 'root', '', 'linker', 3306);
mysqli_set_charset($db, 'utf8mb4');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';
    $country = $_POST['countries-selector'] ?? '';
    $city = $_POST['cities-selector'] ?? '';
    $email = mb_strtolower($_POST['email']) ?? '';
    $email2=$email;
    
    

    if (trim($username) === '') {
        $errors['username'] = "Please provide a username.";
    }
    if (trim($city) === '') {
        $errors['city'] = "Please select a city.";
    }
    if (trim($country) === '') {
        $errors['country'] = "Please select a country.";
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Please enter a valid email.";
    }
    $res = mysqli_query($db, "SELECT `email` FROM `users` WHERE `email` = '$email'");
    $check = mysqli_fetch_all($res, MYSQLI_ASSOC);
    if(isset($check[0]) && $check[0]['email'] === $email) {
        $errors['email'] = "Email already registered";
    }


    if (mb_strlen($password) <= 5) {
        $errors['password'] = "Passwords must be at least six characters long.";
    }

    if ($password === '') {
        $errors['password'] = "Please enter a password.";
    }

    if ($password !== $password_confirmation) {
        $errors['password'] = "The passwords do not match.";
    }
    if (!$errors) {
        $username = mysqli_escape_string($db, $username);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $country = mysqli_escape_string($db, $country);
        $city = mysqli_escape_string($db, $city);
        $email = mysqli_escape_string($db, $email);
        
        
        

        $sql = "INSERT INTO `users` (`password`, `name`, `country`, `city`, `email`)"
            . " VALUES ('$hash', '$username', '$country', '$city', '$email')";
        mysqli_query($db, $sql);
        $userid=mysqli_insert_id($db);

        mkdir("img/users/" . $userid, 0777);
        mkdir("img/users/" . $userid . "/parties", 0777);
        $userdir = "img/users/" . $userid;
        if(isset($_FILES["avatar"]["name"])){
            $target_file = $userdir . basename($_FILES["avatar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $errors['avatar'] = "File is not an image.";
                $uploadOk = 0;
            }
            
            if (file_exists($target_file)) {
                $errors['avatar'] = "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size             
            if ($_FILES["avatar"]["size"] > (3 * 1048576)) {
                $errors['avatar'] = "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $errors['avatar'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $errors['avatar'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    $avatarpath = $target_file;
                    $sql = "UPDATE `users` SET `avatar` = '$avatarpath' WHERE `id` = '$userid'";
                    mysqli_query($db,$sql);

                    $sql = "INSERT INTO `userpictures` (`path`, `user_id`, `avatar`) VALUES '$avatarpath', '$userid', 1";
                    mysqli_query($db,$sql);
                } else {
                echo "Sorry, there was an error uploading your file.";
                }
            }
            //$resize = new ResizeImage('img/' . basename($_FILES["avatar"]["name"]));
            //$resize->resizeTo(200, 200, 'exact');
            //$resize->saveImage('img/' . basename($_FILES["avatar"]["name"]));
        }
        $sql = "SELECT * FROM `users` WHERE `id` = '$userid'";
        $res = mysqli_query($db, $sql);
        $user = mysqli_fetch_all($res, MYSQLI_ASSOC);
        mysqli_free_result($res);
        
        $_SESSION['_user'] = $user;
        $redirect_after_login = 'parties.php';
        header("Location: $redirect_after_login");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linker Social Network</title>
    <link rel="stylesheet" href="lib/css/main.css">
    <link rel="stylesheet" href="lib/css/index.css">
    <link rel="stylesheet" href="lib/css/register.css">
    <link rel="stylesheet" href="lib/css/select.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="lib/js/register.js"></script>
</head>
<body>
<header>
      <h1>Linker Socialising App</h1>
</header>
<nav id="indexnav">
            <img src="img/logo.png" alt="Linker GmbH Logo" id="mainlogo">
            <ul>    
                <li><a href="register.php" class="redbutton"  style="text-align:center;">REGISTER</a></li>
                <li><a href="login.php" class="redbutton"  style="text-align:center;">LOGIN</a></li>
            </ul>
        </nav>
    <div id="main">
        <label for="register"><h2>Register</h2></label>
        <form action="register.php" name="register" id="register" method="POST" enctype="multipart/form-data">
            <div class="username">
                <?php if (isset($errors['username'])) : ?>
                    <div class="alert"><?= $errors['username'] ?></div>
                <?php endif; ?>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?= $username ?? '' ?>">
            </div>
            <div class="email">
                <?php if (isset($errors['email'])) : ?>
                    <div class="alert"><?= $errors['email'] ?></div>
                <?php endif; ?>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="password">
                <?php if (isset($errors['password'])) : ?>
                    <div class="alert"><?= $errors['password'] ?></div>
                <?php endif; ?>
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </div>
            <div class="password_confirmation">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="text" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="country">
                <?php if (isset($errors['country'])) : ?>
                    <div class="alert"><?= $errors['country'] ?></div>
                <?php endif; ?>  
                <label for="countries-selector">Select your country</label>
                <select name="countries-selector" class="select-css" id="countries-selector">
                    <option value="">Pick a country</option>
                </select>
            </div>
            <div id="city">  
                <?php if (isset($errors['city'])) : ?>
                    <div class="alert"><?= $errors['city'] ?></div>
                <?php endif; ?>          
                <label for="cities-selector">Select your city</label>
                <select name="cities-selector" class="select-css" id="cities-selector">
                    <option value="">Pick a city</option>
                </select>
            </div>
            <div id="avatar">  
                <?php if (isset($errors['avatar'])) : ?>
                    <div class="alert"><?= $errors['avatar'] ?></div>
                <?php endif; ?>          
                <label for="avatar">Upload an Avatar</label>
                <input type="file" name="avatar" id="avatar">
                <label for="avatar"><i>(allowed: jpg,jpeg,gif,png)</i></label>
            </div>
            <div class="">
                <button type="submit">Register</button>
            </div>
            <p>Already have an account? Then go to the <a href="login.php">login page.</a></p>
    </form>
    <footer>
        <ul>
            <li><a href="privacypolicy.php">Privacy Policy</a></li>
            <li><a href="agb.php">AGB</a></li>
        </ul>
        <p>
            Linker Version 0.001
        </p>
    </footer>
</body>
</html>
