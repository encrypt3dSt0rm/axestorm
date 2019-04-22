<?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if($user === 'root' && $pass === 'toor'){
                echo "Login successful";
        };
        else {
                echo "login faild";
        };
?>
