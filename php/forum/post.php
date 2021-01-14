<?php declare(strict_types=1);

session_start();

if (!isset($_SESSION['_user'])) {
    header('Location: index.php');
    exit();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// CRUD
// C reate
// R ead
// U update
// D elete
// Datenbankverbindung herstellen
$db = mysqli_connect('localhost', 'root', '', 'forum', 3306);

// Error Handling der Connection
if (mysqli_connect_errno()) {
    echo '<div>Es ist ein Fehler aufgetreten: '
        . mysqli_connect_error()
        . '</div>';
}

$action = $_POST['action'] ?? '';

// forum: Error Handling
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($action === 'create'){
    $content = trim($_POST['content'] ?? '');
    $title = trim($_POST['title'] ?? '');
    
    if ($content === '') {
        $errors['content'] = 'Cowardly refusing to create an empty post.';
    }
    if (!$errors) {
        // CREATE //////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // user_id ist hier noch 'gefaket', also 'hardgecodet'

        $auth_id = $_SESSION['_user']['id'];

    
        $sql =  "INSERT INTO `posts` (`content`, `title`, `user_id`, `board_id`) ";
        $sql .= "VALUES ('$content', '$title', $auth_id, 1)";
        $success = mysqli_query($db, $sql);
        // Error handling
    }}

    //Edit $ Delete


    //Delete
    if ($action === 'delete') {
        // DELETE ////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        $id = (int) ($_POST['post_id'] ?? 0);

        $result = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = $id");

        // Error Handling
        if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
                . mysqli_error($db) // Nur zur Demonstration im Kurs
                . "</div>";
        }

        $post = mysqli_fetch_assoc($result);

        if ($post['user_id'] === $_SESSION['_user']['id']) {

            $sql = "DELETE FROM `posts` WHERE `id` = $id";

            $success = mysqli_query($db, $sql);

            // Error Handling
            if (!$success || mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                . mysqli_error($db) // Nur zur Demonstration im Kurs
                . "</div>";
            }
        
        } else {
            http_response_code(403);
        }
    }
        //Edit
    if ($action === 'update') {
        $title = $_POST['title'] ?? '';
        $id = (int) ($_POST['id'] ?? 0);

        if ($title === '') {
            $errors['title'] = 'Cowardly refusing to create an empty todo.';
        }
    
        if ($errors) {
            $action = 'edit';
        }
     
        if (!$errors) {

            $result = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = $id");

            // Error Handling
            if (mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                    . mysqli_error($db) // Nur zur Demonstration im Kurs
                    . "</div>";
            }

            $post = mysqli_fetch_assoc($result);

            if ($post['user_id'] === $_SESSION['_user']['id']) {

                // UPDATE ////////////////////////////////////////////////
                ////////////////////////////////////////////////////////
                $title = mysqli_escape_string($db, $title);
                $sql = "UPDATE `posts` SET `title` = '$title' WHERE `id` = $id";

                mysqli_query($db, $sql);

                // Error Handling
                if (mysqli_errno($db)) {
                    echo "<div>Da ist wohl etwas schief gelaufen: "
                        . mysqli_error($db) // Nur zur Demonstration im Kurs
                        . "</div>";
                }

            } else {
                http_response_code(403);
            }
        }
    }
    if ($action === 'update') {
        $content = $_POST['content'] ?? '';
        $id = (int) ($_POST['id'] ?? 0);

        if ($content === '') {
            $errors['content'] = 'Cowardly refusing to create an empty posts.';
        }
    
        if ($errors) {
            $action = 'edit';
        }
     
        if (!$errors) {

            $result = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = $id");

            // Error Handling
            if (mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                    . mysqli_error($db) // Nur zur Demonstration im Kurs
                    . "</div>";
            }

            $post = mysqli_fetch_assoc($result);

            if ($post['user_id'] === $_SESSION['_user']['id']) {

                // UPDATE ////////////////////////////////////////////////
                ////////////////////////////////////////////////////////
                $content = mysqli_escape_string($db, $content);
                $sql = "UPDATE `posts` SET `content` = '$content' WHERE `id` = $id";

                mysqli_query($db, $sql);

                // Error Handling
                if (mysqli_errno($db)) {
                    echo "<div>Da ist wohl etwas schief gelaufen: "
                        . mysqli_error($db) // Nur zur Demonstration im Kurs
                        . "</div>";
                }

            } else {
                http_response_code(403);
            }
        }
    }
}

