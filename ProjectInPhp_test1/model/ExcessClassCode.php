<!-- <?php
//  public function userLogin($bdd){ -->
    //       $userName = $this->getEmail();
    //       $motpasse = $this->getPassword();
    //    try
    //     {
    //       $response = $bdd->query('SELECT * FROM user WHERE email_user = '.$userName.' AND password_user = '.$motpasse.' LIMIT 1');
                    
    
    //       while ($data= $response -> fetch()){
    
    //       if($userName == $data['email_user'] AND $motpasse == $data['password_user']){
    //           $usid = $data['id_user'];
    //           $nom = $data['name_user'];
    //           $nomFam = $data['surname_user'];
    //           $ads1 = $data['address1_user'];
    //           $ads2 = $data['address2_user'];
    //           $pc = $data['postcode_user'];
    //           $place = $data['city_user'];
    //           $mail = $data['email_user'];
    //           $tel = $data['telephone_user'];
    //           $pasw = $data['password_user'];
    
    //         //   token
    //           $_SESSION['iduser'] = $usid;
    //           $_SESSION['nameuser'] = $nom;
    //           $_SESSION['surnameuser'] = $nomFam;
    //           $_SESSION['address1user'] = $ads1;
    //           $_SESSION['address2user'] = $ads2;
    //           $_SESSION['postcodeuser'] = $pc;
    //           $_SESSION['cityuser'] = $place;
    //           $_SESSION['emailuser'] = $mail;
    //           $_SESSION['telephoneuser'] = $tel;
    //           $_SESSION['passworduser'] = $pasw;
    //           $_SESSION['connected'] = true;
    
             
    //       }
    //     }
    // }
    //     catch(Exception $e){
    //       die('Error : '.$e->getMessage());
    // }
    //   }
    
        
    //     public function userLoggedin($bdd){
    //         $userName = $this->getEmail();
    //         $motpasse = $this->getPassword();
    
    //         try{
    //             $response = $bdd->query('SELECT * FROM user WHERE email_user = "'.$userName.' AND password_user = "'.$motpasse.'" LIMIT 1');
    
    //             while ($data= $response -> fetch());{
    //                 if($userName == $data['email_user'] AND $motpasse == $data['password_user']){
    //                     return true;
                       
    //                 }
    //                 else{
    //                     return false;
    //                 }
    //         }
    
    //     }
    //     catch(Exception $e){
    //         die('Error : '.$e->getMessqge());
    //     }
    //   }

    // function to check user's email doesn't already exist

    // public function doesUserExistAlready(){
    //     $checkDatabase = $bdd->prepare ('SELECT FROM user WHERE email_user = :email_user');
    //     $checkDatabase -> execute(array(':email_user'=>getEmail()));
    //     $emailCheck = $checkDatabase -> fetch();

    //     if($emailCheck){
    //         echo'<p>User already exists please login</p><button><a href="controllerLogin.php">Login</a></button>';
    //         return false;
    //     }else{
    //         return true;
    //     }
    // }

//     //function to hash password
//  public function hashPass(){

//         password_hash($_POST['password_user'], PASSWORD_DEFAULT());
//     }



// 'name_user' => $this-> getName(),
// 'surname_user' => $this-> getSurname(),
// 'address1_user'=>$this->getAddress1(),
// 'address2_user'=> $this-> getAddress2(),
// 'postcode_user'=> $this-> getPostcode(),
// 'city_user'    => $this->getCity(),
// 'email_user'   => $this->getEmail(),
// 'telephone_user'=> $this->getTelephone(),
// 'password_user'=> $this->getPassword(),


// if ($_POST['name_user'] == '' || $_POST['surname_user']== '' || $_POST['telephone_user']== '' ||$_POST['address1_user']== '' ||$_POST['address2_user']
//     == '' || $_POST['city_user'] == '' || $_POST['postcode_user']== '' || $_POST['password_user']== '' ||$_POST['confirmPassword']){

//         echo '<p>Please complete all parts of the form</p>';
//---------------------------------------------------------------------
//controller create
//----------------------------------------------------------------
// <?php
// include './vue/createUser.php';
// include './config/connexionBdd.php';
// include './model/userClass.php';


// if (isset($_POST['name_user'])&& isset($_POST['surname_user'])&& isset($_POST['email_user'])&&isset($_POST['telephone_user'])
// && isset($_POST['address1_user'])&& isset($_POST['address2_user'])
// && isset($_POST['city_user'])&& isset($_POST['postcode_user'])
// && isset($_POST['password_user'])&& isset($_POST['confirmPassword'])){
   
//         $user = new User();

//         if ($user->UserExist($bdd)==true){

//                 header('location: ./controllerGenError.php');
//             }

//                 else{
                
//                 $user->setName($_POST['name_user']);
//                 $user->setSurname($_POST['surname_user']);
//                 $user->setEmail($_POST['email_user']);
//                 $user->setTelephone($_POST['telephone_user']);
//                 $user->setAddress1($_POST['address1_user']);
//                 $user->setAddress2($_POST['address2_user']);
//                 $user->setCity($_POST['city_user']);
//                 $user->setPostcode($_POST['postcode_user']);
//                 $user->setPassword(password_hash($_POST['password_user'], PASSWORD_DEFAULT));
//                 $user->createUser($bdd,$_POST['name_user'], $_POST['surname_user'], $_POST['email_user'], $_POST['telephone_user'],$_POST['address1_user'],$_POST['address2_user'],$_POST['city_user'], $_POST['postcode_user'], $_POST['password_user']);
  
