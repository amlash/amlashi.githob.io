
document.getElementById("bnum").innerHTML = "$"+5.99;
    changenum();
 function changenum(){// document.getElementById("demo1").innerHTML=" yes I could!";
var fname= document.getElementById("fname").value;
var lname= document.getElementById("lname").value;
var addr= document.getElementById("addr").value;
var city= document.getElementById("cit").value;
var country= document.getElementById("country").value;
var zip= document.getElementById("zip").value;
var cardn= document.getElementById("cardn").value;
var cardd= document.getElementById("cardd").value; 
var card= document.getElementById("fname").value;

  var bnum= document.getElementById("mynum");
    var j = bnum.selectedIndex;
    document.getElementById("bnum").innerHTML = "$"+(1+j)*5.99;
    document.getElementById("bnums").innerHTML = "$"+(1+j)*5.99;
    document.getElementById("bnumt").innerHTML = "$"+(1+j)*5.99;

    var xt = document.getElementById("mycard");
    var i = xt.selectedIndex;
 //   document.getElementById("demo").innerHTML = xt.options[i].text;
// window.open("pfly.html");
// var para = document.createElement("pfly.html");

  var node = document.createElement("pfly.html");
  var textnode = document.createTextNode("Water");
  node.appendChild(textnode);
  document.getElementById("pfly.html").appendChild(node);
  window.open("pfly.html");
 }
