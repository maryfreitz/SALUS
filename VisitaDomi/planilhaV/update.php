    <?php
        include "conexao.php";
        
        $id = $_POST["id_domicilio"] ?? '';
        $nome = $_POST["nomeVisitado"] ?? '';
        $idade = $_POST["idadeVisitado"] ?? '';
        $entregas = $_POST["entregas"] ?? '';
        $data = $_POST["data"] ?? '';
        $agenteRes = $_POST["agenteRespon"] ?? '';
        $motivo = $_POST["motivoVisita"] ?? '';


        if ($nome && $idade && $entregas && $data && $agenteRes && $motivo) {
            $stmt = $conexao->prepare("UPDATE visita_domiciliar SET nome = :nome, idade = :idade, motivo_visita = :motivo, entregas = :entregas, datas = :datas, agente = :agente WHERE id_domicilio = :id");
        
            $stmt->bindValue(":id", $id);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":motivo", $motivo);
            $stmt->bindValue(":entregas", $entregas);
            $stmt->bindValue(":datas", $data);
            $stmt->bindValue(":agente", $agenteRes);
    
            if($stmt->execute()) {
                header("location: ../../");
            } else {
                header("location: formEdit.php");
            }
        } else {
             header("location: formEdit.php");
        }
          
    ?>
