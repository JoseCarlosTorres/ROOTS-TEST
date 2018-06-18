<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--> 
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sample.css">
    
    </head>
    <body>
        <div class="sidebar-wrapper">
            
        </div>
        <div class="gallery">
            <h1 style="text-align: center;">personajes</h1>
            <button onclick="sortList()">Sort</button>
            <ul id="characters">
                
            </ul>
        </div>
        <script>
            
              function createNode(element) {
                    return document.createElement(element);
                }
               function append(parent, el) {
                return parent.appendChild(el);
              }

              const ul = document.getElementById('characters');
                const url = 'https://swapi.co/api/people/';
                fetch(url)
                .then((resp) => resp.json())
                .then(function(data) {
                  let characters = data.results; 
                  return characters.map(function(character) {
                    let li = createNode('li'),
                        a = createNode('a'),
                        p = createNode('p'),
                        span = createNode('span'),
                        img = createNode('img');       
                        
                        
                                        
                        
                        var spec_link = character.species;
                        
                                var xhttp = new XMLHttpRequest();
                                xhttp.open("GET", spec_link, false);
                                xhttp.setRequestHeader("Content-type", "application/json");
                                xhttp.send();
                                var response = JSON.parse(xhttp.responseText);
                    
                    var url_param = "character.php?";
                        url_param += "name=" + character.name;
                        url_param += "&species=" + response.name;
                        url_param += "&gender=" + character.gender;
                        url_param += "&height=" + character.height;
                        url_param += "&mass=" + character.mass;
                        a.setAttribute("href", url_param)
                        img.setAttribute("id","gend_image");
                        span.setAttribute("id","characater");
                        p.setAttribute("id","species");
                        
                    var char_name = `${character.name}`;
                    var char_gender = `${character.gender}`;
                    var char_species = `${response.name}`;
                    
                    if (char_gender == "male") var gend_code = "male.png";
                    else if (char_gender == "female") var gend_code = "female.png";
                    else gend_code = "question.png";
                    
                    
                    a.innerHTML = `${character.name}, gender:`  ;
                    p.innerHTML = `${response.name} :`;
                    img.src = gend_code;
                    append(ul, li);                    
                    append(li, span); 
                    append(span,p);
                    append(span,a);
                    append(li,img);
                  })
                })
                
                function sortList() {
                    var list, i, switching, b, shouldSwitch;
                    list = document.getElementById("characters");
                    switching = true;
                    /*Make a loop that will continue until
                    no switching has been done:*/
                    while (switching) {
                      //start by saying: no switching is done:
                      switching = false;
                      b = list.getElementsByTagName("li");
                      //Loop through all list-items:
                      for (i = 0; i < (b.length - 1); i++) {
                        //start by saying there should be no switching:
                        shouldSwitch = false;
                        /*check if the next item should
                        switch place with the current item:*/
                        if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
                          /*if next item is alphabetically
                          lower than current item, mark as a switch
                          and break the loop:*/
                          shouldSwitch = true;
                          break;
                        }
                      }
                      if (shouldSwitch) {
                        /*If a switch has been marked, make the switch
                        and mark the switch as done:*/
                        b[i].parentNode.insertBefore(b[i + 1], b[i]);
                        switching = true;
                      }
                    }
                  }
        </script>
    </body>
    
</html>

