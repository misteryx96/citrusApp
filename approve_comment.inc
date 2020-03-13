<?php
session_start();
$id = $_GET['id'];
$comment = $GLOBALS['conn']->prepare('UPDATE comments SET is_approved=1 WHERE id=?');
$comment->execute([$id]);
header("Location:admin_panel.php");