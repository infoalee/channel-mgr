<script src="./_controller/dashboard.js"></script>

<?
include("../class.php");
$dashboard = new Dashboard;
//**** New class database ****//
$strHost = "127.0.0.1";
$strDB = "ci_channel_mgt";
$strUser = "ci_ch_root";
$strPassword = "p@ssw0rd";
$clsMyDB = new MySQLDB($strHost,$strDB,$strUser,$strPassword);

?>
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

<?
if(isset($_SESSION["ROLE"])){
    $_role = $_SESSION["ROLE"];
}else{
    $_role = 1;
}
//**** Call to function select record ****//
$clsMyDB->strTable = "MENU_DASHBOARD";
if($_role==1){
    $conditions = " ID > 0 And status = 1 order by ID";
}else{
    $conditions = " ID > 0 And status = 1 And role=" . $_role . " order by ID";
}

$clsMyDB->strCondition = $conditions;

$objSelect = $clsMyDB->fncReturnResult();

    while($row = @mysql_fetch_array($objSelect)){
        $dashboard->pnStyle   = $row['PN_STYLE'];
        $dashboard->icon      = $row['PN_ICON'];
        $dashboard->label     = $row['NAME'];
        $dashboard->detail    = $row['CLICK_NAME'];
        $dashboard->notification = rand(1,100);
        $dashboard->href      = $row['HREF'];
        $dashboard->contentID = $row['CONTENT_ID'];

        $elm = $dashboard->createMenuItem();
        echo $elm;
    }     

    $clsMyDB-> __destruct();
?> 
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->
<?
Class Dashboard {

    function createMenuItem(){
        $element =  "<div class='col-lg-3 col-md-6'>
                    <div class='panel " . $this->pnStyle . "'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa " .$this->icon . " fa-5x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>" . $this->notification . "</div>
                                    <div>" . $this->label . "</div>
                                </div>
                            </div>
                        </div>
                        <a class='dash-a' href='" . $this->href . "' id='" . $this->contentID ."'>
                        <div class='panel-footer'>
                                <span class='pull-left'>" . $this->detail . "</span>
                                <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                <div class='clearfix'></div>
                            </div>
                        </a>
                    </div>
                </div>";
                return $element;
    }
}
?>