<!--<?php
$submittedapplicationsquery = mysql_query("SELECT * FROM applicationinfo WHERE (username='$username') AND (submissionstatus='1')");

if (mysql_num_rows($activeapplicationsquery==1)){
  echo("You currently have not submitted any applications.");
}
else{
while ($submittedapplications = mysql_fetch_assoc($submittedapplicationsquery)){
  $grantnameresult[]=$submittedapplications["grantname"];
}

$grantnameresultstr = "'".implode("','",$grantnameresult)."'";

$myappsquery = mysql_query("SELECT * FROM grantinfo WHERE grantname IN ($grantnameresultstr) ORDER BY deadline ASC");

while ($myapps = mysql_fetch_assoc($myappsquery)){
  $mygrantnameresult[]=$myapps["grantname"];
  $myorgnameresult[]=$myapps["orgname"];
  $mydeadline[]=$myapps["deadline"];
}
}
?>
-->

<div class="container-fluid-sidebar">
  <div class="container-fluid">

   <?php
    $reviewgrantsarray = JSON_decode($reviewgrants_json, true);
    $numItems = count($reviewgrantsarray);
    ?>

<div class="row">
  <div class="col-lg-12">
    <h2>Saved Applications</h2>
    <table id="savedgrants" class="granttable">
        <col width="20%">
        <col width="80%">
        <thead>
           <th>
           Grant Name
           </th>
           <th>
           Grant Organization
           </th>
         </thead>
        <tbody>
            <?php for($i = 0; $i < $numItems; $i++){
            if($reviewgrantsarray[$i]["saved"]) {
              ?>
              <tr>
              <td>
              <?php  
            echo $reviewgrantsarray[$i]["grantName"];
              ?>
              </td>
              <td>
              <a href="
              <?php echo URL . "grants/" . $reviewgrantsarray[$i]["grantName"]; ?>">
              <?php
            echo $reviewgrantsarray[$i]["grantOrganization"];
              ?>
              </a>
              </td>
              </tr>
              <?php
                }
                }
              ?>
        </tbody>
        </table>

<br>

      <h2>Completed Applications</h2>
      <table id="submittedgrants" class="granttable">
          <col width="20%">
          <col width="80%">
          <thead>
          <th>
              Grant Name
          </th>
          <th>
              Grant Organization
          </th>
          </thead>
          <tbody>
          <?php for($i = 0; $i < $numItems; $i++){
              if($reviewgrantsarray[$i]["submitted"]) {
              ?>
              <tr>
                  <td>
                      <?php

                      echo $reviewgrantsarray[$i]["grantName"];
                      ?>
                  </td>
                  <td>
                      <a href="
              <?php echo URL . "grants/" . $reviewgrantsarray[$i]["grantName"]; ?>">
                          <?php
                          echo $reviewgrantsarray[$i]["grantOrganization"];
                          ?>
                      </a>
                  </td>
              </tr>
          <?php
          }
          }
          ?>
          </tbody>
      </table>

      </div>
    </div>

  </div>
</div>

<script>

    $( document ).ready(function() {
        $('#savedgrants').dynatable({
            features: {
                paginate: false,
                search: false,
                recordCount: false,
                perPageSelect: false
            }
        });
    });

    $( document ).ready(function() {
        $('#submittedgrants').dynatable({
            features: {
                paginate: false,
                search: false,
                recordCount: false,
                perPageSelect: false
            }
        });
    });

</script>
</body>
