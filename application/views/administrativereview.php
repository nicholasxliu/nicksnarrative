<div class="container-fluid-sidebar">
  <div class="container-fluid">
<!--
   <?php
   $universityapplicationsarray = JSON_decode($administrativereview_json, true);
   $numItems = count($universityapplicationsarray);
   for($i = 0; $i < $numItems; $i++){
    echo('+');
  }
  ?>-->


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
         <th>
           University Professor
         </th>
       </thead>
       <tbody>
        <?php for($i = 0; $i < $numItems; $i++){
          if($universityapplicationsarray[$i]["saved"]) {
            ?>
            <tr>
              <td>
                <?php  
                echo $universityapplicationsarray[$i]["grantName"];
                ?>
              </td>
              <td>
                <a href="
                <?php echo URL . "grants/" . $universityapplicationsarray[$i]["grantName"]; ?>">
                <?php
                echo $universityapplicationsarray[$i]["grantOrganization"];
                ?>
              </a>
            </td>
            <td>
              <?php  
              echo $universityapplicationsarray[$i]["userFirstname"].' ';
              echo $universityapplicationsarray[$i]["userLastname"];
              ?>
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
      <th>
        University Professor
      </th>
    </thead>
    <tbody>
      <?php for($i = 0; $i < $numItems; $i++){
        if($universityapplicationsarray[$i]["submitted"]) {
          ?>
          <tr>
            <td>
              <?php

              echo $universityapplicationsarray[$i]["grantName"];
              ?>
            </td>
            <td>
              <a href="
              <?php echo URL . "grants/" . $universityapplicationsarray[$i]["grantName"]; ?>">
              <?php
              echo $universityapplicationsarray[$i]["grantOrganization"];
              ?>
            </a>
          </td>
          <td>
            <?php  
            echo $universityapplicationsarray[$i]["userFirstname"].' ';
            echo $universityapplicationsarray[$i]["userLastname"];
            ?>
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
