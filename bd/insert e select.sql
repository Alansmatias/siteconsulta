USE `ambiental` ;

INSERT INTO tb_processo (id_processo, nome_interessado, cpfcnpj)
VALUES (10,"Alan Siqueira Matias", 08242408394);

select * from tb_processo;

INSERT INTO tb_statusProcesso (tb_processo_id_processo, status_processo, dataStatus)
VALUES (1, "segunda atualização","2022-11-30");

select * from tb_statusProcesso;

SELECT dataStatus, status_processo FROM tb_statusProcesso WHERE tb_processo_id_processo = 1;