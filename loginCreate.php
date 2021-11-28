<?php



$user = trim(strtolower($_POST['username']));
$pass = trim($_POST['password']);

$dsn = 'mysql:host=localhost;dbname=freshfoundry';
$username = 'root';
$password = '';

echo $user;
echo $pass;

try {
    $db = new PDO($dsn,$username,$password);
    echo "Connection made to database";
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    exit();
};

$query = "SELECT username FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($row);
echo '</pre>';

if(in_array($user, $row[0])){
    echo 'username - '.$user.' found.';
}
else {
    $query_admin = "SELECT username FROM admin_users";
    $stmt = $db->prepare($query_admin);
    $stmt->execute();
    $row2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    var_dump($row2);
    echo '</pre>';

    if(in_array($user, $row2[0])) {
        echo 'admin user '.$user.' found.';
    }

    else {
        echo 'Unable to find any user';
    }
};

header('location:index.php');
?>