 <?php
include 'include/restrict.php';
include 'include/connection.php';
?> 
<!-- Role -->
<!-- Role 0 = admin
Role 1 = HRD
Role 2 = Users -->

<aside>
  <div id="sidebar"  class="nav-collapse ">
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="index.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
      <h5 class="centered">Kuehne + Nagel <br> Indonesia</h5>
      <!-- Role Admin -->
      <?php if ($access['user_role'] == '0') { ?>
        <li class="mt">
          <a class="#" href="index.php?ntf=0">
            <i class="fa fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <div style="background-color: #55b8f2; text-align: center; font-size: 12px; font-family: Arial;"><b>PROCCESS SECTION<b></div>
          <li class="sub">
            <a href="request_deviceit.php?ntf=0" >
              <!-- <i class="glyphicon glyphicon-plus"></i> -->
              <i class="glyphicon glyphicon-circle-arrow-right"></i>
              <span>Request Device</span>
            </a>
          </li>
          <li class="sub">
            <a href="trans_main.php?ntf=0" >
              <!-- <i class="glyphicon glyphicon-plus"></i> -->
              <i class="glyphicon glyphicon-circle-arrow-right"></i>
              <span>Transaction Owner</span>
            </a>
          </li>
          <!-- <li class="sub">
            <a href="temporary.php?ntf=0" >
              <i class="glyphicon glyphicon-plus"></i>
              <i class="glyphicon glyphicon-circle-arrow-right"></i>
              <span>Temporary Device</span>
            </a>
          </li> -->
          <!-- <li class="sub">
            <a href="trans_main.php?ntf=0" >
              <i class="glyphicon glyphicon-compressed"></i>
              <i class="glyphicon glyphicon-circle-arrow-right"></i>
              <span>Transaction</span>
            </a>
          </li> -->
          <div style="background-color: #55b8f2; text-align: center; font-size: 12px; font-family: Arial;"><b>OWNER SECTION</b></div>
          <!-- <li class="sub">
            <a href="trans_main.php?ntf=0" >
              <i class="glyphicon glyphicon-compressed"></i>
              <i class="glyphicon glyphicon-circle-arrow-right"></i>
              <span>Stock Assets Department</span>
            </a>
          </li> -->
          <li class="menu">
            <a href="owner-device.php?ntf=0&page=1" >
              <i class="glyphicon glyphicon-user"></i>
              <!-- <i class="glyphicon glyphicon-circle-arrow-right"></i> -->
              <span>Owner Device</span>
            </a>
          </li>
          <div style="background-color: #55b8f2; text-align: center; font-size: 12px; font-family: Arial;"><b>ADMINISTRATOR SECTION</b></div>
          <li class="sub">
            <a href="prod_list.php?ntf=0" >
              <i class="fa fa-desktop"></i>
              <!-- <i class="glyphicon glyphicon-circle-arrow-right"></i> -->
              <span>Products</span>
            </a>
          </li>
          <li class="sub">
            <a href="all_users.php?ntf=0" >
              <i class="fa fa-users"></i>
              <!-- <i class="glyphicon glyphicon-circle-arrow-right"></i> -->
              <span>Users</span>
            </a>
          </li>
          <li class="sub">
            <a class="#" href="data-department.php?ntf=0">
              <i class=" glyphicon glyphicon-list-alt"></i>
              <!-- <i class="glyphicon glyphicon-circle-arrow-right"></i> -->
              <span>Data & Department</span>
            </a>
          </li>
          <!-- <li class="sub">
            <a href="prodset_catagory.php?ntf=0" >
              <i class="fa fa-asterisk"></i>
              <i class="glyphicon glyphicon-folder-close"></i>
              <span> Type and Catagory</span>
            </a>
          </li> -->
          <div style="background-color: #55b8f2; text-align: center; font-size: 12px; font-family: Arial;"><b>HISTORY SECTION</b></div>
          <li class="menu">
            <a href="history_set_user.php?ntf=0" >
              <i class="glyphicon glyphicon-time"></i>
              <!-- <i class="glyphicon glyphicon-circle-arrow-right"></i> -->
              <span>History Owner</span>
            </a>
          </li>
        <?php } ?>

        <!-- Role HRD -->
        <?php if ($access['user_role'] == '1') { ?>
          <li class="menu">
            <a href="security_form.php?ntf=0" >
              <i class="fa fa-unlock"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="menu">
            <a href="history_set_user.php?ntf=0" >
              <i class="glyphicon glyphicon-time"></i>
              <span>History</span>
            </a>
          </li>
          <li class="menu">
            <a href="inv_temporary.php?ntf=0" >
              <i class="glyphicon glyphicon-wrench"></i>
              <span>Temporary Laptop</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" >
              <i class="glyphicon glyphicon-cloud-download"></i>
              <span>Import</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sub">
              <li><a  href="upload_csv_product.php?ntf=0">Import File CSV Product</a></li>
            </ul>
          </li>
        <?php } ?>

        <!-- Role Users -->
        <?php if ($access['user_role'] == '2') { ?>
          <li class="menu">
            <a href="security_form.php?ntf=0" >
              <i class="fa fa-unlock"></i>
              <span>Security Form</span>
            </a>
          </li>
          <li class="menu">
            <a href="history_set_user.php?ntf=0" >
              <i class="glyphicon glyphicon-time"></i>
              <span>History</span>
            </a>
          </li>
          <li class="menu">
            <a href="inv_temporary.php?ntf=0" >
              <i class="glyphicon glyphicon-wrench"></i>
              <span>Temporary Laptop</span>
            </a>
          </li>
        <?php } ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </ul>

      <?php include 'include/footer.php';?>
      <?php  // include 'include/footer.php';?>
    </div>
  </aside>