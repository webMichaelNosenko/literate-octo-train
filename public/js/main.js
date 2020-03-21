const mainDiv = document.getElementById("main-div"); //get the main section div
let newNode = document.createElement("div");
newNode.id = "mainDiv1";
let newStyle = document.createElement("style");
newStyle.innerHTML = "#mainDiv1 {" +
                        "display: flex;" +
                        "border-radius: 10%;" +
                        "background-color: black;" +
                        "height: 800px;" +
                        "width: 500px;" +
                        "z-index: 1;" +
                        "position: absolute;" +
                        "border: solid;" +
                        "border-width: 10px;" +
                        "border-color: #1c1c1c;" +
                    "}";
let ref = document.querySelector('script');
ref.parentNode.insertBefore(newStyle, ref);
mainDiv.appendChild(newNode); //append a div to the main section
