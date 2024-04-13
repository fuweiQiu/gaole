<?php
$card1 = $_POST['g1'];
$card2 = $_POST['g2'];
$link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');
// $link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');
mysqli_set_charset($link, 'utf8');
$sql = sprintf("select card%s, card%s from card", $card1, $card2);
$re = mysqli_query($link, $sql);
$result['g1'] = [];
$result['g2'] = [];
while ($row = mysqli_fetch_array($re, 3)) {
    $result['g1'][] = $row[0];
    $result['g2'][] = $row[1];
}
echo json_encode($result);

?>