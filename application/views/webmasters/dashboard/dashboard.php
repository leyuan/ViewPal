    <div class="main">
        <aside id="sidebar">
            <div class="side-options">
                <ul>
                    <li><a href="#" id="collapse-nav" class="act act-primary tip" title="Collapse navigation"><i class="icon16 i-arrow-left-7"></i></a></li>
                </ul>
            </div>

            <div class="sidebar-wrapper">
                <nav id="mainnav">
                    <ul class="nav nav-list">
                        <li>
                            <a href="dashboard.html">
                                <span class="icon"><i class="icon20 i-screen"></i></span>
                                <span class="txt">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="vp-feedback.html">
                                <span class="icon"><i class="icon20 i-menu-6"></i></span>
                                <span class="txt">Feedbacks</span>
                            </a>
                        </li>                    
                    </ul>
                </nav> <!-- End #mainnav -->
            </div> <!-- End .sidebar-wrapper  -->
        </aside><!-- End #sidebar  -->

        <section id="content">
            <div class="wrapper">
                <div class="crumb">
                    <ul class="breadcrumb">
                      <li><a href="#"><i class="icon16 i-home-4"></i>Home</a> <span class="divider">/</span></li>
                      <li class="active">Dashboard</li>
                    </ul>
                </div>
                
                <div class="container-fluid">
                    <div id="heading" class="page-header">
                        <h1><i class="icon20 i-dashboard"></i> Dashboard</h1>
                    </div>
                    
                    <div class="row-fluid vp-user-summary">
                        <div class="widget" style="margin-bottom:20px;">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-pencil"></i></div> 
                                <h4>Welcome <?php echo $wmname?></h4>
                                <a href="#" class="minimize"></a>
                            </div><!-- End .widget-title -->

                            <div class="widget-content">
                                <div class="vp-container">
                                    <div class="page-header">
                                        <h3 class="">Account Summary</h3>
                                    </div>
                                    <div class="">
                                        <div class="dashboard-summary-row">
                                            <span class="span6">Name: <?php echo $summary['mid'];?></span>
                                            <span class="span6">Register Date: <?php echo $summary['date'];?></span>
                                        </div>
                                        <div class="dashboard-summary-row">
                                            <span class="span6">Number of Transactions:</span>
                                            <span class="span6">Total money earned:</span>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .widget -->
                    </div><!-- End .vp-user-summary -->
                    
                    <div class="row-fluid vp-user-details">
                        <div class="widget" style="margin-bottom:20px;">
                            <div class="widget-title">
                                <div class="icon"><i class="icon20 i-newspaper"></i></div> 
                                <h4>Payment Details</h4>
                                <a href="#" class="minimize"></a>
                            </div><!-- End .widget-title -->

                            <div class="widget-content">
                                <div class="vp-container">
                                    <div class="page-header">
                                        <h3>Payment Details</h3>
                                    </div>
                                    <div class="table table-striped">
                                        <table class="user-dashboard-table" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Host</th>
                                                    <th>URL</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .widget -->
                    </div><!-- End .vp-user-details -->
                </div> <!-- End .container-fluid  -->
            </div> <!-- End .wrapper  -->
        </section>
    </div><!-- End .main  -->