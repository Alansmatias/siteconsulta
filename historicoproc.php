<h4 class="h4 col-md-12 text-center text-muted font-weight-bold" style="font-size: 1.2em;">Status</h4><br>
<?php
    $nprocesso = $_POST["numprocesso"];
    $sql = "SELECT dataStatus, status_processo FROM tb_statusProcesso WHERE tb_processo_id_processo = {$nprocesso};";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table'>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>" . $row->dataStatus . "</td>";
            print "<td>" . $row->status_processo. "</td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }


?>