<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">


        <div class="container text-center p-4 rounded col-md-4 bg-light">
            <h2 class="mb-3">Lista de Tarefas</h2>
            <div class="mb-3 row justify-content-center">
                <div class="col-md-8">
                    <input type="text" id="task" class="form-control" placeholder="Nova Tarefa">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary w-100" id="addTask">Adicionar</button>
                </div>
            </div>
            <ul id="taskList" class="list-group mx-auto"></ul>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>