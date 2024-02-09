<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location: login.php');
    exit();
}

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'project');

// CREATE operation - Adding a new user (admin or regular user)
if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $is_admin = isset($_POST['is_admin']) ? 1 : 0; // Check if the user is an admin

    // Hash the password (consider using stronger encryption methods)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password, is_admin) 
              VALUES ('$username', '$email', '$hashed_password', '$is_admin')";
    mysqli_query($db, $query);
    header('location: admin_dashboard.php');
    exit();
}

// READ operation - Fetching all users
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// UPDATE operation - Updating user information
if (isset($_POST['update_user'])) {
    $id = $_POST['user_id'];
    $username = $_POST['updated_username'];
    $email = $_POST['updated_email'];
    $is_admin = isset($_POST['updated_is_admin']) ? 1 : 0; // Check if the user is an admin

    $updateQuery = "UPDATE users SET username='$username', email='$email', is_admin='$is_admin' WHERE id='$id'";
    mysqli_query($db, $updateQuery);
    header('location: admin_dashboard.php');
    exit();
}

// DELETE operation - Deleting a user
if (isset($_POST['delete_user'])) {
    $idToDelete = $_POST['user_id_to_delete'];

    $deleteQuery = "DELETE FROM users WHERE id='$idToDelete'";
    mysqli_query($db, $deleteQuery);
    header('location: admin_dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<style>/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

/* Form styles */
form {
    margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    margin: 5px 0;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    cursor: pointer;
    background-color: #4caf50;
    color: white;
    border: none;
}

button:hover {
    background-color: #45a049;
}

/* User display styles */
div {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
}

h3 {
    margin-top: 0;
    margin-bottom: 5px;
    color: #333;
}

p {
    margin-top: 0;
    color: #666;
}

/* Update and Delete forms styles */
form:nth-child(n + 2) {
    display: flex;
    align-items: center;
}

form:nth-child(n + 2) input[type="text"],
form:nth-child(n + 2) input[type="email"],
form:nth-child(n + 2) label {
    margin-right: 10px;
}

label {
    margin-bottom: 5px;
}

/* Checkbox styles */
input[type="checkbox"] {
    vertical-align: middle;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form:nth-child(n + 2) {
        flex-direction: column;
    }

    form:nth-child(n + 2) input[type="text"],
    form:nth-child(n + 2) input[type="email"],
    form:nth-child(n + 2) label {
        margin-right: 0;
        margin-bottom: 5px;
    }
    /* Header styles */
header {
    background-color: #333;
    color: white;
    padding: 15px 0;
    text-align: center;
}

.header-content {
    max-width: 1200px;
    margin: 0 auto;
}

h1 {
    margin: 0;
    font-size: 28px;
}
}
</style>
<!-- Admin Dashboard Content -->
<body>
<header>
        <div class="header-content">
            <h1>Admin Dashboard</h1>
            <!-- Add additional content like a logo, navigation links, etc. -->
        </div>
    </header>
    <!-- Add User Form -->
    <form method="POST" action="admin_dashboard.php">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <label for="is_admin">Admin?</label>
        <input type="checkbox" id="is_admin" name="is_admin" value="1">
        <button type="submit" name="add_user">Add User</button>
    </form>

    <!-- Displaying fetched users -->
    <?php foreach ($users as $user) : ?>
        <div>
            <h3><?php echo $user['username']; ?></h3>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Admin: <?php echo $user['is_admin'] ? 'Yes' : 'No'; ?></p>

            <!-- Update user form -->
            <form method="POST" action="admin_dashboard.php">
                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                <input type="text" name="updated_username" value="<?php echo $user['username']; ?>">
                <input type="email" name="updated_email" value="<?php echo $user['email']; ?>">
                <label for="updated_is_admin">Admin?</label>
                <input type="checkbox" id="updated_is_admin" name="updated_is_admin" value="1"
                       <?php echo $user['is_admin'] ? 'checked' : ''; ?>>
                <button type="submit" name="update_user">Update</button>
            </form>

            <!-- Delete user form -->
            <form method="POST" action="admin_dashboard.php">
                <input type="hidden" name="user_id_to_delete" value="<?php echo $user['id']; ?>">
                <button type="submit" name="delete_user">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>
</body>
</html>
