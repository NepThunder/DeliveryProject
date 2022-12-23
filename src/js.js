//variables

var Sign_in = document.getElementById('Sign-in');
var Sign_up = document.getElementById('Sign-up');
var btn = document.getElementById('btn');
var form = document.getElementById("form-box");
var register_form = document.getElementById("register-form");
var password = document.getElementById("password");
var deliverNow=document.getElementById("deliverNow_id");
var deliverLater=document.getElementById("deliverLater");
var path1_1=document.getElementById("path1-1");
var path1_2=document.getElementById("path1-2");
var path2_1=document.getElementById("path2-1");
var path2_2=document.getElementById("path2-2");
var path2_3=document.getElementById("path2-3");
var price_calc_span= document.getElementById("price_calc_span");
var calculatePrice=document.getElementById("calculatePrice")
//functions

function register() {
    form.style.height = '780px';
    register_form.style.height = '150%';
    Sign_in.style.top = "5px";
    register_form.style.backgroundPositionY = "5% 50%";
    Sign_in.style.left = '-400px';
    Sign_up.style.left = '50px';
    btn.style.left = '110px';
}
function login() {
    form.style.height = '400px';
    register_form.style.height = '100%';
    register_form.style.backgroundPosition = "5% 40%";
    Sign_in.style.top = "120px";
    Sign_in.style.left = '50px';
    Sign_up.style.left = '450px';
    btn.style.left = '0px';
}
$(document).ready(function () {
    var autocomplete;
    var Pick_up = 'Pick-up';
    var Drop_off = 'Drop-off';
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(Pick_up)), {
        types: ['geocode'],
    })
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(Drop_off)), {
        types: ['geocode'],
    })
});
var typed = new Typed("#logo-span", {
    strings: ["Delivery At", "Fastest Speed"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
})
function showPassword() {
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}
function deliveryNow(){
    deliverNow.style.border="3px solid #1377EB";
    deliverLater.style.border="3px solid rgb(105, 107, 109)";
    path1_1.setAttribute("fill","#1377EB");
    path1_2.setAttribute("fill","#1377EB");
    path2_1.setAttribute("fill","black");
    path2_2.setAttribute("fill","black");
    path2_3.setAttribute("fill","black");
    
}
function deliveryLater(){
    deliverLater.style.border="3px solid #1377EB";
    deliverNow.style.border="3px solid rgb(105, 107, 109)";
    path2_1.setAttribute("fill","#1377EB");
    path2_2.setAttribute("fill","#1377EB");
    path2_3.setAttribute("fill","#1377EB");
    path1_1.setAttribute("fill","black");
    path1_2.setAttribute("fill","black");
}
function getPrice(){
    alert("Price is: "+ Math.floor(100+(Math.random() * 100) + 100));
}
function calc_Price(){
    document.getElementById("Payment-Amount").innerHTML= Math.floor(100+(Math.random() * 100) + (Math.random() * 100));
}