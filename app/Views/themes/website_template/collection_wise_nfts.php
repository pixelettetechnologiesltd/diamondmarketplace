        <div class="container">
          <h1 style="text-align:center;margin-top:50px">NEXT GENERATION OF </br> DIAMONDS!</h1>
          <div class="row" style="margin-top:50px">
            <div class="col-md-6">
              <span class="cut">Color</span>
              <div id="color-slider" style="margin-top:22px">
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
              <div style="margin-top:40px">
                <button onclick="getcollectionNftsFilter()" class="btn1 btn1-registration">Apply Filter</button>
              </div>
            </div>
          </div>
          <div class="text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-3">
            </div>

            <?php if (isset($collectionInfo->id) && isset($totalItem)) {  ?>
              <div collect-id="<?php echo esc($collectionInfo->id); ?>" style="margin-top:100px" class="row g-3 item-wrap" id="ajax_collection_wise_nfts">

              </div>
            <?php if ($totalItem > 20) {
                echo '<button type="button" class="btn btn-outline-primary load-btn" id="loadmore_coll_nft">Load More</button>';
              }
            } else {
              echo "No data found";
            }
            ?>

          </div>
          <br>
          <br>
          <br>
          <script>
            function getcollectionNftsFilter() {
              let base_uri = $("#siteuri").attr("mybaseuri");
              let coll_id = $("#ajax_collection_wise_nfts").attr("collect-id");
              let color_id = document.getElementsByName("color-slider");
              let clarity_id = document.getElementsByName("clarity-slider");
              let carat_id = document.getElementsByName("carat-slider");
              let cut_id = document.getElementsByName("cut-slider");
              let price_id = document.getElementsByName("price-slider");

              var grtCollNftsUrl = base_uri + "/ajax_coll_nfts_filter/" + coll_id + "/" + color_id[0].value + "/" + clarity_id[0].value + "/" + carat_id[0].value + "/" + cut_id[0].value + "/" + price_id[0].value + "/" + 1;
              if (coll_id) {
                $.ajax({
                  url: grtCollNftsUrl,
                  type: "GET",
                  dataType: "json",
                  contentType: "application/json",
                  success: function(res) {
                    $("#ajax_collection_wise_nfts").html(res.data);
                    // console.log(res.data);
                  },
                });
              }
            }
          </script>