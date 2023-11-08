<div class="col-10">
    <!-- Navbar Design -->
    <div class="navbar-design shadow">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <div class="input-group search-layout">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end profile-layout">
                    <p>User</p>
                    <i class="fa-solid fa-circle-user"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Design -->

    <div class="container">
        <!-- Content Row -->

        <h1 class="h3 mb-0 text-gray-800 mt-2">Dashboard Use</h1>
        
        <div class="row mt-4">

               
          
            <!-- Card Content Start -->
            <!-- Card 1 -->
            <?php foreach ($data['user'] as $user) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-l font-weight-bold text-uppercase mb-1 d-flex">
                                    <?=$user['nama']?>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?=$user['jabatan']?>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
            <?php endforeach ?>

        </div>
        <!-- End of Main Content -->
        

