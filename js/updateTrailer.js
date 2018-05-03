function updateTrailer(movieID){
    switch(movieID){
        case "wind-river" :
           document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/0F4Yxwo2ZEk?start=21"
           document.getElementById("rating").innerHTML = "My rating: 8.1"
           document.getElementById("infoBox").innerHTML = "A veteran tracker with the Fish and Wildlife Service helps to investigate the murder of a young Native American woman, and uses the case as a means of seeking redemption for an earlier act of irresponsibility which ended in tragedy."
           break;
        case "thor-ragnarok" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/ue80QwXMRHg"
            document.getElementById("rating").innerHTML = "My rating: 9.5"
            document.getElementById("infoBox").innerHTML = "Thor is imprisoned on the planet Sakaar, and must race against time to return to Asgard and stop Ragnarök, the destruction of his world, which is at the hands of the powerful and ruthless villain Hela."
            break;
        case "kingsman-a-golden-circle" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/6Nxc-3WpMbg"
            document.getElementById("rating").innerHTML = "My rating: 8.9"
            document.getElementById("infoBox").innerHTML = "When their headquarters are destroyed and the world is held hostage, the Kingsman's journey leads them to the discovery of an allied spy organization in the US. These two elite secret organizations must band together to defeat a common enemy."
            break;
        case "ready-player-one" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/cSp1dM2Vj48"
            document.getElementById("rating").innerHTML = "My rating: 7.1"
            document.getElementById("infoBox").innerHTML = "When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune."
            break;
        case "get-out" :
            document.getElementById("youtubeVid").src = "https://www.youtube.com/embed/sRfnevzM9kQ"
            document.getElementById("rating").innerHTML = "My rating: 9.0"
            document.getElementById("infoBox").innerHTML = "A young African-American visits his white girlfriend's parents for the weekend, where his simmering uneasiness about their reception of him eventually reaches a boiling point."
            break;
        default :
            document.getElementById("youtubeVid").src=""
            document.getElementById("rating").innerHTML=""
            document.getElementById("infoBox").innerHTML="Click on a movie to see the trailer, brief discription, and my rarting."
    }
}