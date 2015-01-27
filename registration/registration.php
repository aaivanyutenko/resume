<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <script type="text/javascript" src="js/registration.js"></script>
</head>
<body>
<table align="center">
    <tr>
        <th>
            <h3>Registration</h3>
        </th>
    </tr>
    <tr>
        <td>
            <form action="register.php" method="POST">
                <input
                    type="text"
                    name="firstname"
                    placeholder="First name"
                    pattern="\w+"
                    title="First name must consist only from alphabet symbols"
                    value="<?echo 'Anton'?>"
                    required><br><br>
                <input
                    type="text"
                    name="lastname"
                    placeholder="Last name"
                    pattern="[\w-]+"
                    title="Last name must consist only from alphabet symbols and hyphen"
                    value="<?echo 'Ivaniutsenka'?>"
                    required><br><br>
                <input
                    type="text"
                    onfocus="this.type='date'"
                    onblur="this.type='text'"
                    name="dateofbirth"
                    placeholder="Date of birth"
                    title="Choose the needed date"
                    max="<?echo date('Y-m-d')?>"
                    value="<?echo '1989-03-22'?>"
                    required><br><br>
                <input type="radio" name="sex" value="male" required checked>Male
                <input type="radio" name="sex" value="female" required>Female<br><br>
                <input
                    type="email"
                    name="email"
                    placeholder="Email address"
                    title="Email must match for the next pattern: exmple@domain.com"
                    value="<?echo 'anton.ivanyutenko@gmail.com'?>"
                    required><br><br>
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    onchange="form.password2.pattern = this.value"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                    title="Password must contain at least 6 characters, including UPPER/lowercase and numbers"
                    value="er34RL1p"
                    required><br><br>
                <input
                    type="password"
                    name="password2"
                    placeholder="Retype password"
                    title="Please enter the same password as above"
                    value="er34RL1p"
                    required><br><br>
                <input
                    type="text"
                    name="phone"
                    pattern="\+[\d\-]+"
                    title="Phone must match for the next pattern: +375-XX-XXXXXXX"
                    value="<?echo '+375296957996'?>"
                    placeholder="Mobile phone"><br><br>
                <input
                    type="file"
                    name="photo"
                    placeholder="Photo"
                    accept="image/jpeg,image/gif,image/png"><br><br>
                <input type="submit" value="Register">
            </form>
        </td>
    </tr>
</table>
</body>
</html>