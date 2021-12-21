<?php
	$con = mysqli_connect("localhost", "root", "", "avs");
	
	if (isset($_POST['altera'])) {
		$CNPJ                   = $_POST['CNPJ'];
							$razaoSocial                   = $_POST['razaoSocial'];
	    $acumuladoEmpresa = $_POST['acumuladoEmpresa'];
	    $pPagas = $_POST['pPagas'];
	    $pAtrasadas = $_POST['pAtrasadas'];
	    $maiorNumero = $_POST['maiorNumero'];
	    $vPagoMes = $_POST['vPagoMes'];
	    $pProjetados = $_POST['pProjetados'];
	    $vTotalAtraso = $_POST['vTotalAtraso'];
	    $tComissoes = $_POST['tComissoes'];		
		
	    $query = mysqli_query($con, "SELECT * FROM emprestimo WHERE (CNPJ = '$CNPJ' OR razaoSocial = '$razaoSocial')");
		
    if (mysqli_num_rows($query)){ $query = mysqli_query($con, "UPDATE emprestimo SET maiorNumero ='$maiorNumero', vPagoMes = '$vPagoMes', pProjetados = '$pProjetados' WHERE (acumuladoEmpresa = '$acumuladoEmpresa' OR vTotalAtraso = '$vTotalAtraso' OR tComissoes = '$tComissoes');");			
        if ($query) {echo "<script>alert('Atualizado!')</script>";}
            else {echo "<script>alert('Erro!')</script>";}}
                else {echo "<script>alert('Erro!')</script>";}
                    header("location:alteraEmprestimo.php");}	
?>
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
					<a href="alterEmprestimo.php" 	class="btn btn-primary">Alterar	emprestimo	</a>
					<a href="listaEmprestimo.php"	class="btn btn-primary">Listar	emprestimo	</a>	
					<a href="index.php"			class="btn btn-primary">Inicio			</a>
				</div>
			</div>
		</div>	

        <div class="container">                
            <div class="card text-center mt-1">                
                <div class="card-body">                    
                    <form class="mt-2" method="POST" action="alteraEmprestimo.php">
                        <input type="text" name="CNPJ" placeholder="Buscar por CNPJ"> <br><br>
                        <input type="text" name="razaoSocial" placeholder="Buscar por razaoSocial"> <br><br>						
                        <input type="text" name="maiorNumero"placeholder="Parcelas atrasadas">   
                        <input type="text" name="acumuladoEmpresa"placeholder="Acumulado">                        
                        <input type="text" name="pPagas"placeholder="Parcelas Pagas">
						<input type="text" name="pAtrasadas"placeholder="Parcelas Atrasadas">
						<input type="text" name="vPagoMes"placeholder="Pago por Mes">
						<input type="text" name="pProjetados"placeholder="Pagamento Projetado">
						<input type="text" name="vTotalAtraso"placeholder="Valor Total Atraso">
						<input type="text" name="tComissoes"placeholder="Total de Comissoes">	<br><br>
                        <input type="submit" 	name="altera"	class		=	"btn btn-primary"		value	=	"Atualizar Emprestimo">                        
                    </form>                    
                </div>                
            </div>
        </div>
  </body>
</html>