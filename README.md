# Todo_assignment_using_php.github.io
Is an assignment given to me by my Oga... And in this assignment i'll be learning PHP CRUD which stands for CREATE, READ, UPDATE AND DELETE

# Work Flow
Create POST Form with Name and Location input fields and save button
Add div's and  Bootstrap classes to the form to make it look good, center the form
Create process.php, add it to Form action and include it from index.php
Create the MYSQL database "Todolist" and table "data" with id, name and location fields
Connect to the database and insert the Name and Location records into the "data" table if the save button has been pressed
Connect to the database, select the existing records and create the loop to display them above the Form in an Bootstrap col
Add Edit and Delete link buttons, pass the id of the record as GET variable in the URL in both links
If the Delete button has been clicked, delete the record from the "data" using passed id from the $_GET['delete'] variable value
Create session messages and message types for Save and Delete buttons, redirect the user back to index.php for both
Display Save and Delete messages with $_SESSION at the top of the page using Bootstrap 4 classes appropriate for each message type
If the Edit button has been clicked, select the existing record from the database, set $name and $location variables and display them in the Form input fields.
Set the $update variable to true inside the Edit button if statement. Set the $update variable to false
Add hidden input field with the value of the record id to accesss it from POST
If the Update button has been clicked, update the record with new $name and $location using the value from the hidden id input field. Set the value of $id to 0 outside the if statement.
Set the SESSION message to updated, set the message type and redirect back to index.php
