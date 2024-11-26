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

// Static method overuse

class User {
    public static function getName() {
        return "John";
    }
}

// File handling without any error handling

$data = file_get_contents('data.txt');

// Inefficient database query: selecting all

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);



// function to add two numbers

function add($a, $b) {
    return $a + $b;
}

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
