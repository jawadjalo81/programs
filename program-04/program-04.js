document.getElementById("big").addEventListener("load", Requirement03);

//document.getElementById("req3").onload = function() {"cookiesEnabled is " + navigator.cookieEnabled;};

var r11 = document.getElementById("req10");
r11.addEventListener("mouseover", Requirement11);

var r11a = document.getElementById("req10");
r11a.addEventListener("mouseout", Requirement11a);

var r14 = document.getElementById("req14");
r14.addEventListener("mouseover", Requirement14);


function Requirement02(){
    var R2x = document.getElementById("req2").value;
    document.getElementById("colorDate").style.backgroundColor = R2x;
}
function Requirement03(){
    comsole.log("In 3 three.....");
    document.getElementById("req3").innerHTML = "cookiesEnabled is " + navigator.cookieEnabled;
    /*var text = "";
    if (navigator.cookieEnabled === true) {
        text = "Cookies are enabled.";
    } else {
        text = "Cookies are not enabled.";
    }
    
    document.getElementById("req3").innerHTML = text; */
}
var add = (function () {
    var counter = 0;
    return function () {return counter += 1;};
})();

function Requirement04(){
    document.getElementById("req4").innerHTML = add();
    var min = Math.ceil(1);
    var max = Math.floor(1000);
    document.getElementById("req4a").innerHTML = Math.floor(Math.random() * (max - min + 1)) + min;
}

function Requirement5(){
    setInterval(toggleParagraphVisible, 1500);
}
function toggleParagraphVisible(){
    if(document.getElementById("toggleParagraph").innerText == "Four score and seven years ago."){
        document.getElementById("toggleParagraph").innerText = "our fathers brought forth on this continent a new nation.";
    }
    else if(document.getElementById("toggleParagraph").innerText == "our fathers brought forth on this continent a new nation."){
        document.getElementById("toggleParagraph").innerText = "conceived in Liberty.";
    }
    else if(document.getElementById("toggleParagraph").innerText == "conceived in Liberty."){
        document.getElementById("toggleParagraph").innerText = "and dedicated to the proposition.";
    }
    else if(document.getElementById("toggleParagraph").innerText == "and dedicated to the proposition."){
        document.getElementById("toggleParagraph").innerText = "that all men are created equal.";
    }
    else{
        document.getElementById("toggleParagraph").innerText = "Four score and seven years ago.";
    }
}
function Requirement06(){
    document.getElementById("toggleParagraph").style.fontSize = "72";
    document.getElementById("toggleParagraph").style.fontFamily = "Impact,Charcoal,sans-serif";
}
var output = document.getElementById('output');

function changeText() {  
    var all = document.getElementsByTagName("*");
	alert(all.length);
	var outputText = 'Test';
    for(var i = 0;i< all.length;i++) {
		alert(outputText);
        outputText += all[i].innerHTML+'<br>';
    }
	document.getElementById("output").innerHTML = outputText;


}
function Requirement08(){
    var r8x = document.getElementById("req8").value;
    document.getElementById("img1").style.display = "none";
    document.getElementById("img2").style.display = "none";
    document.getElementById("img3").style.display = "none";
    document.getElementById("img4").style.display = "none";
    document.getElementById("img5").style.display = "none";
    document.getElementById("img6").style.display = "none";
    document.getElementById(r8x).style.display = "block";
    
}
pageWorker = require("sdk/page-worker").Page({
  contentScript: "console.log(document.body.innerHTML);",
  contentURL: "http://en.wikipedia.org/wiki/Internet"
});
var w;
function startWorker() {
    var tst = document.getElementById("r9img").src;  
    var spl = tst.slice(-16);
    
    if(typeof(Worker) !== "undefined") {
        if(typeof(w) === "undefined") {
            w = new Worker("worker.js");
        }
        w.onmessage = function(event) {
            spl = event.data;
            document.getElementById("r9img").src = spl;
        };
        setInterval(function(){w.postMessage(spl)},3000);
    } else {
        document.getElementById("req9").innerHTML = "Sorry, your browser does not support Web Workers...";
    }
}

function stopWorker() {
w.terminate();
w = undefined;
}
function Requirement10(){ 
    var r9x = document.getElementById("r9img").style.display;
    if(r9x === "none"){
        document.getElementById("r9img").style.display = "block";
    }else{
        document.getElementById("r9img").style.display = "none";
    }
}

function Requirement11(){
    document.getElementById("req10").style.backgroundColor  = "blue";
}
function Requirement11a(){
    document.getElementById("req10").style.backgroundColor  = "white";
}

function Requirement12(){
    var backgroundColor = '#' + ('000000' + Math.floor(Math.random()*16777215).toString(16)).slice(-6);
    console.log(backgroundColor);
    document.getElementById("req12a").style.backgroundColor = backgroundColor;
}
function Requirement12a(){
    window.history.back();
    //window.location.href = "index4.html";
}
function Requirement13(){
    var para = document.createElement("p");
    var node = document.createTextNode(" I've just been created! ");
    para.appendChild(node);
    
    var element = document.getElementById("div13");
    element.appendChild(para);
}
function Requirement14(){	
    var x14 = document.getElementsByTagName('P').length;
    alert(x14);
}