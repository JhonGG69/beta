<?php
//nombre de html ['email'];
//Db connection
require('../../config/db_connection.php');
//get data from register form


$email = $_POST['email'];
$pass = $_POST['passwd'];
$enc_pass = md5($pass);

/*echo "email:" . $email;
echo "<br>Password:" . $pass;
echo "<br>Enc. Password " . $enc_pass;
*/
// Query to insert data into users table
$query = "INSERT INTO users (email,password)
VALUES ('$email', '$enc_pass');
";
$result = pg_query($conn, $query);
if ($result) {
    echo "<br>Registration successful";
} else {
    echo "Registration failed!";
}
pg_close($conn)
?>