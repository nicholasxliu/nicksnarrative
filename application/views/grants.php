<div class="container-fluid-sidebar">
    <div class="container-fluid">
        <div class="page-header">
            <h1 id="">Grant</h1>
        </div>

        <?php

            if ($grant_json == null) {
                echo 'Whoops! This grant does not exist.';
            } else {
                $grantjson = JSON_decode($grant_json, true);
                $numItems = count($grant_json);

?>
<table id="grantinfo" class="granttable">
          <col width="20%">
          <col width="80%">
          <thead>
          <th>
              Grant ID
          </th>
          <th>
              Grant Organization
          </th>
                    <th>
              Contact Name
          </th>
                    <th>
              Contact Email
          </th>
                    <th>
              Contact Phone
          </th>
                    <th>
              Subject
          </th>
                    <th>
              Topic
          </th>
                    <th>
              Subject
          </th>

          </thead>
          <tbody>
          <?php for($i = 0; $i < $numItems; $i++){
              ?>
              <tr>
                  <td>
                      <?php
                      echo $grantjson["grantID"];
                      ?>
                  </td>
                  <td>    
                      <?php
                      echo $grantjson["orgName"];
                      ?>
                  </td>
                  <td>
                      <?php
                      echo $grantjson["contactName"];
                      ?>
                  </td>
                  <td>    
                      <?php
                      echo $grantjson["contactEmail"];
                      ?>
                  </td>
                  <td>
                      <?php
                      echo $grantjson["contactPhone"];
                      ?>
                  </td>
                  <td>    
                      <?php
                      echo $grantjson["subject"];
                      ?>
                  </td>
                  <td>
                      <?php
                      echo $grantjson["topic"];
                      ?>
                  </td>
                  <td>    
                      <?php
                      echo $grantjson["subtopic"];
                      ?>
                  </td>
              </tr>
          <?php
          }
          }
          ?>
          </tbody>
      </table>

<script>

    $( document ).ready(function() {
        $('#grantinfo').dynatable({
            features: {
                paginate: false,
                search: false,
                recordCount: false,
                perPageSelect: false
            }
        });
    });

</script>

        <form action='http://grantfellow.com/grants/save/<?php echo $grantjson['grantID'] ?>' method='post' id="saveButton">
            <input name="submit" type="submit" value="Save" style="font-size:14px;">
        </form>
        <form action='http://grantfellow.com/grants/submit/<?php echo $grantjson['grantID'] ?>' method='post' id="submitButton">
            <input name="submit" type="submit" value="Complete" style="font-size:14px;">
        </form>
        </div>
    </div>
</div>

<script>
    $('#saveButton').submit(function(event){  //added event
        alert('Saved!');
    });
    $('#submitButton').submit(function(event){  //added event
        alert('Completed!');
    });
</script>

</body>
</html>
