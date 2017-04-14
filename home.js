/***************Main Image****************/
var myimage=document.getElementById("slideshow");
var imagearray=["<a.jpg","b.jpg","d.jpg"];
var imageindex=0;
function changeimage(){
    slideshow.setAttribute("src",imagearray[imageindex]);
    imageindex++;
    if(imageindex>=imagearray.length)
        {
            imageindex=0;
        }
}

var intervalhandel=setInterval(changeimage,1000);

/*slideshow.onclick =function() {
    clearInterval(intervalhandel);
}*/

/**********************sliding section FRUITS***************/

currentIndx=0;
currentIndx2=1;
currentIndx3=2;
currentIndx4=3;
MyImages=["a.jpg","b.jpg","c.jpeg","d.jpg","e.jpeg"];   //make changes if new added
Messages=["Mango","Papaya","Banana","Grapes","Lichi"];  //make changes if new added
imagesPreloaded = new Array(MyImages.length);                         //make changes if new added


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
 currentIndx=(MyImages.length)-1 ;       
document.theImage.src=imagesPreloaded[currentIndx].src;
document.form1.text1.value=Messages[currentIndx];
}
    
    if (currentIndx2>0){
currentIndx2=currentIndx2-1;
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}

else {
 currentIndx2=(MyImages.length)-1;      
document.theImage2.src=imagesPreloaded[currentIndx2].src;
document.form2.text2.value=Messages[currentIndx2];
}
    if (currentIndx3>0){
currentIndx3=currentIndx3-1;
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}

else {
 currentIndx3=(MyImages.length)-1;
document.theImage3.src=imagesPreloaded[currentIndx3].src;
document.form3.text3.value=Messages[currentIndx3];
}
    
    if (currentIndx4>0){
currentIndx4=currentIndx4-1;
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}

else {
 currentIndx4=(MyImages.length)-1 ;        
document.theImage4.src=imagesPreloaded[currentIndx4].src;
document.form4.text4.value=Messages[currentIndx4];
}
}

/*...............VEGETABLE SECTION.............*/

currentIndxv=0;
currentIndxv2=1;
currentIndxv3=2;
currentIndxv4=3;
MyImagesv=["c.jpeg","d.jpg","e.jpeg" ,"a.jpg","b.jpg"];   //make changes if new added
Messagesv=["Brinjal","Potato","Tomato","Chilli","Govi"];  //make changes if new added
imagesPreloadedv = new Array(MyImagesv.length);          


for (i = 0; i < MyImagesv.length ; i++) 
{
    imagesPreloadedv[i] = new Image(120,120)
imagesPreloadedv[i].src=MyImagesv[i]
}
function Nexterv(){
if (currentIndxv<imagesPreloadedv.length-1){
currentIndxv=currentIndxv+1;
document.theImagev.src=imagesPreloadedv[currentIndxv].src;
document.formv1.textv1.value=Messagesv[currentIndxv];
}

else {
 currentIndxv=0
document.theImagev.src=imagesPreloadedv[currentIndxv].src;
document.formv1.textv1.value=Messagesv[currentIndxv];
}
    
    if (currentIndxv2<imagesPreloadedv.length-1){
currentIndxv2=currentIndxv2+1;
document.theImagev2.src=imagesPreloadedv[currentIndxv2].src;
document.formv2.textv2.value=Messagesv[currentIndxv2];
}

else {
 currentIndxv2=0
document.theImagev2.src=imagesPreloadedv[currentIndxv2].src;
document.formv2.textv2.value=Messagesv[currentIndxv2];
}
    
    if (currentIndxv3<imagesPreloadedv.length-1){
currentIndxv3=currentIndxv3+1;
document.theImagev3.src=imagesPreloadedv[currentIndxv3].src;
document.formv3.textv3.value=Messagesv[currentIndxv3];
}

else {
 currentIndxv3=0
document.theImagev3.src=imagesPreloadedv[currentIndxv3].src;
document.formv3.textv3.value=Messagesv[currentIndxv3];
}
    if (currentIndxv4<imagesPreloadedv.length-1){
currentIndxv4=currentIndxv4+1;
document.theImagev4.src=imagesPreloadedv[currentIndxv4].src;
document.formv4.textv4.value=Messagesv[currentIndxv4];
}

else {
 currentIndxv4=0
document.theImagev4.src=imagesPreloadedv[currentIndxv4].src;
document.formv4.textv4.value=Messagesv[currentIndxv4];
}
}


function Backerv(){
if (currentIndxv>0){
currentIndxv=currentIndxv-1;
document.theImagev.src=imagesPreloadedv[currentIndxv].src;
document.formv1.textv1.value=Messagesv[currentIndxv];
}

else {
 currentIndxv=(MyImagesv.length)-1 ;             
document.theImagev.src=imagesPreloadedv[currentIndxv].src;
document.formv1.textv1.value=Messagesv[currentIndxv];
}
    
    if (currentIndxv2>0){
currentIndxv2=currentIndxv2-1;
document.theImagev2.src=imagesPreloadedv[currentIndxv2].src;
document.formv2.textv2.value=Messagesv[currentIndxv2];
}

else {
 currentIndxv2=(MyImagesv.length)-1;                
document.theImagev2.src=imagesPreloadedv[currentIndxv2].src;
document.formv2.textv2.value=Messagesv[currentIndxv2];
}
    if (currentIndxv3>0){
currentIndxv3=currentIndxv3-1;
document.theImagev3.src=imagesPreloadedv[currentIndxv3].src;
document.formv3.textv3.value=Messagesv[currentIndxv3];
}

else {
 currentIndxv3=(MyImagesv.length)-1;            
document.theImagev3.src=imagesPreloadedv[currentIndxv3].src;
document.formv3.textv3.value=Messagesv[currentIndxv3];
}
    
    if (currentIndxv4>0){
currentIndxv4=currentIndxv4-1;
document.theImagev4.src=imagesPreloadedv[currentIndxv4].src;
document.formv4.textv4.value=Messagesv[currentIndxv4];
}

else {
 currentIndxv4=(MyImagesv.length)-1 ;               
document.theImagev4.src=imagesPreloadedv[currentIndxv4].src;
document.formv4.textv4.value=Messagesv[currentIndxv4];
}
}
