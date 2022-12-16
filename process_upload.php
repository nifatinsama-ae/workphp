


<?php

    $folder_upload = "photo/";
    $file_upload = $folder_upload.basename($_FILES["photo"]["name"]);
    //echo $file_upload;
    $uploadOK = 1;
    $file_ext = strtolower(pathinfo($file_upload,PATHINFO_EXTENSION));
    //echo $file_ext;
?>    

<style>
        input[type=submit]{
            width: 80%;
            padding: 15px 20px;
            margin: 30px 0;
            display: inline-block;
            border: none;
            border-radius: 100px;
            box-sizing: border-box;
            background: linear-gradient(120deg,#4dd0e1, #80deea,#b2ebf2,#e0f7fa);
        }
        p{
            text-align: center;
            font-size: 40px; 
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 200px;
            border-radius: 10px;

        }
        body{
            background: linear-gradient(120deg, #BA55D3, #3dccdf);
            height: 500vh;
        }
        
    </style>
</head>
<div style=" position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    width: 500px;
    height: 500px;
    background: blusky;
    border-radius: 10px;
    ">
<body style="
background: linear-gradient(120deg,#ff8a65, #ffb74d, #ffd54f,#fff176);
height: 100vh;
">
<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-5"> <br> <br>
        <div style="text-align: center;">
<?php
    if(isset($_POST["submit"])){
        $check_upload = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check_upload !== false){
            echo "ไฟล์ที่ส่งมาเป็นภาพ - ".$check_upload["mime"].".";
            $uploadOK = 1;
        }else{
            echo "คุณส่งไฟล์มาไม่ใช่ภาพ - ";
            $uploadOK = 0;
        }
    }

    if(file_exists($file_upload)){
        echo "ไม่สามารถส่งไฟล์ซ้ำได้";
        $uploadOk = 0;
    }

    if($_FILES["photo"]["size"] > 5242880) {
        echo "ไฟล์ขนาดเกิน 5 MB ได้";
        $uploadOk = 0;
    }

    if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "gif" ) {
        echo "ส่งได้เฉพาะไฟล์ JPG, PNG, GIF เท่านั้น";
        $uploadOk = 0;
    }

    if($uploadOK == 0){
        echo "<br>ไม่สามารถส่งไฟล์ได้";
    }else{
        if(move_uploaded_file($_FILES["photo"]["tmp_name"],$file_upload)){
            echo "คุณส่งไฟล์ ".htmlspecialchars($_FILES["photo"]["name"])." เรียบร้อยแล้ว";
        }else{
            echo "<br>เกิดปัญหาในการส่งไฟล์";
        }
    }


?>