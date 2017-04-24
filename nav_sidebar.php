  <!-- Metis Menu Plugin JavaScript -->
  <script src="vendor/metisMenu/metisMenu.min.js"></script>

<?
include("./class.php");
$sidebar = new Sidebar;
//**** New class database ****//
$strHost = "127.0.0.1";
$strDB = "ci_channel_mgt";
$strUser = "ci_ch_root";
$strPassword = "p@ssw0rd";
$clsMyDB = new MySQLDB($strHost,$strDB,$strUser,$strPassword);

?>
<!-- Navigation -->
          <div class="navbar-default sidebar" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">

<?

if(isset($_SESSION["ROLE"])){
    $_role = $_SESSION["ROLE"];
}else{
    $_role = 1;
}
//**** Call to function select record ****//
$clsMyDB->strTable = "MENU_DASHBOARD";

if($_role==1){
    $conditions = " ID > 0 or ID =1 order by ID";
}else{
    $conditions = " ID > 0 And role=$_role or ID =1 order by ID";
}

$clsMyDB->strCondition = $conditions;


$objSelect = $clsMyDB->fncReturnResult();

    while($row = @mysql_fetch_array($objSelect)){
        //$sidebar->pnStyle   = $row['PN_STYLE'];
        $sidebar->icon      = $row['PN_ICON'];
        $sidebar->label     = $row['NAME'];
        //$sidebar->detail    = $row['CLICK_NAME'];
        //$sidebar->notification = rand(1,100);
        $sidebar->href      = $row['HREF'];
        //$sidebar->contentID = $row['CONTENT_ID'];

        $elm = $sidebar->createMenuItem();
        echo $elm;
    }     

    $clsMyDB-> __destruct();
?> 
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->
<?
Class Sidebar {

    function createMenuItem(){
        $element =  "<li class='side'>
                          <a href='" . $this->href . "'><i class='fa " . $this->icon . " fa-fw'></i> " . $this->label . "</a>
                    </li>";
        return $element;
    }
}
?>

                  </ul>
              </div>
              <!-- /.sidebar-collapse -->
          </div>
          <!-- /.navbar-static-side -->

                      <!-- <li class="sidebar-search">
                          <div class="input-group custom-search-form">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                          </div>
                          <!-- /input-group --
                      </li> 
                      <li class="side">
                          <a href="#/dashboard"><i class="fa fa-sidebar fa-fw"></i> Dashboard</a>
                      </li>
                      <li class="side">
                          <a href=""><i class="fa fa-edit fa-fw"></i> Menu (AO/PM)<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level collapse in">
                              <li class="side">
                                  <a href="#/booking"><i class="fa fa-calendar-plus-o"></i> Booking</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="fa fa-calendar-check-o"></i> Comfrimed Slot!</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="fa fa-cogs"></i> Manage Booking</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level 
                      </li>
                      <li class="side">
                          <a href=""><i class="fa fa-wrench fa-fw"></i> Menu (Channel)<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level collapse">
                              <li class="side">
                                  <a href="#"><i class="fa fa-commenting"></i> SMS Slot</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="fa fa-envelope-o"></i> Email Slot</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="glyphicon glyphicon-phone"></i> KMB Slot</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level 
                        </li>
                        <li class="side">
                          <a href=""><i class="fa fa-wrench fa-fw"></i> Menu (Admin)<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level collapse">
                              <li class="side">
                                  <a href="#"><i class="fa fa-files-o fa-fw"></i> Page Control</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="fa fa-user"></i> Users Control</a>
                              </li>
                              <li class="side">
                                  <a href="#"><i class="fa fa-server"></i> Function Control</a>
                              </li>
                          </ul>
                          <!-- /.nav-second-level 
                      </li>
                      <li class="side">
                          <a href="#/calendar"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
                      </li>
                      -->
