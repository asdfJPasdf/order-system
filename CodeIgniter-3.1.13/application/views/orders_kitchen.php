
<br>
<div class="container-fluid">
<h2><?php echo $status?> Bestellungen</h2>
<hr>
<div class="row">
<?php foreach($orders as $order){?>
<div class="col-lg-2 grid-margin stretch-card">
  
              <div class="card">

              <p>Bestellt am <?php echo $date ?> </p>
              <p>vor <?php echo $timespan?></p>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Bestellung <?php echo $order[0]['orders_id'];?></h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Artikel</th>
                          <th>Anzahl</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                      <?php foreach($order as $o){?>
                        <tr>
                          <td><?php echo $o['product_name'];?></td>
                          <td><?php echo $o['number'];?>x</td>
                        </tr>
                        
                        <?php } ?>
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
<br>