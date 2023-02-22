<section class="section-about py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
      </div>
    </div>
    <div class="row justify-content-center">
      <h1 style="text-align:center">DiamondNXT <br> TOKEN SALE</h1>
      <p style="text-align:center; color:#D8D8D8;">1 DNXT = 1 MATIC</p>
      <div class="col-sm-6 col-md-6" style="margin-top:30px">
        <div class="alert alert-success alert-dismissible" hidden id="successDiv">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong>Success:</strong>
          <p id="successMsg"></p>
        </div>
        <div class="alert alert-danger alert-dismissible" hidden id="errorDiv">
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          <strong><?php echo display('Exception'); ?>!</strong>
          <p id="errorMsg"> </p>
        </div>
        <div class="mb-3 input-group" style="margin-bottom: 0rem !important;">
          <span class="input-group-text" id="basic-addon1">
            <img src="<?php echo base_url() . '/public/assets/images/icons/matic.png' ?>" ; width="20" />
            <span style="font-size: 12px; color: #808080; padding-left: 7px;">MATIC</span>
          </span>
          <input id="maticValue" onkeyup="calculateMatic(this.value)" value="1" placeholder="0.00" aria-label="0.00" aria-describedby="basic-addon1" type="number" class="form-control" />
        </div>
        <div class="diamondLogo">
          <center><img src="<?php echo base_url() . '/public/assets/images/icons/shift.png' ?>" ; width="40" /></center>
        </div>
        <div class="mb-3 input-group">
          <span class="input-group-text" id="basic-addon1">
            <img src="<?php echo base_url() . '/public/assets/images/icons/dnxt.png' ?>" ; width="20" />
            <span style="font-size: 12px; color: #808080; padding-left: 7px;">DNXT</span>
          </span>
          <input id="dnxtValue" onkeyup="calculateDNXT(this.value)" value="25" placeholder="0.00" aria-label="0.00" aria-describedby="basic-addon1" type="number" class="form-control" style="" />
        </div>
        <!-- Submit -->
        <center>
          <button onclick="buyDnxtToken()" class="btn" <?php if (!($isLogIn)) { ?> disabled <?php } ?>>Buy Token Now</button>
        </center>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>

<style>
  .diamondLogo {
    height: 40px;
    width: 40px;
    position: relative;
    margin: -18px auto;
    border: 4px solid rgb(26 26 26);
    z-index: 2;
  }

  input[type=number]:focus {
    background-color: #1A1A1A;
    color: white;
  }
</style>

<script>
  const input1 = document.getElementById('maticValue');
  const input2 = document.getElementById('dnxtValue');
  const vendorAbi = [{
    "inputs": [],
    "name": "buyTokens",
    "outputs": [{
      "internalType": "uint256",
      "name": "tokenAmount",
      "type": "uint256"
    }],
    "stateMutability": "payable",
    "type": "function"
  }, ];

  const vendorContractAddress = "0xB503ee2ac862dE16Ea51C144ee8d0117D50F5781";

  function calculateMatic(ish) {
    input2.value = ish / 0.04;
  }

  function calculateDNXT(ish) {
    input1.value = ish * 0.04;
  }

  async function buyDnxtToken() {
    try {

      const provider = new ethers.providers.Web3Provider(window.ethereum, "any");
      const signer = provider.getSigner();
      const contract = new ethers.Contract(vendorContractAddress, vendorAbi, signer);
      const transactionParameters = {
        value: ethers.utils.parseEther(input1.value) // the amount of Ether to send
      };
      const result = await contract.buyTokens(transactionParameters);

      document.getElementById('errorDiv').hidden = true;
      document.getElementById('successDiv').hidden = false;


      const transactionHash = result.hash;
      document.getElementById('successMsg').innerHTML = transactionHash;
      console.log(transactionHash);


      const tranxStatus = await result.wait();
      document.getElementById('successMsg').innerHTML = input2.value + " DNXT Successfully Transfered!";
      console.log(tranxStatus);
      // const newId = await contract.getNewTokenID();

      // if (item.hash) {
      //   let postData = {};
      //   postData[csrf_token] = get_csrf_hash;
      //   postData["owner_wallet"] = item.from;
      //   postData["contract_address"] = item.to;
      //   postData["trx_hash"] = item.hash;
      //   postData["token_id"] = 1 + parseInt(newId._hex, 16);
      //   postData["nftId"] = nftId;

      //   $.ajax({
      //     url: base_url + "/nfts/new-nft-update",
      //     type: "post",
      //     data: postData,
      //     dataType: "json",
      //     success: function(res) {
      //       if (res == 1) {
      //         alert("Your nft created successfully done!");
      //         window.location.href = base_url + "/user/dashboard";
      //       } else {
      //         alert("Something went wrong please try again!");
      //         location.reload();
      //       }
      //     },
      //   });
      // }
    } catch (error) {
      document.getElementById('errorMsg').innerHTML = error.message;
      document.getElementById('errorDiv').hidden = false;
      document.getElementById('successDiv').hidden = true;
      console.log(error);
    }
  }
</script>