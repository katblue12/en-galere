<?php
include_once './headers/loginHeader.php';
?>
<h1>Login to your account</h1>
<section>
    <form action="" method="post">
        <label for="email_user">Email Address</label>
        <input class="username" type="email" name="email_user">
       
        <label for=password_user>Password</label>
        <input class="viewPass" class="hidePass" type="password" name="password_user">

        <div>
            <button type="button" class="view" class="hide" value="view password">View Password</button>
            <button type="button" class="remember" class="forget">Remember Me</button>
        </div>

        <button type="submit" name="login">Re-join the party!</button>
    </form>
    </section>
    
    <?php
    include_once './headers/footer.php';
    ?>
