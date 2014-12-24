<h1>Sign in</h1>
<p>
<form action="" method="post">
    <table class="login">
        <tr>
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <th colspan="2" style="text-align: right">
            <input type="submit" value="Log in" name="btn"
                   style="width: 150px; height: 30px;"></th>
    </table>
</form>
</p>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
    <p style="color:green">Success.</p>
<?php } elseif($login_status=="access_denied") { ?>
    <p style="color:red">Incorrect login/password</p>
<?php } ?>
