<?php

    $dbc = mysqli_connect("localhost", "root", "", "Kursova") OR die("Sere");

    $query="Select id,name,type,prise,date_time,category from Products";
    if(!empty($_GET['id_s'])) {

    $id_s=strip_tags($_GET['id_s']);

        switch ($id_s) {
            case 'priseA':
                $query.=' order by prise asc';
                break;
            case 'prise':
                $query.=' order BY prise desc';
                break;
            case 'date':
                $query.=' order by date_time asc';
                break;
        }
    }

    $result = mysqli_query($dbc, $query) OR die("err bin");

