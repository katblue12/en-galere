<?php
include_once './headers/createUserHeader.php';
include './vue/generalError.php';
?>

<h1>Come and join the party!!!!</h1>
<section>
    <div>
        <form action="controllerCreateUser.php" method="POST">
        <!-- signup.inc.php.inc means the file is included but the user doesn't see it -->

                <label for="name_user">Name</label>
                <input type="text" name="name_user">

                <label for="surname_user">Surname</label>
                <input type="text" name="surname_user">

                <label for="email_user">Email</label>
                <input type= "email" name="email_user">  

                <label for="telephone_user">Telephone</label>
                <input type= "number" name="telephone_user">   
    </div>

    <div>
                <label for="address1_user">Address</label>
                <input type="text" name="address1_user">

                <label for="addresse_user">Address</label>
                <input type="text" name="address2_user">

                <label for="city_user">Town</label>
                <input type="text" name="city_user">

                <label for="postcode_user">Postcode</label>
                <input type="text" name="postcode_user">
    </div>
    
    </section>
    <section>
    <container>
  
                <label for="password_user">Choose password</label>
                <input class="viewPass"class="hidePass" type="password" name="password_user"> 
</container>
<container>           
                <label for="confirmPassword">Confirm password</label>
                <input  class="passShow"class="passHide" type="password" name="confirmPassword">
</container>
                <!-- <button type="button" id="changer">View Password</button>
                <button type="button" id="changeback"> hide Password</button> -->
               
</section>

<span>
                <button type="submit" name="submit">Join the guestlist!</button>    
</span>
<div>
            <button type="button" class="view" class="hide" value="view password">View Password</button>
   
        </div>

   </form>
<?php
   include_once './headers/footer.php';
?>

   
   