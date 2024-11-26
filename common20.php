
// Deserialization with unserialize function

$data = $_POST['data'];
$object = unserialize($data);


// Insecure session setup
session_start();


// No caching, querying the database on every page load

$query = "SELECT * FROM posts";
$result = mysqli_query($connection, $query);



// loading a large file into memory

$data = file_get_contents('largefile.json');


// Iterate over users array and extract name field into another array

$names = [];
foreach ($users as $user) {
    $names[] = $user['name'];
}



// Retrieve the 'username' parameter and use it to construct a SQL query to select all columns from users

$user_input = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '$user_input'";
$result = mysqli_query($connection, $query);


// start a session and process a post request to transfer amount to a recipient (vulnerable to CSRF

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $recipient = $_POST['recipient'];

    // Process the transfer (vulnerable to CSRF)
    echo "Transferred $amount to $recipient";
}



// Running system commands with input data

$filename = $_GET['filename'];
system("rm $filename"); 


// Insecure password storage

$password = md5('password123');



// Static method overuse

class User {
    public static function getName() {
        return "John";
    }
}



// Configuration that allows Cross-Origin access

header("Access-Control-Allow-Origin: *"); // Allows any domain to access the resource
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE"); // Allows all HTTP methods
header("Access-Control-Allow-Headers: *"); // Allows all headers
header("Access-Control-Allow-Credentials: true"); // Allows credentials (cookies, authorization headers, etc.)




// File handling without any error handling

$data = file_get_contents('data.txt');



// Use of deprecated function split() for splitting string

$var = split(',', $string);



// Hardcoded configurations and credentials

$API_KEY = 'ThisISsomeRandomAPIKey'



// Fatal error due to undefined function

$result = getUserDetails();


// Inefficient database query: selecting all

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);



// function to add two numbers

function add($a, $b) {
    return $a + $b;
}



// Memory leak due to unclosed connection

$connection = new mysqli($host, $user, $pass, $db);




// Fetch user data and product with duplicated logic for database connection

$conn = connectDatabase();
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "User: " . $row["username"] . "<br>";
    }
}
$conn->close();

// Fetch product data
$conn = connectDatabase();
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product: " . $row["product_name"] . "<br>";
    }
}
$conn->close();



// Complex nested conditionals

if ($a == 1) {
    if ($b == 2) {
        if ($c == 3) {
            echo "Success";
        }
    }
}



// Non-conventional function naming style

function get_user_Data() {
    return "User data";
}
