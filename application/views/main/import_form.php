<?php $this->load->view('header');?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
              <?php echo $error;?>
                <?php echo form_open_multipart('main/import');?><!-- do_upload-->
                <input class="form-control-file" type="file" name="userfile" size="50" />
                    <br /><br />
                    <input type="submit" value="upload" class="btn btn-info"/>
                </form>  
                <form>
               
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer');?>