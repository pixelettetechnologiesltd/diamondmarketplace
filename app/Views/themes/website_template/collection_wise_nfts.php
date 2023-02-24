        <div class="container">
          <h1 style="text-align:center;margin-top:50px">NEXT GENERATION OF </br> DIAMONDS!</h1>
          <?php echo form_open_multipart("", array("method" => "GET")) ?>
          <div class="row" style="margin-top:50px">
            <div class="col-md-6">
            
              <span class="cut">Color</span>
              <div id="color-slider" style="margin-top:22px">
              <?php echo   $_GET['color-slider']  ?>
            </div>
            </div>
            <div class="col-md-6">
              <span class="cut">Clarity</span>
              <div id="clarity-slider" style="margin-top:22px"></div>
              
            </div>
            <div class="col-md-6" style="margin-top:50px">
              <span class="cut">Carat</span>
              <div id="carat-slider" style="margin-top:22px"></div>
            </div>
            <div class="col-md-6" style="margin-top:50px">
              <span class="cut">Cut</span>
              <div id="cut-slider" style="margin-top:22px"></div>
            </div>
            <div class="col-md-6" style="margin-top:50px">
              <span class="cut">Price (USD)</span>
              <div id="price-slider" style="margin-top:22px"></div>
            </div>
            <div class="col-md-6" style="margin-top:50px">
              <div  style="margin-top:40px">
              <button type="submit" class="btn1 btn1-registration">Apply Filter</button>
            </div>
            </div>
            <?php echo form_close() ?>
          </div>
          <div class="text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-3">
            </div>
           <?php   if(isset($collectionInfo->id) && isset($totalItem)){  ?>
            <div collect-id="<?php echo esc($collectionInfo->id); ?>" style="margin-top:100px" class="row g-3 item-wrap" id="ajax_collection_wise_nfts">

            </div>
            <?php if ($totalItem > 20) {
              echo '<button type="button" class="btn btn-outline-primary load-btn" id="loadmore_coll_nft">Load More</button>';
            }}
            else{
            echo "no data found";
            }
            ?>

          </div>
          <br>
          <br>
          <br>