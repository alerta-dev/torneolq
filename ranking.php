<?php include 'php/data.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking | TorneoLq</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="ranking">
        <h1>Ranking de Participantes</h1>
        <form method="GET" class="filters">
            <label for="equipo">Filtrar por equipo:</label>
            <select name="equipo" id="equipo">
                <option value="Todos">Todos</option>
                <option value="Equipo 1">Equipo 1</option>
                <option value="Equipo 2">Equipo 2</option>
                <option value="Equipo 3">Equipo 3</option>
            </select>

            <label for="orden">Ordenar por puntaje:</label>
            <select name="orden" id="orden">
                <option value="desc">Más alto</option>
                <option value="asc">Más bajo</option>
            </select>
            <button type="submit">Aplicar filtros</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Participante</th>
                    <th>Equipo</th>
                    <th>Juez 1</th>
                    <th>Juez 2</th>
                    <th>Juez 3</th>
                    <th>Puntaje Final</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $filteredData = filterRanking($data, $_GET['equipo'] ?? 'Todos', $_GET['orden'] ?? 'desc');
                foreach ($filteredData as $row) {
                    echo "<tr>
                        <td>{$row['participante']}</td>
                        <td>{$row['equipo']}</td>
                        <td>{$row['juez1']}</td>
                        <td>{$row['juez2']}</td>
                        <td>{$row['juez3']}</td>
                        <td>{$row['final']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
