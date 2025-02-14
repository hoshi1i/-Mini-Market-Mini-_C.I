<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enkripsi password sebelum menyimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO db_login (id_user, email, password, username) VALUES ('id_user', '$email', '$password', '$username')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil! Silakan login.";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="email">Gmail:</label>
            <div class="input-group">
                <input type="email" id="email" placeholder="Masukan Email">
                <span class="toggle-password">👁</span>
            </div>

            <label for="password">Password:</label>
            <div class="input-group">
                <input type="password" id="password" placeholder="Masukan Password">
                <span class="toggle-password">👁</span>
            </div>

            <label for="username">Username:</label>
            <div class="input-group">
                <input type="text" id="username" placeholder="Masukan Username">
                <span class="toggle-password">👁</span>
            </div>

            <a href="#" class="forgot-password">Forget Password?</a>
            <button type="submit">Submit</button>
            <button  type="kembali"><a href='/' style="color: white; font-weight:bold; text-decoration:none;">Kembali</a></button>
        </form>
    </div>

</body>
</html>
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to bottom right, #002D96, #00C6FB);
    font-family: Arial, sans-serif;

}

.login-container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    width: 350px;
    text-align: center;
}

h2 {
    font-size: 28px;
    color: white;
    background: linear-gradient(to right, #002D96, #00C6FB);
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 20px;
    
}

label {
    display: block;
    text-align: left;
    font-weight: bold;
    margin: 10px 0 5px;
    color: #333;
}

.input-group {
    display: flex;
    align-items: center;
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
}

.input-group input {
    border: none;
    outline: none;
    width: 100%;
    padding: 10px;
    font-size: 14px;
}

.toggle-password {
    cursor: pointer;
    padding: 5px;
}

.forgot-password {
    display: block;
    text-align: left;
    color: red;
    text-decoration: none;
    font-size: 14px;
    margin: 10px 0;
    
}

button {
    background: #002D96;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 10px;
}

button:hover {
    background: #0056b3;
}



</style>    