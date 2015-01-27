<?php $javascript_validation = false;?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/registration.css">
    <script type="text/javascript" src="js/registration.js"></script>
</head>
<body>
<table style="margin: 0 auto;">
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
                    <?php echo $javascript_validation ? 'pattern="[A-Za-zА-Яа-яёЁ]+"' : ''; ?>
                    title="First name must consist only from alphabet symbols"
                    value="<?php echo 'Anton'?>"
                    required><br><br>
                <input
                    type="text"
                    name="lastname"
                    placeholder="Last name"
                    <?php echo $javascript_validation ? 'pattern="[A-Za-zА-Яа-яёЁ-]+"' : ''; ?>
                    title="Last name must consist only from alphabet symbols and hyphen"
                    value="<?php echo 'Ivaniutsenka'?>"
                    required><br><br>
                <input
                    type="text"
                    onfocus="this.type='date'"
                    onblur="this.type='text'"
                    name="dateofbirth"
                    placeholder="Date of birth"
                    title="Choose the needed date"
                    max="<?php echo date('Y-m-d')?>"
                    value="<?php echo '1989-03-22'?>"
                    required><br><br>
                <input type="radio" name="sex" value="male" required checked>Male
                <input type="radio" name="sex" value="female" required>Female<br><br>
                <input
                    type="<?php echo $javascript_validation ? 'email' : 'text'; ?>"
                    name="email"
                    placeholder="Email address"
                    title="Email must match for the next pattern: exmple@domain.com"
                    value="<?php echo 'anton.ivanyutenko@gmail.com'?>"
                    required><br><br>
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    onchange="form.password2.pattern = this.value"
                    <?php echo $javascript_validation ? 'pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"' : ''; ?>
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
                    <?php echo $javascript_validation ? 'pattern="\+[\d\-]+"' : ''; ?>
                    title="Phone must match for the next pattern: +375-XX-XXXXXXX"
                    value="<?php echo '+375296957996'?>"
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