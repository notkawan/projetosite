<?php
function listarTodosRegistros($campos,$tabela,$ativo){
    $conn = conectar();
    try{
        $listar = $conn->prepare("SELECT $campos FROM $tabela WHERE $ativo = '$ativo'");
        $listar->execute();

        if($listar->rowCount() > 0){
            return $listar->fetchAll(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo 'Error: ';
        return ($e->getMessage());
    }
}
?>