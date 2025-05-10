let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu(){
            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "300px";
            }
            else{
                menuList.style.maxHeight = "0px";
            }
        };


 let bookItems = document.querySelectorAll(".item");
     bookItems.forEach(function(item) {
    item.addEventListener("click", function() {
        item.classList.toggle("selected");
    });
});


let buttons = document.querySelectorAll(".plan button");

buttons.forEach(function(button) {
    button.addEventListener("click", function() {
        alert("Thanks for subscribing!");
    });
});
       