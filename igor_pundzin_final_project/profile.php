<?php declare(strict_types=1);

session_start();

if (!isset($_SESSION['_user'])) {
    header('Location: index.php');
    exit();
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = mysqli_connect('localhost', 'root', '', 'linker', 3306);

// Error Handling der Connection
if (mysqli_connect_errno()) {
    echo '<div>Es ist ein Fehler aufgetreten: '
        . mysqli_connect_error()
        . '</div>';
}
$id = $_SESSION['_user']['id'];
$errors=[];    
$action= $_GET['action'] ?? '';
$status= $_GET['status'] ?? ''; 


$result = mysqli_query($db, "SELECT * FROM `parties` WHERE `user_id` = '$id'");
$parties = mysqli_fetch_all($result, MYSQLI_ASSOC);


if($action ==='editparty' or $action==='deleteparty'){
    $party_id = $_GET['partyid'];
    //Get Party DATA
    $sql = "SELECT * FROM `parties` WHERE `id` = '$party_id'";
    $result = mysqli_query($db,$sql);
    $party = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    $user_id=$party['user_id'];
    //Get Party host DATA
    $sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";
    $result = mysqli_query($db,$sql);
    $userp = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
} 
if($action === 'pictures' or $action === 'deletepicture' or $action === 'uploadpictures' or $action === 'setasavatar'){
    if(isset($_GET['partyid'])){
        $party_id=$_GET['partyid'];
        $sql = "SELECT `user_id`, `name` FROM `parties` WHERE `id` = '$party_id' AND `user_id` = '$id'";
        $result = mysqli_query($db,$sql);
        $party = mysqli_fetch_assoc($result);
        if($party['user_id'] === $_SESSION['_user']['id']){
            $sql = "SELECT * FROM `partypictures` WHERE `party_id` = '$party_id'";
        }
    }else{
        $sql = "SELECT * FROM `userpictures` WHERE `user_id` = '$id'";
    }
    $result = mysqli_query($db,$sql);
    $pictures = mysqli_fetch_all($result);
   
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if($action ==='editparty' && $status === 'sent' && $_SESSION['_user']['id'] === $party['user_id']){
        $name = trim($_POST['name']) ?? '';
        $description = trim($_POST['description']) ?? '';
        $password = $_POST['password'] ?? '';
        $country = $_POST['countries-selector'] ?? '';
        $city = $_POST['cities-selector'] ?? '';
        $date = $_POST['date'] ?? '';
        $partyid=$_GET['party_id'] ?? '';

        if($_SESSION['_user']['id']!==$user_id){
            $errors['password'] = "Incorrect password.";
        }
        if (!password_verify($password, $userp['password'])){
            $errors['password'] = "Incorrect password.";
        }
        if (trim($name) === '') {
            $errors['username'] = "Please provide a username.";
        }
        if (trim($description) === '') {
            $errors['description'] = "Please provide a description.";
        }
        if (trim($date) === '') {
            $errors['date'] = "Please provide a date.";
        }
        if (trim($city) === '') {
            $errors['city'] = "Please select a city.";
        }
        if (trim($country) === '') {
            $errors['country'] = "Please select a country.";
        }
        if(!$errors and $party['user_id'] === $_SESSION['_user']['id']){
            $sql = "UPDATE `parties` SET `name` = '$name', `city` = '$city', `country` = '$country', `description` = '$description', `date` = '$date'  WHERE `id` = '$party_id'";
            mysqli_query($db,$sql);
            $success = "Changes applied successfully";
            $partyid=$_GET['partyid'];
            // Error Handling
            if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
            }
    
            $userdir = "img/users/" . $id . "/parties" . "/" . $partyid . "/";
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
                   
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        $success .= "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
                        $avatarpath = $target_file;
                        //Updates PARTY AVATAR
                        $sql = "UPDATE `parties` SET `avatar` = '$avatarpath' WHERE `id` = '$partyid'";
                        mysqli_query($db,$sql);
                        //Removes current AVATAR
                        $sql ="UPDATE `partypictures` SET `avatar` = 0 WHERE `id` = $partyid";
                        mysqli_query($db,$sql);
                        //Sets NEW AVATAR
                        $sql = "INSERT INTO `partypictures` (`path`, `party_id` ,`avatar`) VALUES ('$avatarpath', '$partyid', 1)";
                        mysqli_query($db,$sql);

                    } else {
                    $success .= "Sorry, there was an error uploading your file.";
                    }
                }
            }



            $result = mysqli_query($db, "SELECT * FROM `parties` WHERE `user_id` = '$id'");
            $parties = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $sql = "SELECT * FROM `parties` WHERE `id` = '$party_id'";
            $result = mysqli_query($db,$sql);
            $party = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            $success= "The changes have been incorporated.";
        }
    }
    if($action ==='createparty' && $status === 'sent'){
        $name = trim($_POST['name']) ?? '';
        $description = trim($_POST['description']) ?? '';
        $country = $_POST['countries-selector'] ?? '';
        $city = $_POST['cities-selector'] ?? '';
        $date = $_POST['date'] ?? '';
        $user_id=$_SESSION['_user']['id'];

        if (trim($name) === '') {
            $errors['username'] = "Please provide a username.";
        }
        if (trim($description) === '') {
            $errors['description'] = "Please provide a description.";
        }
        if (trim($date) === '') {
            $errors['date'] = "Please provide a date.";
        }
        if (trim($city) === '') {
            $errors['city'] = "Please select a city.";
        }
        if (trim($country) === '') {
            $errors['country'] = "Please select a country.";
        }

        if(!$errors){
            $sql = "INSERT INTO `parties` (`name`, `description`, `date`, `user_id`, `country`, `city`)"
                . " Values ('$name', '$description', '$date', '$user_id', '$country', '$city')";
            mysqli_query($db,$sql);
            $partyid=mysqli_insert_id($db);
            $success = "You have successfully created a party.";
            // Error Handling
            if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
            }
            
            
            $dir = "img/users/" . $id . "/parties" . "/";
            mkdir($dir . $partyid, 0777);
            $userdir = $dir . $partyid . "/";
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
                    $success .= "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        $success .= "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";                    
                        $avatarpath = $target_file;
                        $sql = "UPDATE `parties` SET `avatar` = '$avatarpath' WHERE `id` = '$partyid'";
                        mysqli_query($db,$sql);
                        //Sets NEW AVATAR
                        $sql = "INSERT INTO `partypictures` (`path`, `party_id` ,`avatar`) VALUES ('$avatarpath', '$partyid', 1)";
                        mysqli_query($db,$sql);
                    } else {
                    $success .= "Sorry, there was an error uploading your file.";
                    }
                }
            }
            
           

            $result = mysqli_query($db, "SELECT * FROM `parties` WHERE `user_id` = '$id'");
            $parties = mysqli_fetch_all($result, MYSQLI_ASSOC);

        }
    }
    if($action ==='editprofile' && $status === 'sent'){
        $name = trim($_POST['name']) ?? '';
        $bio = trim($_POST['bio']) ?? '';
        $password = $_POST['password'] ?? '';
        $country = $_POST['countries-selector'] ?? '';
        $city = $_POST['cities-selector'] ?? '';
        $id=$_SESSION['_user']['id'];
        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
        $result = mysqli_query($db,$sql);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if (!password_verify($password, $user['password'])){
           $errors['password'] = "Incorrect password.";
        } 
  
        if (trim($name) === '') {
            $errors['username'] = "Please provide a username.";
        }
        if (trim($city) === '') {
            $errors['city'] = "Please select a city.";
        }
        if (trim($country) === '') {
            $errors['country'] = "Please select a country.";
        }
        if(!$errors and $user['id'] === $_SESSION['_user']['id']){
            $sql = "UPDATE `users` SET `name` = '$name', `city` = '$city', `country` = '$country', `bio` = '$bio'  WHERE `id` = '$id'";
            mysqli_query($db,$sql);
            // Error Handling
            if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
            }

            $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
            $result = mysqli_query($db,$sql);
            $user = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            $_SESSION['_user'] = $user;
            $success= "Your changes have been successfully incorporated.";
            
            $userdir = "img/users/" . $id . "/";
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
                
                if($uploadOk === 1){

                }
    
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $success .= "The file couldn't be uploaded because there was a problem with either the file type, size or format.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        $success .= "The file <b><i>was</i></b> uploaded successfully.";                    
                        $avatarpath = $target_file;

                        $sql = "UPDATE `users` SET `avatar` = '$avatarpath' WHERE `id` = '$id'";
                        mysqli_query($db,$sql);

                        //Removes current AVATAR
                        $sql ="UPDATE `userpictures` SET `avatar` = 0 WHERE `id` = $id";
                        mysqli_query($db,$sql);
                        //Sets NEW AVATAR
                        $sql = "INSERT INTO `userpictures` (`path`, `user_id` ,`avatar`) VALUES ('$avatarpath', '$id', 1)";
                        mysqli_query($db,$sql);

                        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
                        $result = mysqli_query($db,$sql);
                        $user = mysqli_fetch_assoc($result);
                        mysqli_free_result($result);
                        $_SESSION['_user'] = $user;
                    } else {
                        $success .= "The file wasn't uploaded successfully.";
                    }
                }
            }
        }
    }
    if($action ==='deleteparty' && $status === 'sent'){
        $password = $_POST['password'] ?? '';
        if($_SESSION['_user']['id']!==$user_id){
            $errors['password'] = "Incorrect password.";
        }
        if (!password_verify($password, $userp['password'])){
            $errors['password'] = "Incorrect password.";
        }

        //If there are no problems do the action(deleteparty)
        if(!$errors  and $party['user_id'] === $_SESSION['_user']['id']){
            $sql = "DELETE FROM `partypictures` WHERE `party_id` = '$party_id'";
            mysqli_query($db,$sql);

            $sql = "DELETE FROM `requests` WHERE `party_id` = '$party_id'";
            mysqli_query($db,$sql);

            $sql = "DELETE FROM `participants` WHERE `party_id` = '$party_id'";
            mysqli_query($db,$sql);
            
            $sql = "DELETE FROM `parties` WHERE `id` = '$party_id'";
            mysqli_query($db,$sql);
            // Error Handling
            if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
            }

            
            $sql = "SELECT * FROM `parties` WHERE `id` = '$party_id'";
            $result = mysqli_query($db,$sql);
            $party = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
            
            $partyid=$_GET['partyid'] ?? '';
            
            //Refresh
            $result = mysqli_query($db, "SELECT * FROM `parties` WHERE `user_id` = '$id'");
            $parties = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
            if(!isset($partyid) or $partyid === ""){die();}
            $dir = "img/users/" . $id . "/parties" . "/" . $partyid . "/";
            $dir = htmlspecialchars($dir);
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it,
                        RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()){
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
            rmdir($dir);


            $success="The party was deleted successfully.";
        }
    }
    if($action ==='deleteprofile' && $status === 'sent'){
        $password = $_POST['password'] ?? '';
        $id=$_SESSION['_user']['id'];
        $res = mysqli_query($db,"SELECT `password` FROM `users` WHERE `id` = '$id'");
        $user =  mysqli_fetch_assoc($res);
        mysqli_free_result($res);
        if (!password_verify($password, $user['password'])){
            $errors['password'] = "Incorrect password.";
        }
        if(!$errors){
            $res = mysqli_query($db,"SELECT `id` FROM `parties` WHERE `user_id` = '$id'");
            $parties =  mysqli_fetch_all($res);
            //Deletes all party pictures, requests and participants-list from database
            for($i=0; $i< count($parties);$i++){
            $p_id = $parties[$i][0];
            $sql = "DELETE FROM `partypictures` WHERE `party_id` = '$p_id'";
            mysqli_query($db,$sql);
            
            $sql = "DELETE FROM `requests` WHERE `party_id` = '$p_id'";
            mysqli_query($db,$sql);

            $sql = "DELETE FROM `participants` WHERE `party_id` = '$p_id'";
            mysqli_query($db,$sql);

            }

            //Delete all users parties
            $sql = "DELETE FROM `parties` WHERE `user_id` = '$id'";
            mysqli_query($db,$sql);

            //Deletes all userpictures
            $sql = "DELETE FROM `userpictures` WHERE `user_id` = '$id'";
            mysqli_query($db,$sql);

            //Deletes user
            $sql = "DELETE FROM `users` WHERE `id` = '$id'";
            mysqli_query($db,$sql);
            // Error Handling
            if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
            }

            
            $dir = "img/users/" . $id . "/";
            $dir = htmlspecialchars($dir);
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it,
                        RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()){
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
            rmdir($dir);

            $redirect_after_account_delete = 'logout.php';
            header("Location: $redirect_after_account_delete");
            exit();
        }

    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linker - Profile</title>
    <link rel="stylesheet" href="lib/css/nav.css">
    <link rel="stylesheet" href="lib/css/main.css">
    <link rel="stylesheet" href="lib/css/select.css">
       <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="lib/js/register.js" type="text/javascript"></script>
    <script src="lib/js/nav.js" type="text/javascript"></script>
