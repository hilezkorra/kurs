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


$errors=[];   
$user_id = $_SESSION['_user']['id'] ?? "";
$action=$_GET['action'] ?? '';
$type=$_GET['invite'] ?? '';
$sender=$_GET['senderid'] ?? '';
$reciever=$_GET['recieverid'] ?? '';


if(isset($action) and $action === 'accepted' and $_GET['recieverid'] === $user_id){
    $r_id=$_GET['notificationid'] ?? '';
    $party_id=$_GET['partyid'] ?? '';

    $res = mysqli_query($db,"SELECT * FROM `requests` WHERE `id` = '$r_id'");
    $request= mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);

    if(!isset($request[0]) or $request[0]['party_id'] !== $party_id or $request[0]['reciever_id'] !== $_SESSION['_user']['id']){
        $errors['validation'] = "Something went wrong";
    }
    if(!$errors){
        $sql = "UPDATE `requests` SET `status` = 'accepted' WHERE `id` = '$r_id'";
        mysqli_query($db,$sql);
        ($type === 'request') ? $id=$sender : $id=$reciever;
        $sql = "INSERT INTO `participants` (`party_id`, `user_id`)"
        . " VALUES ('$party_id', '$id')";
        mysqli_query($db, $sql);
        // Error Handling
        if (mysqli_errno($db)) {
        echo "<div>Da ist wohl etwas schief gelaufen: "
        . mysqli_error($db) // Nur zur Demonstration im Kurs
        . "</div>";
        }

    }
}elseif(isset($action) and $action === 'declined' and $_GET['recieverid'] === $user_id){
    $r_id=$_GET['notificationid'] ?? '';
    $party_id=$_GET['partyid'] ?? '';

    $res = mysqli_query($db,"SELECT * FROM `requests` WHERE `id` = '$r_id'");
    $request= mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_free_result($res);

    if($request[0]['party_id'] !== $party_id or $request[0]['reciever_id'] !== $_SESSION['_user']['id']){
        $errors['validation'] = "Something went wrong";
    }
    if(!$errors){
        $sql = "UPDATE `requests` SET `status` = 'declined' WHERE `id` = '$r_id'";
        mysqli_query($db,$sql);
        // Error Handling
        if (mysqli_errno($db)) {
        echo "<div>Da ist wohl etwas schief gelaufen: "
        . mysqli_error($db) // Nur zur Demonstration im Kurs
        . "</div>";
        }

    }
}

$result = mysqli_query($db, "SELECT * FROM `requests` WHERE `reciever_id` = $user_id OR `sender_id` = '$user_id' ORDER BY `sent_at` DESC");
$requests = mysqli_fetch_all($result, MYSQLI_ASSOC);


//IF FILTER IS CHOSEN

