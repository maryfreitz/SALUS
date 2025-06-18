<?php
        include "conexao.php";
        
        $nome = $_POST["nomeVisitado"];
        $idade = $_POST["idadeVisitado"];
        $entregas = $_POST["entregas"];
        $data = $_POST["data"];
        $agenteRes = $_POST["agenteRespon"];
        $motivo = $_POST["motivoVisita"];

            if (isset($_POST["nomeVisitado"]) && !empty($nome)) {

                 if (isset($_POST["idadeVisitado"]) && !empty($idade)) {

                    if(isset($_POST["entregas"]) && !empty($entregas)){

                        if(isset($_POST["data"]) && !empty($data)){

                            if(isset($_POST["agenteRespon"]) && !empty($agenteRes)){

                                if(isset($_POST["motivoVisita"]) && !empty($motivo)){

                    $stmt = $conexao->prepare("INSERT INTO visita_domiciliar (nome , idade, motivo_visita , entregas , datas , agente) VALUES (:nome ,:idade, :motivo, :entregas, :datas, :agente)");

                    $stmt->bindValue(":nome", $nome);
                    $stmt->bindValue(":idade",  $idade);
                    $stmt->bindValue(":motivo",  $motivo);
                    $stmt->bindValue(":entregas",  $entregas);
                    $stmt->bindValue(":datas",  $data);
                    $stmt->bindValue(":agente",  $agenteRes);


                    if ($stmt->execute()) {
                        header("Location: planilhaV");
                        exit;
                    } else {
                        echo "erro ao cadastrar";
                    }

                }else{
                    echo "campo motivo da visita vazio";
                }

                }else{
                    echo "campo agente responsável vazio";
                }

                }else{
                    echo "campo data vazio";
                }

                }else{
                    echo "campo entregas vazio"; 
                }

                } else {
                echo "campo idade vazio";
                }

                } else {
                echo "campo nome vazio";
                }

    ?>