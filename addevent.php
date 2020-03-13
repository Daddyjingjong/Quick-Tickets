<?php
require "header.php";
require "config.php";

$name=$date=$venue=$price=$description=$image='';
$name_err=$date_err=$venue_err=$description_err=$image_err='';

if (isset($_POST['post_btn']) and isset($_FILES['uploadedFile'])){
    $name = $_POST['ename'];
    $date = $_POST['edate'];
    $venue = $_POST['evenue'];
    $price = $_POST['eprice'];
    $description = $_POST['edescription'];
    $image = $_POST[''];




    if(!isset($name)){
        $name_err = "Fill in the field";
    }else{
        $name = cleaner($name);
    }

    if(!isset($date)){
        $date_err = "Fill in the field";
    }else{
        $date = cleaner($date);
    }
    if(!isset($venue)){
        $venue_err = "Fill in the field";
    }else{
        $venue = cleaner($venue);
    }
    if(!isset($price)){
        $price_err = "Fill in the field";
    }else{
        $price = cleaner($price);
    }

    if(!isset($description)){
        $description_err = "Fill in the field";
    }else{
        $description = cleaner($description);
    }
    echo $name."<br>";
    echo $venue."<br>";
    echo $price."<br>";
    echo $description."<br>";
    echo $image."<br>";


    //process the image
    //get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $image = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $image);
    $fileExtension = strtolower(end($fileNameCmps));

    $extensions= array("jpeg","jpg","png");


    if(in_array($fileExtension,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if(empty($errors)==true) {
        move_uploaded_file($fileTmpPath,"images/".$image);
    }else{
        print_r($errors);
    }
    $sql = "INSERT INTO `add_event`(`id`, `name`, `date`, `venue`, `price`, `description`, `image`) VALUES (NULL,'$name','$date','$venue','$price','$description','$image')";


    if(mysqli_query($conn,$sql)){
        $msg= "Event added successfully";
        header('location:addevent.php');
        exit();
    }else{
        echo "Event not added".mysqli_error($conn);
    }
}
function cleaner($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}






?>









<div class="container">
    <div class="jumbotron">
        <h2 class="content-title">Add Your Event</h2>
        <div class="message"></div>
    </div>
    <form class="row">
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">

    </div>
        <div class="col col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
            <form action="">
                <fieldset>
                    <label for="ename">NAME</label><br>
                    <input type="text" id="name" name="ename"><br><br>
                    <label for="edate">DATE</label><br>
                    <input type="date" id="date" name="edate"><br><br>
                    <label for="evenue">VENUE</label><br>
                    <input type="text" id="venue" name="evenue"><br><br>
                    <label for="eprice">PRICE</label><br>
                    <input type="number" id="price" name="eprice"><br><br>
                    <div class="form-group">
                        <label for="">DESCRIPTION</label>
                        <textarea name="edescription" class="form-control" style="background-color:rgba(40, 61, 177, 0.13);" ></textarea>
                    </div>
                    <thead class="thead-dark">
                    <div class="form-group" ">
                    <input type="file" name="uploadedFile" class="form-control">
        </div>
        <button type="submit" class="btn btn-success" name="post_btn">Post Event</button>
                </fieldset>
            </form>
    </form>
    </div>
</div>

    <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
    </div>

            </thead>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>

































