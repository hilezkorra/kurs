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
$city = $_SESSION['_user']['city'];

$errors=[];    
if(isset($_GET['request-party-id'])){
    $party_id=$_GET['request-party-id'] ?? '';
    $host_id=$_GET['request-host-id'] ?? '';
    $user_id=$_SESSION['_user']['id'];
    $sql = "SELECT * FROM `requests` WHERE `party_id` = '$party_id' AND `type` = 'request' AND `sender_id` = '$user_id' AND `reciever_id` = '$host_id'";
    $result = mysqli_query($db, $sql);
    $check = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if((isset($check[0]) && $check[0]['status'] === 'denied') or (!isset($check[0]))){
        $sql = "INSERT INTO `requests` (`party_id`, `reciever_id`, `sender_id`, `type`) VALUES ('$party_id', '$host_id', '$user_id', 'request')";
        mysqli_query($db, $sql);
        $success="Request sent successfully!";
    }else{
        $success = "You have already sent a request to join this party on the" . $check[0]['date'] . " and you can't send another one until that one is refused.";
    }
}

if(isset($_GET['show']) && $_GET['show']==='participants' && isset($_GET['partyid'])){
    $partyid = $_GET['partyid'] ?? '' ;
    $res = mysqli_query($db, "SELECT * FROM `participants` WHERE `party_id` = $partyid");
    $participants = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $sql = "SELECT `avatar`, `id`, `name` FROM `users` WHERE";
    foreach($participants as $p){
        $sql .= " `id` = '" . $p['user_id'] . "' OR";
    }
    $sql = substr($sql, 0, strlen($sql) - 2);
    $res = mysqli_query($db, $sql);
    $participant_data = mysqli_fetch_all($res, MYSQLI_ASSOC);

}
// Anfrage an die DB senden
$result = mysqli_query($db, "SELECT P.*, U.`name` as host FROM `parties` P
JOIN `users` U ON P.`user_id` = U.`id` WHERE P.`city` = '$city'");

if(isset($_GET['show']) && $_GET['show']==='all'){
    $result = mysqli_query($db, "SELECT P.*, U.`name` as host FROM `parties` P
    JOIN `users` U ON P.`user_id` = U.`id`");
}else if(isset($_GET['show']) && $_GET['show']==='near'){
    $country = $_SESSION['_user']['country'];
    $result = mysqli_query($db, "SELECT P.*, U.`name` as host FROM `parties` P
    JOIN `users` U ON P.`user_id` = U.`id` WHERE P.`country` = '$country'");
}
// Posts: Error Handling
// Datensätze aus dem "Result" herausziehen
$parties = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_GET['partyid']) && !isset($_GET['show'])){
    $partyid = $_GET['partyid'];
    $res = mysqli_query($db, "SELECT * FROM `parties` WHERE `id` = $partyid");
// Posts: Error Handling
// Datensätze aus dem "Result" herausziehen
    $partoy = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $res = mysqli_query($db, "SELECT * FROM `participants` WHERE `party_id` = $partyid");
    // Posts: Error Handling
    // Datensätze aus dem "Result" herausziehen
    $participants = mysqli_fetch_all($res, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linker - Parties</title>
    <link rel="stylesheet" href="lib/css/nav.css">
    <link rel="stylesheet" href="lib/css/main.css">
       <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <a href="profile.php"><img src="<?=$_SESSION['_user']['avatar'] ?>" alt="Your avatar" class="navavatar"></a>
    <nav>
            <ul id="mainnav">
                <li><a href="parties.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/parties_sel.png" alt="Parties near me" class="navbutton active"></a></li>
                <li><a href="users.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/users.png" alt="People near me" class="navbutton"></a></li>
                <li><a href="messages.php"><img src="img/buttons/messages.png" alt="Messages" class="navbutton"></a></li>
                <li><a href="notifications.php"><img src="img/buttons/requests.png" alt="Notifications" class="navbutton"></a></li>
                <li><a href="logout.php"><img src="img/buttons/logout.png" alt="Log-out" class="navbutton"></a></li>
            </ul>
    </nav>
    <?php endif ; ?>
</header>
    <div class="wrapper">
        <div  class="column left">  
            <a href="profile.php?action=createparty" id="createbutton">Create a party</a>  
            <ul class="filter">
                <li><a href="parties.php?show=all">Show all parties</a></li>
                <li><a href="parties.php?show=near">Show parties near me</a></li>
            </ul>
            
                <?php foreach($parties as $party) :?>
                <div class="overview">
                    <a href="?&partyid=<?=$party['id'] ?>">
                        <img src="<?=$party['avatar']?>" alt="party picture">
                        <p class="title"><?=(mb_strlen($party['name']) < 20) ? $party['name'] : mb_substr($party['name'], 0, 17) . "..."?></p>
                        <p class="location"><?=$party['country'] . ", " . $party['city']?></p>
                        <p class="bio"><?=(mb_strlen($party['description'])<55) ? htmlspecialchars($party['description']) : mb_substr($party['description'],0,52) . "..." ?></p>
                    </a>
                    <p class="host">Hosted by: <a href="users.php?user=<?=$party['user_id']?>"><?=$party['host']?></a></p>
                </div>
                <?php endforeach ; ?>
            
            
        </div>  
        <div  class="column right">  
            <?php if(!isset($_GET['partyid']) and !isset($_GET['show'])) : ?>
            <div class="selected">
                <img src="<?=$_SESSION['_user']['avatar']?>" alt="avatar image" class="rightdivavatar">
                <h4><?=$_SESSION['_user']['name']?></h4>
                <h5><?=$_SESSION['_user']['country'] . ", " . $_SESSION['_user']['city']?></h5>
                <p><?=$_SESSION['_user']['bio']?></p>
            </div>
            <?php elseif(!isset($_GET['show'])) :?>
                <div class="selected">
                    <img src="<?=$partoy[0]['avatar']?>" alt="avatar image" class="rightdivavatar">
                    <h2><?=$partoy[0]['name']?></h2>
                    <h4 class="loc"><?=$partoy[0]['country'] . ", " . $partoy[0]['city']?></h4>
                    <p class="date">Party date:<?=$partoy[0]['date']?></p>
                    <p>Participants: <?=count($participants)?></p>
                    <p class="bio"><?=$partoy[0]['description']?></p>
                    <?php if($partoy[0]['user_id'] !== $_SESSION['_user']['id']) : ?>
                        <a class="redbutton" href="messages.php?user=<?=$partoy[0]['user_id']?>">Message</a>
                        <?php if(!isset($_GET['request-party-id'])) : ?>
                            <a class="redbutton" href="parties.php?partyid=<?=$partoy[0]['id']?>&request-party-id=<?=$partoy[0]['id']?>&request-host-id=<?=$partoy[0]['user_id']?>">Request</a>
                        <?php endif;?>
                    <?php elseif ($partoy[0]['user_id'] === $_SESSION['_user']['id']) : ?>
                        <a class="redbutton" href="profile.php?action=editparty&partyid=<?=$partoy[0]['id']?>">Edit party</a>
                    <?php endif; ?>
                    <a class="redbutton" href="parties.php?partyid=<?=$partoy[0]['id']?>&show=participants">Show participants</a>
            <?php endif ;?>
                <?php if(isset($_GET['show']) and $_GET['show']==='participants') : ?>
                    <h2>Participant list:</h2>
                    <ol class="participants">
                    <?php foreach($participant_data as $u) : ?>
                        <li><a href="users.php?&userid=<?=$u['id']?>"><img src="<?=$u['avatar']?>" alt="<?=$u['name']?>'s avatar"><?=$u['name']?></a></li>
                    <?php endforeach; ?>
                    </ol>
                <?php endif; ?>
                <?php if(isset($success)) : ?>
                    <h2 style="font-weight:bolder;"><?=$success?></h2>
                <?php endif; ?>
            </div>
            
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
