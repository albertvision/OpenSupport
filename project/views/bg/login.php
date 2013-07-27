
<div id="login-box">
    <?php
    if ($data['success'] == false) {
        echo 'Incorrect Username/Password';
    }
    ?>
    <table>
        <form method="post" action="<?= SITE_PATH ?>login/loginSubmit">
            <tr><td>Username</td><td><input type="text" name="username"></td></tr>
            <tr><td>Password</td><td><input type="password" name="password"></td></tr>
            <tr><td colspan="2"><input type="submit" name="act" value="Login"></td></tr>
        </form>
    </table>
</div>
<div class="filler"></div>