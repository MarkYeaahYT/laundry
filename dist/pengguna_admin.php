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
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
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
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pegawai</li>
                        </ol>
                        <button id="tambah_o" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                        
                        <br>
                        <br>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pegawai
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tablepg" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- js process -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pelanggan</li>
                        </ol>
                        <button id="tambah_pl" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                        
                        <br>
                        <br>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Pelanggan
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tablepl" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-- js process -->
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

        <!-- Modal Add Pegawai-->
        <form>
            <div class="modal fade" id="myModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Tambah Pegawai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="role">Role</label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="1">Admin</option>
                                            <option value="2">Kasir</option>
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
        <!-- Modal Add PL-->
        <form>
            <div class="modal fade" id="modal_pl" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Tambah Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="namapl">Nama</label>
                                        <input type="text" class="form-control" id="namapl">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="usernamepl">username</label>
                                        <input type="text" class="form-control" id="usernamepl">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="passwordpl">Password</label>
                                        <input type="text" class="form-control" id="passwordpl">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_addpl" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <!-- Modal Edit Pegawai-->
        <form>
            <div class="modal fade" id="modal_editpg" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Edit Pegawai</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="username_epg">Username</label>
                                        <input type="text" class="form-control" id="username_epg">
                                        <input type="text" class="form-control" id="id_epg" hidden>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="password_epg">Password</label>
                                        <input type="text" class="form-control" id="password_epg">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="role_epg">Role</label>
                                        <select class="form-control" name="role_epg" id="role_epg">
                                            <option value="1">Admin</option>
                                            <option value="2">Kasir</option>
                                        </select>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_editpg" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <!-- Modal Edit PL-->
        <form>
            <div class="modal fade" id="modal_editpl" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Edit Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <!-- Body -->
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="nama_epl">Nama</label>
                                        <input type="text" class="form-control" id="nama_epl">
                                        <input type="text" class="form-control" id="id_ep" hidden>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="username_epl">Username</label>
                                        <input type="text" class="form-control" id="username_epl">
                                        <input type="text" class="form-control" id="id_epl" hidden>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <label for="password_epl">Password</label>
                                        <input type="text" class="form-control" id="password_epl">
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <!-- EndBody -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" type="submit" id="btn_editpl" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Modal -->
        <!--MODAL DELETE-->
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
        <!--MODAL DELETE PL-->
        <form>
            <div class="modal fade" id="modal_deletepl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="id_deletple" id="id_deletepl" class="form-control">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="button" type="submit" id="btn_deletepl" class="btn btn-primary">Yes</button>
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
        <!-- <script src="assets/demo/datatables-demo.js"></script> -->

        <!-- My own -->
        <script src="myjs/pengguna_admin.js"></script>
        <script>
            var tablepg;
            var tablepl;
            $(document).ready(function () {
                tablepg = $("#tablepg").DataTable({
                    ajax:{
                        url: url+"/laundry/dist/core.php?page=pengguna&action=r&u=pg",
                        dataSrc: "",
                    },
                    columns:[
                        {data: 'username'},
                        {data: 'password'},
                        {render: function (data, type, row) {  
                            if(row.role == "1"){
                                return "Admin";
                            }else{
                                return "Kasir";
                            }
                        }},
                        {render: function (data, type, row) {  
                            return '<button title="Edit" class="btn btn-info btnedt"'
                            +'data-username="'+row.username
                            +'"data-password="'+row.password
                            +'"data-role="'+row.role
                            +'"data-id="'+row.id
                            +'"><i class="fas fa-edit"></i></button>'
                            +'<button title="Delete" class="btn btn-danger btndel" data-id="'+row.id+'"><i class="fas fa-trash"></i></button>'
                        }}
                    ]
                });

                /**
                 * PL
                 */
                tablepl = $("#tablepl").DataTable({
                    ajax:{
                        url: url+"/laundry/dist/core.php?page=pengguna&action=r&u=pl",
                        dataSrc: ""
                    },
                    columns:[
                        {data: 'nama'},
                        {data: 'username'},
                        {data: 'password'},
                        {render: function (data, type, row) {  
                            return '<button title="Edit" class="btn btn-info btnedt"'
                            +'data-username="'+row.username
                            +'"data-password="'+row.password
                            +'"data-nama="'+row.nama
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
