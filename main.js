let audio = new Audio('sounds/African_fun_long.mp3');
audio.play(); //method
let replay = document.querySelector("#replay"); //henter i HTML
let mute = document.querySelector("#mute"); //henter i HTML
let audioPlay = true; //spiller musik
console.log(mute); //tryk på knap og den 
console.log(replay);


replay.addEventListener("click", ()=>{ //arrow function
    location.reload(); //method: starter spil forfra når man trykker

   
})
mute.addEventListener("click", ()=>{
    if (audioPlay){
    audio.pause();
    audioPlay = false;
    }
    else {
        audioPlay = true;
        audio.play();
    }
})


// Countdown 

        //variablerne start

        let mins = 2; 
        let secs = 60; // 2*60 = 120 sekunder el. 2 min
        let time = mins * secs;

        //variablerne slut


        function countDown() { 
            setTimeout('Decrement()'); //setTimeout: eksekverer function efter et bestemt antal millisekunder
             
        } 
  
        //function decrement start//

        function Decrement() { 
            if (document.querySelector) { 
                let minutes = document.querySelector("#minutes");  //henter i HTML
                let seconds = document.querySelector("#seconds");  //henter i HTML
                if (seconds < 60) { //hvis sekunder er mindre end 60
                    seconds.value = time; //viser den kun sekunder
                 
                } 
                else { 
                    minutes.value = getMinutes(); //ellers viser den minutter
                    seconds.value = getSeconds(); //og sekunder
                } 
               
                if (time < 60) { 
                    minutes.style.color = "red"; //skifter farve
                    seconds.style.color = "red"; //skifter farve
                } 
                
                if (time < 0) { //taber spiller
                    playlose() //spiller taber musik
                    alert('GAME OVER'); //viser Game Over
                    location.reload() // reloader side
                    minutes.value = 0;  //minutes viser 0
                    seconds.value = 0; //seconds viser 0
                   
                } 
                else { 
                    time--; // -- operator (decrement) sørger for den tæller nedad
                    setTimeout('Decrement()', 1000); //1000 er 1000ms el. 1s  hastighed  (parameter)  
                } 
            } 
        } 

        //function decrement slut

        function getMinutes() { 
            mins = Math.floor(time / 60); 
            return mins; //Math.floor runder ned til nærmeste heltal (integer) - STOPPER UDFØRELSE
        } 

  
        function getSeconds() { 
            return time - Math.round(mins * 60);  //Math.roundrunder op til nærmeste heltal (integer) - STOPPER UDFØRELSE
        } 

 


let canvas = document.querySelector("#canvas"); //henter canvas
let ctx = canvas.getContext('2d');//udgør maze

let maze = 

[
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,4,1,3],
    [0,0,0,0,0,0,5,0,0,0,0,1,5,0,0,4,1,1,1,4],
    [0,0,0,7,0,0,1,0,1,0,1,1,0,0,0,1,1,0,0,0],
    [0,0,0,1,1,1,1,0,1,1,1,1,7,0,1,1,0,0,0,0],
    [0,1,1,1,1,0,1,1,1,0,4,1,1,1,1,0,0,0,0,0],
    [2,1,4,0,5,0,6,0,1,5,0,0,0,0,1,5,0,0,0,0],
]


let tileSize = 50;
let playerPosition = {x:0, y:0};

let tarzan = 2;
tarzanImg = new Image(); 
tarzanImg.src= 'images/tarzan.png';

let stone = 1;
stoneImg = new Image();
stoneImg.src= 'images/stone.png';

let treasure = 3;
treasureImg = new Image();
treasureImg.src= 'images/treasure.png';

let monkey = 4;
monkeyImg = new Image();
monkeyImg.src= 'images/monkey.png';

let ruby = 5;
rubyImg = new Image();
rubyImg.src= 'images/ruby.png';

let parrot = 6;
parrotImg = new Image();
parrotImg.src= 'images/parrot.png';

let banana = 7;
bananaImg = new Image();
bananaImg.src= 'images/banana.png';


let rubyCollector = 0;

//Lyd

function walk(){

    let gameSound = new Audio('sounds/walk.mp3');
    gameSound.play();

}

function playlose(){

    let gameSound = new Audio('sounds/lose.mp3');
    gameSound.play();
}
function playMonkey(){

    let gameSound = new Audio('sounds/monkey.mp3');
    gameSound.play();
}
function playParrot(){

    let gameSound = new Audio('sounds/parrot.mp3');
    gameSound.play();
}
function playRuby(){

    let gameSound = new Audio('sounds/ruby.mp3');
    gameSound.play();
}
function playYay(){

    let gameSound = new Audio('sounds/yay.mp3');
    gameSound.play();
}
function playWinMusic(){

    let gameSound = new Audio('sounds/win.mp3');
    gameSound.play();

}
function playWow() {
    let gameSound = new Audio('sounds/wow.mp3');
    gameSound.play();
}
function rubyCounter() {
    document.querySelector('#rubyCollector').innerHTML = rubyCollector;
}

//Enemy

let enemy = setInterval(parrotWalk,800); // setInterval: udfører function i milisekunder
let parrotCounter = 0;

//function parrotWalk start

