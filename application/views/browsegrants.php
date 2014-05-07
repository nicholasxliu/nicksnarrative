<html>
<div class="container-fluid-sidebar">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="row">
        <div class="page-header">
          <h1>Browse Grants</h1>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script>
        $(document).ready(function(){
         $("#hiderestrictions").hide();
         $("#hiderestrictions1").hide();
         $("#hiderestrictions2").hide();
         $("#hiderestrictions3").hide();
         $("#hiderestrictions4").hide();
         $("#hiderestrictions5").hide();
         $("#hiderestrictions6").hide();
         $("#hiderestrictions7").hide();
         $("#hiderestrictions8").hide();
         $("#hiderestrictions9").hide();
         $("#hiderestrictions10").hide();
         $("#hiderestrictions11").hide();

         $("#hide").click(function(){
          $("#hiderestrictions").hide();
          $("#hiderestrictions1").hide();
          $("#hiderestrictions2").hide();
          $("#hiderestrictions3").hide();
          $("#hiderestrictions4").hide();
          $("#hiderestrictions5").hide();
          $("#hiderestrictions6").hide();
          $("#hiderestrictions7").hide();
          $("#hiderestrictions8").hide();
          $("#hiderestrictions9").hide();
          $("#hiderestrictions10").hide();
          $("#hiderestrictions11").hide();
        });
         $("#show").click(function(){
          $("#hiderestrictions").show();
          $("#hiderestrictions1").show();
          $("#hiderestrictions2").show();
          $("#hiderestrictions3").show();
          $("#hiderestrictions4").show();
          $("#hiderestrictions5").show();
          $("#hiderestrictions6").show();
          $("#hiderestrictions7").show();
          $("#hiderestrictions8").show();
          $("#hiderestrictions9").show();
          $("#hiderestrictions10").show();
          $("#hiderestrictions11").show();
        });
       });
</script>

<body>
  <br>
  <button id="hide" type=button>Hide Restriction Filters</button>
  <button id="show" type=button>Show Restriction Filters</button>

  <form action="http://grantfellow.com/browsegrantsaction" method="post" name="browsegrants">
    <table id="searchtable">

      <br>

      <tr>
        <td style="font-size:14px; width:200px;">
          Search:
        </td>
        <td>
          <input name="search" input type="text" style="font-size:14px;" >
        </td>
      </tr>

      <tr id="hiderestrictions">
        <td style="font-size:14px; width:200px;">
          Country Restrictions:
        </td>
        <td>
          <select name="restriction_country_input" style="font-size:14px;">
          <option value=""></option>
          <option value="United States">United States</option>
          <option value="NonUS">Other Countries</option>
          </select>
        </td>
      </tr>

      <tr id="hiderestrictions1">
        <td style="font-size:14px; width:200px;">
          State Restrictions:
        </td>
        <td>
          <select name="restriction_state_input" style="font-size:14px;">
            <option value=""></option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>           
        </td>
      </tr>

      <tr id="hiderestrictions2">
        <td style="font-size:14px; width:200px;">
          City Restrictions:
        </td>
        <td>
          <input name="restriction_city_input" input type="text" style="font-size:14px;">
        </td>
      </tr>

      <tr id="hiderestrictions3">
          <td style="font-size:14px; width:200px;">
          Citizenship Restrictions:
        </td>
        <td>
          <select name="restriction_citizenship_input" style="font-size:14px;">
          <option value=""></option>
          <option value="US">United States</option>
          <option value="NonUS">Other Countries</option>
          </select>
        </td>
      </tr>

      <tr id="hiderestrictions4">
        <td style="font-size:14px; width:200px;">
          Age Restrictions:
        </td>
        <td>
          <input name="restriction_age_input" input type="text" style="font-size:14px;">
        </td>
      </tr>

      <tr id="hiderestrictions5">
        <td style="font-size:14px; width:200px;">
          Gender Restrictions:
        </td>
        <td>
          <select name="restriction_gender_input" style="font-size:14px;">
          <option value=""></option>
          <option value="M">Male</option>
          <option value="F">Female</option>
          </select>
        </td>
      </tr>

      <tr id="hiderestrictions6">
        <td style="font-size:14px; width:200px;">
          School Restrictions:
        </td>
        <td>
          <select name="restriction_school_input" style="font-size:14px;">
          <option value=""></option>
          <option value="Penn">Penn</option>
          <option value="Harvard">Harvard</option>
          </select>
        </td>
      </tr>

      <tr id="hiderestrictions7">
        <td style="font-size:14px; width:200px;">
          Nonprofit Restrictions:
        </td>
        <td>
          <input type="radio" name="restriction_nonprofit_input" value="1" style="font-size:14px;">Yes&nbsp;
          <input type="radio" name="restriction_nonprofit_input" value="0" style="font-size:14px;">No
        </td>
      </tr>

      <tr id="hiderestrictions8">
        <td style="font-size:14px; width:200px;">
          Degree Restrictions:
        </td>
        <td>
          <input name="restriction_degree_input" input type="text" style="font-size:14px;">
        </td>
      </tr>

      <tr id="hiderestrictions9">
        <td style="font-size:14px; width:200px;">
          Language Restrictions:
        </td>
        <td>
          <input name="restriction_language_input" input type="text" style="font-size:14px;">
        </td>
      </tr>

      <tr id="hiderestrictions10">
        <td style="font-size:14px; width:200px;">
          Occupation Restrictions:
        </td>
        <td>
          <input name="restriction_occupation_input" input type="text" style="font-size:14px;">
        </td>
      </tr>

      <tr id="hiderestrictions11">
        <td style="font-size:14px; width:200px;">
          Organization Restrictions:
        </td>
        <td>
          <input type="radio" name="restriction_org_input" value="1" style="font-size:14px;">Yes&nbsp;
          <input type="radio" name="restriction_org_input" value="0" style="font-size:14px;">No
        </td>
      </tr>

    </table>
    <br>
    <input name="submit" type="submit" value="Search" style="font-size:14px;">
  </form>
</div>
</div>
</div>
</div>

</body>
</html>