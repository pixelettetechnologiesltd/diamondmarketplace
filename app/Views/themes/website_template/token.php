<section class="section-about py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
      </div>
    </div>
    <div class="row justify-content-center">
    <h1 style="text-align:center">DiamondNXT  <br> TOKEN SALE</h1>
    
    <p style="text-align:center; color:#D8D8D8;">1 DNXT = 1 MATIC</p>
          <div class="col-sm-6 col-md-6" style="margin-top:30px">
            <?php if(isset($message)){ ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong><?php echo display('Success'); ?>!</strong> <?php echo esc($message); ?>
            </div>
            <?php } ?>
            <?php if(isset($exception)){ ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong><?php echo display('Exception'); ?>!</strong> <?php echo esc($exception); ?>
            </div>
            <?php } ?>
             <?php echo form_open(base_url(''),'id=""  class="" name=""'); ?>
             <div class="mb-3 input-group" style="margin-bottom: 0rem !important;"><span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url() . '/public/assets/images/icons/matic.png' ?>"; width="20"><span style="font-size:12px; color:#808080;padding-left:7px">MATIC</span> </span><input placeholder="0.00" aria-label="0.00" aria-describedby="basic-addon1" type="number" class="form-control" ></div>
             <center><img src="<?php echo base_url() . '/public/assets/images/icons/shift.png' ?>"; width="20"></center>
              <div class="mb-3 input-group"><span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url() . '/public/assets/images/icons/dnxt.png' ?>"; width="20"><span style="font-size:12px; color:#808080;padding-left:7px">DNXT</span> </span><input placeholder="0.00" aria-label="0.00" aria-describedby="basic-addon1" type="number" class="form-control" ></div>
              <!-- Submit -->
             <center> <button type="submit" class="btn"><?php echo display('Buy Token Now'); ?></button></center>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>