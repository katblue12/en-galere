//--------------------------------------------------------------
//         ONE BUTTON TWO EVENT LISTENERS - -HIDE/VIEW PASSWORD
//-------------------------------------------------------------
//button text
let y = "Hide Password";
let z = "View Password";
//button classes
let see = document.querySelector(".view")
let hide = document.querySelector(".hide")
//input classes 
let viewType = document.querySelector(".viewPass")
let hideType = document.querySelector(".hidePass")


see.addEventListener("click", function(){
    //check if button class view exists in the classlist 
    if (see.classList.contains("view")){
    //stock the class with an instruction 
        viewType.type = "text";
    // Change the text of the button if class exists
        see.textContent = y;
    //Use the event listener to change the function of the button by
    //switching between the classes on a click
        see.classList.toggle("hide");
        see.classList.toggle("view");
    //Toggle between the classes on the input     
        viewType.classList.toggle("hidePass")
        viewType.classList.toggle("viewPass")
    } else if (see.classList.contains("hide")){
        viewType.type = "password";
        see.textContent = z;
        see.classList.toggle("view");
        see.classList.toggle("hide");
        viewType.classList.toggle("viewPass")
        viewType.classList.toggle("hidePass")
    }

});


//--------------------------------------------------------------
//         REMEMBER USER IN LOCAL STORAGE
//-------------------------------------------------------------
//button text
let w = "Remember Me";
let x = "Forget Me";
//button
let souvien = document.querySelector(".remember");
//input
let user = document.querySelector(".username");
user.value = localStorage.getItem("Always Partying!")

souvien.addEventListener("click", function remember(){
    if(souvien.classList.contains("remember")){
    localStorage.setItem("Always Partying!", user.value);
    souvien.textContent = x;
    souvien.classList.toggle("forget");
    souvien.classList.toggle("remember");
    }else if(souvien.classList.contains("forget")){
    localStorage.removeItem("Always Partying!", user.value);    
        souvien.textContent= w;
        souvien.classList.toggle("remember");
        souvien.classList.toggle("forget");
    }
    });
     





