currentIndx=0;
currentIndx2=1;
currentIndx3=2;
currentIndx4=3;
MyImages=["a.jpg","b.jpg","c.jpeg","d.jpg","e.jpeg"];   //make changes if new added
Messages=["Mango","Papaya","Banana","Grapes","Lichi"];  //make changes if new added
imagesPreloaded = new Array(5);                         //make changes if new added


for (var i = 0; i < MyImages.length ; i++) 
{
    imagesPreloaded[i] = new Image(120,120)
imagesPreloaded[i].src=MyImages[i]
}
function Nexter(){
if (currentIndx<imagesPreloaded.length-1){
currentIndx=currentIndx+1;
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
}

else {
 currentIndx=0
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
}
    
    if (currentIndx2<imagesPreloaded.length-1){
currentIndx2=currentIndx2+1;
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}

else {
 currentIndx2=0
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}
    
    if (currentIndx3<imagesPreloaded.length-1){
currentIndx3=currentIndx3+1;
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}

else {
 currentIndx3=0
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}
    if (currentIndx4<imagesPreloaded.length-1){
currentIndx4=currentIndx4+1;
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}

else {
 currentIndx4=0
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}
}


function Backer(){
if (currentIndx>0){
currentIndx=currentIndx-1;
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
}

else {
 currentIndx=4  ;                                           //make changes if new added
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
}
    
    if (currentIndx2>0){
currentIndx2=currentIndx2-1;
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}

else {
 currentIndx2=4;                                             //make changes if new added
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}
    if (currentIndx3>0){
currentIndx3=currentIndx3-1;
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}

else {
 currentIndx3=4;                                             //make changes if new added
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}
    
    if (currentIndx4>0){
currentIndx4=currentIndx4-1;
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}

else {
 currentIndx4=4 ;                                            //make changes if new added
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}
}






