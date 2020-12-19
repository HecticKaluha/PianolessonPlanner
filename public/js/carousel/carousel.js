var videoCarouselButtonRight = document.getElementById('videoCarouselButtonRight');
var videoCarouselButtonLeft = document.getElementById('videoCarouselButtonLeft');
var videoCarousel = document.getElementById('videoCarousel');
var videoElement = document.getElementById('videoElement');
var nowPlayingClassList = ["opacity-30", "border-2", "border-red-400", "border-solid"];

videoCarouselButtonRight.onclick = function () {
    videoCarousel.scrollLeft +=  videoCarousel.offsetWidth;
};
videoCarouselButtonLeft.onclick = function () {
    videoCarousel.scrollLeft -= videoCarousel.offsetWidth;
};

for(videoOption of videoCarousel.childNodes){
    videoOption.onclick = function(){
        changeVideo(event);
    }
}

function changeVideo(e){
    videoElement.innerHTML = "";
    var source = document.createElement('source');
    var text = document.createTextNode('Your browser does not support HTML Video');

    source.setAttribute('src', e.target.dataset.src);

    removeClasses();
    videoElement.appendChild(source);
    videoElement.appendChild(text);

    videoElement.load();

    e.target.classList.add(...nowPlayingClassList);
    videoElement.autoplay = true;
}

function removeClasses(){
    for(videoOption of videoCarousel.children){
        videoOption.classList.remove(...nowPlayingClassList);
    }
}
