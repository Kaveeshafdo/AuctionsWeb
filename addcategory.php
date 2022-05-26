<?php
require_once('service/categoryservice.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['Submit'])){
        $categoryName = $_POST['name'];
        if(!empty($categoryName)){
            $category = new CategoryService();
            $category->__constructWithoutId($categoryName);
            $category->insertCategory();
            echo '<script> alert("Category Added Successfully"); </script>';
            
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/item_for_trade.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Category</title>
</head>

<body>
    <div class="container">
        <div class="content" style="display:flex ; flex-direction:row ;">
            <div class=" image " style="width: 50%; ">
                <div class=" img "> <img src="images/add.svg " alt=" "></div>
            </div>
            <div class="description " style="text-align: left; ">
                <h3 style="margin-top: 1rem; ">Add Category</h3>
                <h5 style="font-size: 1rem; color:#353535ff ; margin-bottom: 1rem; ">Add Category Name Here.....</h5>
                <div class="form ">
                    <form action="addcategory.php" method="POST">
                        <input name="name" type="text " class="feedback-input " placeholder="Category Name " s/>
                        <div class="buttons " style="margin-top: 2rem; ">
                        <input class="btns2" type="submit" name="Submit" value="Submit">
                </div>
                    </form>
                </div>
                

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

</body>

</html>