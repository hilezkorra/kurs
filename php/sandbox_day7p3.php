<?php 
function piglatin($string){

    $string=strval($string);
    $vocals=['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'];
    if(in_array(mb_substr($string, 0, 1), $vocals)){
    return $string.='way';    
    }
    for($i=0;$i<mb_strlen($string);$i++){
        foreach($vocals as $vocal){ 
            if(mb_substr($string,0, 1) == $vocal or $i == mb_strlen($string)-1){
                return $string.='ay';
            }
        }
        if(mb_substr($string, 0, 1)!= $vocal and mb_substr($string, -2, 2)!='ay'){
            $string.=mb_substr($string, 0, 1);
            $string=mb_substr($string,1);    
    
        }
    }
}
$string=null;
if($_SERVER['REQUEST_METHOD']==='POST' and isset($_POST)){
    $string=$_POST['input'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sandbox_day7p3.php" method="post">
<label for="input">Enter a word you want to translate in to Piglatin:</label>
<input type="text" name="input" id="input" value="<?= htmlspecialchars($string ?? '') ?>">
<button type="submit">Translate</button>
</form>
    <p>
    <?php echo htmlspecialchars(piglatin($string)); ?>
    </p>
</body>
</html>


