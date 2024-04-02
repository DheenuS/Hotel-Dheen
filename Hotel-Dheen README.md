Initially Download the XAMPP Server and install it on your Laptop or PC.
Move the project folder to xampp folder (Located in C drive) and place it inside the htdocs directory.
Start the Apache server and MySQL in the XAMPP
Click the Admin button next to the start button of MySQL. It opens the browser and displays the phpMyAdmin panel.
Create database:
  > Database name - "hoteldheen"
---------------------------------------------------------------------------------------------------------------------------------------------
Create tables:
  > admin - id(auto_increment), username, email, password
  > adminrooms - id(auto_increment), image, roomtype, roomprice, totalrooms, bookedrooms, availablerooms
  > contactus - id(auto_increment), firstname, lastname, email, message
  > reservation - id(auto_increment), name, email, phone, address, adults, children, roomtype, roomprice, checkin, checkout, totdays
  > signup - id(auto_increment), firstname, lastname, email, phone, address, username, password
  > staffs - id(auto_increment), name, role
---------------------------------------------------------------------------------------------------------------------------------------------
Ensure that all table names and field names are correct with their respective values.
Open a new tab in the browser. Enter this URL ---> http://localhost/Hotel-Dheen/ and hit enter. The Hotel Login Page will appear.
