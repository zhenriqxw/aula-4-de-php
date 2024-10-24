<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Leitura de Registros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Registros de Setores</h2>
    <table>
        <tr>
            <th>Setor</th>
            <th>Local</th>
            <th>Lotação</th>
        </tr>
        <?php
        // Array associativo com os registros simulados
        $registros = array(
            array("Setor" => "Compras", "Local" => "Bloco A1", "Lotacao" => 4),
            array("Setor" => "RH", "Local" => "Bloco A2", "Lotacao" => 6),
            array("Setor" => "Finanças", "Local" => "Bloco B1", "Lotacao" => 8),
            array("Setor" => "Atendimento", "Local" => "Bloco B2", "Lotacao" => 14)
        );

        // Loop foreach para percorrer os registros e exibi-los na tabela
        foreach ($registros as $registro) {
            echo "<tr>";
            echo "<td>{$registro['Setor']}</td>";
            echo "<td>{$registro['Local']}</td>";
            echo "<td>{$registro['Lotacao']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>