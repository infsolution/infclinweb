<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //require 'dao/connect.php';
        //require 'config.php';
        //require 'connection.php';
        //require 'database.php';
        //$link=DBConnection();
        /*$cliente= array('inf_nome' =>'Mariane',
                        'inf_fone'=>'3342-2317',
                        'inf_email'=>'mariane@infsolution.com.br');
        $gravar = DBInsert('cliente', $cliente);
        var_dump($gravar);
        if($gravar){
        echo 'Gravado com sucesso';}
        else{
            echo 'Foi mal';}*/
        // var_dump(DBUpdate('cliente',$cliente,'inf_id_cliente = 4'));
        //var_dump($cliente);
        //foreach ($cliente as $key => $value) {
          //  var_dump($key.' - '.$value);
        //}
        
        //var_dump(DBDelete('cliente', 'inf_id_cliente = 3'));
       
        
        /*$busc='select * from inf_user where inf_user = "admin" and inf_passwd = 12345678';
        $res = DBExecute($busc);
        if(mysqli_num_rows($res))
            echo 'ok';
        else
            echo 'false';*/
        //$con = new Connect();
        ?>
        <h1 align = "center">Infclin</h1>
<h2 align = "center">Login</h2>
	<form name="log" action="login.php" method="POST">
	<table align="center">
	<tr><td><font size ="3" face="arial">Usuario: </font></td><td><input type="text" name="inf_usuario" size="40"></td></tr>
	<tr><td><font size ="3" face="arial">Senha: </font></td><td><input type="password" name="inf_senha" size="40"></td></tr>
	<tr>
	<table align="center">
	<tr><td><input type="submit" value="Entrar"></td></tr></table>
        </tr>
	</table>
	</form>
    </body>
</html>
