<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];
    // $radio = $_POST['radio'];
    $position = $_POST['position'];
    // $education = $_POST['education'];
    // $status = $_POST['status'];
   
   
 $school = $_POST['school'];
    $mark = $_POST['mark'];
    $year = $_POST['year'];


    $sql = "INSERT INTO userdetails (name,email,dob,contact,position) VALUES ('$name', '$email','$dob','$contact','$position')";
//    $id = $_POST['id'];
  
    // $class = $_POST['class'];
    // $classmark = $_POST['classmark'];
    // $classyear = $_POST['classyear'];
    // $college = $_POST['college'];
    // $collegemark = $_POST['collegemark'];
    // $collegeyear = $_POST['collegeyear'];
    $sql2 = "INSERT INTO education (school,grade,year) VALUES ( '$school','$mark','$year')";
// echo $sql2; exit();
    if (mysqli_query($conn, $sql)) {
        header("Location: viewcand.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    if (mysqli_query($conn, $sql2)) {
        header("Location: viewcand.php");
    } else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
}
?>
<?php
//    if ($_FILES["resume"]["error"] === UPLOAD_ERR_OK) {
//         $resume_name = $_FILES["resume"]["name"];
//         $resume_tmp = $_FILES["resume"]["tmp_name"];
//         move_uploaded_file($resume_tmp, "resumes/" . $resume_name);
//     } else {
//         die("Error uploading resume.");
//     }?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Admin</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <!-- ===== Animation CSS ===== -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="css/style.css" rel="stylesheet">
    <!-- ===== Color CSS ===== -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <style>
