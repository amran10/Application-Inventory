<!DOCTYPE HTML>
<html>
<?php include 'include/head.php';?>
<body class="cbp-spmenu-push">
  <div class="main-content">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page general">
       
      </div>
      <div class="form-title">
        <h2>Request Type</h2>
      </div>
      <div class="panel-group tool-tips widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
        <h4 class="title2"> CUSTOMIZABLE CATAGORIES</h4>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Hardware Support</a>
        </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'Laptop' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>Laptop </a> 
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'Phone' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>Android/Iphone </a> 
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'CPU/PC' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>CPU/PC </a> 
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'LCD/Monitor' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>LCD/Monitor </a> 
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'Server' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>Server </a>
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'LAN' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>LAN </a>
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'AVAYA Telepone' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>AVAYA Telepone </a> 
          <a href="inv_tick_status_type.php?ntf=0" class="list-group-item"><span class="label pull-right label-info1">
            <?php 
            $result=mysql_query("SELECT COUNT( * ) as 'Data' FROM tb_request_item WHERE req_status = 'Perangkat Komputer' AND set_status = 'Pendding'");
            $data=mysql_fetch_assoc($result);
            echo $data['Data'];
            ?>
          </span>Perangkat Komputer </a> 
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Software Support</a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <a href="#" class="list-group-item"><span class="badge">0</span>ACON </a> 
          <a href="#" class="list-group-item"><span class="badge">0</span>CIEL </a> 
          <a href="#" class="list-group-item"><span class="badge">0</span>KN Road </a> 
          <a href="#" class="list-group-item"><span class="badge">0</span>LCD/Monitor </a> 
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Message</a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Username</th>
                  <th>Department</th>
                  <th>Message</th>
                </tr>
              </thead>
              <!-- <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Department</th>
                  <th>Message</th>
                </tr>
              </thead> -->
            </table>
          </div>
        </div>
      </div>
      <!-- <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Product 4</a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="panel-body">
            Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFive">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Product 5</a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.  labore sustainable VHS.
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>