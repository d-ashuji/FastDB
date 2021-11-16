# FastDB 
	
How To Use
---------------------------

 Connect to MySQL database:
 include 'db.php';

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'example';

 $db = new db($dbhost, $dbuser, $dbpass, $dbname);

 Fetch a record from a database:
 $account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', 'test', 'test')->fetchArray();
 echo $account['name'];
 Or you could do:

 $account = $db->query('SELECT * FROM accounts WHERE username = ? AND password = ?', array('test', 'test'))->fetchArray();
 echo $account['name'];

 Fetch multiple records from a database:
 $accounts = $db->query('SELECT * FROM accounts')->fetchAll();

 foreach ($accounts as $account) {
 	echo $account['name'] . '<br>';
 }
 You can specify a callback if you do not want the results being stored in an array (useful for large amounts of data):

 $db->query('SELECT * FROM accounts')->fetchAll(function($account) {
     echo $account['name'];
 });
 If you need to break the loop you can add:

 return 'break'; 
 Get the number of rows:
 $accounts = $db->query('SELECT * FROM accounts');
 echo $accounts->numRows();

 Get the affected number of rows:
 $insert = $db->query('INSERT INTO accounts (username,password,email,name) VALUES (?,?,?,?)', 'test', 'test', 'test@gmail.com', 'Test');
 echo $insert->affectedRows();

 Get the total number of queries:
 echo $db->query_count;

 Get the last insert ID:
 echo $db->lastInsertID();

 Close the database:
 $db->close();

 for more information visit: https://codeshack.io/super-fast-php-mysql-database-class/