        <div class="container">
       
          <h1 style="text-align:center;margin-top:50px">NEXT GENERATION OF </br> DIAMONDS!</h1>
          <div class="row" style="margin-top:50px">
            <div class="col-md-6">
              <span class="cut">Cut</span>
              <div id="default" style="margin-top:22px"></div>
              
            </div>

            <div class="col-md-6">
              <span class="cut">Clarity</span>
              <div slider id="slider-distance">
                <div>
                  <div inverse-left style="width:70%;"></div>
                  <div inverse-right style="width:70%;"></div>
                  <div range style="left:30%;right:40%;"></div>
                  <span thumb style="left:30%;"></span>
                  <span thumb style="left:60%;"></span>
                  <div sign style="left:30%;">
                    <span id="value">30</span>
                  </div>
                  <div sign style="left:60%;">
                    <span id="value">60</span>
                  </div>
                </div>
                <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[1].style.width=value+'%';
                    children[5].style.left=value+'%';
                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                    children[11].childNodes[1].innerHTML=this.value;" />

                <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[3].style.width=(100-value)+'%';
                    children[5].style.right=(100-value)+'%';
                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                    children[13].childNodes[1].innerHTML=this.value;" />
              </div>
            </div>
            <div class="col-md-6">
              <span class="cut">Carat</span>
              <div slider id="slider-distance">
                <div>
                  <div inverse-left style="width:70%;"></div>
                  <div inverse-right style="width:70%;"></div>
                  <div range style="left:30%;right:40%;"></div>
                  <span thumb style="left:30%;"></span>
                  <span thumb style="left:60%;"></span>
                  <div sign style="left:30%;">
                    <span id="value">30</span>
                  </div>
                  <div sign style="left:60%;">
                    <span id="value">60</span>
                  </div>
                </div>
                <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[1].style.width=value+'%';
                    children[5].style.left=value+'%';
                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                    children[11].childNodes[1].innerHTML=this.value;" />

                <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[3].style.width=(100-value)+'%';
                    children[5].style.right=(100-value)+'%';
                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                    children[13].childNodes[1].innerHTML=this.value;" />
              </div>
            </div>
            <div class="col-md-6">
              <span class="cut">Color</span>
              <div slider id="slider-distance">
                <div>
                  <div inverse-left style="width:70%;"></div>
                  <div inverse-right style="width:70%;"></div>
                  <div range style="left:30%;right:40%;"></div>
                  <span thumb style="left:30%;"></span>
                  <span thumb style="left:60%;"></span>
                  <div sign style="left:30%;">
                    <span id="value">30</span>
                  </div>
                  <div sign style="left:60%;">
                    <span id="value">60</span>
                  </div>
                </div>
                <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[1].style.width=value+'%';
                    children[5].style.left=value+'%';
                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                    children[11].childNodes[1].innerHTML=this.value;" />

                <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[3].style.width=(100-value)+'%';
                    children[5].style.right=(100-value)+'%';
                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                    children[13].childNodes[1].innerHTML=this.value;" />
              </div>
            </div>
            <div class="col-md-6">
              <span class="cut">Price (USD)</span>
              <div slider id="slider-distance">
                <div>
                  <div inverse-left style="width:70%;"></div>
                  <div inverse-right style="width:70%;"></div>
                  <div range style="left:30%;right:40%;"></div>
                  <span thumb style="left:30%;"></span>
                  <span thumb style="left:60%;"></span>
                  <div sign style="left:30%;">
                    <span id="value">30</span>
                  </div>
                  <div sign style="left:60%;">
                    <span id="value">60</span>
                  </div>
                </div>
                <input type="range" tabindex="0" value="30" max="100" min="0" step="1" oninput="
                    this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[1].style.width=value+'%';
                    children[5].style.left=value+'%';
                    children[7].style.left=value+'%';children[11].style.left=value+'%';
                    children[11].childNodes[1].innerHTML=this.value;" />

                <input type="range" tabindex="0" value="60" max="100" min="0" step="1" oninput="
                    this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                    var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
                    var children = this.parentNode.childNodes[1].childNodes;
                    children[3].style.width=(100-value)+'%';
                    children[5].style.right=(100-value)+'%';
                    children[9].style.left=value+'%';children[13].style.left=value+'%';
                    children[13].childNodes[1].innerHTML=this.value;" />
              </div>
            </div>

          </div>
          <div class="text-center mb-5">
            <div class="d-flex align-items-center justify-content-center mb-3">
            </div>

            <div collect-id="<?php echo esc($collectionInfo->id); ?>" style="margin-top:100px" class="row g-3 item-wrap" id="ajax_collection_wise_nfts">

            </div>
            <?php if ($totalItem > 20) {
              echo '<button type="button" class="btn btn-outline-primary load-btn" id="loadmore_coll_nft">Load More</button>';
            } ?>

          </div>

          <br>
          <br>
          <br>