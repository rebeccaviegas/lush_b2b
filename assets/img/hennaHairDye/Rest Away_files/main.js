

//grab HTML element to display different images
var showImages = document.getElementById("pictureDisplay");


    //grab dropdown list
    var dropDownList = document.getElementById("room");
    var value = dropDownList.options[dropDownList.selectedIndex].value;

    //set display image to show on selected index of dropdown - default 
    showImages.innerHTML = '<img src="./assets/img/Secluded Cottage/photos_wide_all.jpg">';

  


//create function to target onchange states of dropdown list
document.getElementById("room").onchange = function (){

    //grab the value of each selected index as the user changes their selection
    var dropDownList = document.getElementById("room");
    var value = dropDownList.options[dropDownList.selectedIndex].value;

    //if statements to change the image based on the user's selection
    if(value === "Tropical Paradise"){

        showImages.innerHTML = '<img src="./assets/img/Tropical Paradise/photos_wide_all.jpg">';       

    }else if(value === "Downtown Bustle"){

        showImages.innerHTML = '<img src="./assets/img/Downtown Bustle/photos_wide_all.jpg">';

    }else if(value === "Secluded Cottage"){

        showImages.innerHTML = '<img src="./assets/img/Secluded Cottage/photos_wide_all.jpg">';

    }else if(value === "Sail Away"){

        showImages.innerHTML = '<img src="./assets/img/Sail Away/photos_wide_all.jpg">';

    }else if(value === "Luxury Vacation Rental"){

        showImages.innerHTML = '<img src="./assets/img/Luxury Vacation/photos_wide_all.jpg">';

    }else if(value === "Suburban Dream Home"){

        showImages.innerHTML = '<img src="./assets/img/Suburban Dream Home/photos_wide_all.jpg">';

    }

} // END OF ONCHANGE FUNCTION

