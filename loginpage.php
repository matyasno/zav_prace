
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>
<body class="login">

    <div class="divider"></div>

    <div class="regisdiv">
        <form action="register.php" method="post">
            <table>
                <tr class="msgbox" >
                    <td colspan="2">
                    <?php
                    session_start();
                    if (isset($_SESSION['errorMsg'])) {
                        echo "<p class='error' style='color: red; font-weight: bold; right:-50px;'>" . $_SESSION['errorMsg'] . "</p>";
                        unset($_SESSION['errorMsg']);
                    }
                    if (isset($_SESSION['successMsg'])) {
                        echo "<p class='error' style='color: green; font-weight: bold; right:-50px;'>" . $_SESSION['successMsg'] . "</p>";
                        unset($_SESSION['successMsg']);
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><p class="divtext">First name</p></td>
                    <td><input type="text" name="first" placeholder="Your first name..." required></td>
                </tr>
                <tr>
                    <td><p class="divtext">Last name</p></td>
                    <td><input type="text" name="last" placeholder="Your last name..." required></td>
                </tr>
                <tr>
                    <td><p class="divtext">Username</p></td>
                    <td><input type="text" name="user" placeholder="Uzaki6262..." required></td>
                </tr>
                <tr>
                    <td><p class="divtext">E-mail</p></td>
                    <td><input type="text" name="email" placeholder="abcd.efgh@ijkl.com" required></td>
                </tr>
                <tr>
                    <td><p class="divtext">Password</p></td>
                    <td><input type="password" name="password" placeholder="*******" required></td>
                </tr>
            </table>

            <button type="submit" class="regisbutton">
            <span>Register</span>
            <div class="liquidreg"></div>
        </button>
        </form>
    </div>
    <div class="logindiv">
        <form action="login.php" method="post">
            <table>
                <tr class="msgbox" >
                    <td colspan="2">
                    <?php
                    if (isset($_SESSION['errorLoginMsg'])) {
                        echo "<p class='error' style='color: red; font-weight: bold; right:-50px;'>" . $_SESSION['errorLoginMsg'] . "</p>";
                        unset($_SESSION['errorLoginMsg']);
                    }
                    ?>
                    </td>
                <tr>
                    <td><p class="divtext">Username</p></td>
                    <td><input type="text" name="user" placeholder="Uzaki6262..." required></td>
                </tr>
                <tr>
                    <td><p class="divtext">Password</p></td>
                    <td><input type="password" name="password" placeholder="*******" required></td>
                </tr>
            </table>
            <button type="submit" class="loginbutton">
            <span>Login</span>
            <div class="liquid"></div>
        </button>
        </form>
    </div>

</body>
</html>


