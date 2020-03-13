<?php
$query = "SELECT * FROM comments WHERE is_approved=1";
$comments = $GLOBALS['conn']->query($query);

foreach($comments as $comment){
    echo '
            <div class=" animate-box" data-animate-effect="fadeIn">
                <div>
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>'.$comment['name'].'</b><br>
                    <p>'.$comment['email'].'</p>
                    <div class="features">
                    '.$comment['text'].'
                    </div><br>
                </div><br>
            </div><br>
        ';
}