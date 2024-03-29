<?php
    function validateNewUser($userData) {
        if (!preg_match("/[a-zA-Z\s]+/", $userData["username"]) ||
            !preg_match("/^.*@.*\..*$/", $userData["email"]) ||
            strlen($userData["pwd"]) > 100 ||
            strlen($userData["address"]) > 30 ||
            strlen($userData["city"]) > 30 ||
            !preg_match("/^[0-9]{5}$/", $userData["zipcode"])) {
            return false;
        }
        return true;
    } 

    function validateUser($userMail, $userPwd) {
        if (!preg_match("/^.*@.*\..*$/", $userMail,) ||
            strlen($userPwd) > 100) {
                return false;
        }
        return true;
    }

    function checkUser($conn, $userMail, $userPwd) {
        if (!validateUser($userMail, $userPwd)) {
            return 1;
        }

        $sql = "SELECT * FROM usuario WHERE email = $1";

        $params = [
            $userMail,
        ];

        $res = pg_query_params($conn, $sql, $params);
        if (!$res) {
            return 2;
        }

        $user = pg_fetch_all($res);
        if (!$user || !password_verify($userPwd, $user[0]["password"])) {
            return 2;
        }

        return $user[0];
    }

    function addNewUser($conn, $userData) {
        if (!validateNewUser($userData)) {
            return 1;
        }

        $sql = "INSERT INTO usuario(nombre, email, password, direccion, ciudad, zip) values($1, $2, $3, $4, $5, $6)";
        
        $params = [
            $userData["username"], 
            $userData["email"], 
            password_hash($userData["pwd"], PASSWORD_BCRYPT), 
            $userData["address"], 
            $userData["city"], 
            $userData["zipcode"]];

        $res = pg_query_params($conn, $sql, $params);
        
        if (!$res) {
            return 2;
        }

        $userData = checkUser($conn, $userData['email'], $userData['pwd']);

        return $userData;
    }

    function editUser($conn, $userData, $userMail, $userPwd) {
        $res = checkUser($conn, $userMail, $userPwd);
        if (is_int($res)) {
            return $res;
        }
        
        foreach ($userData as $key => $value) {
            if ($value == '') {
                $userData[$key] = $res[$key];
            }
        }

        if ($key == 'password') {
            if ($value == '') {
                $userData[$key] = $res[$key];
            }
            else {
                $userData[$key] = password_hash($value, PASSWORD_BCRYPT);
            }
        }

        $sql = 'UPDATE usuario
                SET nombre=$1, email=$2, password=$3, direccion=$4, ciudad=$5, zip=$6
                WHERE email=$7
                RETURNING *';
        
        $params = [
            $userData['nombre'],
            $userData['email'],
            password_hash($userData["password"], PASSWORD_BCRYPT),
            $userData['direccion'],
            $userData['ciudad'],
            $userData['zip'],
            $userMail,
        ];

        $res = pg_query_params($conn, $sql, $params);

        if (!$res) {
            return 2;
        }

        $user = pg_fetch_all($res);
        return $user[0];
    }

    function editProfilePic($conn, $imageName, $userMail, $userPwd) {
        $res = checkUser($conn, $userMail, $userPwd);

        if (is_int($res)) {
            return $res;
        }

        $sql = 'UPDATE usuario
                SET profile_pic = $1
                WHERE email = $2
                RETURNING *';
        
        $params = [
            $imageName,
            $userMail
        ];

        $res = pg_query_params($conn, $sql, $params);

        if (!$res) {
            return 2;
        }

        $user = pg_fetch_all($res);
        return $user[0];
    }
?>