<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    
    html,
    body {
    height: 100%;
    }

    .bg {
    position:absolute;
    z-index:-1;
    top:0;
    right:0;
    bottom:0;
    left:0;
    
    background-image: radial-gradient(circle at 30% 86%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 55% 100%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 8%,transparent 8%, transparent 92%),radial-gradient(circle at 40% 75%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 7% 99%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 69% 76%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 2% 35%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 14% 48%, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.03) 6%,transparent 6%, transparent 94%),radial-gradient(circle at 28% 87%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 65% 14%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 51% 36%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),radial-gradient(circle at 6% 93%, rgba(255,255,255,0.04) 0%, rgba(255,255,255,0.04) 4%,transparent 4%, transparent 96%),linear-gradient(135deg, rgb(23, 233, 173),rgb(29, 24, 208));
    }

    body {
    display: block;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }
    .form-signin {
        width: 100%;
        max-width: 330px;
        margin: auto;
        margin-top: 5%;
        border-style:solid;
        
        padding: 20px;
        border-radius: 3px;
    }

    .form-signin>.h1 {
        margin-top: 0px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        color:#fff;
        padding:15px;
        text-align:center;
    }

  
    .form-signin>form {
            padding:15px;
        }
        .form-signin>form>.btn{
            color:#fff;
            
        }
        .form-signin>form>.btn>:hover,:focus{
            background: rgba(255,255,255,0.1);
            box-shadow:none;
        }
        
        .form-signin>.form-control:focus {
            border-color:#ced4da;
            box-shadow: 5px 5px 30px rgba(0,0,0,0.2);
        }
    
        .form-signin>.copyright {
            text-align:center;
            color:rgba(255,255,255,0.65);
        }
        
        .form-signin>.form-control {
            background:rgba(255,255,255,0.9);
        }
    
        .form-signin>.form-check {
            display:flex;
            align-items:center;
            color:rgba(255,255,255,0.65);
        }
        .form-signin>.form-check>label{
            font-size:0.9e;
        }
        .form-signin>input {
        margin-right:0.5em;
        }
        .form-signin>input>:checked{
            background-color:#9ce060;
            border-color: #81c63f;
        }
        .form-signin>.form-floating>:focus-within{
            z-index: 2;
        }
        input[type="text"] {
            margin-bottom:10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        input[type="email"] {
            margin-bottom:10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .pro_img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .pro_bio{
            font-size: 28px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="bg">


    </div>
    <main class="form-signin">
    
        <h1 class="h3">Products page</h1>
        <form method="post">
            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name" required>
                <label for="floatingInput">Name of the product</label>
            </div>
            <div class="form-floating">
                <input type="text" name="category" class="form-control" id="floatingInput" placeholder="Category" required>
                <label for="floatingInput">Category</label>
            </div>
            <div class="form-floating">
                <input type="text" name="price" class="form-control" id="floatingInput" placeholder="Price" required>
                <label for="floatingInput">Price</label>
            </div>
            <label for="photo">Photo:</label>
            <img id="upload_image" src="<?php echo $image;?>" class="pro_img" onclick="chooseFile_1()">
                <form method="post" enctype="multipart/form-data">
                    <input class="upload_image_input" id="fileInput_1" name="fileInput_1" type="file" onchange="loadFile1(event)" class="pro_img"></input>
                    <input type="submit" id="upload_image_submit" name="upload_image_submit" style="display: none;" value="">
                    <script>
                        function chooseFile_1() {
                            document.getElementById("fileInput_1").click();
                        } 
                        var loadFile1 = function(event) {
                            var output = document.getElementById("upload_image");
                            upload_image.src = URL.createObjectURL(event.target.files[0]);
                            upload_image.onload = function() {
                                URL.revokeObjectURL(upload_image.src) // free memory
                            }
                            document.getElementById("upload_image_submit").click();
                        };
                    </script>
                </form> 
            
            <input type="submit" name="submit" value="Register">
        </form>
        
        
    </main>
    <?php
    if(isset($_POST["upload_image_submit"])){
        $folder = 'user_images/';
        if($_FILES['fileInput_1']['tmp_name']!="") {
            unlink($image);
            $temp = explode(".", $_FILES["fileInput_1"]["name"]);
            // will be changed by the time and user's username
            $filename1 = round(microtime(true)) . '.' . end($temp);
            //declaring variables
            $filetmpname = $_FILES['fileInput_1']['tmp_name'];
            //folder where images will be uploaded
            //function for saving the uploaded images in a specific folder
            move_uploaded_file($filetmpname, $folder.$filename1);
            //inserting image details (in eg. image name) in the database
        }
        $sqlUpdate = "UPDATE `form` SET `images`='$filename1' WHERE `id` = '$profile_page_id'";
        if($conn->query($sqlUpdate)) {
            echo "
                <script>
                window.location.assign('');
                </script>
            ";
        }
    }
    ?>
    <?php 
    $conn = new mysqli("localhost","root","","sergiev_db");
    if(isset($_POST["submit"])){
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_SPECIAL_CHARS);
        $price = filter_input(INPUT_POST, "price", FILTER_SANITIZE_SPECIAL_CHARS);
        
        //$rem = $_POST["remember_me"];
        if(empty($name)||empty($category)){
            echo  "Please enter email/password";
        }
       
        $result = $conn->query("SELECT * FROM products WHERE name='$name'");
        if($result->num_rows > 0){
            echo "This product already exists";
        }
        else{
            //$hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `products`(`id`,`name`, `category`, `price`,`photo, `date`) VALUES (NULL, '$name','$category', '$price','$image', current_timestamp())";
            $conn -> query($sql);
           
        }

    }
    ?>
</body>
</html>