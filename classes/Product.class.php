<?php

    require_once 'ProductTools.class.php';
    require_once 'DB.class.php';


class Product{
    public $id;
    public $name;
    public $price;
    public $category;
    public $image;
    public $stock;
    public $description;
    public $howtouse;

    //Constructor is called whenever a new object is created. 
    //Takes ana ssociatve array with the DB row as an argument. 

    function __construct($data){

        $this->id = (isset($data['id'])) ? $data['id'] : "";
        $this->name = (isset($data['name'])) ? $data['name'] : "";
        $this->price = (isset($data['price'])) ? $data['price'] : "";
        $this->category = (isset($data['category'])) ? $data['category'] : "";
        $this->image = (isset($data['image'])) ? $data['image'] : "";
        $this->stock = (isset($data['stock'])) ? $data['stock'] : "";
        $this->description = (isset($data['description'])) ? $data['description'] : "";
        $this->howtouse = (isset($data['howtouse'])) ? $data['howtouse'] : "";


    }

    public function save($isNew = false){

        //create a new database object

        $db = new DB();

        //if the product is already registered and we're
        //just updating the info

        if(!$isNew){
            //set the data array
            $data = array(
                "name" => "'$this->name'",
                "price" => "'$this->price'",
                "category" => "'$this->category'",
                "image" => "'$this->image'",
                "stock" => "'$this->stock'",
                "description" => "'$this->description'",
                "howtouse" => "'$this->howtouse'"
            );
            //update the row in the database
            $db->update($data, 'products', 'id = ' . $this->id);

        }else{
            
            $data = array(
                "name" => "'$this->name'",
                "price" => "'$this->price'",
                "category" => "'$this->category'",
                "image" => "'$this->image'",
                "stock" => "'$this->stock'",
                "description" => "'$this->description'",
                "howtouse" => "'$this->howtouse'"

            );

            $this->id = $db->insert($data, 'products');

        }
        return true;
    }

} //END of Class 'product'

?>