<?php include "header.php"?>


<section class="sign-up-form">
    <div>
        <h2>Sign up</h2> <br>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="name"> <br>
            <input type="text" name="email" placeholder="maio"><br>
            <input type="text" name="uid" placeholder="username"><br>
            <input type="password" name="pwd" placeholder="password"><br>
            <input type="password" name="pwdrepeat" placeholder="repeat password"><br>
            <input type="submit" name="submit"><br>
        </form>
    </div>
</section>



<?php include "footer.php"?>