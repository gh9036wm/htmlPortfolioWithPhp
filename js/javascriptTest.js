
var emailField = document.getElementById("email");

emailField.onfocus = function() {
	if ( emailField.value == "your email") {
		emailField.value = "";
	}
};

emailField.onblur = function() {
	if ( emailField.value == "") {
		emailField.value = "your email";
	}
};

//change image every 5 second usin timeInterval:

var myImage = document.getElementById("mainImage");

//Making sure relative path set for images must be relative with webpage not javascript file
//in order to get it loaded

var imageArray = ['images/family2.jpg','images/family3.jpg',
				  'images/family4.jpg','images/family1.jpg'];
var imageIndex = 0;

function changeImage() {
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}

// setInterval is also in milliseconds
var intervalHandle= setInterval(changeImage,4000);
myImage.onclick = function(){
	clearInterval(intervalHandle);
}

myImage.onclick =  function() {
	clearInterval(intervalHandle);
};

// handle the form submit event
function validateForm (){
   var x= document.getElementById("fname").value;
    if (x==""){
        document.getElementById("errMessage").innerHTML="Please fill out your Name!!"
        return false;
    }
    else{
        document.getElementById("errMessage").innerHTML=""
        return true;
    }
}
//Hide and show elements

function hideShow(){
   var x= document.getElementById("moreOption").checked;
    if (x){
        document.getElementById("options").style.display = "block";
    }else{
        document.getElementById("options").style.display = "none";
    }
    
}
   document.getElementById("options").style.display = "none";

//Moving object using inline change
var currentPos = 0;
var intervalHandle;

function beginAnimate() {
	document.getElementById("moveFrog").style.position = "absolute";
	document.getElementById("moveFrog").style.left = "0px";
   // document.getElementById("moveFrog").style.top = "1000px";
    // cause the animateBox function to be called
    intervalHandle = setInterval(animateBox,50);
}

function animateBox() {
    // set new position
    currentPos+=5;
    document.getElementById("moveFrog").style.left = currentPos + "px";
    // 
    if ( currentPos > 900) {
        // clear interval
        clearInterval(intervalHandle);
        // reset custom inline styles
        document.getElementById("moveFrog").style.position = "";
        document.getElementById("moveFrog").style.left = "";
        document.getElementById("moveFrog").style.top = "";
    }
}



