<?php 
// include "include/restrict.php";

$userid = $_SESSION['username'];
mysql_connect('localhost', 'root', '');
mysql_select_db('inventory'); 
$role = mysql_query("SELECT user_role,user_dept FROM tb_user WHERE user_name = '$userid' ");
$access = mysql_fetch_array($role);

/*VALIDATION FOR FILTER USER = ADMINISTARTOR ALL */
/*START VALIDATION AND SHOW MENU LIST*/
if ($access['user_role'] == '0') {
  ?>
  <!--left-fixed -navigation-->
  <aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><br>
        <!-- Logo -->
        <div align="center">
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
            <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
          </ul>
        </div>
        <!-- End Logo -->
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="index.php?ntf=0">
              <i class="fa fa-home"></i> <span>Home</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Users</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_all_user_active.php?ntf=0"><i class="fa fa-angle-right"></i> Users Active</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_device.php?ntf=0"><i class="fa fa-angle-right"></i>Device</a></li>
             <!--  <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li> -->
            </ul>
          </li>
          <?php 
            // $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE set_status = 'Pendding'");
            // $data=mysql_fetch_assoc($result);
          $result=mysql_query("SELECT COUNT( * ) as 'Data1' FROM tb_request_item WHERE set_status = 'Pendding'");
          $data1=mysql_fetch_assoc($result);
          ?>
          <li class="treeview">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-ticket"></i>
                <span>Ticket</span>
                <i class="fa fa-angle-left pull-right"></i>
                <span class="badge badge-danger pull-right">
                  <?php 
                // $a = $data['Data'];
                  $b = $data1['Data1'];
                  echo $b;
                  ?>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <!-- <span class="badge badge-warning pull-right">
                <?php 
                echo $data['Data'];
                ?>
              </span> -->
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <span class="badge badge-warning pull-right">
                <?php 
                
                echo $data1['Data1'];
                ?>
              </span>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li>
          <li class="header">TRANSACTION NAVIGATION</li>
          <li class="treeview">
            <li>
              <a href="inv_tran_transaction.php?ntf=0">
                <i class="fa fa-clipboard"></i> <span>Transaction</span>
                <!-- <small class="label pull-right label-info">08</small> -->
              </a>
            </li>
            <li class="header">USERS NAVIGATION</li>
            <li class="treeview">
              <a href="inv_tran_sc_form.php?ntf=0">
                <i class="fa fa-unlock-alt"></i>
                <span>Security Form</span>
              </a>
            </li>
            <li class="treeview">
              <a href="inv_user_req_item.php?ntf=0">
                <i class="fa fa-file-text-o"></i> <span>Request Item</span>
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-table"></i> <span>List Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <li class="header">HISTORY INVENTORY</li>
          <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History Transaction Request</span></a></li>
          <li><a href="inv_history_security_form.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History Security Form</span></a></li>
          <li><a href="inv_history_request.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History Request User</span></a></li>
          <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
          <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>
<?php } 
/* END VALIDATION - ADMINISTRATOR ALL*/
/* START VALIDATION FOR BILLING AIR*/
elseif ($access['user_role'] == 'Billing' AND $access['user_dept'] == 'AIR') { 
  ?>
  <!--left-fixed -navigation-->
  <aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button><br>
        <!-- Logo -->
        <div align="center">
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
            <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
          </ul>
        </div>
        <!-- End Logo -->
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="index.php?ntf=0">
              <i class="fa fa-home"></i> <span>Home</span>
            </a>
          </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_user_req_item.php">
              <i class="fa fa-file-text-o"></i> <span>Request Item</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="inv_user_req_status.php">
              <i class="fa  fa-flag-o"></i> <span>Request Status</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
  <?php } 
  /* END VALIDATION - ADMINISTRATOR ALL*/
  /* START VALIDATION FOR BILLING SEA*/
  elseif ($access['user_role'] == 'Billing' AND $access['user_dept'] == 'SEA') { 
    ?>
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><br>
          <!-- Logo -->
          <div align="center">
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
              <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
            </ul>
          </div>
          <!-- End Logo -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.php?ntf=0">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_user_req_item.php">
              <i class="fa fa-file-text-o"></i> <span>Request Item</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php">
              <i class="fa  fa-flag-o"></i> <span>Request Status</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
  <?php } 
  /* END VALIDATION - ADMINISTRATOR ALL*/
  /* START VALIDATION FOR CG/FINANCE*/
  elseif ($access['user_role'] == 'CG/Finance') { 
    ?>
    <!--left-fixed -navigation-->
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><br>
          <!-- Logo -->
          <div align="center">
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
              <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
            </ul>
          </div>
          <!-- End Logo -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.php?ntf=0">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_user_req_item.php">
              <i class="fa fa-file-text-o"></i> <span>Request Item</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="inv_user_req_status.php">
              <i class="fa  fa-flag-o"></i> <span>Request Status</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
  <?php } 
  /* END VALIDATION - ADMINISTRATOR ALL*/
  /* START VALIDATION FOR GUEST*/
  elseif ($access['user_role'] == 'Guest') { 
    ?>
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><br>
          <!-- Logo -->
          <div align="center">
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
              <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
            </ul>
          </div>
          <!-- End Logo -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.php?ntf=0">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_user_req_item.php">
              <i class="fa fa-file-text-o"></i> <span>Request Item</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="inv_user_req_status.php">
              <i class="fa  fa-flag-o"></i> <span>Request Status</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
  <?php } 
  /* END VALIDATION - ADMINISTRATOR ALL*/
  /* START VALIDATION FOR BILLING AIR*/
  elseif ($access['user_role'] == 'Billing' AND $access['user_dept'] == 'ALL') { 
    ?>
    <!--left-fixed -navigation-->
    <!--left-fixed -navigation-->
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><br>
          <!-- Logo -->
          <div align="center">
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
              <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
            </ul>
          </div>
          <!-- End Logo -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.php?ntf=0">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="treeview">
            <a href="inv_tran_sc_form_user.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_user_req_item.php">
              <i class="fa fa-file-text-o"></i> <span>Request Item</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="inv_user_req_status.php">
              <i class="fa  fa-flag-o"></i> <span>Request Status</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
  <?php } 
  /* END VALIDATION - ADMINISTRATOR ALL*/
  /* START VALIDATION FOR BILLING AIR*/

  elseif ($access['user_role'] == 'HRD' AND $access['user_dept'] == 'ALL') { 
    ?>
    <!--left-fixed -navigation-->
    <!--left-fixed -navigation-->
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button><br>
          <!-- Logo -->
          <div align="center">
            <ul class="sidebar-menu" id="nav-accordion">
              <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="60"></a></p>
              <h4 class="centered" style="color: white"><b>Kuehne + Nagel <br> Indonesia</b></h4><br>
            </ul>
          </div>
          <!-- End Logo -->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="index.php?ntf=0">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_all_user.php?ntf=0"><i class="fa fa-angle-right"></i> All Users</a></li>
              <li><a href="inv_administrator.php?ntf=0"><i class="fa fa-angle-right"></i> Administrator</a></li>
              <li><a href="inv_user_custom.php?ntf=0"><i class="fa fa-angle-right"></i> Users Custom</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Assets</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_com_laptop.php?ntf=0"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_com_phone.php?ntf=0"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_com_cpu.php?ntf=0"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_com_lcd.php?ntf=0"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_com_server.php?ntf=0"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_com_perangkat.php?ntf=0"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
          <li class="treeview">
            <a href="#">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
            <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">00</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_tick_option.php?ntf=0"><i class="fa fa-angle-right"></i> Option</a></li>
              <span class="label label-primary pull-right">00</span>
              <li><a href="inv_tick_req_types.php?ntf=0"><i class="fa fa-angle-right"></i> Request Types</a></li>
              <li><a href="inv_tick_status_type.php?ntf=0"><i class="fa fa-angle-right"></i> Status Request</a></li>
              <li><a href="inv_tick_taks.php?ntf=0"><i class="fa fa-angle-right"></i> Taks</a></li>
            </ul>
          </li> -->
          <li class="header">USERS NAVIGATION</li>
          <li class="treeview">
            <a href="inv_tran_sc_form.php?ntf=0">
              <i class="fa fa-unlock-alt"></i>
              <span>Security Form</span>
            </a>
          </li>
          <!-- <li class="treeview">
            <a href="inv_user_req_item.php">
            <i class="fa fa-file-text-o"></i> <span>Request Item</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          <!-- </li>
          <li class="treeview">
            <a href="inv_user_req_status.php">
            <i class="fa  fa-flag-o"></i> <span>Request Status</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>List Assets</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="inv_user_laptop.php"><i class="fa fa-angle-right"></i> Laptop</a></li>
              <li><a href="inv_user_phone.php"><i class="fa fa-angle-right"></i> Phone</a></li>
              <li><a href="inv_user_cpu.php"><i class="fa fa-angle-right"></i> CPU/PC</a></li>
              <li><a href="inv_user_lcd.php"><i class="fa fa-angle-right"></i> LCD/Monitor</a></li>
              <li><a href="inv_user_server.php"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="inv_user_perangkat.php"><i class="fa fa-angle-right"></i> Perangkat Komputer</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="inv_about.php">
              <i class="fa fa-exclamation-circle"></i> <span>About</span>
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </a>
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
            <!-- <li class="treeview"> -->
              <!-- <a href="inv_contact.php"> -->
                <!-- <i class="fa fa-exclamation-circle"></i> <span>Contact</span> -->
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
                <!-- </a> -->
            <!-- <ul class="treeview-menu">
              <li><a href="forms.html"><i class="fa fa-angle-right"></i> General Forms</a></li>
              <li><a href="validation.html"><i class="fa fa-angle-right"></i> Form Validations</a></li>
            </ul> -->
            <!-- </li> -->
          <!-- <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox </span>
            <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
            <ul class="treeview-menu">
              <li><a href="inbox.html"><i class="fa fa-angle-right"></i> Mail Inbox </a></li>
              <li><a href="compose.html"><i class="fa fa-angle-right"></i> Compose Mail </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
              <li><a href="signup.html"><i class="fa fa-angle-right"></i> Register</a></li>
              <li><a href="404.html"><i class="fa fa-angle-right"></i> 404 Error</a></li>
              <li><a href="500.html"><i class="fa fa-angle-right"></i> 500 Error</a></li>
              <li><a href="blank-page.html"><i class="fa fa-angle-right"></i> Blank Page</a></li>
            </ul>
          </li> -->
          <!-- <li class="header">HISTORY INVENTORY</li>
            <li><a href="inv_history.php?ntf=0"><i class="fa fa-clock-o"></i> <span>History</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Warning</span></a></li> -->
            <!-- <li><a href="#"><i class="fa fa-angle-right text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>

    <?php
  }
  ?>