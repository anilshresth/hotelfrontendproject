
function filterSelection(c){
    var x,i;
    x=document.getElementsByClassName("gallery-box");
    if(c=="all") c="";
    //add the show class display:block to the filtered elements, and remove the show class from 
    // the elements that are not selected
    for(i=0; i < x.length; i++){
        galleryRemove(x[i],"show");
        if(x[i].className.indexOf(c) > -1) galleryAdd(x[i],"show");
    }
}

//show filtered elements
function galleryAdd(element,name){
    var i, arr1,arr2;
    arr1=element.className.split(" ");
    arr2=name.split(" ");
    for(i=0 ; i < arr2.length ; i++){
        if(arr1.indexOf(arr2[i])==-1){
            element.className +=" " +arr2[i];
        }
    }
}

//hide the elements that are not selected
function galleryRemove(element,name){
    let arr1, arr2;
    arr1=element.className.split(" ");
    arr2=name.split(" ");
    for(i=0 ; arr2 < length ; i++){
        while(arr1.indexOf(arr2[i] > -1)){
            arr1.splice(arr1.indexOf(arr2[i]),1);
        }

    }
    element.className=arr1.join(" ");
}

//add active class to the current button  highlight it

var btnContainer = document.getElementById("galleryBtnContainer");
var btns=btnContainer.getElementsByClassName("btn");

for(let i =0; i < btns.length ; i++){
    btns[i].addEventListener("click" ,function(){
        var current = document.getElementsByClassName("active");
        console.log(current.length);
        current[0].className=current[0].className.replace("active"," ");
        this.className += " active";

    })
}