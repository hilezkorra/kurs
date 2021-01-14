<?php declare(strict_types=1);

session_start();

if (!isset($_SESSION['_user'])) {
    header('Location: index.php');
    exit();
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = mysqli_connect('localhost', 'root', '', 'anon-chat', 3306);

// Error Handling der Connection
if (mysqli_connect_errno()) {
    echo '<div>Es ist ein Fehler aufgetreten: '
        . mysqli_connect_error()
        . '</div>';
}
    $result = mysqli_query($db, "SELECT * FROM `categories` WHERE `id` > 0");
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);


$errors=[];    

$action = $_POST['action'] ?? '';    
$cat = $_GET['cat'] ?? '';
$message = $_GET['message'] ?? '';
$topost = $_GET['topost'] ?? '';
$admin= $_SESSION['_user']['admin'];
if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($cat) and ($cat>0)) {
$parent_id=$_POST['parent']+1  ?? '';
} 



if($cat>0){
    $result = mysqli_query($db, "SELECT P.*, U.`name` as author FROM `posts` P
    JOIN `users` U ON P.`user_id` = U.`id` WHERE `cat_id` = $cat");
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $parent=[];
}
////////////////NEW POST/////////////////////
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //////////Chatroom/////////////////
    if($action === 'createchatroom'){
        $content = trim($_POST['content'] ?? '');
        $name = trim($_POST['title'] ?? '');
        if ($content === '') {
            $errors['content'] = 'Cowardly refusing to create an empty post.';
        }
        if (!$errors) {
            // CREATE //////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            // user_id ist hier noch 'gefaket', also 'hardgecodet'

            $auth_id = $_SESSION['_user']['id'];

        
            $sql =  "INSERT INTO `posts` (`content`, `name`, `user_id`, `cat_id`, `parent_id` ) ";
            $sql .= "VALUES ('$content', '$name', $auth_id, $cat, $parent_id)";
            $success = mysqli_query($db, $sql);
            // Error handling
        }
    }
    ////////////Category/////////////////
    if($action === 'createcategory'){
        $description = trim($_POST['content'] ?? '');
        $name = trim($_POST['title'] ?? '');
        if ($content === '') {
            $errors['content'] = 'Cowardly refusing to create an empty post.';
        }
        if (!$errors) {
            // CREATE //////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            // user_id ist hier noch 'gefaket', also 'hardgecodet'

            $auth_id = $_SESSION['_user']['id'];

        
            $sql =  "INSERT INTO `categories` (`description`, `name`) ";
            $sql .= "VALUES ('$description', '$name')";
            $success = mysqli_query($db, $sql);
            // Error handling
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Anonymous Chatrooms</title>
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
      h3{
          background:white;
      }
      h3:hover{
          background:black;
          transition:1s background ease-in-out;
      }
      ul li{
          list-style:none;
          border:2px solid silver;
          padding:10px;
      }
      .categories{
          width:100%;
          text-align:center;
      }
      ul{
          padding:0;
          margin-left:0;
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
        .title:after{
            clear:both;
            display:table;
            content:"";
        }
        nav{
            z-index:1;
            position:fixed;
            right:3px;
            top:3px;
            background:grey;
            border-radius:5px;
            border:2px solid silver;
            padding: 10px;
            height:100px;
        }
        nav a{
            font-size:20px;
        }
        body{
            padding-top:150px;
            background:black;
            color:white;
        }
        input{ margin:10px;}
        .alert{color: red;}
        header{
          position:absolute;
          text-align:center;
          background:silver;
          border-bottom:4px solid grey;
        }
        header a{
            color:white;
        }
        body a{
            color:white;
        }
        header img{
            width:110px;
            margin-top:4px;
            margin-left:4px;
            position:absolute;
            left:0;
            top:0;
        }
        form textarea{
            background:silver;
            border:solid 2px grey;
        }
        form input{
            background:silver;
            border:solid 2px grey;
        }
    </style>
</head>
<body>
<header>
<img src="img/anonymous.png" alt="anonymous hacker organization logo">
    <?php if(!($cat>0 or $message>0 or $topost>0)) : ?>
    <h1>Chat Categories</h1>
    <?php elseif($cat>0) : ?>
    <h1>Chatrooms</h1>
    <?php elseif($message>0) : ?>
    <h1>Messages</h1>
    <?php elseif($topost>0) : ?>
    <h1>Chat</h1>
    <?php endif; ?>
    <nav>
        
        <?php if ($_SESSION['_user']) : ?>
            <a href="logout.php">Logout</a> |
            <a href="profile.php">Messages</a> |
            <a href="users.php">Userlist</a>
            <h4><?= htmlspecialchars($_SESSION['_user']['name']); ?></h4>
        <?php endif; ?> 
    </nav>
</header>
<?php if(!($cat>0 or $message>0 or $topost>0)) : ?>
    <h2>Category list:</h2>
<?php elseif($cat>0) : ?>
    <h2>Post list:</h2>
<?php elseif($message>0) : ?>
    <h2>Message:</h2>
<?php elseif($topost>0) : ?>
<?php endif; ?>
    <div class="categories">
        <ul>
            <?php foreach($categories as $categorie) :?> 
                <?php if($cat>0 or $message>0 or $topost>0) : ?>
                <?php else :?>
                    <li>
                        
                            <div class="catlist">
                                <a href="?cat=<?=$categorie['id']?>" name='cat' id='<?=$categorie['id']?>'>
                                    <h4> <?= htmlspecialchars($categorie['name']) ?><h4>
                                    <p><?= htmlspecialchars($categorie['description']) ?></p>
                                </a>
                                <?php if ($admin==1) :  ?>
                                        <?php if ($action === 'editcat' and $categorie['id']==$_POST['cat_id']) : ?>
                                            <form class="posts-actions" action="" method="POST">
                                                <input type="hidden" name="cat_id" value="<?= $categorie['id'] ?>">
                                                <button type="submit" name="action" value="updatecat">Save</button>
                                                <button type="submit" name="action" value="cancelcat">Cancel</button>
                                                <input type="text" name="title" value="<?= $categorie['name']?>" id="title">
                                                <textarea cols="30" rows="10" name="description" id="description">
                                                </textarea>
                                            </form>
                                            
                                        <?php else : ?>
                                            <form action="" method="POST"> 
                                                <input type="hidden" name="cat_id" value="<?= $categorie['id']?>">
                                                <button type="submit" name="action" value="deletecat">Delete</button>
                                                <button type="submit" name="action" value="editcat">Edit</button>
                                            </form>
                                        <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        
                    </li>
                <?php endif; ?> 
            <?php endforeach; ?>
            <?php if($cat>0) : ?>
                <a href="categories.php">Categories</a>
                <?php foreach ($posts as $post) : ?>
                   
                    <?php if (!(in_array($post['parent_id'], $parent))) : ?>
                        <?php $parent[]=$post['parent_id']; ?>
                        
                        <li>
                          
                                <div class="postlist">
                                    <a href="?message=<?php $post['user_id'] ?>" name='message' id='<?= $post['user_id']?>'>
                                        <p><?= htmlspecialchars($post['author'])?></p> 
                                    </a> 
                                    <a href="?topost=<?= $post['parent_id']?>" name='topost' id='<?= $post['parent_id']?>'>
                                        <h4> <?= htmlspecialchars($post['name']) ?><h4>
                                        <p><?= htmlspecialchars($post['content']) ?></p>
                                    </a>
                                    <p><?= htmlspecialchars($post['created_at']) ?></p>
                                
                                    <?php if ($post['user_id'] ==  $_SESSION['_user']['id'] or $admin==1) :  ?>
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
                                </div>
            <?php endif; ?>            
                        </li>
                    <?php else : ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
           
        </ul>
    </div>
    
    <?php if($cat and !$topost and (!$cat==1 or $admin==1)) : ?>
    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="content">Description</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <input type="hidden" name="parent" value="<?=max($parent)?>" id="<?=max($parent)?>">
        <button type="submit" name="action" value="createchatroom">Create a new chatroom</button>
    </form>
    <?php elseif(!$cat and !($topost) and $admin==1) : ?>
    <form action="" method="POST">
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title"><br>
        <label for="content">Description</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <button type="submit" name="action" value="createcategory">Create a new category</button>
    </form>
    <?php elseif($topost) : ?>
        <form action="" method="POST">
        <label for="content">Say something:</label><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea><br>
        <button type="submit" name="action" value="chat">Submit</button>
        </form>  
    <?php endif;  ?>
</body>
</html>
