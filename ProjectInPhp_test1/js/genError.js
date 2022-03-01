    let countdown = document.getElementById('counter');
    let timer = 5;
    let counter = setInterval(function selfDestruct(){
        if (timer>0){
            countdown.innerHTML= timer--;
        }else{
            clearInterval(counter);
            window.location.href = 'http://localhost/ProjectInPhp/controllerLogin.php';
        }}, 1000);


