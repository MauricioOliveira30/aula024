<?php
include "conexao.php";
include "menu.php";

try {
    $sql = "SELECT * FROM tblfornecedores";
    $qry = $con->query($sql);
    $fornecedores = $qry->fetchALL(PDO::FETCH_OBJ);


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
    <h1>Fornecedores cadastrados</h1>
    <hr>

    <div class="container">
      
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th>idfornecedores</th>
                    <th>Fornecedores</th>
                    <th>Salário</th>
                    <th>Contrato</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($fornecedores as $f) { ?>
                    <tr>
                        <th><?php echo $f->idfornecedores ?></th>
                        <th><?php echo $f->fornecedores ?></th>
                        <th><?php echo $f->salario ?></th>
                        <th><?php echo $f->contrato ?></th>
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