<?php
include 'include/restrict.php';

mysql_connect('localhost', 'root', '');
mysql_select_db('inventory'); 
$result = mysql_query("SELECT * FROM tb_user WHERE user_name = '$user'");
$data = mysql_fetch_array($result);
?>
<div class="sticky-header header-section">
    <div class="header-left">
        <!-- <button id="showLeftPush"><i class="fa fa-bars"></i></button> -->
        <div class="profile_details_left">
        <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"> </div>
        </div>
        <div class="header-right">
        <!--search-box-->
        <div class="search-box">
            <form class="input">
                <!-- <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" /> -->
                <label class="input__label" for="input-31">
                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                    </svg>
                </label>
            </form>
        </div><!--//end-search-box-->
        <div class="profile_details">       
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">   
                            <!-- <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>  -->
                            <div class="user-name">
                                <!-- <p>Administrator</p> -->
                                <p><?php echo $_SESSION['username'];?></p>
                                <!-- <span>Administrator</span> -->
                                <!-- <span><?php echo $_SESSION['username'];?></span><br> -->
                            </div>
                            <!-- <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>  -->
                            <!-- <i class="fa fa-code-fork"></i> -->
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>    
                        </div>  
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                        <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
                        <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>               
    </div>
    <div class="clearfix"> </div>   
    </div>
        <!-- //header-ends -->

<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };
    
    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>