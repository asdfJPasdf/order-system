    
<section class="h-100 h-custom bg-light" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Warenkorb</h1>
                    <h6 class="mb-0 text-muted"><?php echo $number?> Produkte</h6>
                  </div>
                  <?php foreach($products as $product){?>
                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                        <h6 class="text-black mb-0"><?php echo $product['product_name']?></h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted"><?php echo $product['product_description']?></h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <!-- <button class="btn btn-link px-2" -->
                            <!-- onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> --> 
                            <!-- <i class="fas fa-minus"></i> --> 
                        <!-- </button> -->
                      <form action="<?php echo $url?>cart_controller/changeNumber/<?php echo $product['product_id']?>" method="post">
                        <input id="form1" min="0" name="number" value="<?php echo $product['number']?>" type="number" class="form-control form-control-sm" />

                      </form>
                      
                        <script>
                          document.getElementById("form1").onblur = function() {
                            this.form.submit();
                          };
                        </script>
                        <button class="btn btn-link px-2"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">CHF <?php echo $product['product_price']?></h6>
                        </div>

                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="<?php echo $url?>cart_controller/removeItem/<?php echo $product['product_id']?>" ><button class="btn btn-danger">Löschen</button></a>
                          </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                        </div>
                    </div>
                <?php }?>

                  <hr class="my-4">

                  <div class="pt-5">
                    <h6 class="mb-0"><a href="<?php echo $url?>food" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Zurück zur Speisekarte</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Zusammenfassung</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">Produkte <?php echo $number?></h5>
                    <h5>CHF <?php echo $whole_price?></h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Standard-Delivery- €5.00</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div>

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Gesamterpreis</h5>
                    <h5>CHF 137.00</h5>
                  </div>

                    <form action="<?php echo base_url()."cart_controller/sendOrder"?>" method="post"> 
                    <input class="btn btn-dark btn-block btn-lg" type="submit" name="cart"
                            value="Bestellen"/> 
	                </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>