
<div class="d-flex flex-row">

    <div class="col-md-12">
        <div class="card card2 p-3">
            <div class="hello d-flex justify-content-end text-warning align-items-center mt-3">
                <span><strong>Hi, Admin</strong> </span>


            </div><br><br>
            
            <!-- new -->
                           <!-- /.row -->

       <div class="row">
       <div class="col-lg-3 mt-5 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM client";
                                $select_all = mysqli_query($conn, $query);
                                $User_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$User_counts}</div>";
                                ?>

                               <div>Users</div>
                           </div>
                       </div>
                   </div>
                   <a href="users.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 mt-5 col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM coiffeur";
                                $select_all = mysqli_query($conn, $query);
                                $barber_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$barber_counts}</div>";
                                ?>

                               <div>Barbers</div>
                           </div>
                       </div>
                   </div>
                   <a href="coiffeur.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 mt-5 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM contact";
                                $select_all = mysqli_query($conn, $query);
                                $message_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$message_counts}</div>";
                                ?>

                               <div> Messages</div>
                           </div>
                       </div>
                   </div>
                   <a href="message.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3 mt-5 col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="iconify mt-5 fa-5x" data-icon="ri:reserved-fill"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM reservation";
                                $select_all = mysqli_query($conn, $query);
                                $reservation_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$reservation_counts}</div>";
                                ?>

                               <div>Reservations</div>
                           </div>
                       </div>
                   </div>
                   <a href="reservation.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
         
       <div class="row">
           <script type="text/javascript">
            //    google.charts.load('current', {
            //        'packages': ['bar']
            //    });
            //    google.charts.setOnLoadCallback(drawChart);

            //    function drawChart() {
            //        var data = google.visualization.arrayToDataTable([
            //            ['date', 'count'],

            //            <?php
            //             $element = ['client', 'coiffeur', 'contact', 'reservation'];
            //             $count = [$User_counts, $barber_counts,  $message_counts, $reservation_counts,];

            //             for ($i = 0; $i < 4; $i++) {
            //                 echo "['{$element[$i]}'" . "," . "{$count[$i]}],";
            //             }

            //             ?>


            //        ]);

            //        var options = {
            //            chart: {
            //                title: '',
            //                subtitle: '',
            //            }
            //        };

            //        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            //        chart.draw(data, google.charts.Bar.convertOptions(options));
            //    }


            function initialize() {
  var opts = {sendMethod: 'auto'};
  // Replace the data source URL on next line with your data source URL.
  var query = new google.visualization.Query('http://spreadsheets.google.com?key=123AB&...', opts);

  // Optional request to return only column C and the sum of column B, grouped by C members.
  query.setQuery('select C, sum(B) group by C');

  // Send the query with a callback function.
  query.send(handleQueryResponse);
}

function handleQueryResponse(response) {
  // Called when the query response is returned.
  
}
// hhhh

function handleQueryResponse(response) {

if (response.isError()) {
  alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
  return;
}

var data = response.getDataTable();
var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
chart.draw(data, {width: 400, height: 240, is3D: true});
}
           </script>
           <div class="table-responsive">
               <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>
           </div>

       </div>
            <!-- end -->
        </div>
    </div>
</div>