<br>
<div class="container-fluid">
<h2>Bestellungen</h2>
<hr>
<div class="row">
<?php foreach($orders as $order){?>
<div class="col-lg-2 grid-margin stretch-card">
              <div class="card">
            <div class="card-header">
              <h4 class="card-title">Bestellung <?php echo $order[0]['orders_id'];?></h4>
              <p>Bestellt am <?php echo $controller->calcTime($order[0]['created'])[0]?> </p>
              <p>vor <?php   echo ($controller->calcTime($order[0]['created'])[1] != 0)? $controller->calcTime($order[0]['created'])[1]." Stunden und ". $controller->calcTime($order[0]['created'])[2]." Minuten" : $controller->calcTime($order[0]['created'])[2]." Minuten"?></p>
            </div>
                <div class="card-body">
                
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
                    <a href="<?php $url?>kitchen_controller/changeStatus/<?php echo $order[0]['orders_id']?>"><button class="btn btn-primary"> Erledigt</button></a>
                  </div>
                </div>
              </div>
            </div>
<?php }?>
</div>
</div>
<br>