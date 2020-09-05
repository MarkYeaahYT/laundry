<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <script>
            var url = window.location.origin;
        </script>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Laundry App</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="?page=outlet">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Outlet
                            </a>
                            
                            <a class="nav-link collapsed" href="?page=pengguna">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User
                            </a>
                           
                            <a class="nav-link " href="?page=produk" >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Produk
                            </a>
                            <div class="sb-sidenav-menu-heading">Transaksi</div>
                            <a class="nav-link" href="?page=transaksi">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Entri Transaksi
                            </a>
                            <!-- <a class="nav-link" href="?page=laporan">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Generate Laporan
                            </a> -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Outlet</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Outlet</li>
                        </ol>

                        <button id="tambah_o" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                        
                        <br>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Outlet
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                                <th>Produk</th>
                                                <th>Tanggal masuk</th>
                                                <th>Pegawai</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Berat</th>
                                                <th>Produk</th>
                                                <th>Tanggal masuk</th>
                                                <th>Pegawai</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <!-- JS process -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Modal Add-->
        <form>
            <div class="modal fade" id="myModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Tambah</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="berat">Berat</label>
                                        <input type="number" class="form-control" id="berat">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="produk">Produk</label>
                                        <select name="produk" id="produk" class="form-control">
                                           <!-- js process -->
                                         </select>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_add" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <!-- Modal edit-->
        <form>
            <div class="modal fade" id="modal_edit" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="berat_e">Berat</label>
                                        <input type="number" class="form-control" id="berat_e">
                                        <input type="number" class="form-control" id="id_e" hidden>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="produk_e">Produk</label>
                                        <select name="produk_e" id="produk_e" class="form-control">
                                           <!-- js process -->
                                         </select>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_edt" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <!--MODAL DELETE PL-->
        <form>
            <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Are you sure to delete this record?</strong>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
         <!--END MODAL DELETE-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
        <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
        <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

        <!-- my scripts -->
        <script src="myjs/outlet_admin.js"></script>
        <script>
            var mytable;
            $(document).ready(function () {
                mytable = $("#mytable").DataTable({
                    ajax:{
                        url: url+"/laundry/dist/core.php?page=outlet&action=r",
                        dataSrc: "",
                    },
                    columns: [
                        {data: 'nama'},
                        {data: 'berat'},
                        {data: 'produk'},
                        {data: 'tgl_masuk'},
                        {data: 'pegawai'},
                        {render: function (data, type, row) {
                            if(row.status == "process"){
                                return '<button class="btn btn-warning" title="Dalam Proses"><i class="fas fa-clock"></i></button>';
                            }else if(row.status == "selesai"){
                                return '<button class="btn btn-success" title="Sudah Selesai Belum Dibayar"><i class="fas fa-clock"></i></button>';
                            }else{
                                return '<button class="btn btn-success" title="Selesai Terbayar"><i class="fas fa-check"></i></button>';
                            }
                        }},
                        {render: function (data, type, row) {  
                            return '<button title="Edit" class="btn btn-info btnedt"'
                            +'data-berat="'+row.berat
                            +'"data-prdid="'+row.prdid
                            +'"data-id="'+row.id
                            +'"><i class="fas fa-edit"></i></button>'
                            +'<button title="Delete" class="btn btn-danger btndel" data-id="'+row.id+'"><i class="fas fa-trash"></i></button>'
                        }}
                    ]
                });
            });
        </script>
    </body>
</html>
