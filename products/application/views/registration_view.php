<div class="head">
    Sign up
</div>

<div class="menu">
    <a href = "/login"> sign in </a> |
    <a href = "/registration"> sign up </a>
</div>
<div class="_form">
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
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <th colspan="3" style="text-align: right">
            <input type="submit" value="Log in" name="btn"
                   style="width: 150px; height: 30px;"></th>
    </table>
</form>
</div>

<?php extract($data); ?>
<?php if($reg_status=="fail") {?>
    <p style = "color:red" > User exists </p >
  <?  }?>
