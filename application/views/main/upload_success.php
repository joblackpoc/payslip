<?php $this->load->view('header');?>
<div class="container">
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <h3>อัพโหลดไฟล์ เสร็จสมบูรณ์!</h3>
          <ul>
              <!-- ไม่ต้องการแสดงรายละเอียดทั้งหมด -->
              <!--<?php foreach ($upload_data as $item => $value):?>
                <li><?php echo $item;?>: <?php echo $value;?></li>
                <?php endforeach; ?> -->
                
              <li><?php echo "File Name : ". $upload_data['file_name'];?></li>
              <li><?php echo "File Type : ". $upload_data['file_type'];?></li>
              <li><?php echo "File Size : ". $upload_data['file_size'];?></li>
          </ul>
          <!--<p><?php echo anchor('main/upload', 'อัพโหลดไฟล์เพิ่มอีก!'); ?></p>-->
          <a href="<?php echo base_url(); ?>main/upload" class="btn btn-info active" role="button" aria-pressed="true">อัพโหลดไฟล์เพิ่ม</a>
          <a href="<?php echo base_url(); ?>main/import" class="btn btn-success active" role="button" aria-pressed="true">ขั้นตอนถัดไป</a>    
      </div>
      </div>
    </div>
  </div>
<?php $this->load->view('footer');?>
