<?php
include "conexao.php";
include "menu.php";

try {
    $sql = "SELECT * FROM tblvendas";
    $qry = $con->query($sql);
    $vendas = $qry->fetchALL(PDO::FETCH_OBJ);

    

} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema</title>
</head>

<body>
    <h1>Vendas cadastradas</h1>
    <hr>

    <div class="container">
        
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th>idvendas</th>
                    <th>vendas</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($vendas as $v) { ?>
                    <tr>
                        <th><?php echo $v->idvendas ?></th>
                        <th><?php echo $v->vendas ?></th>
                        <th><?php echo $v->valor ?></th>
                        <th><?php echo $v->qtd ?></th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                <?php } ?>
            </tbody>


        </table>
    </div>

    <?php

    include "rodape.php";
    ?>