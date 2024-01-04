<?php

    $error = "";
    if(isset($_POST["age"])){
       if($_SERVER["REQUEST_METHOD"] == "POST" ){
        if($_POST["age"]){
            header("Location: Home ");
        }
        else{
          
            $error = "Bạn chưa đủ tuổi để xem nội dung này !";
        }
       }
       
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div id="container">

        <div id="border">
            <h1>Cửa hàng bán rượu</h1>
            <form action="" method="post">
                <div id="age_gate">
                    <p>Bạn đã đủ 18 tuổi ?</p>
                    <div id="age_button">
                        <button name="age" value="0">Dưới 18 tuổi</button>
                        <button name="age" value="1">Trên 18 tuổi</button>
                    </div>
                </div>
                <p class="error"><?php echo  $error; ?></p>

                <div id="img_age">

                    <img src="https://ruouthuonghieu.com/wp-content/uploads/2023/05/banner-age.jpg" alt="">
                </div>
            </form>

        </div>

    </div>
</body>

</html>