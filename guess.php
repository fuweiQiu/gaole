<?php
$link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');
// $link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');
mysqli_set_charset($link, 'utf8');
$possible = $_POST['data'];
$result = [];
for($i = 0; $i < count($possible); $i++){
    $subarr = [];
    if($possible[$i] != 0){
        $sql = sprintf("select * from card where id > '%s' and id <= '%s' ", $possible[$i], $possible[$i] + 5);
        $re = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($re, 3)){
            $subarr[] = $row[sprintf("card%s", $i + 1)];
        }
    }
    $result[] = $subarr;
}
echo json_encode($result);
?>