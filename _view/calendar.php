<? echo "<h1 align=center> Calendar Page</h1>";?>
<!-- fullCalendar -->
<link href="./dist/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="./dist/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
<!-- Theme style -->
<link href="./dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />

<script src='https://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='https://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src="https://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
<script src='https://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            defaultDate: '2014-09-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
        });
    });
</script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-9">
            <div class="box box-primary">                                
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-wrapper -->