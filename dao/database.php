<?php
  //execute query
function DBExecute($query){
    $link = DBConnection();
    $result = mysqli_query($link, $query);
    DBCloseConnection($link);
    return $result;
}
function DBInsert($table, array $data){
    $table = DB_PREFIXE.'_'.$table;
    $data=  DBEscape($data);
    $fields = implode(',',  array_keys($data));
    $values= "'".implode("', '", $data)."'";
    $query="insert into {$table}({$fields})values({$values})";
    return DBExecute($query);
}
function DBSelect($table, $params = null,$fields='*'){
    $table = DB_PREFIXE.'_'.$table;
    $params = ($params)?" $params":null;
    $query="select {$fields} from {$table}{$params}";
    $result=  DBExecute($query);
    if(!mysqli_num_rows($result))
        return false;
    else{
        while($res=  mysqli_fetch_assoc($result)){
            $data[]=$res;
        }
    }
    return $data;
}
function DBlogin($table, $us, $pass, $fields='*'){
    
    $table = DB_PREFIXE.'_'.$table;
    $query="select {$fields} from {$table} where inf_user = '$us' and inf_passwd = '$pass'";
    $result=  DBExecute($query);
    if(!mysqli_num_rows($result)){
    $login = false;}
    else{
        $login = true;
        }
        return $login;
    }
      

function DBUpdate($table,array $data, $where=null){
    foreach ($data as $key => $value) {
        $fields[]="{$key}='{$value}'";
    }
    $fields =  implode(', ', $fields);
    $table = DB_PREFIXE.'_'.$table;
    $where=($where)?" where {$where}":null;
    $query = "update {$table} set {$fields}{$where}";
    return DBExecute($query);
}
function DBDelete($table,$where){
    $table = DB_PREFIXE.'_'.$table;
    $where=($where)?" where {$where}":null;
    $query = "delete from {$table}{$where}";
    return DBExecute($query);
}
