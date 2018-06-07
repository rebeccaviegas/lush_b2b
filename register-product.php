<?php
    require_once 'includes/global.inc.php';

    //initialize php variables used in the form
    $name = "";
    $price = "";
    $category = "";
    $image = "";
    $path = "";
    $stock = "";
    $error = "";
    $description = "";
    $howtouse = "";
 

    //check to see that the form has been submitted
    if(isset($_POST['submit-form'])) {

        //retrieve the $_POST variables
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category']; 
        $stock = $_POST['stock'];
        $description = $_POST['description'];
        $howtouse = $_POST['howtouse'];
        // $image = $_POST['image'];

        //IMAGE VARIABLES
        $image = $_FILES['image'];
        $image_ext = pathinfo($image['name'])['extension'];

        //replacing any spaces with underscores
        $imagename = 'product_' . str_replace(' ','_',$name) . '.' . $image_ext;

        //link to folder where the files will be
        //basename grabs the submitted name
        //string to lower means changing the string to all lowercase letter 
        $path = "assets/img/" . basename(strtolower($imagename));

        //initialize variables for form validation
        $success = true;
        $productTools = new ProductTools();

        //validate that the form was filled out correctly
        //check to see if product name already exists
        if($productTools->checkExists($name)){
            $error .= "That product name is already taken. <br/> \n\r";
            $success = false;
        }

        //move uploaded file to our own directory. 
        if(!move_uploaded_file($image['tmp_name'], $path)) {

            $success = false;

        }

        if($success){
            //prepare the data for saving in a new product object
            $data['name'] = $name;
            $data['price'] = $price;
            $data['category'] = $category;
            $data['image'] = $path;
            $data['stock'] = $stock;
            $data['description'] = $description;
            $data['howtouse'] = $howtouse;

            //create the new product object
            $newProduct = new Product($data);

            //save the new product to the database
            $newProduct->save(true);

            //redirect them to the profile page
            header("Location: register-product.php");

        }

    }

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset = "UTF-8">
            <title>Register Product</title>
            <link rel="stylesheet" href="./unslider-master/dist/css/unslider.css">
             <link rel="stylesheet" href="./unslider-master/dist/css/unslider-dots.css">
             <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
                <h1 id="registerTitle">Register Product</h1>

        </head>
        <body>
            <?php echo ($error != "") ? $error : ""; ?>
        <div id="registerForm">
            <form action="register-product.php" method="post" enctype="multipart/form-data">
                Name<br> <input class="inputProduct" type="text" value="<?php echo $name;?>" name="name" /><br/>
                Price<br> <input class="inputProduct" type="text" value="<?php echo $price;?>" name="price" /><br/>
                Category<br>
                    <select name="category">
                        <option class="inputProduct" value="Bath Bombs">Bath Bombs</option>
                        <option class="inputProduct" value="Jelly Bombs">Jelly Bombs</option>
                        <option class="inputProduct" value="Henna Hair Dye">Henna Hair Dye</option>
                        <option class="inputProduct" value="Face Masks">Face Masks</option>
                        <option class="inputProduct" value="Bath Oils">Bath Oils</option>
                        <option class="inputProduct" value="Lipstick">Lipstick</option>
                        <option class="inputProduct" value="Lipstick">Lip Scrub</option>
                        <option class="inputProduct" value="Fragrance">Fragrance</option>
                    </select>
                <br/><br>
                Image: <input type="file" value="<?php echo $path; ?>" name="image"><br><br>
                <br>
                Available Stock:
                <select name="stock" id="stock">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                </select><br><br>
                <br>
                Description:
                <textarea id="description" name="description"></textarea>
                <br>
                How To Use:
                <textarea id="howtouse" name="howtouse"></textarea>
                <br>
                <input class="registerBtn" type="submit" value="Register Product" name="submit-form"/>
            </form>
        </div>
        </body>
    </html>