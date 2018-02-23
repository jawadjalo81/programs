var newPic ="";

self.onmessage = function (e){
    if(e.data === "images/req91.jpg"){
        newPic = "images/req92.jpg";
    }
    if(e.data === "images/req92.jpg"){
        newPic = "images/req93.jpg";
    }
    if(e.data === "images/req93.jpg"){
        newPic = "images/req94.jpg";
    }
    if(e.data === "images/req94.jpg"){
        newPic = "images/req95.jpg";
    }
    if(e.data === "images/req95.jpg"){
        newPic = "images/req91.jpg";
    }
    self.postMessage(newPic);
};
