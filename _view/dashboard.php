<script src="./_controller/dashboard.js"></script>
<?
include("../class.php");
$dashboard = new Dashboard;
//createMenuItem($pnStyle, $icon, $label, $detail, $notification, $href, $contentID)
//**** New class database ****//
$strHost = "127.0.0.1";
$strDB = "ci_channel_mgt";
$strUser = "root";
$strPassword = "p@ssw0rd";
$clsMyDB = new MySQLDatabase($strHost,$strDB,$strUser,$strPassword);

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

//**** Call to function select record ****//
$clsMyDB->strTable = "MENU_DASHBOARD";
$clsMyDB->strCondition = " ID > 0 ";
$objSelect = $clsMyDB->fncReturnResult();

    while($row = @mysql_fetch_array($objSelect)){
        $_pnStyle   = $row['PN_STYLE'];
        $_icon      = $row['PN_ICON'];
        $_label     = $row['NAME'];
        $_detail    = $row['CLICK_NAME'];
        $_notification = rand(1,100);
        $_href      = $row['HREF'];
        $_contentID = $row['CONTENT_ID'];

        $elm = $dashboard -> createMenuItem($_pnStyle, $_icon, $_label, $_detail, $_notification, $_href, $_contentID);
        echo $elm;
    }

            
?> 

            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->
<?
Class Dashboard {

    function createMenuItem($pnStyle, $icon, $label, $detail, $notification, $href, $contentID){
        $element =  "<div class='col-lg-3 col-md-6'>
                    <div class='panel " . $pnStyle . "'>
                        <div class='panel-heading'>
                            <div class='row'>
                                <div class='col-xs-3'>
                                    <i class='fa " .$icon . " fa-5x'></i>
                                </div>
                                <div class='col-xs-9 text-right'>
                                    <div class='huge'>" . $notification . "</div>
                                    <div>" . $label . "</div>
                                </div>
                            </div>
                        </div>
                        <a href='" . $href . "' id='" . $contentID ."'>
                            <div class='panel-footer'>
                                <span class='pull-left'>" . $detail . "</span>
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