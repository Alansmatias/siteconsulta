<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$numero_processo = $_POST["numprocesso"];
			$cpfcnpj = $_POST["cpfcnpj"];
			$nomeinteressado = $_POST["nomeinteressado"];
			$dataproc = $_POST["dataproc"];
			$statusproc = $_POST["statusproc"];

			$sql = "INSERT INTO tb_processo (id_processo, nome_interessado, cpfcnpj) VALUES ('{$numero_processo}', '{$nomeinteressado}', '{$cpfcnpj}');". "INSERT INTO tb_statusProcesso (tb_processo_id_processo, status_processo, dataStatus) VALUES ('{$numero_processo}','{$statusproc}');";
			
			$res = $conn->query($sql);
			break;
		case 'editar':
			// code...
			break;
		case 'excluir':
			// code...
			break;
	}



?>
