@if($currentBrowser != 'Chrome')
    <div id="browser-notice" class="p-2 bg-red-400 w-full rounded-lg relative">
        <button onclick="closeBrowserNotice()" class=""><i class="fas fa-times text-white"></i></button>
        <p class="inline color-white">We noticed that you're using <span class="font-bold underline">{{$currentBrowser}}</span>... For the best experience on this website, we recommend using the <span class="font-bold underline">Chrome browser</span></p>
    </div>
    <script>
        function closeBrowserNotice(){
            document.querySelector('#browser-notice').remove();
        }
    </script>
@endif
