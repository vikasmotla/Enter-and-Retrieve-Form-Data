# Enter-and-Retrieve-Form-Data
In this Dynamic web page , user can enter personal details with a unique ID and this details can be searched by using unique Id or by his/her Name.
<br/>
This project contains the following files/folders - 
1. HomePage.html
2. EnterDetails.html
3. SearchDetails.html
4. StyleForm.css
5. Enter.php
6. Search.php and SearchName.php
<br/> <br/>
All the HTML,CSS files are used for basic design on webpage (see snapshots of these files attached to this repository).
EnterDetails.html have JQuery in it to use AJAX call to Enter.php. 
SearchDetails.html have a AJAX call to Search.php and SearchName.php for searching the existing users. <br/> <br/>
In "Enter.php" there is a connection code for database and table and this file takes the input from EnterDetails.html file , all the form data, and saving it to table using MySQL query.<br/>
And it also check the unique ID whether already present or not. On success it will store the form details into database otherwise shows error "ID already Exists".
<br/>
<br/>
In "Search.php" there is a connection code for database and table and this file takes the input from SearchDetails.html file such as Name or ID. By taking ID as input and on submit it will search from database by using this ID using Query and same can be done by SearchName.
