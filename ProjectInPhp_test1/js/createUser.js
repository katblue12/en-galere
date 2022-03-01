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
let viewShow = document.querySelector(".passShow")
let viewHide = document.querySelector(".passHide")


see.addEventListener("click", function(){
    //check if button class view exists in the classlist 
    if (see.classList.contains("view")){
    //stock the class with an instruction 
        viewType.type = "text";
        viewShow.type = "text";
    // Change the text of the button if class exists
        see.textContent = y;
    //Use the event listener to change the function of the button by
    //switching between the classes on a click
        see.classList.toggle("hide");
        see.classList.toggle("view");
    //Toggle between the classes on the input     
        viewType.classList.toggle("hidePass")
        viewType.classList.toggle("viewPass")
        viewShow.classList.toggle("hidePass")
        viewShow.classList.toggle("viewPass")

    } else if (see.classList.contains("hide")){
        viewType.type = "password";
        viewShow.type = "password";
        see.textContent = z;
        see.classList.toggle("view");
        see.classList.toggle("hide");
        viewType.classList.toggle("viewPass")
        viewType.classList.toggle("hidePass")
        viewShow.classList.toggle("viewPass")
        viewShow.classList.toggle("hidePass")
    }

});
