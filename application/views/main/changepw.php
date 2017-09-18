<?php $this->load->view('header');?>
 
 <div class="container">   
    <div class="row">
        <div class="box">
            <div class="col-lg-8">
                <h3> </h3><br/>
        <?php if(isset($_SESSION['success']))
              { ?> 
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
        <?php } ?>
        
        <?php echo validation_errors("<div class='alert alert-danger'>","</div>");?>
        <?php echo form_open("main/changepassword/".$this->uri->segment(3));?>
                
                <form action="<?php echo base_url(); ?>main/form_validation" method="post">    
                    
                    <div class="form-group">
                        <label for="password" >แก้ไขรหัสผ่าน </label>
                        <input class="form-control" name="password" id="password" type="password" placeholder="รหัสผ่านใหม่ไม่น้อยกว่า 6 ตัวอักษร">
                    </div>
                    <div class="form-group">
                        <label for="password2" >ยืนยันรหัสผ่าน</label>
                        <input class="form-control" name="password2" id="password" type="password" placeholder="พิมพ์รหัสผ่านใหม่อีกครั้ง">
                    </div>
                    <div class="form-group">
                        <label for="email" >อีเมล์</label>
                        <input class="form-control" name="email" id="email" type="email" placeholder="อีเมล์ของท่าน ">
                    </div>
                    <div class="form-group">
                        <label for="phone" >เบอร์โทรศัพท์ </label>
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="หมายเลขโทรศัพท์ที่ติดต่อได้">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="btsubmit" value="ตกลง" class="btn btn-info"/>
                    </div>
                </form> 
        <?php echo form_close();?>
            </div>
        </div>
    </div>
 </div>
<?php $this->load->view('footer');?>
