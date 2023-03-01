<div class="profile-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6"> 
                <div class="p-3 p-sm-5">
                <?php if(isset($message)){ ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong><?php echo display('Success'); ?>!</strong> <?php echo $message; ?>
                </div>
                <?php } ?>
                <?php if(isset($exception)){ ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong><?php echo display('Exception'); ?>!</strong> <?php echo $exception; ?>
                </div>
                <?php } ?>
                <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                            aria-selected="true"><?php echo display('KYC'); ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="withdraw-tab" data-bs-toggle="tab" data-bs-target="#withdraw"
                            type="button" role="tab" aria-controls="withdraw"
                            aria-selected="false"><?php echo display('KYB'); ?></button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <?php echo form_open_multipart("", ""); ?>
                            <div class="row">      
                                    <div class="mb-4">
                                        <input type="text" name="full_name" class="form-control" id="" value="<?php echo esc($profile->full_name); ?>" placeholder="Full name" required>
                                    </div> 
                                    <div class="mb-4">
                                        <input type="text" name="Dob" class="form-control" id="dob" onfocus="(this.type = 'date')" value="<?php echo esc($profile->Dob); ?>" placeholder="Date of Birth" required>
                                    </div> 
                                    <div class="mb-4">
                                        
                                    <input type="text" name="Residential_Address" class="form-control" id="" value="<?php echo esc($profile->Residential_Address); ?>" placeholder="Residential Address" required>
                                    </div>
                                                 
                                    <div class="mb-4">
                                        <input type="text" class="form-control" name="ID_number" id="email" value="<?php echo esc($profile->ID_number) ?>" placeholder="National ID Number or Passport Information">
                                    </div>
                                    <div class="mb-4">
                                    <input type="hidden" name="old_port_address" value="<?php echo esc($profile->port_address) ?>">
                                    <input type="file" name="port_address" placeholder="Proof of Address(e.g, Utility Bill)" class="form-control" value="<?php echo esc($profile->port_address) ?>" onfocus="this.type='file'" id="">
                                    </div>
                                    <button type="submit" class="btn btn-dark  btn-profile mt-4"><?php echo display('Update_Profile'); ?></button>
                               
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                 
                    <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                    <?php echo form_open('user/withdraw', array('class' => 'withdraw-form', 'id' => 'withdraw_form', 'enctype' => 'multipart/form-data')); ?>  
                        <div>
                            
                            <div class="mt-5">
                           
                            <div class="row">      
                            <div class="mb-4">
                                        <input type="text" name="Business_Name" class="form-control" id="" value="<?php echo esc($profile->Business_Name); ?>" placeholder="Business Name" required>
                                    </div> 
                                    <div class="mb-4">
                                        <input type="text" name="Registration_No" class="form-control" id="dob" value="<?php echo esc($profile->Registration_No); ?>" placeholder="Registration No" required>
                                    </div> 
                                    <div class="mb-4">
                                        
                                    <input type="text" name="Business_Address" class="form-control" id="" value="<?php echo esc($profile->Business_Address); ?>" placeholder="Business Address" required>
                                    </div>
                                                 
                                    <div class="mb-4">
                                        <input type="text" class="form-control" name="detail" id="email" value="<?php echo esc($profile->detail) ?>" placeholder="Detail(Business owners, Directors, and Senior Management)">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control" name="Business_Activities" id="email" value="<?php echo esc($profile->Business_Activities) ?>" placeholder="Business Activities">
                                    </div>
                                    <div class="mb-4">
                                        <input type="text" class="form-control" name="Source_of_Income" id="email" value="<?php echo esc($profile->Source_of_Income) ?>" placeholder="Source of Income">
                                    </div>
                                    <div class="mb-4">
                                    <input type="hidden" name="old_port_addresskyb" value="<?php echo esc($profile->port_addresskyb) ?>">
                                    <input type="file" name="port_addresskyb" placeholder="Proof of Address(e.g, Utility Bill)" class="form-control" value="<?php echo esc($profile->port_addresskyb) ?>" onfocus="this.type='file'" id="">
                                    </div>
                                    <div class="mb-4">
                                   
                                    <textarea id="Description of Products" name="Description_of_Products"  class="form-control" rows="4" cols="50"><?php  echo esc($profile->Description_of_Products)  ?></textarea>

                                    </div>
                                    <button type="submit" class="btn btn-dark  btn-profile mt-4"><?php echo display('Update_Profile'); ?></button>
                               
                            </div>
 
                                <?php echo form_close(); ?>
                                
                                 
                               
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


        