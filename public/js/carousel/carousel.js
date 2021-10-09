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
    removeClasses();
    // if(checkBrowser() !== "Chrome"){
        var ytSrc = e.target.dataset.ytsrc;
        console.log(ytSrc);
        if(ytSrc !== ""){
            videoElement.src = ytSrc;
            e.target.classList.add(...nowPlayingClassList);
        }
        else{
            Swal.fire({
                title: 'Oops! :(',
                text: 'This video is not available on Youtube. You can still watch it by viewing the website in Chrome!',
                icon: 'info',
                confirmButtonText: 'Great!'
            })
        }
    // }
    // else{
    //     videoElement.innerHTML = "";
    //
    //     var source = document.createElement('source');
    //     var text = document.createTextNode('Your browser does not support HTML Video');
    //     source.setAttribute('src', e.target.dataset.src);
    //     videoElement.appendChild(source);
    //     videoElement.appendChild(text);
    //     videoElement.load();
    //     videoElement.autoplay = true;
    //     e.target.classList.add(...nowPlayingClassList);
    // }
}

function removeClasses(){
    for(videoOption of videoCarousel.children){
        videoOption.classList.remove(...nowPlayingClassList);
    }
}

function checkBrowser(){
    var browsers = ["Chrome", "Firefox", "Safari", "Opera", "MSIE", "Trident", "Edge"];
    var ie = ["MSIE", "Trident", "Edge"];
    var currentBrowser = false;
    var userAgent = navigator.userAgent;
    for(var i=0; i<browsers.length;i++) {
        if (userAgent.indexOf(browsers[i]) > -1) {
            currentBrowser = browsers[i];
            break;
        }
    }

    if(currentBrowser.includes(ie)){
        currentBrowser = "Internet Explorer, Edge or Trident";
    }
    return currentBrowser;
}
