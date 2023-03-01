<?php 
    $i=1; 
    foreach ($article as $con_key => $con_value) {
        $con_headline[]     =   $con_value->headline_en;
        $contract_1[]      =   $con_value->article1_en;
        $contract_2[]   =   $con_value->article2_en;

      $i++;
    }
?>

<section class="section-about py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-8">
        <div class="row align-items-center">
          <div class="col-sm-6 col-md-6 mb-5 mb-md-0">
            <div class="contact-info">
              <div class="mb-4">
                <h3 class="info-title link-title fs-18 mb-3 font-weight-600 position-relative">DROP A MESSAGE</h3>
                <address class="mb-4">
               
                </address>
              </div>
              <!-- /.End of address -->
             
            
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
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
             <?php echo form_open(base_url('contactMsg'),'id="contactForm"  class="contact_form" name="contactForm"'); ?>
              <div class="mb-3">
                <input type="text" class="form-control" id="contactName" name="fullname" placeholder="Name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Email">
              </div>
             
              <div class="mb-3">
                <textarea class="form-control" id="contactMessage" name="comment" rows="5" 
                  placeholder="Message"></textarea>
              </div>
              <!-- Submit -->
             <center> <button type="submit" class="btn"><?php echo display('Submit'); ?></button></center>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc($googleapikeydecode['api_key']); ?>" type="text/javascript"></script>
<script src="<?php echo esc($frontendAssets); ?>/js/maps.js"></script>
