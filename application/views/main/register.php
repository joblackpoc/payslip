<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>แก้ไขข้อมูลส่วนตัว</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

<div class="col-lg-4 col-lg-offset-2">
        
        <h3>ระบบลงทะเบียนแก้ไขข้อมูลส่วนตัว</h3>
        <p>กรุณากรอกข้อมูลให้ครบถ้วน เพื่อยืนยันการลงทะเบียนที่สมบูรณ์</p>
        
        <?php if(isset($_SESSION['success']))
              { ?> 
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
        <?php } ?>
        
        <?php echo validation_errors("<div class='alert alert-danger'>","</div>");?>
        
        <form action="" method="post">    
            <div class="form-group">
                <label for="fname" >ชื่อ</label>
                <input class="form-control" name="fname" id="fname" type="text">
            </div>
            <div class="form-group">
                <label for="lname" >นามสกุล</label>
                <input class="form-control" name="lname" id="lname" type="text">
            </div>
            <div class="form-group">
                <label for="username" >ชื่อผู้ใช้</label>
                <input class="form-control" name="username" id="username" type="text">
            </div>
            <div class="form-group">
                <label for="password" >แก้ไขรหัสผ่าน </label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="password2" >ยืนยันรหัสผ่าน</label>
                <input class="form-control" name="password2" id="password" type="password">
            </div>
            <div class="form-group">
                <label for="email" >อีเมล์</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            <div class="form-group">
                <label for="phone" >เบอร์โทรศัพท์ </label>
                <input class="form-control" name="phone" id="phone" type="number">
            </div>
            <div class="form-group">
                <label for="gender" >เพศ </label>
                <select class="form-control" id="gender" name="gender">
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="register">ลงทะเบียน</button>
                <button class="btn btn-primary" name="cancel">ยกเลิก</button>
            </div>
        </form>    
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

