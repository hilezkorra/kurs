<?php declare(strict_types=1);

session_start();

if (isset($_SESSION['_user'])) {
    $edit=1;
}else{
    $edit=0;
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$db = mysqli_connect('localhost', 'root', '', 'finanz', 3306);

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
        $sum = $_POST['sum'] ?? '';
        $name = trim($_POST['name'] ?? '');
        if($sum<0){
            $negative=1;
        }else{
            $negative=0;
        }
        for($i=0;$i<strlen($sum);$i++){
            if(mb_substr($sum, 0, 1)=== ' '){
                $sum=mb_substr($sum, 1, mb_strlen($sum));
                $i--;
            }else{
                $sum .= mb_substr($sum, 0, 1);
                $sum = mb_substr($sum, 1, mb_strlen($sum)-1);
            }
        } 

        if ($name === '') {
            $errors['name'] = 'A name is required for the input to be valid.';
        }
        if ($sum === '') {
            $errors['sum'] = 'A sum is required for the input to be valid.';
        }
        if(!(is_numeric($sum))){
            $errors['sum'] = 'Please enter a valid number.';
        }
        $counter=0;
        for( $i = 0 ; $i < mb_strlen($sum) ; $i++ ){
            if(mb_substr($sum, $i, 1)==','){
                $errors['sum'] = '","(comma) is not allowed as a decimal seperator. Please use "."(full stop). ex1: "1.21 = correct"  ex2: "1,000,000.1 = incorrect"  ex3: "1,21 = incorrect"';
            }elseif(mb_substr($sum, $i, 1)=='.'){
                $counter++;
                if($counter == 2){
                    $errors['sum'] = 'You have more than one decimal seperator.';
                }
            }
        }    

    if (!$errors) {
        for($i=0; $i<strlen($sum);$i++){
            $a = mb_substr($sum, $i, 1);
            if($a === '.'){
                $sum_dec=substr($sum, $i+1, strlen($sum)-$i-1);    
            }
        }
        if(isset($sum_dec)){ 
            $sum=(substr($sum, 0, $i-1-strlen((string)$sum_dec)));
        }else{
            $sum_dec=0;
        }
        if(strlen((string)$sum_dec)>2){
            $erorrs['sum'] = 'You are only allowed to use 2 numbers after decimal seperator.';
        }
        if(!$errors){
            
            $sum=(int)$sum;
            $sum_dec=(string)$sum_dec;
            $sql =  "INSERT INTO `bills` (`sum`, `sum_dec` , `name`, `negative`) ";
            $sql .= "VALUES ('$sum', '$sum_dec' , '$name', '$negative')";
            $success = mysqli_query($db, $sql);
        }
    }
}

    //Edit $ Delete


    //Delete
    if ($action === 'delete') {
        // DELETE ////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        $id = (int) ($_POST['bill_id'] ?? 0);

        $result = mysqli_query($db, "SELECT * FROM `bills` WHERE `id` = $id");

        // Error Handling
        if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
                . mysqli_error($db) // Nur zur Demonstration im Kurs
                . "</div>";
        }


        if ($edit==true) {

            $sql = "DELETE FROM `bills` WHERE `id` = $id";

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
        $name = $_POST['name'] ?? '';
        $id = (int) ($_POST['id'] ?? 0);

        if ($name === '') {
            $errors['name'] = 'The input can not be empty.';
        }
    
        if ($errors) {
            $action = 'edit';
        }
     
        if (!$errors) {

            $result = mysqli_query($db, "SELECT * FROM `bills` WHERE `id` = $id");

            // Error Handling
            if (mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                    . mysqli_error($db) // Nur zur Demonstration im Kurs
                    . "</div>";
            }

            $bill = mysqli_fetch_assoc($result);

            if ($edit==true) {

                // UPDATE ////////////////////////////////////////////////
                ////////////////////////////////////////////////////////
                $name = mysqli_escape_string($db, $name);
                $sql = "UPDATE `bills` SET `name` = '$name' WHERE `id` = $id";

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
        $sum = $_POST['sum'] ?? '';
        if($sum<0){
            $negative=1;
        }else{
            $negative=0;
        }
           
        for($i=0;$i<strlen($sum);$i++){
            if(mb_substr($sum, 0, 1)=== ' '){
                $sum=mb_substr($sum, 1, mb_strlen($sum));
                $i--;
            }else{
                $sum .= mb_substr($sum, 0, 1);
                $sum = mb_substr($sum, 1, mb_strlen($sum)-1);
            }
        } 

        $id = (int) ($_POST['id'] ?? 0);

        if ($sum === '') {
            $errors['sum'] = 'A sum is required for the input to be valid.';
        }
        if(!(is_numeric($sum))){
            $errors['sum'] = 'Please enter a valid number.';
        }
        $counter=0;
        for( $i = 0 ; $i < mb_strlen($sum) ; $i++ ){
            if(mb_substr($sum, $i, 1)==','){
                $errors['sum'] = '","(comma) is not allowed as a decimal seperator. Please use "."(full stop). ex1: "1.21 = correct"  ex2: "1,000,000.1 = incorrect"  ex3: "1,21 = incorrect"';
            }elseif(mb_substr($sum, $i, 1)=='.'){
                $counter++;
                if($counter == 2){
                    $errors['sum'] = 'You have more than one decimal seperator.';
                }
            }
        }
        for($i=0; $i<strlen($sum);$i++){
            $a = mb_substr($sum, $i, 1);
            if($a === '.'){
                $sum_dec=substr($sum, $i+1, strlen($sum)-$i-1);    
            }
        }
        if(strlen((string)$sum_dec)>2){
            $erorrs['sum'] = 'You are only allowed to use 2 numbers after decimal seperator.';
        }
    
        if ($errors) {
            $action = 'edit';
        }
     
        if (!$errors) {
            if(isset($sum_dec)){ 
                $sum=(substr($sum, 0, $i-1-strlen((string)$sum_dec)));
            }else{
                $sum_dec=0;
            }

            if(!$errors){
                $result = mysqli_query($db, "SELECT * FROM `bills` WHERE `id` = $id");

                // Error Handling
                if (mysqli_errno($db)) {
                    echo "<div>Da ist wohl etwas schief gelaufen: "
                        . mysqli_error($db) // Nur zur Demonstration im Kurs
                        . "</div>";
                }

                $bill = mysqli_fetch_assoc($result);

                if ($edit==true) {
                    $sum=(string)$sum;
                    $sum_dec=(string)$sum_dec;
                    // UPDATE ////////////////////////////////////////////////
                    ////////////////////////////////////////////////////////
                    $sum = mysqli_escape_string($db, $sum);
                    $sql = "UPDATE `bills` SET `sum` = '$sum' WHERE `id` = $id";
                    mysqli_query($db, $sql);
                
                    $sum_dec = mysqli_escape_string($db, $sum_dec);
                    $sql = "UPDATE `bills` SET `sum_dec` = '$sum_dec' WHERE `id` = $id";
                    mysqli_query($db, $sql);

                    $sql = "UPDATE `bills` SET `negative` = '$negative' WHERE `id` = $id";
                    mysqli_query($db, $sql);

                    // Error Handling
                    if (mysqli_errno($db)) {
                        echo "<div>Da ist wohl etwas schief gelaufen: "
                            . mysqli_error($db) // Nur zur Demonstration im Kurs
                            . "</div>";
                    }
                }    

            } else {
                http_response_code(403);
            }
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['sortby'])){
        // Anfrage an die DB senden
        $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills`');
        // Posts: Error Handling
        // Datensätze aus dem "Result" herausziehen
        $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $truesum=0;
    }elseif($_POST['sortby']=='pos'){
            // Anfrage an die DB senden
            $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills` WHERE `negative`= 1');
            // Posts: Error Handling
            // Datensätze aus dem "Result" herausziehen
            $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $truesum=0;

    }elseif($_POST['sortby']=='neg'){
                // Anfrage an die DB senden
                $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills` WHERE `negative`= 0');
                // Posts: Error Handling
                // Datensätze aus dem "Result" herausziehen
                $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $truesum=0;
        
    }elseif($_POST['sortby']=='date'){
                // Anfrage an die DB senden
                $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills` ORDER BY `created` ');
                // Posts: Error Handling
                // Datensätze aus dem "Result" herausziehen
                $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $truesum=0;
        
        
    }elseif($_POST['sortby']=='name'){
                    // Anfrage an die DB senden
                    $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills` ORDER BY `name` ');
                    // Posts: Error Handling
                    // Datensätze aus dem "Result" herausziehen
                    $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $truesum=0;
            
    } 
}else{
    // Anfrage an die DB senden
    $result = mysqli_query($db, 'SELECT `name`, `sum`, `sum_dec`, `id`, `negative`, `created` FROM `bills`');
    // Posts: Error Handling
    // Datensätze aus dem "Result" herausziehen
    $bills = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $truesum=0; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" sum="width=device-width, initial-scale=1.0">
    <title>Finanz Analysis</title>
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
          font-size:150%;
      }
      li p{
          max-width:100%;
          text-align:right;
          font-size:200%;
          padding:0;
      }
      div ul{
          padding:0;
          margin:20px 0;
          display:inline-block;
          width:90%;

      }
      div{
          text-align:center;
      }
      li{
          text-decoration:none;
          color:black;
          display:block;
          max-width:950%;
          margin:0;
          
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
      .bills{
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
          padding:none;
          margin:none;
          font-size:160%;
          overflow:hidden;
        }
        .name{
          float:left;
          max-width:50%;
          font-size:180%;
        }
        .name:hover{
            color:white;
            transition:0.4s color ease-in-out;
        }
        .name:after{
            clear:both;
            display:table;
            sum:"";
        }
        .bills-actions button{
            display:block;
            margin:5px auto;
            width:100px;
        }
        nav{
            z-index:1;
            position:absolute;
            right:0;
            top:0;
            padding:20px;
            background:silver;
            border-radius:5px;
            border: 2px solid black;
            margin:20px;
        }
        nav a{
            color:black;
            text-decoration:none;
        }
        nav a:hover{
            background:black;
            color:white;
        }
        .created{
            font-size:70%;
        }
        #sum{
            width:100px;
            display:inline-block;
        }
        #name{
            width:300px;
            display:inline-block;
            
        }
        .errors p{
            display:inline-block;
            color:red; 
            border:1px solid red;
        }
    </style>
</head>
<body>
<header>
    <h1>Finance Analysis</h1>
    <nav>
        <?php if ($edit==true) : ?>
            <a href="logout.php">Logout</a> |
        <?php elseif ($edit==false) : ?>
            <a href="login.php">Login</a> |
            <a href="register.php">Register</a>
        <?php endif; 
         if(isset($_SESSION['_user'])) : ?>
            <?= htmlspecialchars($_SESSION['_user']['username']); ?>
        <?php endif; ?>    
    </nav>
</header>  
    <h2>Financial Table:</h2>
    <form action="index.php" method="post">
    <button type="submit" name="sortby" value="date">Sort by date</button>
    <button type="submit" name="sortby" value="name">Sort by name</button>
    <button type="submit" name="sortby" value="pos">Show only negative</button>
    <button type="submit" name="sortby" value="neg">Show only positive</button>
    </form>
    <div class="bills">
        <ul> 
        <?php foreach($bills as $bill) :?>
            <li>
                <h3 class="name"><?= htmlspecialchars($bill['name']) ?></h3>
                <!-- Green for positive, Red for negative sums -->
                <p style="
                <?php if ($bill['negative']==0) : ?>
                color:green
                <?php elseif ($bill['negative']==1) : ?>
                color:red

                <?php endif; ?>
                "> 
                <?php if ($bill['negative']==1 and $bill['sum']==0) :
                echo '-';
                endif; ?>
                <?=(htmlspecialchars($bill['sum']) . '.' . htmlspecialchars($bill['sum_dec'])) ?> €</p>
                <p class="created">created on: <?= $bill['created'] ?></p>
            <?php 
            $billsum= $bill['sum'] . '.' . (htmlspecialchars($bill['sum_dec']));
            if($bill['negative']==1 and $bill['sum']==0){
                $billsum -= (2 * $billsum);
            } 
            $truesum= round($truesum + $billsum, 2); 
            ?>
            <?php if ($edit==true) :  ?>
                <?php if ($action === 'edit' && $_POST['bill_id'] == $bill['id']) : ?>
                    <form class="bills-actions" action="" method="POST">
                        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
                        <button type="submit" name="action" value="update">Save</button>
                        <button type="submit" name="action" value="cancel">Cancel</button>
                        <input type="text" name="name" value="<?= htmlspecialchars($bill['name']) ?>" id="name">
                        <input type="text" name="sum" value="<?= $bill['sum'] . '.' . $bill['sum_dec'] ?>" id="sum">

                    </form>
                    
                <?php else : ?>
                <form action="" method="POST"> 
                    <input type="hidden" name="bill_id" value="<?= $bill['id'] ?>">
                    <button type="submit" name="action" value="delete">Delete</button>
                    <button type="submit" name="action" value="edit">Edit</button>
                </form>
                <?php endif; ?>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>   
        <li id="result">
        <p><?= 'Current financial status = <u>' . $truesum . ' €</u>'?></p>
        </li>
        </ul>
    </div>
    <?php if (isset($errors)) : ?>
       <div class="errors">
            <p> <?php if(isset($errors['sum'])){ echo $errors['sum']; }?></p>
            <p> <?php if(isset($errors['name'])){ echo $errors['name']; }?></p>
       </div>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="name">New Entry:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="sum">Sum:</label><br>
        <input type="text" name="sum" id="sum"><br>
        <button type="submit" name="action" value="create">Submit</button>
    </form>
</body>
</html>
