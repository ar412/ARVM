/*currentIndx=0;
MyImages=new Array();

MyImages[0]='a.jpg';

MyImages[1]='b.jpg';

MyImages[2]='c.jpeg';

MyImages[3]='d.jpg';

Messages=new Array()

Messages[0]='We learn about our world through the 5 senses';

Messages[1]='We use our eyes to see things';

Messages[2]='Our ears to hear things'

Messages[3]='And our sense of touch to feel things.';
imagesPreloaded = new Array(4)

for (var i = 0; i < MyImages.length ; i++)

{

imagesPreloaded[i] = new Image(120,120)

imagesPreloaded[i].src=MyImages[i]

}

function writeImageNumber()
{
oSpan=document.getElementById("sp1");
oSpan.innerHTML="Image "+eval(currentIndx+1)+" of "+MyImages.length;

}
function Nexter(){
if (currentIndx<imagesPreloaded.length-1){
currentIndx=currentIndx+1;
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
}
else {
 currentIndx=0
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
}
writeImageNumber();
}
function Backer(){
if (currentIndx>0){
currentIndx=currentIndx-1;
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
}
else {
 currentIndx=3
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
}
writeImageNumber();
}
function automaticly() {
    if (document.form1.automatic.checked) {
if (currentIndx<imagesPreloaded.length){
currentIndx=currentIndx
}
else {
 currentIndx=0
}
writeImageNumber()
document.theImage.src=imagesPreloaded[currentIndx].src
document.form1.text1.value=Messages[currentIndx];
currentIndx=currentIndx+1;
var delay = setTimeout("automaticly()",3500)
    }
}
function setCurrentIndex()
{
currentIndx=0;
document.theImage.src=MyImages[0];
document.form1.text1.value=Messages[0];
writeImageNumber();
}*/