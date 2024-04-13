<?php
mb_internal_encoding('utf-8');
$link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');

// $link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');
mysqli_set_charset($link, 'utf8');

$cardList = [0, 0, 0, 0, 0, 0, 0, 0];
$possible = [];
// 先檢查五星
$star5 = [];
$star5_id = [];
$other = [];
$possible2 = [];
// 從有五星的開始判斷
for ($i = 0; $i < count($_POST['data']); $i++) {
    if ($_POST['data'][$i]['star'] == 5) {
        for ($o = 1; $o < 9; $o++) {
            $sql = sprintf("select * from card where card%s = '%s' ", $o, $_POST['data'][$i]['pokemon']);
            $re = mysqli_query($link, $sql);
            if (mysqli_num_rows($re) != 0) {
                $row = mysqli_fetch_array($re, 3);
                $possible[] = $o;
                // echo $o;
                $star5_id[] = $row['id'];
                $star5[] = $_POST['data'][$i]['pokemon'];
            }
        }
    } else {
        $other[] = $_POST['data'][$i]['pokemon'];
    }
}

// print_r($possible);

for ($i = 1; $i < 9; $i++) {
    $copy = $other;

    if (count($possible) != 0) { // 如果前面有五星的 就會至少鎖定一道 以及固定區間(沒有任何卡卡住的正常情況下)
        $sql = sprintf("select card%s from card where id between '%s' and '%s'", $i, $star5_id[0] - 8, $star5_id[0] + 8);
        $re = mysqli_query($link, $sql);
        $sta = false;
        while ($row = mysqli_fetch_array($re, 3)) {
            if ($row[sprintf("card%s", $i)] == $star5[0]) {
                $sta = true;
            }
        }
        if ($sta == false) {
            continue;
        }
        $id = $star5_id[0]; // 並將五星設為正負8的基準點
    } else { // 如果前面沒有五星 會用傳過來的第一隻(不管三星或四星)
        $id_query = sprintf("select * from card where card%s = '%s' ", $i, $_POST['data'][0]['pokemon']);
        $id_re = mysqli_query($link, $id_query);
        if (mysqli_num_rows($id_re) == 0) {
            continue;
        } else {
            $row = mysqli_fetch_array($id_re, 3);
            $id = $row['id'];
        }
    }

    for ($o = 1; $o < 9; $o++) {
        if ($o == $i) {
            continue;
        }
        if ($id) {
            $sql = sprintf("select card%s as currentRow from card where id between '%s' and '%s' ", $o, $id - 8, $id + 8);
            $re = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($re, 3)) {
                if (in_array($row['currentRow'], $copy)) {
                    $inde = array_search($row['currentRow'], $copy);
                    unset($copy[$inde]);
                }
            }
            if (count($copy) == 0) {
                $r = [];
                $r[] = $i;
                $r[] = $o;
                sort($r);
                if (in_array($r, $possible2)) {
                    continue;
                } else {
                    $possible2[] = $r;
                }
            }
        }
    }
}
echo json_encode($possible2);

?>