<?php

$pictures = require ('data/gallery.php');

function findOneById($id) {
    global $pictures;
    foreach ($pictures as $data){
        if ($id == $data['id']){
            return $data;
        }
    } 
    return false;
}

function getCount (){
    global $pictures;
    return count($data);
}

function findPaged($limit, $offset= 0)
{
    global $pictures;
    $compteur = 0;
    $tableau = [];

    foreach($pictures as $picture)
    {
        $tableau[]=$picture;
        $compteur ++;
        if ($compteur == $limit)
        {
            break;
        }
    }
    return $tableau;
}
?>