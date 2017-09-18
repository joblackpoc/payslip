<?php $this->load->view('header');?>
 
 <div class="container">   
    <div class="row">
        <div class="box">
            <div class="col-lg-8">
                <h3>โปรดกรอกข้อมูลให้ถูกต้องครบถ้วน เพื่อเข้าสู่ระบบ</h3><br/>
                
                <form action="<?php echo base_url(); ?>main/login_validation" method="post">    

                    <div class="form-group">
                        <label for="username" >ชื่อผู้ใช้</label>
                        <input class="form-control" name="username" id="username" type="text" placeholder="เลขประจำตัวประชาชน"/>
                        <span class="text-danger"><?php echo form_error('username');?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" >รหัสผ่าน </label>
                        <input class="form-control" name="password" id="password" type="password" placeholder="รหัสผ่าน"/>
                        <span class="text-danger"><?php echo form_error('password');?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="insert" value="Login" class="btn btn-info"/>
                        <span class="text-danger"><?php echo $this->session->flashdata("error");?></span>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>

<?php $this->load->view('footer');?>
