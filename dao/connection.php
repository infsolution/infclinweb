<?php
//open connection
function DBConnection(){
    $link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DATABASE) or die(mysqli_error($link));
    mysqli_set_charset($link, DB_CHARSET)or die(mysql_error($link));
    return $link;
}
//close conncetion
function DBCloseConnection($link){
    mysqli_close($link)or die(mysqli_error($link));
}
//protection for injection
  function DBEscape($dados){
      $link = DBConnection();
    if(!is_array($dados)){
         $dados=  mysqli_real_escape_string($link,$dados);   
    }else{
        $arr= $dados;
        foreach ($arr as $key => $value){
            $key = mysqli_real_escape_string($link,$key);
            $value = mysqli_real_escape_string($link,$value);
            $dados[$key]=$value;
        }
    }
    DBCloseConnection($link);
    return $dados;
}