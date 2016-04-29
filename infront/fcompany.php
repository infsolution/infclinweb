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
        <?php $data = (date("d/m/y",time()));?>
	<h3>Hoje é: <?php echo "$data";?></h3>
       <?php
           
        ?>
        <h1 align = "center">Cadastre sua empresa</h1>
<h2 align = "center">Cadastro:</h2>
	<form name="cadastroEmpresa" action="dcompany.php" method="POST">
	<table align="center">
	<tr><td><font size ="3" face="arial">Nome: </font></td><td><input type="text" name="inf_name" size="40"></td></tr>
	<tr><td><font size ="3" face="arial">Cnpj: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Tipo: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial"> </font></td><td><a href="infclinweb/dao/dcompany.php">Cadastrar endereço:</a></td></tr>
	<tr>
	<table align="center">
	<tr><td><input type="submit" value="Cadastrar"></td></tr></table>
        </tr>
	</table>
	</form>

    </body>
</html>





