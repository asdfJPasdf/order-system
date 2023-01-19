<style>
   body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 10px;
     border-style
 }
 
 .card .card-title {
    color: #000000;
    margin-bottom: 0.625rem;
    text-transform: capitalize;
    font-size: 0.875rem;
    font-weight: 500;
}

.card .card-description {
    margin-bottom: .875rem;
    font-weight: 400;
    color: #76838f;
}

p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem;
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table, .jsgrid .jsgrid-table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: 500;
    text-transform: uppercase;
}

.table td, .jsgrid .jsgrid-table td {
    
    padding: .875rem 0.9375rem;
}

.badge {
    border-radius: 0;
    
    line-height: 1;
    padding: .375rem .5625rem;
    font-weight: normal;
}
 
</style>

<h2><?php echo $status?> Bestellungen</h2>

<?php foreach($orders as $order){?>

<div class="col-lg-2 grid-margin stretch-card">
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
                          <td>$<?php echo $o['product_price'];?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php }?>

              