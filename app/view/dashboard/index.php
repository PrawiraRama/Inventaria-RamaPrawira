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
        <div class="row mt-4">
            <!-- Card Content Start -->
            <!-- Card 1 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-border-right-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-l font-weight-bold text-uppercase mb-1 d-flex">
                                    Rama Prawira
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Manajer Gudang
                                </div>
                            </div>
                        </div>
                    </div>


                  <!-- Modal -->
                        <div class="d-flex row no-gutters justify-content-end me-2">
                          <div class="col-auto">
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-fw fa-edit"></i>
                          </button>
                            

                            <!-- Modal Edit -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="container">
                                    <form>
                                       <div class="form-group">
                                          <label for="FormControlInput">Nama</label>
                                          <input type="text" class="form-control" id="FormControlInput">
                                        </div>

                                          <div class="form-group">
                                            <label for="exampleFormControlInput1">Jabatan</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1">
                                          </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-primary">Edit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                                <!-- Button Tong Sampah -->
                                <button type="button" class="btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>

                          </div>
                        </div>
                  </div>
            </div>



            <!-- Card 2 -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Bali Zoo
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    Rp.75.000
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 2 -->

            <!-- Card 3 (Earnings) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Earnings (Annual)
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 3 (Earnings) -->

            <!-- Card 4 (Pending Requests) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card 4 (Pending Requests) -->
        </div>
        <!-- End of Main Content -->
        
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end btn-add position-absolute bottom-0 end-0">
            <button type="button" class="btn btn-add btn-primary" data-bs-toggle="modal" data-bs-target="#Add">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="Add1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="Add1">ADD</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Rak
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <form class="accordion-body form-control" action="<?=BASEURL?>/dashboard/tambahRak" method="POST">
                                        <div class="mb-3 row">
                                            <label for="inputRak" class="col-sm-4 col-form-label">Nama Rak :</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="namarak" class="form-control" id="inputRak">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputJmlKolom" class="col-sm-4 col-form-label">Jumlah kolom :</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="jumlahkolom"class="form-control" id="inputJmlKolom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row col-md-3 save-button">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <form action="<?= BASEURL ?>/dashboard/tambahBarang" method="post">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Barang
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="mb-3 row">
                                                <label for="inputBrg" class="col-sm-4 col-form-label">Nama Barang :</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="inputBrg" name="namaBarang">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">Keterangan :</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="inputKet" name="keterangan">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputRak" class="col-sm-4 col-form-label">Rak :</label>
                                                <div class="col-sm-7">
                                                    <select name="idRak" class="form-select" aria-label="Default select example" id="inputRakbarang">
                                                        <?php foreach ( $data['rakData'] as $rowRak) : ?>
                                                            <option value="<?= $rowRak['id_rak'] ?>" ><?= $rowRak['nama_rak'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputKolom" class="col-sm-4 col-form-label">Kolom :</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" aria-label="Default select example" id="inputKolombarang" name="jumlahKolom">
                                                        <option value="">Pilih Rak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputStok" class="col-sm-4 col-form-label">Stock :</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="inputStok" name="stok">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="inputGambar" class="col-sm-4 col-form-label">Gambar :</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" type="file" id="inputGambar" name="gambarBarang" style="background : blue;">
                                                </div>
                                            </div>
                                            <div class="mb-3 row col-md-3 save-button">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
