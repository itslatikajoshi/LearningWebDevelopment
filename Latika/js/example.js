// Learning JavaScript
console.log("Hi");

// Not using right now
//var marks = 10; // variable init, declare


let marks = 10; //


function showDate() {
    // alert("function is working");
    let btn1 = document.getElementById('button_1');
    btn1.innerHTML = "Hi Gaurav";
    btn1.className = 'my_btn';
    let content = document.getElementById('show_date').innerHTML;
    console.log("**************");
    console.log(content.trim().length);
    console.log("**************");
    console.log(content);
    // return false;
    // document.getElementById('show_date').innerHTML = content + Date();
    document.getElementById('show_date').style.fontSize = '34px';
    btn1.style = " background-color: blue;color: white;";
    console.log(btn1);
    return;
}

function changeImg(input){
    let path = './Latika/img/';
    console.log(input);
    let img =  document.getElementById('sw-section-2-result');
    img.src = path+input;

    /* if(input == 'on'){
       img.src = path+'pic_bulbon.gif';
    }else{
        img.src = path+'pic_bulboff.gif';

    } */
}