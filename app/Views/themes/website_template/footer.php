<!-- Start footer -->
        <footer class="main-footer position-relative">
            <div class="container">
              
                <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
              <h2 class="get_in_touch">GET IN <br>Touch</h2>
              <span class="line"></span>
              <br></br>
              <span class="text">Text to us and tell us what you are looking for.</span>
            </div>
                </div>
                <br></br>
                
                <div class="row">
                    
                    <div class="col-lg-3 col-xl-3 mb-5">
                        <div class="footer-about">
                           
                        </div>
                    </div>
                    <div class="col-lg-9 col-xl-8 ">
                        <div class="row">
                            <div class="col-6 col-md-3 mb-3 mb-lg-0">
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white">
                                   <?php echo display('Address:'); ?> 
                                </h3>
                                <!-- Footer nav link -->
                                <ul class="footer-link list-unstyled menu">
                                    <li class="link d-block font-weight-500"><?php echo display('Abade FARIA No 36 A/B 1900-008 LISBON'); ?></li>
                                     
                                </ul>
                            </div> 
                            <div class="col-6 col-md-3 mb-3 mb-sm-0">
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('PHONE:'); ?></h3>
                                <!-- Footer nav link -->
                                <ul class="footer-link list-unstyled menu">

                                    <li><a href="<?php echo base_url('contact') ?>" class="link d-block font-weight-500"><?php echo display('+351 218481149'); ?></a></li>
                                </ul>
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('WHATSAPP:'); ?></h3>
                                <ul class="footer-link list-unstyled menu">

                              <li><a href="<?php echo base_url('contact') ?>" class="link d-block font-weight-500"><?php echo display('+351 925287726'); ?></a></li>
                             </ul>
                            </div>
                            <div class="col-sm-6 col-md-6 mt-5 mt-md-0">
                                 
                                <h3 class="link-title fs-18 mb-3 font-weight-600 position-relative text-white"><?php echo display('Email'); ?>
                                </h3>
                                <div class="copyright" style="color: #A9A9A9; font-size: 14px; transform: rotate(270deg); position: relative; left: 130px; bottom: 53px;">ES PT EN ©DiamondNXT - 2023</div>

                                <!-- Social link -->
                                <ul class="footer-link list-unstyled menu">

                              <li><a href="<?php echo base_url('contact') ?>" class="link d-block font-weight-500"><?php echo display('info@diamondnxt.com'); ?></a></li>
                             </ul>
                                
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </footer>
        <!-- Sub footer -->
        
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"><?php echo display('Connect wallet'); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p> <?php echo display('Please connect your metamask. If you don\'t have a metamask yet, you can install now.'); ?></p>
            <button type="button" class="align-items-center btn btn-wallet d-flex fw-semi-bold mb-1 px-4 py-2 w-100" id="connect_wallet">
                <img src="<?php echo base_url('/public/assets/images/metamsak.svg'); ?>" alt="">
                <span class="ms-2"><?php echo display('Connect MetaMask'); ?></span>
            </button>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url(); ?>/public/assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/smooth-scrollbar/dist/smooth-scrollbar.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/smooth-scrollbar/dist/plugins/overscroll.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/plugins/OwlCarousel2/owl.carousel.min.js"></script> 
    <script src="<?php echo esc($frontendAssets); ?>/plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>  
 
    <script src="<?php echo esc($frontendAssets); ?>/js/detect-provider.min.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/js/ethers-5.2.umd.min.js"></script> 
    
    <script src="<?php echo esc($frontendAssets); ?>/js/abi.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/js/custom.js"></script>  
    <script src="<?php echo esc($frontendAssets); ?>/js/wallet.js"></script>
    <script src="<?php echo esc($frontendAssets); ?>/js/slider.js"></script>
</body>

</html>