</head>
<body>
<header>
    <?php if (!($_SESSION['_user'])) : ?>
        <nav>
            <ul id="indexnav">
            <li><img src="img/logo.png" alt="Linker GmbH Logo"></li>
                <li><a href="register.php" class="redbutton"  style="text-align:center;">REGISTER</a></li>
                <li><a href="login.php" class="redbutton"  style="text-align:center;">LOGIN</a></li>
            </ul>
        </nav>
    <?php elseif ($_SESSION['_user']) : ?>
    <a href="profile.php"><img src="<?=$_SESSION['_user']['avatar'] ?>" style="border:5px solid black" alt="Your avatar" class="navavatar"></a>
    <nav>
            <ul id="mainnav">
                <li><a href="parties.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/parties.png" alt="Parties near me" class="navbutton"></a></li>
                <li><a href="users.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/users.png" alt="People near me" class="navbutton"></a></li>
                <li><a href="messages.php"><img src="img/buttons/messages.png" alt="Messages" class="navbutton"></a></li>
                <li><a href="notifications.php"><img src="img/buttons/requests.png" alt="Notifications" class="navbutton"></a></li>
                <li><a href="logout.php"><img src="img/buttons/logout.png" alt="Log-out" class="navbutton"></a></li>
            </ul>
    </nav>
    <?php endif ; ?>
