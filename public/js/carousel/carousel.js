var videoCarouselButtonRight = document.getElementById('videoCarouselButtonRight');
var videoCarouselButtonLeft = document.getElementById('videoCarouselButtonLeft');
var videoCarousel = document.getElementById('videoCarousel');

videoCarouselButtonRight.onclick = function () {
    videoCarousel.scrollLeft +=  videoCarousel.offsetWidth;
};
videoCarouselButtonLeft.onclick = function () {
    videoCarousel.scrollLeft -= videoCarousel.offsetWidth;
};
