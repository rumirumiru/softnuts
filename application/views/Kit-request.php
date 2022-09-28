<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>SIPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/css/jquery-ui.css" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>

    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url();
        ?>assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Nik Patel <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="remixicon-logout-box-line"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?php echo base_url('Home_controller/dashboard');?>" class="logo text-center">
                    <span class="logo-lg">
                        <img src="<?php echo base_url();?>assets/images/logo-light.jpg" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">Xeria</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">X</span> -->
                        <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="<?php echo base_url('index.php/Dashboard_controller/dashboard');?>"
                                class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Dashboard_controller/kit_request');?>"
                                class="waves-effect">
                                <i class="remixicon-dashboard-line"></i>
                                <span> Drop-In Center </span>
                            </a>
                        </li>


                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">ISDQI</a></li>

                                        <li class="breadcrumb-item active">Drop-In Center</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Drop-In Center </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#request-ass" data-toggle="tab" aria-expanded="true"
                                            class="nav-link active">
                                            <span class="d-inline-block d-sm-none"></span>
                                            <span class="d-none d-sm-inline-block">Request Assisstance</span>
                                        </a>
                                    </li>



                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="request-ass">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">Search Navigator </label>
                                                <input type="text" class="form-control" name="" id="" value=""
                                                    autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-10">

                                                <div class="widget-rounded-circle card-box">

                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <div class="avatar-lg">
                                                                <img src="http://localhost/ISDQI/isdqi-app/assets/images/users/avatar-1.jpg"
                                                                    class="img-fluid rounded-circle" alt="user">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h5 class="mt-0">Test</h5>
                                                            <p class="text-muted mb-1 font-13">11 Main Street ,
                                                                Huntington, NY-11743
                                                                Contact Number: 5166625462</p>

                                                        </div>
                                                        <div class="col-md-4 text-right">
                                                            <button class="btn btn-primary btn-sm book_app"
                                                                id="btn-appointment">Book Appointment</button>
                                                        </div>
                                                    </div>

                                                    <div class="mt-3" id="select_dr" style="display:none">
                                                        <div class="form-group col-md-8">
                                                            <label for="">Select Address</label>


                                                            <!-- <?php  print_r($nv_list->drop_in_navigator_list); ?>
                                                            -->


                                                            <select class="form-control chosen-select-deselect"
                                                                name="address_id" id="address_id">

                                                                <option value="">Select </option>

                                                                <?php for ($i=0; $i <$size ; $i++) {
                                                                    foreach ($nv_list[$i]->navigator_location as $location) {?>

                                                                <option value="<?php echo $i;?>">
                                                                    <?php echo $location;  ?>

                                                                </option>;

                                                                <?php   }

                                                                    # code...
                                                                }?>




                                                            </select>
                                                        </div>
                                                        <script>
                                                        var scrollEnabled = true;
                                                        </script>


                                                        <div id="example_3" class="p-3 b1 slots" style="display:none">
                                                            <u3l role="tablist">
                                                                <li role="tab"><a href="#tabs-1" class="text-center"
                                                                        role="presentation">Mon
                                                                        1 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab"><a href="#tabs-2" class="text-center"
                                                                        role="presentation">Tue
                                                                        2 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-3" class="text-center"
                                                                        role="presentation">Wed
                                                                        3 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-4" class="text-center"
                                                                        role="presentation">Thu
                                                                        4 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-5" class="text-center"
                                                                        role="presentation">Fri
                                                                        5 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                                <li role="tab"><a href="#tabs-6" class="text-center"
                                                                        role="presentation">Sat
                                                                        6 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab"><a href="#tabs-7" class="text-center"
                                                                        role="presentation">Sun
                                                                        7 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small></a>
                                                                </li>
                                                                <li role="tab">

                                                                    <a href="#tabs-8" role="presentation">Mon
                                                                        8 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a>
                                                                </li>
                                                                <li role="tab"><a href="#tabs-9" class="text-center"
                                                                        role="presentation">Tue
                                                                        9 jan
                                                                        <br>
                                                                        <small class="fdc">13 slot available</small>
                                                                    </a></li>
                                                            </u3l>
                                                            <div>
                                                                <div id="tabs-1" role="tabpanel">
                                                                    <div class="col-md-12 text-center mb-4"><b>Today,
                                                                            Mon 1
                                                                            Jan</b></div>
                                                                    <div class="col-md-12 mb-2"><b>Morning:</b> <small>5
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <a href="javascript:void(0);"> <button
                                                                                class="btn btn-sm btn-outline-primary mr-2 slots-d-booked">Booked</button></a>
                                                                        <a
                                                                            href="<?php echo base_url('Home_controller/appointment_details');?>">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-primary mr-2">09:00
                                                                                am</button></a>
                                                                        <a
                                                                            href="<?php echo base_url('Home_controller/appointment_details');?>">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-primary mr-2">10:00
                                                                                am</button></a>
                                                                        <a
                                                                            href="<?php echo base_url('Home_controller/appointment_details');?>"><button
                                                                                class="btn btn-sm btn-outline-primary mr-2">11:00
                                                                                am</button></a>
                                                                        <a
                                                                            href="<?php echo base_url('Home_controller/appointment_details');?>">
                                                                            <button
                                                                                class="btn btn-sm btn-outline-primary mr-2">12:00
                                                                                am</button></a>


                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Afternoon:</b><small>
                                                                            3 slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">01:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">02:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">03:00
                                                                            pm</button>


                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Evening:</b><small> 3
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:30
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">07:00
                                                                            pm</button>

                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Night:</b><small> 2
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">09:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">10:00
                                                                            pm</button>


                                                                    </div>



                                                                </div>
                                                                <div id="tabs-2" role="tabpanel">
                                                                    <div class="col-md-12 text-center mb-4"><b>Tue 2
                                                                            Jan</b></div>
                                                                    <div class="col-md-12 mb-2"><b>Morning:</b> <small>2
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">08:00
                                                                            am</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">09:00
                                                                            am</button>



                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Afternoon:</b><small>
                                                                            5 slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">01:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">02:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">03:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">04:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">04:30
                                                                            pm</button>


                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Evening:</b> <small>3
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:30
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">07:00
                                                                            pm</button>

                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Night:</b> <small>2
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">09:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">10:00
                                                                            pm</button>


                                                                    </div>
                                                                </div>
                                                                <div id="tabs-3" role="tabpanel">
                                                                    <div class="col-md-12 text-center mb-4"><b>Wed 3
                                                                            Jan</b></div>

                                                                    <div class="col-md-12 mb-3">
                                                                        <span>No slots Available</span>



                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Afternoon:</b>
                                                                        <small>5 slots
                                                                            available</small>
                                                                    </div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">01:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">02:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">03:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">04:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">04:30
                                                                            pm</button>


                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Evening:</b> <small>3
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">06:30
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">07:00
                                                                            pm</button>

                                                                    </div>
                                                                    <div class="col-md-12 mb-2"><b>Night:</b> <small>2
                                                                            slots
                                                                            available</small></div>
                                                                    <div class="col-md-12 mb-3">
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">09:00
                                                                            pm</button>
                                                                        <button
                                                                            class="btn btn-sm btn-outline-primary mr-2">10:00
                                                                            pm</button>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                    </div>

                                    <!-- </div> -->

                                </div>
                            </div> <!-- end col -->




                        </div>

                    </div>



                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                2020 © SIPL
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="<?php echo base_url();?>assets/js/vendor.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-1.12.4.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>


    <script src="<?php echo base_url();?>assets/libs/apexcharts/apexcharts.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/libs/jquery-sparkline/jquery.sparkline.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js">
    </script>

    <script src="<?php echo base_url();?>assetes/js/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script> -->


    <!-- Peity chart-->
    <script src="<?php echo base_url();?>assets/libs/peity/jquery.peity.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();
        ?>assets/js/jquery.ui.scrolltabs.js"></script>


    <!-- App js -->
    <script src="<?php echo base_url();?>assets/js/app.min.js"></script>
    <script>
    var $tabs;
    var scrollEnabled;
    $(function() {



            $('#example_3').scrollTabs({
                scrollOptions: {
                    easing: 'swing',
                    enableDebug: false,
                    // closable: true,
                    showFirstLastArrows: false,
                    selectTabAfterScroll: true
                }
            });
        }


    );
    </script>
    <script>
    $("#btn-appointment").click(function() {
        $("#select_dr").toggle();
    });

    $('#address_id').change(function() {

        $('#example_3').show();

    });
    // $(function() {
    //     $('#example_3').hide();
    //     $('#address_id').change(function() {

    //         $('#example_3').show();
    //         // if ($('#address_id').val() == 'dr1' || $('#address_id').val() ==
    //         //     'dr2') {
    //         //     $('#example_3').show();
    //         // } else {
    //         //     $('#example_3').hide();
    //         // }
    //     });
    // });
    </script>

</body>


</html>