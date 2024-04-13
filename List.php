<?php
// $link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');
$link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');
$sql = 'select * from card';
$re = mysqli_query($link, $sql);
$result = [];
$result['id'] = [];
for($i = 1; $i < 9; $i++){
    $result[sprintf("card%s", $i)] = [];
}
while($row = mysqli_fetch_array($re, MYSQLI_NUM)){
    $result['id'][] = $row[0];
    for($i = 1; $i < 9; $i++){
        $result[sprintf("card%s", $i)][] = $row[$i];
    }
}
echo json_encode($result);
?>