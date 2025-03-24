@php
    use App\Models\Video;
    use App\Models\User;
    use App\Models\Admin;

    $totalVideos = Video::count(); // Hitung jumlah video
    $totalUsers = User::count(); // Hitung jumlah user
    $totalAdmins = Admin::count(); // Hitung jumlah admin
@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>KelolainAja - Dashboard</title>

    <!-- Custom fonts for this template-->
    @vite('resources/css/app.css')
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #FF4655;">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">KelolainAja</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Dashboard</span>
                </a>
                <a class="nav-link collapsed" href="#"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pemesanan</span>
                </a>
                <a class="nav-link collapsed" href="#" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Users</span>
                </a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="relative">
                            <div class="dropdown dropdown-end">
                                <button
                                    class="flex items-center bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-red-600 focus:ring-2 focus:ring-red-400">
                                    <i class="fas fa-user-circle text-xl mr-2"></i> {{ Auth::user()->name }}
                                    <i class="fas fa-chevron-down ml-2 text-sm"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <ul
                                    class="dropdown-content absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                            <i class="fas fa-user fa-sm mr-2 text-gray-500"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                            <i class="fas fa-cogs fa-sm mr-2 text-gray-500"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition">
                                            <i class="fas fa-list fa-sm mr-2 text-gray-500"></i> Activity Log
                                        </a>
                                    </li>
                                    <div class="border-t border-gray-200"></div>
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}"
                                            class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm mr-2 text-gray-500"></i> Logout
                                        </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="flex">
                        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                            <table class="table">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Name</th>
                                  <th>Job</th>
                                  <th>Favorite Color</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                <tr>
                                  <th>1</th>
                                  <td>Cy Ganderton</td>
                                  <td>Quality Control Specialist</td>
                                  <td>Blue</td>
                                </tr>
                                <!-- row 2 -->
                                <tr>
                                  <th>2</th>
                                  <td>Hart Hagerty</td>
                                  <td>Desktop Support Technician</td>
                                  <td>Purple</td>
                                </tr>
                                <!-- row 3 -->
                                <tr>
                                  <th>3</th>
                                  <td>Brice Swyre</td>
                                  <td>Tax Accountant</td>
                                  <td>Red</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; KelolainAja 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages -->

    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>
