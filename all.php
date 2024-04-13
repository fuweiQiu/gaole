<?php
$link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');
// $link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');
mysqli_set_charset($link, 'utf8');
$sql = 'select * from allpokemon';
$re = mysqli_query($link, $sql);
// $row = mysqli_fetch_array($re, 3);
$result['name'] = [];
$result['star'] = [];
$result['color'] = [];
while ($row = mysqli_fetch_array($re, 3)){
    $result['name'][] = $row['name'];
    $result['star'][] = $row['star'];
    $result['color'][] = $row['color'];
}
echo json_encode($result);
?>