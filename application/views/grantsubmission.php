<html>
<div class="container-fluid-sidebar">
  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="row">
        <div class="page-header">
          <h1>Create Your Grant Application</h1>
      </div>


      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script type="text/javascript">

// When the DOM is loaded, init scripts.
jQuery(function( $ ){

            // Get a reference to the seeking input box.
            var field1_type = $( "#field1_type" );

            // Ge a reference to the male and female attribute
            // lists. These are the elements that will be shown
            // and hidden depending on the seeking value.
            var text = $( "#text" );
            var multiplechoice = $( "#multiplechoice" );
            var checklist = $( "#checklist" );
            var dropdown = $( "#dropdown" );

            // Remove the titles that were in the page ONLY if
            // Javascript was not enabled.
            //$( "h2.attribute-title" ).remove();

            // Bind the onChange event of the select box. If the
            // user selects "Female" we want ot show the female
            // attributes list and vice-versa for Male.
            field1_type.change(
                function( event ){

                    // Check to see what the current value of the
                    // seeking input is.
                    if (field1_type.val() == "text"){

                        // Text selected.

                        // Show the text list and re-enable any
                        // input fields within it.
                        text
                        .show()
                        .find( ":input[ disabled ]" )
                        .removeAttr( "disabled" )
                        ;

                        // Hide the other lists and disable any
                        // inputs within it so that they cannot be
                        // submitted with the form.
                        multiplechoice
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        checklist
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        dropdown
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                    } else if (field1_type.val() == "multiplechoice"){

                        multiplechoice
                        .show()
                        .find( ":input[ disabled ]" )
                        .removeAttr( "disabled" )
                        ;

                        // Hide the other lists and disable any
                        // inputs within it so that they cannot be
                        // submitted with the form.
                        text
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        checklist
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        dropdown
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                    } else if (field1_type.val() == "checklist"){

                        checklist
                        .show()
                        .find( ":input[ disabled ]" )
                        .removeAttr( "disabled" )
                        ;

                        // Hide the other lists and disable any
                        // inputs within it so that they cannot be
                        // submitted with the form.
                        text
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        multiplechoice
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        dropdown
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                    } else{

                        dropdown
                        .show()
                        .find( ":input[ disabled ]" )
                        .removeAttr( "disabled" )
                        ;

                        // Hide the other lists and disable any
                        // inputs within it so that they cannot be
                        // submitted with the form.
                        text
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        multiplechoice
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;

                        checklist
                        .hide()
                        .find( ":input" )
                        .attr( "disabled", "true" )
                        .removeAttr( "checked" )
                        ;
                    }
                }
                );


            // Now that we have the onChange event bound to the
            // select box, manually trigger it to make sure the
            // form is in the appropriate state.
            field1_type.change();

        });

</script>


<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-9">
                <div class="page-header">

                    <h1>Grant Submission</h1>

                    <form action="grantsubmissionaction.php" method="post" name="register">
                      <table width="200" border="0">
                        <tr>
                            <td>Organization Name:</td>
                            <td><input name="org_name" type="text" size="50" maxlength="200"></td>
                        </tr>
                        <tr>
                            <td>Public/Private:</td>
                        </tr>
                        <tr>
                            <td><input name="publicprivate" type="radio" value="public">Public</td>
                            <td><input name="publicprivate" type="radio" value="private">Private</td>
                        </tr>
                        <tr>
                            <td>Topic:</td>
                            <td><input name="topic" type="text" size="50" maxlength="50"></td>
                        </tr>
                        <tr>
                            <td>Subtopic:</td>
                            <td><input name="subtopic" type="text" size="50" maxlength="50"></td>
                        </tr>
                        <tr>
                            <td>Important Tags:</td>
                            <td><input name="tags_important" type="text" size="50" maxlength="50"></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            Application Questions
                        </tr>
                        <tr>
                            <td>Question 1:</td>
                            <td> <input name="field1" type="text" size="300" maxlength="1000"></td>
                        </tr>
                        <tr>
                            <td>Question 1 Type:</td>
                            <td>
                                <select id="field1_type" name="field1_type">
                                  <option value="text" selected="true">Text</option>
                                  <option value="multiplechoice">Multiple Choice</option>
                                  <option value="checklist">Checklist</option>
                                  <option value="dropdown">Drop Down List</option>
                              </select>
                          </td>
                      </tr>

                      <tbody id="text">
                        <tr>
                            <td>Text Question Characteristics:</td>
                        </tr>
                        <tr>
                            <td>Character Limit:</td>
                            <td><input name="text_characterlimit" type="number"></td>
                        </tr>
                    </tbody>

                    <tbody id="multiplechoice">
                        <tr>
                            <td>Multiple Choice Question Characteristics:</td>
                        </tr>
                        <tr>
                            <td>Choice 1:</td>
                            <td><input name="mc_choice1" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 2:</td>
                            <td><input name="mc_choice2" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 3:</td>
                            <td><input name="mc_choice3" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 4:</td>
                            <td><input name="mc_choice4" type="text"></td>
                        </tr>
                    </tbody>

                    <tbody id="checklist">
                        <tr>
                            <td>Checkist Question Characteristics:</td>
                        </tr>
                        <tr>
                            <td>Choice 1:</td>
                            <td><input name="cl_choice1" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 2:</td>
                            <td><input name="cl_choice2" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 3:</td>
                            <td><input name="cl_choice3" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 4:</td>
                            <td><input name="cl_choice4" type="text"></td>
                        </tr>
                    </tbody>

                    <tbody id="dropdown">
                        <tr>
                            <td>Dropdown List Question Characteristics:</td>
                        </tr>
                        <tr>
                            <td>Choice 1:</td>
                            <td><input name="dd_choice1" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 2:</td>
                            <td><input name="dd_choice2" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 3:</td>
                            <td><input name="dd_choice3" type="text"></td>
                        </tr>
                        <tr>
                            <td>Choice 4:</td>
                            <td><input name="dd_choice4" type="text"></td>
                        </tr>
                    </tbody>
                </table>

                <input name="submit" type="submit" value="Submit">

            </form>

        </div>
    </div>
</div>
</div>
</body>
</html>