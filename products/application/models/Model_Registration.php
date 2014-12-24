<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 23:16
 */

class Model_Registration {

    /**
     * @param $login
     * @param $password
     * @param $email
     */
    public function insertUser($login,$password,$email){

        // checking if user with such login exists
        $qs = "SELECT * FROM products.user WHERE login='%s'";
        $query = sprintf($qs,
            mysql_real_escape_string( $login));
        $result = mysql_query($query);
        $n = mysql_num_rows($result);

        //if not, insert user
        if($n==0) {
            $result = mysql_query($query);

            $t = "INSERT INTO products.user (login,password,email) VALUES ('%s', '%s','%s')";

            $query = sprintf($t,
                mysql_real_escape_string($login),
                mysql_real_escape_string(md5($password)),
                mysql_real_escape_string($email));
            $result = mysql_query($query);
            return true;
        }
        return false;
   }
}