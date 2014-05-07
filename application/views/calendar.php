<!-- Changes: 
- Need to make it so that it sorts by date
-->

<div class="container-fluid-sidebar">
  <div class="container-fluid">
      <div class="page-header">
      <h1 id="">Timeline</h1>
    </div>
    <div id="timeline">
      <div class="row timeline-movement timeline-movement-top">
        <div class="timeline-badge timeline-future-movement">
        </div>
        <div class="timeline-badge timeline-filter-movement">
            <a href="#">
                <span class="glyphicon glyphicon-time"></span>
            </a>
        </div>
      </div>

    <?php 
    $calendar_json = JSON_decode($calendar_json, true);
    $numItems = count($calendar_json);

   for($i = 0; $i < ($numItems); $i++){ ?>
      <div class="row timeline-movement">

          <div class="timeline-badge">
              <span class="timeline-balloon-date-day"><?php echo $calendar_json[$i]['date_day'];?></span>
              <span class="timeline-balloon-date-month"><?php
                switch ($calendar_json[$i]['date_month']) {
                    case 1:
                        echo "JAN";
                        break;
                    case 2:
                        echo "FEB";
                        break;
                    case 3:
                        echo "MAR";
                        break;
                    case 4:
                        echo "APR";
                        break;
                    case 5:
                        echo "MAY";
                        break;
                    case 6:
                        echo "JUN";
                        break;
                    case 7:
                        echo "JUL";
                        break;
                    case 8:
                        echo "AUG";
                        break;
                    case 9:
                        echo "SEP";
                        break;
                    case 10:
                        echo "OCT";
                        break;
                    case 11:
                        echo "NOV";
                        break;
                    case 12:
                        echo "DEC";
                        break;
                }

?></span>
          </div>

          <div class="col-sm-6  timeline-item" style="width: 90%;">
              <div class="row">
                  <div class="col-sm-11">
                      <div class="timeline-panel credits">
                          <ul class="timeline-panel-ul">
                              <li><span class="importo"><?php echo $calendar_json[$i]['grantName'];?></span></li>
                              <li><span class="causale"><?php echo $calendar_json[$i]['grantOrganization'];?></span> </li>
                              <li><p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 
                              <?php echo $calendar_json[$i]['date_year']."/"; 
                              echo $calendar_json[$i]['date_month']."/"; 
                              echo $calendar_json[$i]['date_day']; 
                              ?>
                              </small></p> </li>
                          </ul>
                      </div>

                  </div>
              </div>
          </div>
      </div>
    <?php
      }
    ?>
    </div>
  </div>
</div>

</body>
</html>
