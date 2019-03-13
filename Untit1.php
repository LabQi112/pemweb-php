<?php
    $nama = "Coba\n";
    print $nama;
    *$arrayName = array(
        "nama" => "who",
        "nim" => "177777708",
        "kampus" => "uin"
    );
    print_r($arrayName);
    
    *$array = array("a", "b", "c");
    print_r($array);
    foreach ($array as $key => $value) {
        echo $array[$key];
    }
    */
    $kampus = array(
        array(
            "nama" => "who",
            "nim" => "10001",
            "kampus" => "uin"
        ),
        array(
            "nama" => "whe",
            "nim" => "011110",
            "kampus" => "uin"
        )
    );
    
    print_r($kampus);
    echo $kampus[0]["nim"];
    for ($i=0; $i < 2 ; $i++) { 
        foreach ($kampus[$i] as $key => $value) {
            echo $value."<br>";
        }
    }
    
    $var = "";
    if (empty($var) || $nama == "" || $nama === "") {
        echo "kosong"."<br>";
    }
    else {
        echo "ada"."<br>";
    }
    $suhu = 30;
    if ($suhu < 20) {
        echo "dingin";
    }
    elseif ($suhu < 40) {
        echo "biasa";
    }
    else {
        echo "panas";
    }
?>