// READ ////////////////////////////////////////////////
////////////////////////////////////////////////////////
// Anfrage an die DB senden
$result = mysqli_query($db, 'SELECT P.*, U.`username` as author, U.`avatar` as author_avatar FROM `posts` P
JOIN `users` U ON P.`user_id` = U.`id`');
// Posts: Error Handling
// Datensätze aus dem "Result" herausziehen
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mammary Glands Appreciation Forum</title>
    <style>
      label{
        display:inline-block;
        width:100px;
      }
      form input{
          width:80%;
          font-size:30px;
          height:36px;
      }
      textarea{
          width:80%;
      }
      form{
          width:100%;
          text-align:center;
      }
      li p{
          width:100%;
          text-align:left;
      }
      li a{
          text-decoration:none;
          color:black;
          display:block;
          width:100%;
      }
      li a:hover{
        color:white;
        transition:0.7s color ease-in-out;    
      }
      h3{
          background:white;
      }
      h3:hover{
          background:black;
          transition:1s background ease-in-out;
      }
      ul li{
          list-style:none;
          border:2px solid black;
          padding:10px;
      }
      .posts{
          width:100%;
          text-align:center;
      }
      ul{
          padding:0;
          margin-left:0;
      }
      body{
            padding-top:125px;
        }
        label{
            display:inline-block;
            width:200px;
        }
        input{ margin:10px;}
        .alert{color: red;}
        header{
          position:absolute;
          text-align:center;
          background:pink;
          border-bottom:4px solid grey;
          top:0;
          left:0;
          height:120px;
          width:100%;
          font-size:160%;
          overflow:hidden;
        }
        nav img{
            width:50px;
            }
        .author img{
            width:50px;
            padding:5px;
        }
        .author p{
            padding:0;
            margin:0;
            display:block;
            text-align:center;
        }
        .author {
            width:100px;
            min-height:80px;
            background:pink;
            border-radius:5px;
            border:2px solid grey;
            text-align:center;
        }
        .title:after{
            clear:both;
            display:table;
            content:"";
        }
        .posts-actions button{
            display:block;
            margin:5px auto;
            width:100px;
        }
    </style>
</head>
<body>
<header>
    <h1>Mammary Glands Appreciation Forum</h1>
    <nav>
        <?php if ($_SESSION['_user']) : ?>
            <a href="logout.php">Logout</a> |
            <a href="profile.php">Profil</a>
        <?php endif; ?>
        | <?= htmlspecialchars($_SESSION['_user']['username']); ?>
    </nav>
</header>    
    <h2>Post list:</h2>
    <div class="posts">
        <ul> 
        <?php foreach($posts as $post) :?>
        
            <li>
            <div class="author">
                <img src="<?= $post['author_avatar']?>">
                <p class="createdby"> <?= $post['author'] ?></p>
            </div>
                <h3 class="title"><a href=""><?= htmlspecialchars($post['title']) ?></a></h3>
                <p><?= htmlspecialchars($post['content']) ?></p>
            <?php if ($post['user_id'] ==  $_SESSION['_user']['id']) :  ?>
                <?php if ($action === 'edit' && $_POST['post_id'] == $post['id']) : ?>
                    <form class="posts-actions" action="" method="POST">
                        <input type="hidden" name="id" value="<?= $post['id'] ?>">
                        <button type="submit" name="action" value="update">Save</button>
                        <button type="submit" name="action" value="cancel">Cancel</button>
                        <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" id="title">
                        <textarea cols="30" rows="10" name="content" placeholder="" id="content">
                        </textarea>
                    </form>
                    
                <?php else : ?>
                <form action="" method="POST"> 
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <button type="submit" name="action" value="delete">Delete</button>
                    <button type="submit" name="action" value="edit">Edit</button>
                </form>
                <?php endif; ?>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>   
        </ul>
    </div>

    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="content">Write a post</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <button type="submit" name="action" value="create">Submit</button>
    </form>
</body>
</html>
