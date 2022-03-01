<?php
session_start();
include_once './headers/partyHeader.php';
?>

    <main>
      <h1>Hi <?php echo  $_SESSION['nameuser'] ?></h1>
    
    <h1>Cool Shots</h1>
    
    <!-- keep it like this zto test then modify others -->
    <!-- in form to select call the function createParty($bdd) -->
    <section class="party_grid">

           <img src="" alt=""<?php $this->party->$this->setImage($newImage);?>>
           <container>
                <h2><?php $this->party->$this->setName($newname);?></h2>
                <p><?php $this->party->$this->setDescription($newDescription);?></p>
                <p><?php $this->party->$this->setRecipe($newRecipe);?></p>
                <p><?php $this->party->$this->setMethod($newMethod);?></p>
           </container>
       
    
      
            <img src="./Images/MonkeyBrains.jpg" alt="MonkeyBrainsShot">
            <container>
                <h2>Monkey Brains</h2>
                <p> For anyone that loses the bet!</p>
            </container>
      
        
        
            <img src="./Images/oilSpill.jpg" alt="OilSpillShot">
            <container>
                  <h2>Oil Spill</h2>
                  <p>Lets face it it's not a party without the jeiger!!!</p>
            </container>
        </section>

        <section class="party_grid">

            <img src="./Images/vodkaSyringe.jpg" alt="vodkaSyringeShot">
            <container>
                <h2>Vodka Syringe Shot</h2>
            <p>A different way to drink!</p>
            </container>
        
     
       
             <img src="./Images/BazookaJoe.jpg" alt="">
             <container>
                 <h2>Bazooka Joe</h2>
                <p>Something Different for you!</p>
             </container>
       
         
         
             <img src="./Images/FlamingB52.jpg" alt="">
             <container>
             <h2>Flaming B52</h2>
                 <p>Fire extinguishers at the ready!</p>
             </container>
         </section>
        

        <container class="choose_item">
            <form>
                <legend>Pick your shot!!!</legend>
            <select name="Select" placeholder="select">
                <option value="select">Select</option>
                 <option value="Shot1">Shit on the grass</option>
                   <option value="Shot2">Baby Guiness</option>
                   <option value="Shot3">B52</option>
                   <option value="Shot3">Vodka Syringe</option>
                   <option value="Shot3">Bazooka Joe</option>
                   <option value="Shot3">Apocalypse Now</option>
            </select>
                </form>
        </container>

        <h1>Cool Food</h1>
        <section class="party_grid">
     
           <img src="./Images/rhumBalls.jpg" alt="image">
         <container>
         <h2>Rhum Balls</h2>
         <p>For a cheeky boost!</p>
         </container>

        <img src="./Images/spicyBeerMustard.jpg" alt="image">
         <container>
             <h2>Spicy beer mustard</h2>
             <p>Something nice for your chips!</p>
         </container>

       <img src="./Images/guinnessBrownie.jpg" alt="image">
         <container>
             <h2>Guiness Brownies</h2>
            <p>Berry desert!</p>
         </container>
        </section>

        <section class="party_grid">
     
          <img src="./Images/daiqiriBites.jpg" alt="image">
            <container>
            <h2>Strawberry Daiquiri bites</h2>
            <p>1 of your 5 a day!</p>
            </container>
   
          <img src="./Images/cupcakes.jpg" alt="image">
            <container>
                <h2>Alcohol infused cupcakes</h2>
                <p>Who doesn't love a cupcae???!!</p>
            </container>
   
          <img src="./Images/vodkaGummies.jpg" alt="image">
            <container>
                <h2>Vodka Gummybears</h2>
               <p>Something to munch on...</p>
            </container>
           </section>

         

<container class="choose_item">
    <legend>Pick your food!!!</legend><br>
    <form> 
    <select name="Select" placeholder="select">
           <option value="select">Select</option>
           <option value="Shot1">Rhum Balls</option>
           <option value="Shot2">Spicy beer mustard</option>
           <option value="Shot3">Guiness Brownies</option>
           <option value="select">Strawberry Daiquiri bites</option>
           <option value="select">Alcohol infused cupcakes</option>
           <option value="select">Vodka Gummybears</option>
           
    </select>
        </form>
</container>
<h1>Party creatively</h1>
<section class="party_grid">
   
  <img src="./Images/watermelon.jpg" alt="image">
    <container>
        <h2>Vodka'd watermelon</h2>
       <p>Infuse your watermelon with vodka for a refreshing treat!</p>
    </container>

  <img src="./Images/flavouredVodkas.jpg" alt="image">
    <container>
        <h2>Flavoured vodka</h2>
       <p>Got a dishwasher? All you need to make your own flavoured vodka!</p>
    </container>

 <img src="./Images/vodkaJellies.jpg" alt="image">
    <container>
        <h2>Vodka jellies</h2>
       <p> Make your vodka jellies! Ice cream optional!</p>
    </container>
    </section>

    <section class="party_grid">
   
     <img src="./Images/Watermelon_Vodka_1_2013-05-27.jpg" alt="image">
        <container>
            <h2>Make your own Baileys!</h2>
           <p>Something to warm your cockles!</p>
        </container>
    
      <img src="./Images/squashies-vodka-damion-stiles-facebook-candy-vodka-in-dishwasher-recipe-delish-uk-3-1591955378.jpg" alt="image">
        <container>
            <h2>Sloe Gin </h2>
           <p>For a classier taste!</p>
        </container>
    
      <img src="./Images/jello.jpg" alt="image">
        <container>
            <h2>Sangria</h2>
           <p>It aint a party without punch!</p>
        </container>
        </section>
   
    
<container class="choose_item">
    <form>
        <legend>Pick your creative method!!!</legend>
    <select name="Select" placeholder="select">
           <option value="select">Select</option>
           <option value="Shot1">Watermelon Vodka</option>
           <option value="Shot2">Vodka Jellies</option>
           <option value="Shot3">Make your own Baileys!</option>
           <option value="Shot3">Home made flavoured vodka</option>
           <option value="Shot3">Sloe Gin</option>
             <option value="Shot3">Limoncello</option>
           
    </select>
        </form>
</container>
</main>
      
<?php
include './headers/footer.php';