table, th, td {
  border: 1px solid black;
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- ===== Top-Navigation ===== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <b>
                            <img src="../plugins/images/logo.png" alt="home" />
                        </b>
                        <span>
                            <img src="../plugins/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li>
                        <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <i class="icon-magnifier"></i>
                            <input type="text" placeholder="Search..." class="form-control">
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-speech"></i>
                            <span class="badge badge-xs badge-danger">6</span>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/1.jpg" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/2.jpg" alt="user" class="img-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/3.jpg" alt="user" class="img-circle"><span class="profile-status away pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="user-img">
                                            <img src="../plugins/images/users/4.jpg" alt="user" class="img-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                            <i class="icon-calender"></i>
                            <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="right-side-toggle">
                        <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                            <i class="icon-settings"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- ===== Top-Navigation-End ===== -->
        <!-- ===== Left-Sidebar ===== -->
        <aside class="sidebar" role="navigation">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div class="profile-image">
                            <img src="../plugins/images/users/hanna.jpg" alt="user-img" class="img-circle">
                            <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                        <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Admin</a></p>
                    </div>
                </div>
               <nav class="sidebar-nav">
            <ul id="side-menu">
               <li>
                    <a class="active waves-effect" href="index.php" >
                        <i class="icon-screen-desktop fa-fw"></i> 
                        <span class="hide-menu">Dashboard
                            <!-- <a href="index.php"> Dashboard </a>  -->
                          
                        </span>
                    </a>
                </li> 
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu">Candidate </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="addcand.php">Add Candidate </a> </li>
                        <li> <a href="viewcand.php">All Candidate</a> </li>
                    </ul>
                </li>

                 <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu">Job description</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="addjob.php">Add Job</a> </li>
                        <li> <a href="alljob.php">All Jobs</a> </li>
                    </ul>
                </li>
                 <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu">Company details</span></a>
                    <ul aria-expanded="false" class="collapse">
                         <li> <a href="addcompany.php">Add Company </a> </li>
                        <li> <a href="allcompany.php">All Company</a> </li>
                    </ul>
                </li>
                  <!-- <li> <a href="index.php"><i class="icon-screen-desktop fa-fw"></i> Dashboard</a></li> -->
                                <!-- <li><a href="data_table.php">Table 1</a></i></li> -->
                                <!-- <li><a href="candidate_profile/index.php"><i class="icon-user fa-fw"></i>Candidate profile</a></li>
                                <li><a href="data_table2.php"><i class="icon-grid fa-fw"></i>Job description</a></li>
                                <li><a href="data_table3.php"><i class="icon-grid fa-fw"></i>Company details</a></li>
                                <li><a href="data_table4.php"><i class="icon-grid fa-fw"></i>Services</a></li> -->
                                <!-- <li><a href="data_table5.php"><i class="icon-grid fa-fw"></i>Table 5</a></li> -->
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-user fa-fw"></i> <span class="hide-menu">Services</span></a>
                    <ul aria-expanded="false" class="collapse">
                         <li> <a href="addservice.php">Add Services</a> </li>
                        <li> <a href="allservice.php">All Services</a> </li>
                    </ul>
                </li>
            </ul>
        </nav>
                <!-- <div class="p-30">
                    <span class="hide-menu">
                        <a href="javascript:void(0);" target="_blank" class="btn btn-success">Buy Cubic Admin</a>
                        <a href="javascript:void(0);" target="_blank" class="btn btn-default m-t-15">Check Documentation</a>
                    </span>
                </div> -->
            </div>
        </aside>
<!-- dfgdgdf -->
 


<!-- dfghdh -->
        <!-- ===== Left-Sidebar-End ===== -->
   <div class="page-wrapper">
            <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">Add New Candidate</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form method="post" action="addcand.php">
                                        <div class="form-body">
                                            <h3 class="box-title">candidate Info</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Full Name</label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter candidate name">  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Mother Name</label>
                                                        <input type="text" id="mname"name="mname" class="form-control" placeholder="Mother Name">  </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group ">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" id="email"name="email" class="form-control" placeholder="Email">  </div>
                                                </div>
                                            <!--/row-->
                                           
                                                <!--/span-->
                                           
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Date of Birth</label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="dob"> </div>
                                                </div>
                                                </div>
                                                <!--/span-->
                                           
                                            <!--/row-->
                                             <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group ">
                                                        <label class="control-label">contact</label>
                                                        <input type="text" id="contact"name="contact" class="form-control" placeholder="contact">  </div>
                                                </div>
                                               
                                                
                                                <div class="col-md-6">
                                                     <div class="form-group ">
                                                        <label class="control-label">Gender</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio1" value="male">
                                                                    <label for="radio1">male</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio2" value="female">
                                                                    <label for="radio2">female </label>
                                                                </div>
                                                            </label>
                                                             <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="radio" id="radio2" value="Other">
                                                                    <label for="radio3">Other </label>
                                                                </div>
                                                            </label>
                                                </div>
                                                </div>
                                                </div>
                                                      </div>

                                     
                                       
                                         <h3 class="box-title">Education Details </h3>
                                            <hr>
                                            <!-- <script>
                                                function add_edu_to_list(){
                                                    const course_name = document.getElementById("course_name")
                                                    const school = document.getElementById("school")
                                                    const mark = document.getElementById("mark")
                                                    const year = document.getElementById("year")
                                                    const edu_list = document.getElementById("edu_list")
                                                    const edu_item = `
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                        <input type="text"  name="course[]" class="form-control" value="${course_name.value}">  
                                                                    </div>
                                                                </div>                                                            
                                                                <div class="col-md-3">
                                                                    <div class="form-group ">                                                                    
                                                                        <input type="text"  name="school[]" class="form-control" value="${school.value}">  
                                                                    </div>                                                
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group ">
                                                                        <input type="text" name="mark[]" class="form-control" value="${mark.value} ">  
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group ">
                                                                            <input type="text" name="year[]" class="form-control" value="${year.value} ">  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    `
                                                    edu_list.innerHTML += edu_item
                                                }

                                            </script> -->
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label"></label> </br>10th/Diploma  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">School/College </label>
                                                        <input type="text" id="school" name="school" class="form-control" placeholder="">  </div>                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Marks </label>
                                                        <input type="text" id="mark"name="mark" class="form-control" placeholder="">  </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Passing year</label>
                                                        <input type="text" id="year" name="year" class="form-control" placeholder="">  </div>
                                                    </div>

                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <label class="control-label"></label><br>
                                                            <a class="btn btn-primary" onclick="add_edu_to_list()">Add</a>
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-md-12" id="edu_list"> -->
                                                    </div>
                                                    <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label"></label> </br>12th Class </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">College </label>
                                                        <input type="text" id="school" name="class" class="form-control" placeholder="">  </div>                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Marks </label>
                                                        <input type="text" id="mark"name="classmark" class="form-control" placeholder="">  </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Passing year</label>
                                                        <input type="text" id="year" name="classyear" class="form-control" placeholder="">  </div>
                                                    </div>

                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <label class="control-label"></label><br>
                                                            <a class="btn btn-primary" onclick="add_edu_to_list()">Add</a>
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-md-12" id="edu_list"> -->
                                                    </div>
                                                    <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label"></label> </br>Graduation </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">College </label>
                                                        <input type="text" id="school" name="college" class="form-control" placeholder="">  </div>                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Marks </label>
                                                        <input type="text" id="mark"name="collegemark" class="form-control" placeholder="">  </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group ">
                                                        <label class="control-label">Passing year</label>
                                                        <input type="text" id="year" name="collegeyear" class="form-control" placeholder="">  </div>
                                                    </div>

                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <label class="control-label"></label><br>
                                                            <a class="btn btn-primary" onclick="add_edu_to_list()">Add</a>
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-md-12" id="edu_list"> -->
                                                    </div>
                                            
                                            
                                            <!--/row-->
                                           
                                                <!--/span-->
                                           
                                                 <h3 class="box-title">Work Experience</h3>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Company name</label>
                                                        <input type="text" id="company" name="company" class="form-control" placeholder="Enter company name">  </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Position </label>
                                                        <input type="text" id="position"name="position" class="form-control" placeholder="position">  </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            
                                            <!--/row-->
                                           
                                                <!--/span-->
                                            <div class="row">
                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label"> Start Date</label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="sdate"> </div>
                                                </div>
                                                <!--/span-->
                                           
                                            <!--/row-->
                                               
                                                 <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">End Date </label>
                                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="edate"> </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Skills</label>
                                                        <input type="text" id="skills"name="skills" class="form-control" placeholder="skills">  </div>
                                        </div>
                                                </div>
                                                 <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group ">
                                                        <label class="control-label">Resume</label>
                                                        <input type="file" id="resume"name="resume" accept=".pdf" class="form-control" placeholder="Email">  </div>
                                        </div>
                                        
                                                </div>
                                   
                                       
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Add candidate</button>
                                       
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> </div>
                </div>
       
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!--.row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box">
                           
<!-- Display Records -->

                            <!-- <h3 class="box-title m-b-0">Add Candidate</h3> -->
                            <p class="text-muted m-b-30 font-13">   </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Sample Forms with Right icon</h3>
                            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="exampleInputuname" placeholder="Username">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpwd1">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="exampleInputpwd1" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpwd2">Confirm Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter pwd">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox2" type="checkbox">
                                                <label for="checkbox2"> Remember me </label>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Sample Horizontal form with icon</h3>
                            <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Username*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="col-sm-3 control-label">Email*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Website</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-world"></i></div>
                                            <input type="text" class="form-control" id="exampleInputpwd1" placeholder="Enter Website Name"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter pwd"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Re Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Re Enter pwd"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form with right icon</h3>
                            <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="exampleInputuname" class="col-sm-3 control-label">Username*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="col-sm-3 control-label">Email*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Website</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputpwd1" placeholder="Enter Website Name">
                                            <div class="input-group-addon"><i class="ti-world"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Enter pwd">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Re Password*</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="exampleInputpwd2" placeholder="Re Enter pwd">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox34" type="checkbox">
                                            <label for="checkbox34">Check me out !</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9 text-right">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                <!-- </div> -->
                <!--./row-->
                <!--.row-->
                <!-- <div -->
                <!--./row-->
                <!--.row-->
                
                <!--./row-->
                <!--.row-->
                <!-- <div c -->
                <!--./row-->
                <!--.row-->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading"> With Border Form</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <form action="#" class="form-horizontal form-bordered">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">First Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="small" class="form-control"> <span class="help-block"> This is inline help </span> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Last Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" placeholder="medium" class="form-control"> <span class="help-block"> This is inline help </span> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Gender</label>
                                                <div class="col-md-9">
                                                    <select class="form-control">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select> <span class="help-block"> Select your gender. </span> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date of Birth</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Category</label>
                                                <div class="col-md-9">
                                                    <select class="form-control">
                                                        <option value="Category 1">Category 1</option>
                                                        <option value="Category 2">Category 2</option>
                                                        <option value="Category 3">Category 5</option>
                                                        <option value="Category 4">Category 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Multi-Value Select</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" multiple="">
                                                        <optgroup label="NFC EAST">
                                                            <option>Dallas Cowboys</option>
                                                            <option>New York Giants</option>
                                                            <option>Philadelphia Eagles</option>
                                                            <option>Washington Redskins</option>
                                                        </optgroup>
                                                        <optgroup label="NFC NORTH">
                                                            <option>Chicago Bears</option>
                                                            <option>Detroit Lions</option>
                                                            <option>Green Bay Packers</option>
                                                            <option>Minnesota Vikings</option>
                                                        </optgroup>
                                                        <optgroup label="NFC SOUTH">
                                                            <option>Atlanta Falcons</option>
                                                            <option>Carolina Panthers</option>
                                                            <option>New Orleans Saints</option>
                                                            <option>Tampa Bay Buccaneers</option>
                                                        </optgroup>
                                                        <optgroup label="NFC WEST">
                                                            <option>Arizona Cardinals</option>
                                                            <option>St. Louis Rams</option>
                                                            <option>San Francisco 49ers</option>
                                                            <option>Seattle Seahawks</option>
                                                        </optgroup>
                                                        <optgroup label="AFC EAST">
                                                            <option>Buffalo Bills</option>
                                                            <option>Miami Dolphins</option>
                                                            <option>New England Patriots</option>
                                                            <option>New York Jets</option>
                                                        </optgroup>
                                                        <optgroup label="AFC NORTH">
                                                            <option>Baltimore Ravens</option>
                                                            <option>Cincinnati Bengals</option>
                                                            <option>Cleveland Browns</option>
                                                            <option>Pittsburgh Steelers</option>
                                                        </optgroup>
                                                        <optgroup label="AFC SOUTH">
                                                            <option>Houston Texans</option>
                                                            <option>Indianapolis Colts</option>
                                                            <option>Jacksonville Jaguars</option>
                                                            <option>Tennessee Titans</option>
                                                        </optgroup>
                                                        <optgroup label="AFC WEST">
                                                            <option>Denver Broncos</option>
                                                            <option>Kansas City Chiefs</option>
                                                            <option>Oakland Raiders</option>
                                                            <option>San Diego Chargers</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Membership</label>
                                                <div class="col-md-9">
                                                    <div class="radio-list">
                                                        <label>
                                                            <input type="radio" name="optionsRadios2" value="option1"> Free </label>
                                                        <label>
                                                            <input type="radio" name="optionsRadios2" value="option2" checked=""> Professional </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Street</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">City</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">State</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Post Code</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"> </div>
                                            </div>
                                            <div class="form-group last">
                                                <label class="control-label col-md-3">Country</label>
                                                <div class="col-md-9">
                                                    <select class="form-control"> </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
                                                            <button type="button" class="btn btn-default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--./row-->
                <!-- ===== Right-Sidebar ===== -->
                <!-- <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="icon-close right-side-toggler"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="hidden-xs">
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-danger">
                                        <input id="headcheck" type="checkbox" class="fxhdr">
                                        <label for="headcheck"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="sidecheck" type="checkbox" class="fxsdr">
                                        <label for="sidecheck"> Fix Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="black" class="black-theme">6</a></li>
                                <li class="db"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="yellow-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="black-dark" class="black-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../plugins/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <!-- ===== Right-Sidebar-End ===== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer t-a-c">
                © 2023 Admin
            </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="js/sidebarmenu.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
