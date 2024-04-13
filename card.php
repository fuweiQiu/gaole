<?php
    $conn=mysqli_connect("localhost","admin","1234","pokemon");
    $list=["s4代拉基翁","雷吉奇卡斯",'s3凱路迪歐','s3巨金怪','s4路卡利歐'];
    $mc=[];
    $card=[];
    function field($o)
    {
        $str='\''.$o.'\''.' in ';
        $str.='(';
        for($i=1;$i<=50;$i++){
            $str.='`'.$i.'`';
            if($i!=50){
                $str.=',';
            }
        }
        $str.=')';
        return $str;
    }
    function clist($rows)
    {
        $a=[];

        while($row=mysqli_fetch_array($rows,3)){
            $a[]=$row[0];
        }
        return $a;
    }
    function en($card,$mc,$list) #輸出可能的
    {
        if(count($card)==2 and $card[1]>$card[0]){
            $cl=[];
            $conn=mysqli_connect("localhost","admin","1234","pokemon");
            $sql=sprintf("select * from `carddata` where `id`=%s or `id`=%s",$card[1],$card[0]);
            $rows=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($rows,3)) {
                for ($i = 1; $i <= 50; $i++) {
                    $cl[] = $row[$i];
                }
            }
            if(empty(array_diff($list,$cl))){
                echo $card[0].'條'.'和'.$card[1].'條'.'\n';
            }

        }
        else if(count($card)<2){
            foreach ($mc as $o){
                if(!in_array($o,$card)){
                    $l=$card;
                    $l[]=$o;
                    en($l,$mc,$list);
                }
            }
        }

    }
    foreach ($list as $name){
        $sql=sprintf("select id from `carddata` where %s",field($name));

        $rows=mysqli_query($conn,$sql);
        $cl=clist($rows);
        if(count($cl)==1){
            $card[]=$cl[0];
        }
        $mc=array_merge($mc,$cl);
    }
    $mc=array_unique($mc);

    en($card,$mc,$list);


?>

