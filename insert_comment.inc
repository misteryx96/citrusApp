<?php
    if(isset($_POST['btnSubmit'])){
        $data = [
            'name' => $_POST['tbName'],
            'email' => $_POST['tbEmail'],
            'text' => $_POST['txtComment']
        ];
        $regEmail = '/^\S+@\S+\.\S+$/';

        if(!preg_match($regEmail, $data['email'])){
            $error = 'Not a valid email address';
        }
        if(!isset($error)){
            $query = "INSERT INTO comments(name, email, text) VALUES  (:name, :email, :text)";
            $stmt = $GLOBALS['conn']->prepare($query);
            $stmt->execute($data);
            echo "Your comment has been sent and is waiting for approval.";
        }
        else{
            echo $error."<br>";
        }
    }