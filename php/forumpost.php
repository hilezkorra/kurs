<?php declare(strict_types=1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// CRUD
// C reate
// R ead
// U update
// D elete
// Datenbankverbindung herstellen
$db = mysqli_connect('localhost', 'root', '', 'forum', 3306);
// TODO: Error Handling
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = trim($_POST['content'] ?? '');
    $title = trim($_POST['title'] ?? '');
    if ($content === '') {
        $errors['content'] = 'Cowardly refusing to create an empty todo.';
    }
    if (!$errors) {
        // CREATE //////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // user_id ist hier noch 'gefaket', also 'hardgecodet'
        $sql =  "INSERT INTO `posts` (`content`, `title`, `user_id`, `board_id`) ";
        $sql .= "VALUES ('$content', '$title', 1, 1)";
        $success = mysqli_query($db, $sql);
        // Error handling
    }
}

// READ ////////////////////////////////////////////////
////////////////////////////////////////////////////////
// Anfrage an die DB senden
$result = mysqli_query($db, 'SELECT * FROM `posts`');
// TODO: Error Handling
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
      a{
          text-decoration:none;
          color:black;
      }
      a:hover{
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
      .createdby{
          text-align:right;
          display:block;
          width:90%;
          padding-right:10%;
          padding-bottom:0;
          margin-bottom:0;
      }
      ul{
          padding:0;
          margin-left:0;
      }
      h1{
          display:block;
          width:100%;
          text-align:center;
          background:silver;
          border-radius:20px 20px 20px 20px;
          border:solid 2px darkgrey;
      }
    </style>
</head>
<body>
    <h1>Mammary Glands Appreciation Forum</h1>
    <h2>Post list:</h2>
    <div class="posts">
        <ul> 
        <?php foreach($posts as $post) :?>
        
            <li>
                <h3><a href=""><?= $post['title'] ?></a></h3>
                <p><?= $post['content'] ?></p>
                <p class="createdby"> <?= $post['created'] ?> -Bobby </p>
            </li>
        <?php endforeach; ?>   
        </ul>
    </div>

    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="content">Write a post</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
