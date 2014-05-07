<div class="container-fluid-sidebar">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="row">
        <div class="page-header">
          <h1>Browse Grants Results</h1>
        </div>
   <?php
    $browsegrantsarray = JSON_decode($browsegrantsaction_json, true);
    $numItems = count($browsegrantsarray);
    ?>

    <table id="granttable" class="granttable">
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
              ?>
              <tr>
              <td>
              <?php  
            echo $browsegrantsarray[$i]["grantName"];
              ?>
              </td>
              <td>
              <a href="
              <?php echo URL . "grants/" . $browsegrantsarray[$i]["grantName"]; ?>">
              <?php
            echo $browsegrantsarray[$i]["grantOrganization"];
              ?>
              </a>
              </td>
              </tr>
              <?php
                }
              ?>
        </tbody>
        </table>
    
      </div>
    </div>

<script>

    $( document ).ready(function() {
        $('#granttable').dynatable({
            features: {
                paginate: true,
                search: true,
                recordCount: false,
                perPageSelect: true
            },
        });
    });

</script>

      </div>
    </div>
  </div>

</body>
</html>