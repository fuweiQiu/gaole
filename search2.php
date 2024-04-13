<?php
// $link = mysqli_connect('sql302.infinityfree.com', 'if0_36268838', 'QMYCVs6uuNudQ', 'if0_36268838_pokemon');


$link = mysqli_connect('localhost', 'admin', '1234', 'pokemon');



mysqli_set_charset($link, 'utf8');


$s5 = [];
$s3s4 = [];

$result = [];

function availibleId($id)
{
    if ($id < 0)
        return 0;
    if ($id > 50)
        return 50;
    return $id;
}

// 整理5星跟其他
function cleanup($data)
{
    global $s5, $s3s4;
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i]['star'] == 5) {
            $s5[] = $data[$i]['pokemon'];
        } else {
            $s3s4[] = $data[$i]['pokemon'];
        }
    }
}

// 找出寶可夢陣列中的id存入
function position($pokeArr)
{
    global $link;
    $result = [];
    $result['gate'] = []; // 哪幾條
    $result['position'] = []; // 第幾張(資料庫中的id)
    for ($i = 0; $i < count($pokeArr); $i++) { // 遍歷陣列$pokeArr
        $now_poke = $pokeArr[$i]; // 當前寶可夢
        for ($j = 1; $j < 9; $j++) {
            $sql = sprintf("select * from card where card%s = '%s' ", $j, $now_poke);
            $re = mysqli_query($link, $sql);
            if (mysqli_num_rows($re) > 0) {
                while ($row = mysqli_fetch_array($re, 3)) {
                    $result['gate'][] = $j;
                    $result['position'][] = $row['id'];
                }
            }
        }
    }
    return $result;
}

// 從陣列中刪除
function remove($copy, $rows){
    // copy 為傳入的(所有寶可夢)複製陣列
    // rows 為當前第i(o)條的所有資料
    $len = count($copy);
    for($i = 0; $i < $len; $i++){
        if(in_array($copy[$i], $rows)){ // 如果$copy[$i]在$rows中
            unset($copy[$i]); // 刪除 但並不會調整index
        }
    }
    $copy = array_values($copy); // 重新調整陣列index
    return $copy;
}

function addResult($i, $o){
    global $result;
    $add = [];
    $add[] = $i;
    $add[] = $o;
    sort($add);
    if(!in_array($add, $result)){
        $result[] = $add;
    }
}


function search($s5_posi, $other_posi, $range)
{
    global $link, $s5, $s3s4;

    $legal_gates = []; // 合理條數
    foreach($s5_posi['gate'] as $p){
        if(!in_array($p, $legal_gates)){
            $legal_gates[] = $p;
        }
    }
    foreach($other_posi['gate'] as $p){
        if(!in_array($p, $legal_gates)){
            $legal_gates[] = $p;
        }
    }
    $all_poke = []; // 所有寶可夢
    foreach($s5 as $poke){
        $all_poke[] = $poke;
    }
    foreach ($s3s4 as $poke) {
        $all_poke[] = $poke;
    }

    for ($i = 0; $i < count($s5_posi['gate']); $i++) { //遍歷五星每一隻卡片
        $copy = $all_poke;
        
        $id = $s5_posi['position'][$i];

        if($range != 0){
            $sql = sprintf("select card%s from card where id between %s and %s", $s5_posi['gate'][$i], availibleId($id - 8), availibleId($id + 8));    
        }else{
            $sql = sprintf("select card%s from card", $s5_posi['gate'][$i]);
        }
        
        // echo $sql;

        $set1 = mysqli_query($link, $sql); // 利用當前這隻5星的來找
        $rows = []; // 當前這一條
        
        while ($row = mysqli_fetch_array($set1, MYSQLI_NUM)) {
            $rows[] = $row[0]; // 加進這一條
        }

        $first_copy = remove($copy, $rows); // 把出現過的排除

        for($o = 0; $o < count($legal_gates); $o++){ // 遍歷合理的條數
            $cp = $first_copy;
            if($s5_posi['gate'][$i] == $legal_gates[$o]){
                continue;
            }
            if($range != 0){
                $sql = sprintf("select card%s from card where id between %s and %s", $legal_gates[$o], availibleId($id - 8), availibleId($id + 8));    
            }else{
                $sql = sprintf("select card%s from card", $legal_gates[$o]);
            }

            $set2 = mysqli_query($link, $sql);
            $rows2= [];
            while($row = mysqli_fetch_array($set2, MYSQLI_NUM)){
                $rows2[] = $row[0];
            }
            $cp = remove($cp, $rows2);
            if(count($cp) == 0){
                addResult($s5_posi['gate'][$i], $legal_gates[$o]);
            }
        }
    }

    // 下一個for迴圈

    for($i = 0;$i < count($other_posi['gate']); $i++){ // 遍歷每一隻五星之外的卡片
        $copy = $all_poke; // 所有卡片的複製
        $id = $other_posi['position'][$i]; // 抓出這隻的id

        //sql語法
        if($range != 0){
            $sql = sprintf("select card%s from card where id between %s and %s", $other_posi['gate'][$i], availibleId($id - 8), availibleId($id + 8));    
        }else{
            $sql = sprintf("select card%s from card", $other_posi['gate'][$i]);
        }

        // mysql query
        $set1 = mysqli_query($link, $sql);
        $rows = [];
        while ($row = mysqli_fetch_array($set1, MYSQLI_NUM)) { // 存入$rows
            $rows[] = $row[0];
        }


        $first_copy = remove($copy, $rows);
        for ($o = 0; $o < count($legal_gates); $o++) {
            $cp = $first_copy;
            if($other_posi['gate'][$i] == $legal_gates[$o]){
                continue;
            }
            if($range != 0){
                $sql = sprintf("select card%s from card where id between %s and %s", $legal_gates[$o], availibleId($id - 8), availibleId($id + 8));    
            }else{
                $sql = sprintf("select card%s from card", $legal_gates[$o]);
            }
            $set2 = mysqli_query($link, $sql);
            $rows2 = [];
            while ($row = mysqli_fetch_array($set2, MYSQLI_NUM)) {
                $rows2[] = $row[0];
            }
            $cp = remove($cp, $rows2);
            // echo 'o = ' . $legal_gates[$o];
            if (count($cp) == 0) {
                addResult($other_posi['gate'][$i], $legal_gates[$o]);
            }
        }
    }
}

function search2($data){
    $a=[];
    for($i=0;$i<count($data);$i++){
        $a[]=$data[$i]['pokemon'];
    }
    $b=[];
    $c=[];
    foreach($a as $i){
        $conn=mysqli_connect("localhost","admin","1234","pokemon");

        $sql=sprintf('select id from carddata where "%s" in(`1`',$i);
        
        
        for($i=2;$i<=50;$i++){
            $sql.=sprintf(',`%s`',$i);
        }
        $sql.=')';
        // echo $sql;
        $rows=mysqli_query($conn,$sql);
        echo mysqli_num_rows($rows);
        if(mysqli_num_rows($rows)==1){
            // echo 'abc';
            $row=mysqli_fetch_array($rows,3);
            $c[]=$row[0];
            $b[]=$row[0];
        }
        while($row=mysqli_fetch_array($rows,3)){
            if(!in_array($row[0],$b)){
                $b[]=$row[0];
            }
        }
        
    }
    print_r($b);
    print_r($c);
}


cleanup($_POST['data']);

$s5_posi = position($s5);

$other_posi = position($s3s4);

search($s5_posi, $other_posi, 0);

// search2($_POST['data']);



echo json_encode($result);

?>