<?php 

	$cabecalho = file_get_contents("cabecalho.html");
	print($cabecalho."\n");
	$dados = file("tabela.csv");
	print('<table border="1">');

	foreach ($dados as $linhas) {
		$partes = explode(";", $linhas);
		print('<tr>
				<td>'.$partes[0].'</td>
				<td>'.$partes[1].'</td>
				<td>'.$partes[2].'</td>
				<td>'.$partes[3].'</td>
			</tr>');
	}
	print('</table>');
	$rodape = file_get_contents("rodape.html");
	print($rodape."\n");


?>