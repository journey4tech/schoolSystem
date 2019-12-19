<?php 
// $system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
// $system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
// $footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$language     = $this->db->get_where('settings', array('type' => 'language'))->row()->description;
$loginType      = $this->session->userdata('login_type');
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cristhofer Alencar">

    <?php 
        //////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
        $system_title =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
    ?>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>university/images/favicon.png">
    <!-- <title>Elite Admin Template - The Ultimate Multipurpose admin template</title> -->
    <title><?php echo $page_title; ?>&nbsp;|&nbsp;<?php echo $system_title; ?></title>

    <!-- This page CSS -->
    <!--Toaster Popup message CSS -->
    <link href="<?php echo base_url(); ?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet">
    <!-- Morris CSS -->
    <link href="<?php echo base_url(); ?>node_modules/morris-js-module/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>university/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url(); ?>university/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <?php include dirname(__FILE__) . '/header.php'; ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <?php include dirname(__FILE__) . '/menu.php'; ?>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <?php include $loginType.'/'.$page_name.'.php';?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2019 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>node_modules/popper.js/dist/popper.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>university/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>university/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>university/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>university/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url(); ?>node_modules/raphael/raphael.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/morris-js-module/morris.js"></script>
    <script src="<?php echo base_url(); ?>node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url(); ?>node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url(); ?>university/js/dashboard1.js"></script>

    <?php if (($this->session->flashdata('error_message')) != ""): ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $.toast({
                
                    text: '<?php echo $this->session->flashdata('error_message'); ?>',
                    position: 'top-right',
                    loaderBg: '#f56954',
                    icon: 'warning',
                    hideAfter: 3500,
                    stack: 6
                })
            });
        </script>
	<?php endif; ?>
</body>

</html>