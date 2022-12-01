<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$numero_processo = $_POST["numprocesso"];
			$cpfcnpj = $_POST["cpfcnpj"];
			$nomeinteressado = $_POST["nomeinteressado"];
			$statusproc = $_POST["statusproc"];
			$dataproc = $_POST["dataproc"];

			$sql = "INSERT INTO tb_processo (id_processo, nome_interessado, cpfcnpj) VALUES ('{$numero_processo}', '{$nomeinteressado}', '{$cpfcnpj}');";
			$sql2 = "INSERT INTO tb_statusProcesso (tb_processo_id_processo, status_processo, dataStatus) VALUES ('{$numero_processo}','{$statusproc}','{$dataproc}');";
			
			$res = $conn->query($sql);
			$res2 = $conn->query($sql2);

			if($res==true){
				print"<script>alert('Cadastro com sucesso');</script>";
				print"<script>location.href='?page=novoprocesso';</script>";
			}else{
				print"<script>alert('Impossivel Registrar');</script>";
				print"<script>location.href='?page=novoprocesso';</script>";
			}

			break;
		case 'alterar':
			$numero_processo = $_POST["numprocesso"];
			$statusproc = $_POST["statusproc"];
			$dataproc = $_POST["dataproc"];

			$sql2 = "INSERT INTO tb_statusProcesso (tb_processo_id_processo, status_processo, dataStatus) VALUES ('{$numero_processo}','{$statusproc}','{$dataproc}');";
			
			$res2 = $conn->query($sql2);

			if($res==false){
				print"<script>alert('Registrado com sucesso');</script>";
				print"<script>location.href='?page=altsituacao';</script>";
			}else{
				print"<script>alert('Impossivel Alterar');</script>";
				print"<script>location.href='?page=altsituacao';</script>";
			}
			break;
		case 'excluir':
			// code...
			break;
	}



?>
