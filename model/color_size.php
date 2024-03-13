<?php
    function insert_color($tenmau) {
        $sql = "INSERT INTO mausp(mau) VALUES('$tenmau')";
        pdo_execute($sql);
    }
    function insert_size($sosize) {
        $sql = "INSERT INTO size(size) VALUES('$sosize')";
        pdo_execute($sql);
    }
    function loadall_mau() {
        $sql = "SELECT * FROM mausp";
        $list_m = pdo_query($sql);
        return $list_m;
    }
    function loadall_size() {
        $sql = "SELECT * FROM size";
        $list_s = pdo_query($sql);
        return $list_s;
    }
    function loadone_mau($id) {
        $sql = "SELECT * FROM mausp WHERE id=$id";
        $mau = pdo_query_one($sql);
        return $mau;
    }
    function loadone_size($id) {
        $sql = "SELECT * FROM size WHERE id=$id";
        $size = pdo_query_one($sql);
        return $size;
    }
    function update_mau($id, $tenmau) {
        $sql = "UPDATE mausp SET mau='".$tenmau."' WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_size($id, $sosize) {
        $sql = "UPDATE size SET size='".$sosize."' WHERE id=".$id;
        pdo_execute($sql);
    }
