<?php
include "../config.php"; 

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$query = "SELECT * FROM  assdt_sidebar";
$result = $conn->query($query);    
if ($result->num_rows > 0) {
   
?>
<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../css/font.css" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="../css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="../js/jquery2.0.3.min.js"></script>
    <script src="../js/raphael-min.js"></script>
    <script src="../js/morris.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style>
    .box {
        padding: 20px 10px;
        max-width: 1000px;
        margin: 0 auto;
    }

    td,th {
        color: white !important;
    }
    </style>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    CodeGenie
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">8</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <li>
                                <p class="">You have 8 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>25% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="45">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Product Delivery</h5>
                                            <p>45% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="78">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Payment collection</h5>
                                            <p>87% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="60">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>33% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="90">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">4</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have 4 Mails</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../images/1.png"></span>
                                    <span class="subject">
                                        <span class="from">Jane Doe</span>
                                        <span class="time">2 min ago</span>
                                    </span>
                                    <span class="message">
                                        Nice admin template
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Tasi sam</span>
                                        <span class="time">2 days ago</span>
                                    </span>
                                    <span class="message">
                                        This is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="../images/2.png"></span>
                                    <span class="subject">
                                        <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                    </span>
                                    <span class="message">
                                        Hi there, its a test
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Notifications</p>
                            </li>
                            <li>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #1 overloaded.</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-danger clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #2 overloaded.</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-success clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #3 overloaded.</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="../images/2.png">
                            <span class="username">John Doe</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <?php  
                         while ($row = $result->fetch_assoc()) {
                            if($row['is_active'] == 1){

                        ?>
                        <li>
                            <a class="<?= $row['active_link_name'];  ?>" href="../<?= $row['link_url'];  ?>">
                                <i class="<?= $row['tab_icon_class'];  ?>"></i>
                                <span><?= $row['tab_name'];  ?></span>
                            </a>
                        </li>
                        <?php
                            }
                              }
                            }
                            ?>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

               <!--main content start-->
               <section id="main-content">
            <section class="wrapper">
                            <h5 class ="ml-5 mt-2">Services Data</h5>
                <div class="form-group col-2 float-right">
                    <form id="dateRangeForm" method ="post">
                        <label for="dateRange">Select Date Range:</label>
                        From
                        <select id="Range_From" class="form-control">
                            <?php  
                                    $query = "SELECT * FROM  assdt_service_consumption_table";
                                    $result = $conn->query($query);    
                                    if ($result->num_rows > 0) {        
                         while ($row = $result->fetch_assoc()) {
                        ?>
                            <option value="<?= $row['req_dt'];  ?>"><?= $row['req_dt'];  ?></option>
                            <?php
                            
                              }
                            }
                            ?>
                        </select>
                        To
                        <select id="Range_To" class="form-control">
                            <?php  
                                    $query = "SELECT * FROM  assdt_service_consumption_table";
                                    $result = $conn->query($query);    
                                    if ($result->num_rows > 0) {        
                         while ($row = $result->fetch_assoc()) {
                        ?>
                            <option value="<?= $row['req_dt'];  ?>"><?= $row['req_dt'];  ?></option>
                            <?php
                            
                              }
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-outline-primary btn-sm mt-2">Submit</button>
                    </form>


                </div>
                <div class="table-reponsive box">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Service 1</th>
                                <th>Service 2</th>
                                <th>Service 3</th>
                                <th>Service 4</th>
                                <th>Service 5</th>
                                <th>Service 6</th>
                                <th>Service 7</th>
                                <th>Service 8</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
            <!-- / footer -->
        </section>
        <!--main content end-->

        </section>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/jquery.slimscroll.js"></script>
    <script src="../js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
   
    <script type="text/javascript" src="../js/monthly.js"></script>
    <script type="text/javascript">
    $(window).load(function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pageLength": 10,
            "ajax": {
                "url": "../service_data.php",
                "dataSrc": ""
            },
            "columns": [
                {
                    "data": "user_id"
                },
                {
                    "data": "sum_service1"
                },
                {
                    "data": "sum_service2"
                },
                {
                    "data": "sum_service3"
                },
                {
                    "data": "sum_service4"
                },
                {
                    "data": "sum_service5"
                },
                {
                    "data": "sum_service6"
                },
                {
                    "data": "sum_service7"
                },
                {
                    "data": "sum_service8"
                },
            ]
        });
    });
    </script>

<script>
$(document).ready(function() {
    $('#dateRangeForm').submit(function(event) {
        event.preventDefault();
        var fromValue = $('#Range_From').val();
        var toValue = $('#Range_To').val();
        var formData = {
            from: fromValue,
            to: toValue
        };
        $.ajax({
            type: 'POST', 
            url: '../service_data.php',
            data: formData,
            success: function(response) {
                var data = JSON.parse(response);
                if ($.fn.DataTable.isDataTable('#example')) {
                    $('#example').DataTable().destroy();
                }
                $('#example').DataTable({
                    data: data,
                    columns: [
                        { data: "user_id" },
                        { data: "sum_service1" },
                        { data: "sum_service2" },
                        { data: "sum_service3" },
                        { data: "sum_service4" },
                        { data: "sum_service5" },
                        { data: "sum_service6" },
                        { data: "sum_service7" },
                        { data: "sum_service8" }
                    ]
                });
            },
            error: function(error) {
                console.error('Error:', error);
            }
        });
    });
});

</script>



</body>

</html>
