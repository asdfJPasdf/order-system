

<h2><?php echo $status?> Bestellungen</h2>
<div class="container">
<div class="row">
<?php foreach($orders as $order){?>
<div class="col-lg-3 grid-margin stretch-card">
  
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bestellung <?php echo $order[0]['orders_id'];?></h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Artikel</th>
                          <th>Preis</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                      <?php foreach($order as $o){?>
                        <tr>
                          <td><?php echo $o['product_name'];?></td>
                          <td>CHF <?php echo $o['product_price'];?></td>
                          <?php $total += $o['product_price'] ?>
                        </tr>
                        
                        <?php } ?>
                        <tr class="table-info">
                          <td><b>Total:</b></td>
                          <td>CHF <?php echo $total;
                          $total = 0;
                          ?></td>
                        </tr>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php }?>
</div>
</div>
              