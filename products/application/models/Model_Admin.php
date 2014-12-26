<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 25.12.2014
 * Time: 1:32
 */

class Model_Admin extends Model{

    public function getBooks($id){
        $t = "SELECT * FROM products.product WHERE id_user='%s'";

        $query = sprintf($t,
            mysql_real_escape_string( $id));

        return   mysql_query($query);
    }

    public function insertBook($name,$price,$description){
        $t = "INSERT INTO products.product (name,description,price,id_user) VALUES ('%s', '%s','%d','%d')";

        $query = sprintf($t,
            mysql_real_escape_string($name),
            mysql_real_escape_string($description),
            $price,
            $_SESSION['admin']);

        $result = mysql_query($query);
        return true;
    }


}