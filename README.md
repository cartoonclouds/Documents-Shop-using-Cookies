Documents-Shop-using-Cookies
============================

A php script that reads all documents from a database. In the 'Homepage' you can see which documents you have already viewed or which one you just bought. In the 'Documents list' you can find all the documents that you can 'buy'. All purchases are stored in the database too. After a purchase, cookies are cleared. (There is no purchase functionality since that was just a test for a job application. Just reads documents and stores viewed documents in cookies)

####Database & Configuration
In the root folder you will find a file called 'db.sql'. You can import it to your database. Then you will have to alter the database details in the config.php file.

####File Structure
Inside the root folder you will find index.php. The index.php file takes checks for any parameters in the url like '?page=list' etc. If there are no parameters, it shows the home page. If there are parameters, it looks at the pages folder for that particular file.

####Cookies
Every time a user views a document page, a cookie is stored. It's an array with the id of the documents read. Also a message is showed to the user in order to inform him that the website uses cookies. That message can be closed and will be stored in another cookie in order not to be displayed again.

####Form Validation
Takes all necessary precautions. So the 'Buy' form is validated by both Ajax (jQuery Validator) and PHP.