function parrotWalk(){
    parrotCounter++; //incrementer:lægger en til
    if(parrotCounter < 4) { //parrot counter er mindre end 4 så udfører den følgende for loops

        for(let y= 0; y < maze.length; y++){ //så længe længden på maze er længere end y skal den lægge en til

            for(let x = 0; x < maze[y].length; x++){ 

     //parrot går op, tjekker ledighed
     if(maze[y][x] === 6){ //parrot
         if(maze[y - 1][x] == 1) {
             maze[y - 1][x] = 6;
             maze[y][x] = 1;
     
             
             
         }
         else if (maze[y - 1][x] == 1){ 
             maze[y - 1][x] = 6; 
             maze[y][x] = 1;
         }

        
        }
    }
        
    }


    drawMaze(); //tegner loopet ind på mazet
}else if(parrotCounter < 8) { 
    for(let y= 0; y < maze.length; y++){ //samme som drawMaze
        for(let x = 0; x < maze[y].length; x++){ //samme som drawMaze


 // parrot går ned igen           
 if(maze[y][x] === 6){
    console.log(parrotCounter); 
     if(maze[y + 1][x] == 1 || maze[y + 1][x] == 6) {
         maze[y + 1][x] = 6; 
         maze[y][x] = 1;    
     }
     else if (maze[y + 1][x] == 1){
         maze[y + 1][x] = 6;
         maze[y][x] = 1;
     }

    
    }
}
    }
    drawMaze();

} else {
    parrotCounter = 0;
}
    
}

//function parrotWalk slut

function drawMaze(){

    for(let y= 0; y < maze.length; y++){

      for(let x = 0; x < maze[y].length; x++){



        if(maze[y][x] === 0){
            ctx.fillStyle = 'transparent';
            ctx.fillRect(x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === stone){
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === tarzan){
            playerPosition.x = x; 
            playerPosition.y = y;
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
            ctx.drawImage(tarzanImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === treasure){
            ctx.drawImage(treasureImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === monkey){
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
            ctx.drawImage(monkeyImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === ruby){
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
            ctx.drawImage(rubyImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === parrot){ 
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
            ctx.drawImage(parrotImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }else if(maze[y][x] === banana){ 
            ctx.drawImage(stoneImg,x*tileSize,y*tileSize,tileSize,tileSize);
            ctx.drawImage(bananaImg,x*tileSize,y*tileSize,tileSize,tileSize);
        }

        }

      }
    }


//Keydown

window.addEventListener("keydown", (e)=>{
    event.preventDefault() //sørger for canvas ikke hopper op og ned når keydown
    console.log(e);
switch(e.keyCode){

    case 37: // left


    if(maze[playerPosition.y][playerPosition.x -1] === stone){
       maze[playerPosition.y ][playerPosition.x -1] = tarzan
       maze[playerPosition.y ][playerPosition.x] = stone
       drawMaze();
       walk();
       playsound();
    
} 


if (maze[playerPosition.y ] [playerPosition.x -1 ] === monkey){
        audio.pause();
        playlose();
        playMonkey();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);


    }
    else if (maze[playerPosition.y -1] [playerPosition.x ] === parrot){
        audio.pause();
        playlose();
        playParrot();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);

    }

    break; 

    case 38: // up

    if(maze[playerPosition.y -1][playerPosition.x] === stone){
       maze[playerPosition.y -1 ][playerPosition.x] = tarzan 
       maze[playerPosition.y ][playerPosition.x] = stone

       
       drawMaze();
       walk();
    }
    else if (maze[playerPosition.y -1] [playerPosition.x ] === monkey){
        audio.pause();
        playlose();
        playMonkey();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);

    }
    else if (maze[playerPosition.y -1] [playerPosition.x ] === banana){
        audio.pause();
        playlose();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);

    }
    else if (maze[playerPosition.y -1] [playerPosition.x ] === parrot){
        audio.pause();
        playlose();
        playParrot();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
       
    }
    else if (maze[playerPosition.y -1] [playerPosition.x ] === ruby){
        playRuby();
        playYay();
        rubyCollector++;
        rubyCounter();
    }
    break; 
    case 39: // right

    if(maze[playerPosition.y][playerPosition.x +1] === stone){
       maze[playerPosition.y ][playerPosition.x +1] = tarzan 
       maze[playerPosition.y ][playerPosition.x] = stone
       console.log(maze);
       drawMaze();
       walk();


    }
    else if (maze[playerPosition.y ] [playerPosition.x +1 ] === monkey){
        audio.pause();
        playlose();
        playMonkey();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y ] [playerPosition.x +1 ] === banana){
        audio.pause();
        playlose();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y ] [playerPosition.x +1] === parrot){
        audio.pause();
        playlose();
        playParrot();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y ] [playerPosition.x +1 ] === treasure){
        audio.pause();
        playYay();
        playWinMusic();
        setTimeout(function() { alert("YOU WON"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y ] [playerPosition.x +1] === ruby){
        playRuby();
        playYay();
        rubyCollector++;
        rubyCounter();
    }
    break; 
    case 40: // down

    if(maze[playerPosition.y+1][playerPosition.x] === stone){
       maze[playerPosition.y+1 ][playerPosition.x] = tarzan
       maze[playerPosition.y ][playerPosition.x] = stone
       drawMaze();
       walk();
    }
    else if (maze[playerPosition.y +1] [playerPosition.x ] === monkey){
        audio.pause();
        playlose();
        playMonkey();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y +1] [playerPosition.x ] === parrot){
        audio.pause();
        playlose();
        playParrot();
        playWow()
        setTimeout(function() { alert("GAME OVER"); location.reload(); }, 1000);
    }
    else if (maze[playerPosition.y +1] [playerPosition.x ] === ruby){
        playRuby();
        playYay();
        rubyCollector++;
        rubyCounter();
    }

    break; 
    

}
    
})

window.addEventListener("load", drawMaze);