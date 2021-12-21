<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="card text-center mt-1">
				<div class="card-body">					
					<a href="incluirEmprestimo.php" class="btn btn-primary">Incluir	emprestimo	</a>
					<a href="alteraEmprestimo.php" 	class="btn btn-primary">Alterar	emprestimo	</a>
					<a href="listaEmprestimo.php"	class="btn btn-primary">Listar	emprestimo	</a>		
				</div>
			</div>
		</div>
		<div class="container">
		<div class="card text-center mt-1">
			<div class="card-body">
				<form class="mt-1" method="POST" action="incluirEmprestimo.php">
<input type="text"		name="CNPJ"					placeholder	=	"CNPJ">
<input type="text"		name="razaoSocial"					placeholder	=	"razaoSocial">				
					<input type="text"		name="acumuladoEmpresa"					placeholder	=	"acumuladoEmpresa">
					<input type="text"		name="pPagas"				placeholder	=	"pPagas">
					<input type="text"		name="pAtrasadas"				placeholder	=	"pAtrasadas"><br><br>
					<input type="text"		name="maiorNumero"			placeholder	=	"maiorNumero">
					<input type="text"		name="vPagoMes"			placeholder	=	"vPagoMes">
					<input type="text"		name="pProjetados"	placeholder	=	"pProjetados">		<br><br>
					<input type="text"		name="vTotalAtraso"				placeholder	=	"vTotalAtraso">		<br><br>
					<input type="text"		name="tComissoes"				placeholder	=	"tComissoes">		<br><br>
					<input type="submit" 	name="submit"				class		=	"btn btn-primary"		value	=	"Incluir Emprestimo">
				</form>
			</div>
		</div>		
					<?php
						$con = mysqli_connect("localhost", "root", "", "avs");                     
						if (($_POST) && ($_POST['submit'])) {
						    $CNPJ                   = $_POST['CNPJ'];
							$razaoSocial                   = $_POST['razaoSocial'];
							$acumuladoEmpresa                   = $_POST['acumuladoEmpresa'];
						    $pPagas                = $_POST['pPagas'];
						    $pAtrasadas               = $_POST['pAtrasadas'];
						    $maiorNumero          = $_POST['maiorNumero'];
						    $vPagoMes          = $_POST['vPagoMes'];
						    $pProjetados    = $_POST['pProjetados'];
						    $vTotalAtraso              = $_POST['vTotalAtraso'];
						    $tComissoes		          = $_POST['tComissoes'];
						    echo($CNPJ!=""&&$pPagas!=""&&$razaoSocial!=""&&$pPagas!=""&&$pAtrasadas!=""&&$maiorNumero!=""&&$vPagoMes!=""&&$pProjetados!=""&&$vTotalAtraso!=""&&$tComissoes!="")?
								(mysqli_query($con, "	INSERT INTO emprestimo (CNPJ,razaoSocial,acumuladoEmpresa, pPagas, pAtrasadas, maiorNumero, vPagoMes, pProjetados, vTotalAtraso, tComissoes )
								    VALUES ('$CNPJ','$razaoSocial','$acumuladoEmpresa','$pPagas','$pAtrasadas','$maiorNumero', '$vPagoMes', '$pProjetados', '$vTotalAtraso', '$tComissoes')"))?
								"<script>alert('Sucesso!')</script>":
								"<script>alert('Erro!')</script>":
								"<script>alert('Preencha todos os campos!')</script>";
						}
                    ?>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
