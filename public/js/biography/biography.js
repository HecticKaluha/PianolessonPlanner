var biographyReadMore = document.getElementById('biographyReadMore');
var biography = document.getElementById('biography');
biographyReadMore.onclick = changeSize;
var longer = true;

function changeSize(){
    longer = !longer;
    biographyReadMore.innerText = "";
    if(longer){
        biography.style.maxHeight = "75vh";
        biographyReadMore.innerText = "Read more....";
        location.href = "#about-me";
    }
    else{
        biographyReadMore.innerText = "Read less....";
        biography.style.maxHeight = "100%";
    }
}
