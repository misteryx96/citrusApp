<?php
$query = "SELECT * FROM comments WHERE is_approved=0";
$comments = $GLOBALS['conn']->query($query);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $comment = $GLOBALS['conn']->prepare('UPDATE comments SET is_approved=1 WHERE id=?');
    $comment->execute([$id]);
    header("Location:admin_panel.php");
    echo 'Approved!';
}

foreach($comments as $comment){
    echo '
            <div class=" animate-box" data-animate-effect="fadeIn">
                <div>
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>'.$comment['name'].'</b><br>
                    <p>'.$comment['email'].'</p>
                    <div class="features">
                    '.$comment['text'].'
                    <a class="btn btn-banner" href="admin_panel.php?id='.$comment["id"].'">APPROVE</a>
                    </div><br>
                </div><br>
            </div><br>
        ';
}