//     } 
// } 
//---------------------------------------------------------------------
//       FUNCTION TO CHANGE NAVBAR IS IT BETTZER TO DO 
//            THIS IN THE ROLE MANAGEMENT FUNCTION?
//---------------------------------------------------------------------
// public function userConnected($user){
//     if(connectUser($bdd)){
//       echo '
//           <nav>
//               <a href="../user-account_pages/index.html"><li>Home</li></a>
//               <a href="../user-account_pages/index.html"><li>The Party</li></a>
//               <a href="../user-account_pages/index.html"><li>Morning After</li></a>
//               <a href="../user-account_pages/cleaning.html"><li>Cleaning</li></a>
//               <a href="../user-account_pages/my_account.html"><li>My Account</li></a>
//               <a href="../Login-create_enter/Logout.html"><li>Logout</li></a>
//               <a href="../user-account_pages/contact.html"><li>Contact</li></a>
//           </nav>';
//     }
//     else{
//       echo '
//           <nav>        
//           <a href="../user-account_pages/index.html"><li>Home</li></a>
//           <a href="../user-account_pages/index.html"><li>The Party</li></a>
//           <a href="../user-account_pages/index.html"><li>Morning After</li></a>
//           <a href="../user-account_pages/cleaning.html"><li>Cleaning</li></a>
//           </nav> ';
//     }
//     }
//     }

   //-------------------------------------------------------
//                      METHOD HASH PASSWORD
//-------------------------------------------------------

     
// public function hashPass(){

//     password_hash($_POST['password_user'], PASSWORD_DEFAULT);
// }


//-------------------------------------------------------
//   METHOD CONNECTTION CREATION OF TOKEN FOR SESSION
//-------------------------------------------------------
// public function connectUser($bdd){
//     $userName = htmlspecialchars(strip_tags($this->getEmail()));
//     $motpasse = htmlspecialchars(strip_tags($this->getPassword()));

//  try{
//     $req = $bdd->prepare("SELECT * FROM user WHERE email_user = '".$userName."' AND password_user = '".$motpasse."' LIMIT 1");
//     $req->execute(array(
//     'email_user'=> htmlspecialchars(strip_tags($this->getEmail())),
//     'password_user'=> htmlspecialchars(strip_tags($this->getPassword())),
//     ));

//     while ($data= $req -> fetch()){

//     if($userName == $data['email_user'] AND $motpasse == $data['password_user']){
//         $usid = $data['id_user'];
//         $nom = $data['name_user'];
//         $nomFam = $data['surname_user'];
//         $ads1 = $data['address1_user'];
//         $ads2 = $data['address2_user'];
//         $pc = $data['postcode_user'];
//         $place = $data['city_user'];
//         $mail = $data['email_user'];
//         $tel = $data['telephone_user'];
//         $pasw = $data['password_user'];

//         //take information from bdd to stock the token in terms of the user 

//       //   token
//         $_SESSION['iduser'] = $usid;
//         $_SESSION['nameuser'] = $nom;
//         $_SESSION['surnameuser'] = $nomFam;
//         $_SESSION['address1user'] = $ads1;
//         $_SESSION['address2user'] = $ads2;
//         $_SESSION['postcodeuser'] = $pc;
//         $_SESSION['cityuser'] = $place;
//         $_SESSION['emailuser'] = $mail;
//         $_SESSION['telephoneuser'] = $tel;
//         $_SESSION['connected'] = true;

//        return true;
//     }
//   }
    
//   }
//   catch(Exception $e){
//     die('Error : '.$e->getMessage());..


//     // if($name_party==$data['name_party'] AND $image_party == $data['image_party'] AND $description_party == $data['description_party'] AND $recipe_party==$data['recipe_party'] AND $method_party==$data['method_party']){
       
    //     $nom = $data['name_party'];
    //     $pic= $data['image_party'];
    //     $tag = $data['description_party'];
    //     $ingredients = $data['recipe_party'];
    //     $how = $data['method_party'];

    //     //take information from bdd to stock the token in terms of the user 

    //   //   token
    //     $_SESSION['name_party'] = $nom;
    //     $_SESSION['image_party'] = $pic;
    //     $_SESSION['description_party'] = $tag;
    //     $_SESSION['recipe_party'] = $ingredients;
    //     $_SESSION['method_party'] = $how;
    //     $_SESSION['connected'] = true;

       
    // }

    // <img src='.$image.' alt="party">
    // <h2 id="title"></h2> 
    // <p id="tagline"></p>
    // <p id="recipe"></p>
    // <p id="method"></p>
    // <script>
    //  let nom = document.getELementById("title");
    //  let tag = document.getElementById("tagline");
    //  let recette = document.getElementById("recipe");
    //  let how = document.getElementById("method");
    //  function partyPhoto(){
    //      nom.textContent='.$name.';
    //      tag.textContent='.$description.';
    //      recette.textContent='.$recipe.';
    //      how.textContent='.$how.';
    //  }
    //  partyPhoto();
    //  </script>';