<?php
class Partyitem {
     
    private $id_party;
    private $image_party;
    private $name_party;
    private $description_party;
    private $recipe_party;
    private $method_party;

    public function __construct($image_party, $name_party, $description_party, $recipe_party, $method_party){
    $this->image_party = $image_party;
    $this->name_party = $name_party;
    $this->description_party = $description_party;
    $this->recipe_party = $recipe_party;
    $this->method_party = $method_party;

   // -------------------------------------------------------------------------------------
        //                      VAR_DUMP $NAME_PARTY RETURNS NULL
    // -------------------------------------------------------------------------------------
    // var_dump($name_party);
}
    // -------------------------------------------------------------------------------------
    //                      GETTERS ARE WORKING DO NOT TOUCH!!!!!!!!
    // -------------------------------------------------------------------------------------
 
    public function getId(){
        return htmlspecialchars(strip_tags($this->id_party));
    }

    public function setId($newId){
        $this->id_party=$newId;
    }

    
    public function getImage(){
        return htmlspecialchars(strip_tags($this->image_party));
    }
   
    public function setImage($newImage){
       $this->image_party=$newImage;
    }

    public function getName(){
        return htmlspecialchars(strip_tags($this->name_party));
    }

    public function setName($newname){
        $this->name_party=$newName;
    }

    public function getDescription(){
        return htmlspecialchars(strip_tags($this->description_party));
    }

    public function setDesciption($newDescription){
        $this->description_party =$newDescription;
     }
     public function getRecipe(){
        return htmlspecialchars(strip_tags($this->recipe_party));
    }

    public function setRecipe($newRecipe){
        $this->recipe_party=$newRecipe;
    }
    public function getMethod(){
        return htmlspecialchars(strip_tags($this->method_party));
    }

    public function setMethod($newMethod){
        $this->method_party=$newMethod;
    }


public function readParty($bdd){

       // -------------------------------------------------------------------------------------
    //                    THIS BIT WORKS DO NOT TOUCH!!!!!!!!!!
    // -------------------------------------------------------------------------------------

     try {
        $req = $bdd->prepare('SELECT image_party, name_party, description_party, recipe_party, method_party FROM party');
        $req->execute(array(
                            
                            'image_party'=>$this->getImage(),
                            'name_party'=>$this->getName(),
                            'description_party'=>$this->getDescription(), 
                            'recipe_party'=>$this->getRecipe(),
                            'method_party'=>$this->getMethod()));
                        
                            $req -> execute();
                            

                            var_dump($req); 

    // -------------------------------------------------------------------------------------
    //                      BUG IN THIS SECTION WHICH MEANS THE PHP IS WORKING
    //                      AS MY VAR DUMP RETURNS ALL INFO 
    //                      THIS IS TO DISPLAY  is his because i need a foreach here
    //                         as the variable has  tresult has done its job it's not the variable
    //                          name i have tried to change it 
    // -------------------------------------------------------------------------------------
                            while($res = $req->fetchAll()){
                           
                            $image_party=$res["image_party"];
                            $name_party=$res["name_party"];
                            $description_party=$res["description_party"];
                            $recipe_party=$res["recipe_party"];
                            $method_party=$res["method_party"];
                            var_dump($res);
                             

                            echo'  
                            <script>
                            pic.innerhtml= src="'.$image_party.'"
                            nom.innerhtml='.$name_party.'
                            tag.innerhtml='.$description_party.'
                            recette.innerhtml='.$recipe_party.'
                            how.innerhtml='.$method_party.'
                            </script>';
                            
                            
    }
                    
     
    }

          
          catch(Exception $e){
            die('Error : '.$e->getMessage());
          }
  
        
          }
         
    }
   

