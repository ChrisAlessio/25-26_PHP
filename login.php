<?php include "includes/header.php"; ?>
<!-- Username
     Password
     Submit -->
<form method="post" action="loginAction.php">
    <label>Username</label>
    <input type="text" name="user" id="user" /><br />
    <label>Password</label>
    <input type="password" name="pass" id="pass" /><br />
    <input type="submit" name="login" id="login">
</form>
<?php include "includes/footer.php"; ?>