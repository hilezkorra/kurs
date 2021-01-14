<?php declare(strict_types=1);


function request_method() : string
{
    return $_SERVER['REQUEST_METHOD'];
}


function request_is(string $method) : bool
{
    return strtolower(request_method()) === strtolower($method);
}


function redirect(string $url)
{
    header("Location: $url");
    exit();
}


function request($key=null){
    if ($key===null  and ! is_array($key)){
        return $_POST;
    }
    if($key!==null and ! is_array($key)){
        return $_POST[$key];
    }
    if(is_array($key)){
        $postreq=$_POST ?? '';
        foreach($key as $keys){
            var_dump($keys);
            if(isset($postreq[$keys])){
                $arr[$keys]=$postreq[$keys];
            }
        }
        return $arr;
    }else {
        return "";
    }
}