</header> 
    <nav class="buttons">
        <a class="redbutton" href="profile.php?action=editprofile">Edit my profile</a>
        <a class="redbutton" href="profile.php?action=pictures">Upload/Delete my pictures</a>
        <a class="redbutton" href="profile.php?action=deleteprofile">Delete my profile</a>
    </nav>
    <div class="wrapper">
        <div  class="column left" style="background-color: #1675f2bb;">  
           
            <div class="parties">
                <h2 class="subtitle">My Parties</h2>
                <a class="redbutton" href="profile.php?action=createparty">Create a party</a>
                <?php foreach($parties as $p) :?>
                    <div class="party">
                        <img class="partyimg" src="<?= $p['avatar']?>" alt="party thumbnail">
                        <h4><a href="parties.php?partyid=<?=$p['id']?>"><?= $p['name'] ?></a></h4>
                        <p><?=$p['description']?></p>
                        <a href="profile.php?action=deleteparty&partyid=<?=$p['id']?>"><img class="navbutton" src="img/buttons/delete.png" alt="delete party"></a>
                        <a href="profile.php?action=editparty&partyid=<?=$p['id']?>"><img class="navbutton" src="img/buttons/edit.png" alt="edit party"></a>
                        <a href="profile.php?action=pictures&partyid=<?=$p['id']?>"><img class="navbutton" src="img/buttons/pictures.png" alt="edit pictures"></a>
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>  
        <div  class="column right">  
        <?php if(!isset($_GET['action']) && !isset($success)) : ?>
            <div class="selected">
                <img src="<?=$_SESSION['_user']['avatar']?>" alt="avatar image" class="rightdivavatar">
                <h4><?=$_SESSION['_user']['name']?></h4>
                <h5><?=$_SESSION['_user']['country'] . ", " . $_SESSION['_user']['city']?></h5>
                <p><?=$_SESSION['_user']['bio']?></p>
            </div>
        <?php elseif ($_GET['action'] === 'createparty' && !isset($success)):?>
            <h2 class="">Create a party</h2>
            <form action="profile.php?action=createparty&status=sent" method="post" class="editprofile" enctype="multipart/form-data">
                <div class="name">
                    <?php if (isset($errors['name'])) : ?>
                        <div class="alert"><?= $errors['name'] ?></div>
                    <?php endif; ?>
                    <label for="name">Party name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="description"> 
                    <?php if (isset($errors['description'])) : ?>
                        <div class="alert"><?= $errors['description'] ?></div>
                    <?php endif; ?>
                    <label for="description">Description:</label>
                    <textarea col="30" row="30" name="description" id="description""></textarea>
                </div> 
                <div class="date"> 
                    <?php if (isset($errors['date'])) : ?>
                        <div class="alert"><?= $errors['date'] ?></div>
                    <?php endif; ?>
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date">   
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
                    <select name="cities-selector" class="select-css" id="cities-selector"">
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
                    <button class="redbutton" type="submit">Create Party!</button>
                </div>
            </form>     
        <?php elseif ($_GET['action'] === 'editprofile'):?>
            <h2>Edit profile</h2>
            <form action="profile.php?action=editprofile&status=sent" method="post" class="editprofile"  enctype="multipart/form-data">
                <div class="name">
                    <?php if (isset($errors['name'])) : ?>
                        <div class="alert"><?= $errors['name'] ?></div>
                    <?php endif; ?>
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" value="<?=$_SESSION['_user']['name']?>">
                </div>
                <div class="bio"> 
                    <?php if (isset($errors['bio'])) : ?>
                        <div class="alert"><?= $errors['bio'] ?></div>
                    <?php endif; ?>
                    <label for="bio">Bio:</label>
                    <textarea col="30" row="30" name="bio" id="bio" value="<?=$_SESSION['_user']['bio']?>"><?= (isset($_SESSION['_user']['bio'])) ? trim($_SESSION['_user']['bio']) : 'Write a bio...' ?></textarea>
                </div> 
                <div class="country">
                    <?php if (isset($errors['country'])) : ?>
                    <div class="alert"><?= $errors['country'] ?></div>
                    <?php endif; ?>  
                    <label for="countries-selector">Select your country</label>
                    <select name="countries-selector" class="select-css" id="countries-selector" >
                        <option value="<?=$_SESSION['_user']['country']?>"><?=$_SESSION['_user']['country']?></option>
                    </select>
                </div>
                <div id="city">  
                    <?php if (isset($errors['city'])) : ?>
                        <div class="alert"><?= $errors['city'] ?></div>
                    <?php endif; ?>          
                    <label for="cities-selector">Select your city</label>
                    <select name="cities-selector" class="select-css" id="cities-selector" >
                        <option value="<?=$_SESSION['_user']['city']?>"><?=$_SESSION['_user']['city']?></option>
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
                <div class="password">
                <?php if (isset($errors['password'])) : ?>
                        <div class="alert"><?= $errors['password'] ?></div>
                    <?php endif; ?>    
                    <label for="password">Please enter password in order to confirm changes</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="">
                    <button class="redbutton" type="submit">Confirm changes</button>
                </div>
            </form>   
        <?php elseif ($_GET['action'] === 'editparty'):?> 
            <h2 class="">Edit party</h2>
            <form action="profile.php?action=editparty&partyid=<?=$party_id?>&status=sent" method="post" class="editprofile" enctype="multipart/form-data">
                <div class="name">
                    <?php if (isset($errors['name'])) : ?>
                        <div class="alert"><?= $errors['name'] ?></div>
                    <?php endif; ?>
                    <label for="name">Party name</label>
                    <input type="text" name="name" id="name" value="<?=$party['name']?>">
                </div>
                <div class="description"> 
                    <?php if (isset($errors['description'])) : ?>
                        <div class="alert"><?= $errors['description'] ?></div>
                    <?php endif; ?>
                    <label for="description">Description:</label>
                    <textarea col="30" row="30" name="description" id="description""><?= (isset($party['description'])) ? trim($party['description']) : 'Write a bio...' ?></textarea>
                </div> 
                <div class="date"> 
                    <?php if (isset($errors['date'])) : ?>
                        <div class="alert"><?= $errors['date'] ?></div>
                    <?php endif; ?>
                    <label for="date">Date:</label>
                    <input type="date" name="date" id="date" value="<?=$party['date']?>">   
                </div> 
                <div class="country">
                    <?php if (isset($errors['country'])) : ?>
                    <div class="alert"><?= $errors['country'] ?></div>
                    <?php endif; ?>  
                    <label for="countries-selector">Select your country</label>
                    <select name="countries-selector" class="select-css" id="countries-selector">
                        <option value="<?=$party['country']?>"><?=$party['country']?></option>
                    </select>
                </div>
                <div id="city">  
                    <?php if (isset($errors['city'])) : ?>
                        <div class="alert"><?= $errors['city'] ?></div>
                    <?php endif; ?>          
                    <label for="cities-selector">Select your city</label>
                    <select name="cities-selector" class="select-css" id="cities-selector"">
                        <option value="<?=$party['city']?>"><?=$party['city']?></option>
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
                <div class="password">
                    <?php if (isset($errors['password'])) : ?>
                        <div class="alert"><?= $errors['password'] ?></div>
                    <?php endif; ?>    
                    <label for="password">Please enter password in order to confirm changes</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="">
                    <button class="redbutton" type="submit">Confirm changes</button>
                </div>
            </form>
        <?php elseif ($_GET['action'] === 'pictures' or $_GET['action'] === 'deletepictures' or $_GET['action'] === 'uploadpictures'):?>
            <div id="pictures">
            <?php if(isset($_GET['partyid'])) :?>
                <h1><?=$party['name']?> Event Pictures</h1>
            <?php else : ?>
                <h1><?=$_SESSION['_user']['name']?>'s Pictures</h1>
            <?php endif; ?>
            <?php if (isset($pictures)) : ?>
                <?php foreach($pictures as $p) : ?>
                    <div class="picture">
                        <img src="<?=$p[2]?>" alt="" style="max-width:200px">
                        <a href="profile.php?action=deletepicture&&pictureid=<?=$p[0]?>"><img class="navbutton" src="img/buttons/delete.png" alt="delete picture"></a>
                        <a href="profile.php?action=setasavatar&&pictureid=<?=$p[0]?>"><img class="navbutton" src="img/buttons/profile.png" alt="set as avatar"></a>
                    </div>
                <?php endforeach ; ?>
            <?php endif; ?>    
            <form action="profile.php?action=uploadpictures" method="post" class="editprofile" enctype="multipart/form-data">
                <div id="avatar">  
                    <?php if (isset($errors['avatar'])) : ?>
                        <div class="alert"><?= $errors['avatar'] ?></div>
                    <?php endif; ?>          
                    <label for="pictures">Upload new images</label>
                    <input type="file" name="pictures" id="pictures" multiple>
                    <label for="avatar"><i>(allowed: jpg,jpeg,gif,png)</i></label>
                </div>
                <div class="">
                    <button class="redbutton" type="submit">Confirm changes</button>
                </div>
            </form>
            </div>    
        <?php elseif ($_GET['action'] === 'deleteprofile' && !isset($success)):?> 
            <h2 class="">Are you sure you want to delete your Profile?</h2>
            <form action="profile.php?action=deleteprofile&profileid=<?=$_SESSION['_user']['id']?>&status=sent" method="post" class="editprofile">
                <div class="name">
                <label for="reason">Tell us why you are deleting your profile:</label>
                    <textarea name="reason" id="reason" cols="30" rows="10">Don't go, we need you...</textarea>
                </div>
                <div class="password">
                    <?php if (isset($errors['password'])) : ?>
                        <div class="alert"><?= $errors['password'] ?></div>
                    <?php endif; ?>    
                    <label for="password">Please enter password in order to confirm deletion</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="">
                    <button class="redbutton" type="submit">Delete profile!</button>
                </div>
            </form> 
        <?php elseif ($_GET['action'] === 'deleteparty' && !isset($success)):?>
            <h2 class="">Are you sure you want to delete the event: <?=$party['name']?>?</h2>
            <form action="profile.php?action=deleteparty&status=sent&partyid=<?=$party['id']?>&status=sent" method="post" class="editprofile">
                <label for="password">Please enter your password to confirm the deletion of the event</label>
                <input type="password" name="password" id="password">
                <div class="">
                    <button class="redbutton" type="submit">Delete party!</button>
                </div>
            </form>
        <?php endif; ?>
        <?php if(isset($success)) : ?>
            <h2 style="font-weight:bolder;"><?=$success?></h2>
        <?php endif;?>
        </div>
    </div>  


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
