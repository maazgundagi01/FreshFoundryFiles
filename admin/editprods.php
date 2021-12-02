<?php

@include'../dbadmin.php';

$gName = trim(strtolower($_POST['goods_name']));
$pId = $_POST['prod_id'];
$img = '../uploads/'.$_POST['image'];

if($pId === 'ff-fp-01'){
        $query = "DELETE FROM fresh_produce WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_fresh.php');
    }
    if($pId === 'ff-ff-02'){
        $query = "DELETE FROM frozen_foods WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_frozen.php');
    }
    if($pId === 'ff-xm-03'){
        $query = "DELETE FROM meat WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_meat.php');
    }
    if($pId === 'ff-xd-04'){
        $query = "DELETE FROM dairy WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_dairy.php');
    }
    if($pId === 'ff-xs-05'){
        $query = "DELETE FROM spices WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_spices.php');
    }
    if($pId === 'ff-bg-06'){
        $query = "DELETE FROM baked_goods WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_baked.php');
    }
    if($pId === 'ff-xb-07'){
        $query = "DELETE FROM beverages WHERE goods='$gName'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        unlink($img);

        header('location:a_beverages.php');
    }


?>