<?php
class Product extends Db
{
    public function getAllProducts()
    {
        //Viet cau truy van 
        $sql = self::$connection->prepare("SELECT products.*, manufactures.manu_name,protypes.type_name FROM products, manufactures,protypes WHERE products.manu_id = manufactures.manu_id AND products.type_id=protypes.type_id");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    public function getProductById($id)
    {
        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $data = array();
        $data = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $data;
    }


    public function search($keyword)
    {
        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT products.*, manufactures.manu_name FROM products, manufactures WHERE `name` LIKE ? AND products.manu_id = manufactures.manu_id");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute();
        $data = array();
        $data = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function getTopSelling()
    {
        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT products.*, manufactures.manu_name FROM products, manufactures WHERE products.manu_id = manufactures.manu_id ORDER BY `sold` DESC LIMIT 0,20");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getProductByProtypes($category)
    {

        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT products.*, protypes.type_name, manufactures.manu_name FROM products, protypes, manufactures WHERE `type_name` LIKE ? AND products.type_id = protypes.type_id AND products.manu_id = manufactures.manu_id");
        $category = "$category";
        $sql->bind_param("s", $category);
        $sql->execute();
        $data = array();
        $data = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $data;
    }
    public function getTopSellingProtype($category)
    {
        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT products.*, manufactures.manu_name FROM products, manufactures, protypes WHERE `type_name` LIKE ? AND products.type_id = protypes.type_id AND products.manu_id = manufactures.manu_id ORDER BY `sold` DESC LIMIT 0,10");
        $category = "$category";
        $sql->bind_param("s", $category);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }

    public function getTopRankSellingProtype($category, $first, $end)
    {
        //Viet cau truy van
        $sql = self::$connection->prepare("SELECT products.*, manufactures.manu_name FROM products, manufactures, protypes WHERE `type_name` LIKE ? AND products.type_id = protypes.type_id AND products.manu_id = manufactures.manu_id ORDER BY `sold` DESC LIMIT ?,?");
        $category = "$category";
        $sql->bind_param("sii", $category, $first, $end);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}