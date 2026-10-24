<?php

if(isset($_SESSION['uid'])){
    $stmt = $db->prepare('SELECT * FROM users WHERE id=?');
    $stmt->execute([$_SESSION['uid']]);
    $USER = $stmt->fetch();
}
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ./");
}
?>