if(isset($_GET['show']) && $_GET['show']==='invites' && !isset($_GET['invitesfrom'])){
    $result = mysqli_query($db, "SELECT * FROM `requests` WHERE `type` = 'invite' AND `reciever_id` = $user_id OR `type` = 'invite' AND `sender_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
}elseif(isset($_GET['invitesfrom']) and $_GET['invitesfrom'] === 'others' and $_GET['show'] !=='requests'){
    $result = mysqli_query($db, "SELECT * FROM `requests` WHERE `type` = 'invite' AND `reciever_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);

}elseif(isset($_GET['invitesfrom']) and $_GET['invitesfrom'] === 'me' and $_GET['show']!=='requests'){
    $result = mysqli_query($db, "SELECT * FROM `requests` WHERE `type` = 'invite' AND `sender_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);

}elseif(isset($_GET['show']) && $_GET['show']==='requests' && !isset($_GET['whoseparty'])){
    $result = mysqli_query($db,"SELECT * FROM `requests` WHERE `type` = 'request' AND `sender_id` = '$user_id' OR `type` = 'request' AND `reciever_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
}elseif(isset($_GET['whoseparty']) && $_GET['whoseparty'] === 'mine'){
    $result = mysqli_query($db,"SELECT * FROM `requests` WHERE `type` = 'request' AND `reciever_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
}elseif(isset($_GET['whoseparty']) && $_GET['whoseparty'] === 'others'){
    $result = mysqli_query($db,"SELECT * FROM `requests` WHERE `type` = 'request' AND `sender_id` = '$user_id' ORDER BY `sent_at` DESC");
    $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

foreach($requests as $r){
    if($r['sender_id'] === $_SESSION['_user']['id']) {   
        $p2_id = $r['reciever_id']; 
        $result = mysqli_query($db,"SELECT `name`, `avatar` FROM `users` WHERE `id` = '$p2_id'");
        $userdata[$p2_id] = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }elseif($r['reciever_id'] === $_SESSION['_user']['id']) {
        $p2_id = $r['sender_id']; 
        $result = mysqli_query($db,"SELECT `name`, `avatar` FROM `users` WHERE `id` = '$p2_id'");
        $userdata[$p2_id] = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    $party_id= $r['party_id'];
    $res = mysqli_query($db,"SELECT `name`, `avatar`, `date` FROM `parties` WHERE `id` = '$party_id'");
    $partydata[$party_id]= mysqli_fetch_all($res, MYSQLI_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linker - Notifications</title>
    <link rel="stylesheet" href="lib/css/nav.css">
    <link rel="stylesheet" href="lib/css/main.css">
    <link rel="stylesheet" href="lib/css/notifications.css">
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
                <li><a href="parties.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/parties.png" alt="Parties near me" class="navbutton"></a></li>
                <li><a href="users.php?city=<?=$_SESSION['_user']['city']?>"><img src="img/buttons/users.png" alt="People near me" class="navbutton"></a></li>
                <li><a href="messages.php"><img src="img/buttons/messages.png" alt="Messages" class="navbutton"></a></li>
                <li><a href="notifications.php"><img src="img/buttons/requests_sel.png" alt="Notifications" class="navbutton active"></a></li>
                <li><a href="logout.php"><img src="img/buttons/logout.png" alt="Log-out" class="navbutton"></a></li>
            </ul>
    </nav>
    <?php endif ; ?>
</header>
    <div class="wrapper">
        <div  class="column left" style="background-color: #1675f2bb;">  
            <ul class="filter">
                <li><a href="notifications.php?show=requests">Requests</a></li>   
                <li><a href="notifications.php?show=invites">Invites</a></li>
            </ul>    
            <?php if(isset($_GET['show']) and $_GET['show'] === 'requests') : ?>
                <ul class="filter">
                    <li><a href="notifications.php?show=requests&whoseparty=others">My requests to join other peoples parties</a></li>
                    <li><a href="notifications.php?show=requests&whoseparty=mine">Requests to join my Parties</a></li>
                </ul>               
            <?php elseif(isset($_GET['show']) and $_GET['show'] === 'invites') : ?>
                <ul class="filter">
                    <li><a href="notifications.php?show=invites&invitesfrom=others">Invites to other peoples parties</a></li>
                    <li><a href="notifications.php?show=invites&invitesfrom=me">Invites to my parties</a></li>
                </ul>
            <?php endif; ?>
            <div class="parties notifications">
               <h2 class="subtitle">Invites</h2>
            
                <?php foreach($requests as $r) : ?>
                    
                    <?php $partyid = $r['party_id']; ?>
                    <?php if($r['reciever_id'] === $_SESSION['_user']['id']){ $p2 = $r['sender_id']; }else{ $p2 = $r['reciever_id'];} ?>
                    <div class="notification">
                        <a href="parties.php?partyid=<?=$partyid?>">
                            <img class="navavatar" src="<?= $partydata[$partyid][0]['avatar']?>" class="avatar" alt="">
                        </a>
                        <?php if($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'pending' and $r['type'] === 'invite') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has invited you to the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?> . Do you accept the invite?
                            </p>
                                <a class="redbutton" href="notifications.php?action=accepted&type=invite&partyid=<?=$partyid?>&notificationid=<?=$r['id']?>&senderid=<?=$p2?>&recieverid=<?=$_SESSION['_user']['id']?>">Accept</a>
                                <a class="redbutton" href="notifications.php?action=declined&type=invite&partyid=<?=$partyid?>&notificationid=<?=$r['id']?>&senderid=<?=$p2?>&recieverid=<?=$_SESSION['_user']['id']?>">Decline</a>
                        <?php elseif($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'accepted' and $r['type'] === 'invite') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            You have <b>accepted</b> the <b>invitation</b> from <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> to join the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?>.
                            </p>  
                        <?php elseif($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'declined' and $r['type'] === 'invite') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            You have <b>declined</b> the invite from <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> for the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?>.
                            </p>       
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'accepted' and $r['type'] === 'invite') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="accepted">
                                <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has 
                                <b>accepted</b> your <b>invitation</b> to <a href="parties.php?partyid<?=$partyid?>">the 
                                <?=$partydata[$partyid][0]['name']?></a> on the 
                                <?=$partydata[$partyid][0]['date']?>.
                            </p>
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'declined' and $r['type'] === 'invite') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="declined">
                                <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has <b>declined</b> your <b>invitation</b> to 
                                <a href="parties.php?partyid<?=$partyid?>">the <?=$partydata[$partyid][0]['name']?>
                                </a> on the <?=$partydata[$partyid][0]['date']?>.
                            </p>
                            <a class="redbutton" href="users.php?userid=<?=$p2?>">Invite again</a>
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'pending' and $r['type'] === 'invite') : ?>
                        
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="pending">
                                You have <b>invited</b> <a href="users.php?userid=<?=$userdata[$p2][0]['id']?>"><?=$userdata[$p2][0]['name']?></a> to 
                                <a href="parties.php?partyid<?=$partyid?>">the <?=$partydata[$partyid][0]['name']?>
                                </a> on the <?=$partydata[$partyid][0]['date']?>.
                            </p>
                        <?php elseif($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'accepted' and $r['type'] === 'request') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            You have <b>accepted</b> the <b>request</b> from <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> to join the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?>.
                            </p>  
                        <?php elseif($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'pending' and $r['type'] === 'request') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has <b>requested</b> to join the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?> . Do you accept the request?
                            </p>
                                <a class="redbutton" href="notifications.php?action=accepted&type=request&partyid=<?=$partyid?>&notificationid=<?=$r['id']?>&senderid=<?=$p2?>&recieverid=<?=$_SESSION['_user']['id']?>">Accept</a>
                                <a class="redbutton" href="notifications.php?action=declined&type=request&partyid=<?=$partyid?>&notificationid=<?=$r['id']?>&senderid=<?=$p2?>&recieverid=<?=$_SESSION['_user']['id']?>">Decline</a>
                        <?php elseif($r['reciever_id'] === $_SESSION['_user']['id'] and $r['status'] === 'declined' and $r['type'] === 'request') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="invite">
                            You have <b>declined</b> the <b>request</b> from <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> to join the <a href="parties.php?partyid=<?=$partyid?>"><?=$partydata[$partyid][0]['name']?></a>
                                event on <?= $partydata[$partyid][0]['date'] ?>.
                            </p>       
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'accepted' and $r['type'] === 'request') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="accepted">
                                <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has 
                                <b>accepted</b> your request to join <a href="parties.php?partyid<?=$partyid?>">the 
                                <?=$partydata[$partyid][0]['name']?></a> on the 
                                <?=$partydata[$partyid][0]['date']?>.
                            </p>
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'declined' and $r['type'] === 'request') : ?>
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="declined">
                                <a href="users.php?userid=<?=$p2?>"><?=$userdata[$p2][0]['name']?></a> has <b>declined</b> your <b>request</b> to join
                                <a href="parties.php?partyid<?=$partyid?>">the <?=$partydata[$partyid][0]['name']?>
                                </a> on the <?=$partydata[$partyid][0]['date']?>.
                            </p>
                            <a class="redbutton" href="users.php?userid=<?=$p2?>">Request again</a>
                        <?php elseif($r['sender_id'] === $_SESSION['_user']['id'] and $r['status'] === 'pending' and $r['type'] === 'request') : ?>
                        
                            <a href="users.php?userid=<?=$p2?>">
                                <img class="navavatar" src="<?=$userdata[$p2][0]['avatar']?>" alt="Avatar img">
                            </a>
                            <p class="pending">
                                You have <b>requested</b> <a href="users.php?userid=<?=$userdata[$p2][0]['id']?>"><?=$userdata[$p2][0]['name']?></a> to let you join
                                <a href="parties.php?partyid<?=$partyid?>">the <?=$partydata[$partyid][0]['name']?>
                                </a> event on the <?=$partydata[$partyid][0]['date']?>.
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            
        </div>  
        <div  class="column right">  
            <div class="selected">
                <img src="<?=$_SESSION['_user']['avatar']?>" alt="avatar image" class="rightdivavatar">
                <h4><?=$_SESSION['_user']['name']?></h4>
                <h5><?=$_SESSION['_user']['country'] . ", " . $_SESSION['_user']['city']?></h5>
                <p><?=$_SESSION['_user']['bio']?></p>
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