
// css loader
const loader = document.querySelector('.loader');
const main = document.querySelector('.main1');


function initialize(){
    setTimeout(function(){
        loader.style.opacity=0;
        loader.style.display='none';

        main.style.display='block';
        //using arrow function here
        setTimeout(() => ( main.style.opacity = 2), 50);
       
    }, 4000);
}

initialize(); 



//automated typewriter with js
 const typeWriter = function(txtElement, words, wait=3000){
     this.txtElement = txtElement;
     this.words = words;
     this.txt = '';
     this.wordIndex = 0;
     this.wait = parseInt(wait,10);
     this.type();
     this.isDeleting = false;
 }



 //type function

 typeWriter.prototype.type = function(){
     //current index of word
     const current = this.wordIndex % this.words.length;


     //getfull text of current word
     const fulltxt = this.words[current];



     //check if its deleting
     if(this.isDeleting){

        //remove char
        this.txt = fulltxt.substring(0, this.txt.length -1)
     }else{
         //if not removing then add
         this.txt = fulltxt.substring(0, this.txt.length +1)
     }

     //insert txt into element
     this.txtElement.innerHTML=`<span class="txt">${this.txt}</span>`


     //initial typespeed
     let typespeed = 300;

     //icrease deleting speed
     if(this.isDeleting){


        //this is same as this typespeed = typespeed/=2
        typespeed/=2;
     }

     //check if word is complete and its not deleting
     if(!this.isDeleting && this.txt === fulltxt){

        //make pause at the  end
        typespeed = this.wait;


        //set deleting  to true
        this.isDeleting = true;

     }else if(this.isDeleting && this.txt === ''){

        //disable the deleting 
        this.isDeleting = false;

        //move to the next word
        this.wordIndex++;


        //pause before typing
        typespeed  = 700;
     }

       setTimeout(()=> this.type(), typespeed );



 
    }

    //init dom
    document.addEventListener('DOMContentLoaded', init);


    //init app
    function init(){
        const txtElement = document.querySelector('.txt-type');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');

        new typeWriter(txtElement, words, wait);


    }


    // alert('hello');



    //form validation 

   //   const form = document.getElementById('contactform');

   //  let txtbox = document.getElementById('fname').value;
   //  let errorOutput = document.getElementById('error1');

   //  let button = document.getElementById('button');

   //  button.addEventListener('submit', function(){

   //    if(txtbox === ""){

   //       txtbox.style.borderColor='red';

   //       // let error =
   //       errorOutput.innerHTML = 'please enter a value';
   //       //  let erroroutput = txtbox += error;
   //       //  erroroutput.style.color="red";
   //    }else{
   //           txtbox.style.borderColor = 'green';
   //           errorOutput.innerHTML='valid';
   //           errorOutput.style.color='green';
   //    }

   //  });
    

   'use strict';

      //access the output class
   const countDown = document.querySelector('.countdown');

// set the launch date//
   const launchDate = new Date('October 19,2019 9:00:00').getTime();

   //time update every seconds

   const intval = setInterval( function(){
      //get todays date and time
      const today = new Date().getTime();

      // distance from launch date
      // subtract event day from present day

      const distance = launchDate - today;

      //time calculation
      //math.floor will round down every result from the parenthesis
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24))/(1000 * 60 * 60));
      const mins = Math.floor((distance % (1000 * 60 * 60 * 24))/(1000 * 60));
      const secs = Math.floor((distance % (1000 * 60 * 60 * 24))/1000);


      //display all by rapping dem under a variable
      countDown.innerHTML =`
      <div>${days}<span>Days</span></div>
      <div>${hours}<span>Hours</span></div>
      <div>${mins}<span>Minutes</span></div>
      <div>${secs}<span>Seconds</span></div>
      `

      //check if event date has passed
      if(distance < 0){
         //stop count down
         clearInterval(intval);

         countDown.style.color="#17a2b8";
         countDown.innerHTML = 'THIS EVENT HAS ALREADY TAKEN PLACE';
            
            }else if(distance === 0 && hours === 0 && mins === 0 && secs === 0){
          
            countDown.innerHTML = 'THIS EVENT IS HOLDING TODAY';
            countDown.style.color = 'green';


      }  

   }
      ,1000)



      //email validation

      function emailvalidate(){

         var emailtxt = document.getElementById('txt_email');
         var mainemail = emailtxt.value;
         var regexpres = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         
         //testing the regular expression for the email in email txtbox (regexpres.test(mainemail))
            if(regexpres.test(mainemail))
            {
              emailtxt.style.borderColor = "green";
              emailtxt.style.boxShadow ="3px 2px 4px green";
            }else {
              emailtxt.style.borderColor = "red";
              emailtxt.style.boxShadow ="3px 2px 4px red";
         }
         }
    


