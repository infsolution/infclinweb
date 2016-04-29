
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
	<tr><td><font size ="3" face="arial">Rua: </font></td><td><input type="text" name="inf_name" size="40"></td></tr>
	<tr><td><font size ="3" face="arial">Número: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Bairro: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Cidade: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Estado: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Pais: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Cep: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
        <tr><td><font size ="3" face="arial">Complemento: </font></td><td><input type="text" name="inf_cnpj" size="40"></td></tr>
	<tr>
	<table align="center">
	<tr><td><input type="submit" value="Cadastrar"></td></tr></table>
        </tr>
	</table>
	</form>

    </body>
</html>
