<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" -->
                <!-- class="rounded-circle img-fluid" style="width: 100px;" /> -->
                <i class="bi bi-person-circle"></i>
            </div>
            <h4 class="mb-2"><?php echo $first_name." ".$last_name?></h4>
            <p class="text-muted mb-4">@<?php echo $username?> <span class="mx-2">|</span> <a
                href="#!"><?php echo $email?></a></p>
            
            <button type="button" class="btn btn-primary btn-rounded btn-lg">
              Message now
            </button>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              <div>
                <p class="mb-2 h5"><?php echo $count_orders?></p>
                <p class="text-muted mb-0">Anzahl Bestellungen</p>
              </div>
              <div class="px-3">
                <p class="mb-2 h5">8512</p>
                <p class="text-muted mb-0">Lieblingsgerricht</p>
              </div>
              <div>
                <p class="mb-2 h5"><?php echo $user_since?></p>
                <p class="text-muted mb-0">User seit</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>