<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 24.12.2014
 * Time: 22:05
 */

class Model_Login extends Model{

    public function get_data()
    {

    }

    /**
     * @param $login
     * @param $password
     * @return bool
     */
    public function getUser($login,$password)
    {
        $t = "SELECT * FROM products.user WHERE login='%s' AND user.password='%s'";

        $query = sprintf($t,
            mysql_real_escape_string( $login),
            mysql_real_escape_string(md5($password)));


      //  $query = "SELECT * FROM products.user  WHERE login='$login' AND user.password='$password'";
        $result = mysql_query($query);
        $n = mysql_num_rows($result);
        return $n;
    }
}