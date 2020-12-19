@if($currentBrowser != 'Chrome')
    <div id="browser-notice" class="p-2 bg-red-400 w-full">
        <p class="color-white">We noticed that you're using <span class="font-bold">{{$currentBrowser}}</span>... For the best experience on this website, we recommend using the <span class="font-bold">Chrome browser</span></p>
    </div>
@endif
