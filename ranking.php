<?php include("includes/header.php"); ?>
<div class="ranking">
    <h1>Ranking de Participantes</h1>
    <div class="filtros">
        <label for="equipo">Filtrar por equipo:</label>
        <select id="equipo">
            <option value="todos">Todos</option>
            <option value="equipo1">Equipo 1</option>
            <option value="equipo2">Equipo 2</option>
            <option value="equipo3">Equipo 3</option>
        </select>

        <label for="puntaje">Ordenar por:</label>
        <select id="puntaje">
            <option value="alto">Puntaje más alto</option>
            <option value="bajo">Puntaje más bajo</option>
        </select>
    </div>
    <div class="tabla-ranking">
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
                <!-- Ejemplo -->
                <tr>
                    <td>Juan Pérez</td>
                    <td>Equipo 1</td>
                    <td>8.5</td>
                    <td>9.0</td>
                    <td>8.0</td>
                    <td>8.5</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
