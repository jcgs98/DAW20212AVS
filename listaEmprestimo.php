<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">			
			<div class="card text-center mt-1">				
				<div class="card-body">
					<a href="index.php" class="btn btn-primary">Inicio </a>
				</div>				
			</div>
		</div>
		
		<div class="container">			
			<div class="card text-center mt-1">				
				<div class="card-body">					
					<a href="PAGAS.php" 	class="btn btn-primary">Ordenar por PAGAS	</a>
					<a href="ATRASADAS.php"	class="btn btn-primary">Ordenar por ATRASADAS	</a>	
					<a href="EMPRESA.php" class="btn btn-primary">Ordenar por EMPRESA </a>					
					<a href="PROJETADOS.php" class="btn btn-primary">Ordenar por PROJETADOS </a>					
					<a href="TOTAL.php" class="btn btn-primary">Ordenar por TOTAL </a>					
					<a href="COMISSOES.php" class="btn btn-primary">Ordenar por COMISSOES </a>					
					<a href="ACUMULADO.php" class="btn btn-primary">Ordenar por ACUMULADO </a>					
					
				</div>				
			</div>
		</div>
		
	<?php
		include "conexao.php";
	?>        
		<div class="container">
			<div class="card text-left mt-1">				
				<div class="card-body">					
                    <table class="table table-sm mt-1">
                        <thead>
                            <tr>
							<th>CNPJ</th>
							<th>razaoSocial</th>
                                <th>acumuladoEmpresa</th>
                                <th>pPagas</th>
                                <th>pAtrasadas</th>
								<th>maiorNumero</th>
								<th>vPagoMes</th>
								<th>pProjetados</th>                                                                
								<th>vTotalAtraso</th>
								<th>tComissoes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $Exibe = mysqli_query($con, "SELECT * FROM emprestimo ORDER BY acumuladoEmpresa");
                                while($r = mysqli_fetch_array($Exibe)):
							?>
                                    <tr>
                                        <td><?php echo $r['CNPJ']; ?></td>
										<td><?php echo $r['razaoSocial']; ?></td>
										<td><?php echo $r['acumuladoEmpresa']; ?></td>
										<td><?php echo $r['pPagas']; ?></td>
										<td><?php echo $r['pAtrasadas']; ?></td>
										<td><?php echo $r['maiorNumero']; ?></td>
										<td><?php echo $r['vPagoMes']; ?></td>
										<td><?php echo $r['pProjetados']; ?></td>                                                                                
										<td><?php echo $r['vTotalAtraso']; ?></td>
										<td><?php echo $r['tComissoes']; ?></td>
                                    </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
				</div>
			</div>			
		</div>       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>