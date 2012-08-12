<?
function imprimirResultado($res){
	imprimirAprovadas($res->_passedTests);
	imprimirFallidas($res->_failures);
}


function imprimirAprovadas($pruebas){	 						?>	
	<table>
		<tr>
			<td>Nombre de la prueba</td><td>Resultado</td> 	
		</tr>												
		<?php 
		foreach( $pruebas as $testCase ){			
			imprimirCasoDePrueba( $testCase );
		} 
		?>
	</table>
	<?php	
}

function imprimirFallidas($pruebas, $primero_las_aprovadas=true){	 						?>	
	<table>
		<tr>
			<td>Nombre de la prueba</td><td>Resultado</td> 	
		</tr>												
		<?php
		foreach( $pruebas as $testCase ){			
			imprimirCasoDePrueba( $testCase->_failedTest, $testCase->_thrownException );
		}
		?>
	</table>
	<?php	
}

function imprimirCasoDePrueba($test_case, $mensaje=''){
	$res_text = ($test_case->_failed) ?  'FALLA' : 'BIEN';
	$res_css  = ($test_case->_failed) ?  'res_falla' : 'res_bien';
	?>
	<tr>
		<td><?php echo $test_case->_name; ?></td><td><?php echo $res_text; ?></td><td><?php echo $mensaje=''; ?></td>
	</tr>
	<?php	
}

?>