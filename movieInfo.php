<?php
    $descriptionID = empty($_GET['descriptionID']) ? 'none' : $_GET['descriptionID'];
    switch($descriptionID){
        case "wind-river" :
           $movieDescription = "A veteran tracker with the Fish and Wildlife Service helps to investigate the murder of a young Native American woman, and uses the case as a means of seeking redemption for an earlier act of irresponsibility which ended in tragedy.";
           break;
        case "thor-ragnarok" :
            $movieDescription = "Thor is imprisoned on the planet Sakaar, and must race against time to return to Asgard and stop Ragnarök, the destruction of his world, which is at the hands of the powerful and ruthless villain Hela.";
            break;
        case "kingsman-a-golden-circle" :
            $movieDescription = "When their headquarters are destroyed and the world is held hostage, the Kingsman's journey leads them to the discovery of an allied spy organization in the US. These two elite secret organizations must band together to defeat a common enemy.";
            break;
        case "ready-player-one" :
            $movieDescription = "When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.";
            break;
        case "get-out" :
            $movieDescription = "A young African-American visits his white girlfriend's parents for the weekend, where his simmering uneasiness about their reception of him eventually reaches a boiling point.";   
            break;
        default :
            $movieDescription = "";
            break;
    }
    print $movieDescription;
?>