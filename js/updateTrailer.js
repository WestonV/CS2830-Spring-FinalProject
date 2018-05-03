function updateTrailer(movieID){
    switch(movieID){
        case "wind-river" :
           document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/0F4Yxwo2ZEk?start=21"
           document.getElementById("rating").innerHTML = "My rating: 8.1"
           document.getElementById('youtubeVid').style.visibility='visible'
           document.getElementById('message').style.visibility='hidden'
           break;
        case "thor-ragnarok" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/ue80QwXMRHg"
            document.getElementById("rating").innerHTML = "My rating: 9.5"
            document.getElementById('youtubeVid').style.visibility='visible'
            document.getElementById('message').style.visibility='hidden'
            break;
        case "kingsman-a-golden-circle" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/6Nxc-3WpMbg"
            document.getElementById("rating").innerHTML = "My rating: 8.9"
            document.getElementById('youtubeVid').style.visibility='visible'
            document.getElementById('message').style.visibility='hidden'
            break;
        case "ready-player-one" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/cSp1dM2Vj48"
            document.getElementById("rating").innerHTML = "My rating: 7.1"
            document.getElementById('youtubeVid').style.visibility='visible'
            document.getElementById('message').style.visibility='hidden'
            break;
        case "get-out" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/sRfnevzM9kQ"
            document.getElementById("rating").innerHTML = "My rating: 9.0"
            document.getElementById('youtubeVid').style.visibility='visible'
            document.getElementById('message').style.visibility='hidden'
            break;
        default :
            document.getElementById("youtubeVid").src=""
            document.getElementById("rating").innerHTML=""
            document.getElementById('youtubeVid').style.visibility='visible'
            break;
    }
}

function getMovieInfo(movieID){
    var xmlHttp = new
    XMLHttpRequest();
    xmlHttp.onload = function(){
        if(xmlHttp.status == 200){
            var infoBox = document.getElementById('infoBox');
            infoBox.innerHTML = xmlHttp.responseText;
        }
    }
    var reqURL = "movieInfo.php?descriptionID=" + movieID;
    xmlHttp.open("GET", reqURL, true);
    xmlHttp.send();

    console.log(movieID);
    console.log(xmlHttp.responseText);
    console.log(reqURL);
}