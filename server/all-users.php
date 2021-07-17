<!-- method GET -->
<?php
// headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Methods: GET");
header("content-type: application/json; charset=UTF-8");
header("
    Access-Control-Allow-Headers: content-type,
    Access-Control-Allow-Headers,
    Authorization,
    X-Requested-Width
    ");

require './db_connection.php';

$allUsers = mysqli_query($db_conn, "SELECT * FROM `users`");
if(mysqli_num_rows($allUsers) > 0 ) {
    $allUsers = mysqli_fetch_all($allUsers, MYSQLI_ASSOC);
    echo json_encode([
        "success" => 1,
        "users" => $allUsers
    ]);
} else {
    echo json_encode(["success" => 0]);
}
?>