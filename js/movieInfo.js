        /*************
        SAMPLE URLS
        
        1. To get the config data like image base urls
        https://api.themoviedb.org/3/configuration?api_key=<APIKEY>
        
        2. To fetch a list of movies based on a keyword
        https://api.themoviedb.org/3/search/movie?api_key=<APIKEY>&query=<keyword>
        
        3. To fetch more details about a movie
        https://api.themoviedb.org/3/movie/<movie-id>?api_key=<APIKEY>
        *************/

        let baseURL = 'https://api.themoviedb.org/3/';
        let configData = null;
        let baseImageURL = null;
        const APIKEY = "0d84e9848b12a4cf4fbe117d98bdad57"
        var movieName = 'dunkirk'
        let getConfig = function (movieName) {
            let url = "".concat(baseURL, 'configuration?api_key=', APIKEY); 
            fetch(url)
            .then((result)=>{
                return result.json();
            })
            .then((data)=>{
                baseImageURL = data.images.secure_base_url;
                configData = data.images;
                console.log('config:', data);
                console.log('config fetched');
                runSearch(movieName)
            })
            .catch(function(err){
                alert(err);
            });
        }
        
        let runSearch = function (keyword) {
            let url = ''.concat(baseURL, 'search/movie?api_key=', APIKEY, '&query=', keyword);
            fetch(url)
            .then(result=>result.json())
            .then((data)=>{
                //process the returned data
                document.getElementById('output').innerHTML = JSON.stringify(data, null, 4);
                //work with results array...
                
            })
        }
        
        document.addEventListener('DOMContentLoaded', getConfig);
        /*******************************
        SAMPLE SEARCH RESULTS DATA
        { "vote_count": 2762, 
            "id": 578, 
            "video": false, 
            "vote_average": 7.5, 
            "title": "Jaws", 
            "popularity": 16.273358, 
            "poster_path": "/l1yltvzILaZcx2jYvc5sEMkM7Eh.jpg", 
            "original_language": "en", 
            "original_title": "Jaws", 
            "genre_ids": [ 27, 53, 12 ], 
            "backdrop_path": "/slkPgAt1IQgxZXNrazEcOzhAK8f.jpg", 
            "adult": false, 
            "overview": "An insatiable great white shark terrorizes the townspeople of Amity Island, The police chief, an oceanographer and a grizzled shark hunter seek to destroy the bloodthirsty beast.", 
            "release_date": "1975-06-18" 
        }
        *******************************/