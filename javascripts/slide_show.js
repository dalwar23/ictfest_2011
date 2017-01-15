var ultimateshow=new Array()

//ultimateshow[x]=["path to image", "OPTIONAL link for image", "OPTIONAL link target"]

ultimateshow[0]=['../images/1.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[1]=['../images/2.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[2]=['../images/3.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[3]=['../images/4.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[4]=['../images/5.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[5]=['../images/6.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[6]=['../images/7.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[7]=['../images/8.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[8]=['../images/9.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
ultimateshow[9]=['../images/10.jpg', 'http://www.iutoic-dhaka.edu/ictfest', '_new']
//configure the below 3 variables to set the dimension/background color of the slideshow

var slidewidth="inherit" //set to width of LARGEST image in your slideshow
var slideheight="inherit" //set to height of LARGEST iamge in your slideshow
var slidecycles="999" //number of cycles before slideshow stops (ie: "2" or "continous")
var randomorder="yes" //randomize the order in which images are displayed? "yes" or "no"
var preloadimages="yes" //preload images? "yes" or "no"
var slidebgcolor='#C62020'

//configure the below variable to determine the delay between image rotations (in miliseconds)
var slidedelay=2000

////Do not edit pass this line////////////////

var ie=document.all
var dom=document.getElementById
var curcycle=0

if (preloadimages=="yes"){
for (i=0;i<ultimateshow.length;i++){
var cacheimage=new Image()
cacheimage.src=ultimateshow[i][0]
}
}

var currentslide=0

function randomize(targetarray){
ultimateshowCopy=new Array()
var the_one
var z=0
while (z<targetarray.length){
the_one=Math.floor(Math.random()*targetarray.length)
if (targetarray[the_one]!="_selected!"){
ultimateshowCopy[z]=targetarray[the_one]
targetarray[the_one]="_selected!"
z++
}
}
}

if (randomorder=="yes")
randomize(ultimateshow)
else
ultimateshowCopy=ultimateshow

function rotateimages(){
curcycle=(currentslide==0)? curcycle+1 : curcycle
ultcontainer='<center>'
if (ultimateshowCopy[currentslide][1]!="")
ultcontainer+='<a href="'+ultimateshowCopy[currentslide][1]+'" target="'+ultimateshowCopy[currentslide][2]+'">'
ultcontainer+='<img src="'+ultimateshowCopy[currentslide][0]+'" border="0">'
if (ultimateshowCopy[currentslide][1]!="")
ultcontainer+='</a>'
ultcontainer+='</center>'
if (ie||dom)
crossrotateobj.innerHTML=ultcontainer
if (currentslide==ultimateshow.length-1) currentslide=0
else currentslide++
if (curcycle==parseInt(slidecycles) && currentslide==0)
return
setTimeout("rotateimages()",slidedelay)
}

if (ie||dom)
document.write('<div id="slidedom" style="width:'+slidewidth+';height:'+slideheight+'; background-color:'+slidebgcolor+'"></div>')

function start_slider(){
crossrotateobj=dom? document.getElementById("slidedom") : document.all.slidedom
rotateimages()
}

if (ie||dom)
window.onload=start_slider