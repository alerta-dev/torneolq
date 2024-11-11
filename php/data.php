<?php
$data = [
    ['participante' => 'Juan', 'equipo' => 'Equipo 1', 'juez1' => 8, 'juez2' => 9, 'juez3' => 7, 'final' => 24],
    ['participante' => 'Ana', 'equipo' => 'Equipo 2', 'juez1' => 10, 'juez2' => 9, 'juez3' => 8, 'final' => 27],
    ['participante' => 'Carlos', 'equipo' => 'Equipo 3', 'juez1' => 7, 'juez2' => 8, 'juez3' => 9, 'final' => 24],
];

function filterRanking($data, $equipo, $orden) {
    if ($equipo != 'Todos') {
        $data = array_filter($data, fn($row) => $row['equipo'] === $equipo);
    }
    usort($data, fn($a, $b) => $orden === 'asc' ? $a['final'] - $b['final'] : $b['final'] - $a['final']);
    return $data;
}
?>
