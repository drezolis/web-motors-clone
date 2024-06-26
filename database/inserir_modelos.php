<?php
include '../app/includes/config.php';
include 'includes/veiculos_modelo.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inserir'])) {
    foreach ($veiculos as $veiculo) {
        $query = "INSERT INTO modelo_veiculo 
            (marca, modelo,  ano_modelo, ano_fabricacao, versao, chassi, combustivel, tipo_veiculo)
            VALUES
            ('{$veiculo['marca']}', '{$veiculo['modelo']}', {$veiculo['ano_modelo']}, {$veiculo['ano_fabricacao']}, '{$veiculo['versao']}', '{$veiculo['chassi']}', '{$veiculo['combustivel']}', '{$veiculo['tipo_veiculo']}');";
        $result = mysqli_query($con, $query);
    }
    echo '<div style="
                text-align: center;
                margin-top: 50px;
                color: green;
                font-size: 24px;
                font-weight: bold;
                background-color: #e0ffe0;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                <i class="fa fa-check-circle"></i> Dados inseridos com sucesso!
              </div>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Modelos de Veículos no Banco</title>
    <link rel="icon" type="image/x-icon" href="../imgs/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #ff7e5f, #feb47b);
        }

        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .btn-main {
            background-color: #ff6347;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 50px;
            transition: 0.3s;
        }

        .btn-main:hover {
            background-color: #ff4500;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
        }

        .fa-car {
            font-size: 50px;
            color: #ff6347;
        }

        .title {
            font-size: 32px;
            font-weight: bold;
            color: #333;
        }

        .description {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="hero">
        <div class="card">
            <div class="card-body">
                <i class="fas fa-car"></i>
                <div class="title">Inserir Modelos de veículos no Banco</div>
                <div class="description">
                    Clique no botão abaixo para inserir todos os veículos no banco de dados.
                </div>
                <form action="#" method="post">
                    <button type="submit" class="btn btn-main mt-3" name="inserir">
                        Inserir Modelos de Veículos
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
