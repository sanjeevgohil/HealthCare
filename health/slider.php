<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* 
{
	box-sizing:border-box;
}
body 
{
	font-family: Verdana,sans-serif;
}
.mySlides 
{
	display:none
}


.slideshow-container 
{
	max-width: 100%;
	position: relative;
	margin: auto;
	z-index:0;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}




@-webkit-keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .5} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100%) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s7.png" height=80% style="width:40%" >
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s2.png" height=80% style="width:40%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s6.png" height=80% style="width:40%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s3.png" height=80% style="width:40%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s4.png" height=80% style="width:40%">
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="image/s5.png" height=80% style="width:40%">
</div>
<br>
 
<div>
  <span class="s"></span> 
 <span class="s"></span> 
 <span class="s"></span> 
 <span class="s"></span>  
 <span class="s"></span> 
 <span class="s"></span> 
   

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("s");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

</center>
