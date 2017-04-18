Final Lab/Project:

For the last lab, which will serve as your final exam and is worth 300 points (the equivalent of 3 "normal" labs) - building on what you learned from doing labs 9 and 10, implement a web-based store system that utilizes examples from Chapters 11 and 12 of the textbook.  Your online store should provide the following:

1. an ability for a user to query the "inventory" (of shoes, or hats, or whatever) based on two separate criteria (gender and size, for example); this will require utilization of php, html, and sql

2. utilization of at least five different html files: inventory, enter customer information, display price, store information, etc.

Deliverables: main/index html page should also provide links to text versions of all php files; main/index html page should also provide links to a document that displays the database "schema" (by schema, I mean the table name, fields in the table, data types for the fields, and sample data, also identifying primary keys). CAUTION: when submitting links on your project website to the text file versions of your php code, please make sure to first modify/alter the connection details (just say something like $conn=mysqli_connect("hostname", "username","password", "database"); - and NOT show/display what the real values are for the connection parameters). 

You will be presenting your end result in class during the week of December 5 (See Week 15 and Final Exam/Lab folders for the schedule).   Besides providing a link to your final product, you are to make a presentation (5-minutes max) to the class about your project, explaining your utilization of CSS, HTML, PHP, MySQL to accomplish it.

Grade will be determined by your proper utilization of HTML, PHP, CSS, and SQL, and by your presenting your final product in class.

Links to sample code:

http://www.pitt.edu/~pld7/CS334/finalproj

Link to some more fleshed out files of coding that you may find of assistance:

http://pld7fall2014.x10.mx/final/finalproj.htm

http://pdenardisfall2016.x10host.com/finalsample/finalproj.htm

(note - the sample above doesn't have a link to a screenshot of the structure/schema of the data table(s) - you are to provide that also in your project)

Sample Storyboard to help you plan your project: finalproj_storyboard.pdf 

NOTE: When moving your files to a third party host server (like x10, etc), you most likely will have to code your references to your database and your username(s) for your database with your x10 account name (or third party host site account name) as a prefix (like abc123_finalproject for database name and abc123_newuser for username).


ALSO: When creating database names, table names, and attribute names - DO NOT use blank spaces within your names; various tools may allow you to do create these, but when you go to actually use them via queries or other manipulations, you will encounter significant difficulties!  If you are using multiple words for each name, the convention is to either use an underscore to concatenate them or to just bang them up against each other (as in: firstTable or first_table)

More tips and guidance on connecting to databases:

1.      Go to “MySQL Databases” or the MySQL command line interface and set up the database in the database in MySQL (if you’re using x10, there is an icon for MySQL Databases in the Databases section; note – in x10, you’re limited to being able to create 2 or 3 databases)
2.      Create a user and give that user access (for now, just give that “user” all aspects of access)
3.      Go back to the control panel and use PhpMyAdmin to set up a table in the database and populate it with data
4.      Your html/php files then have to use that userid information (userid and password) to log into the database (see finalproh.htm example above, and look at the code for the createcards.php file) and then to query the database table.  Make sure you include the sql code to login and connect to the database in your php/html files.
