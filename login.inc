<?php
    if(isset($_REQUEST['btnSubmit'])){
        $params['username'] = $_REQUEST['tbUsername'];
        $params['pass'] = md5($_REQUEST['tbPassword']);
        $user = $GLOBALS['conn']->prepare("SELECT * FROM users WHERE username= :username AND pass= :pass");
        $user->execute($params);
        if($user->rowCount() > 0){
            $user = $user->fetch();
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['username'];
            header("Location:admin_panel.php");
            echo "Login successful";
        }
        else{
            echo "No user with such credentials";
        }
    }