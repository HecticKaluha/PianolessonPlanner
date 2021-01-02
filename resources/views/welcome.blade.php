@extends ('layouts.landing')

@section ('content')
    @push('token')
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @endpush
    @push('style')
{{--        <link rel="stylesheet" href="{{asset('css/bootstrap-calendar/bootstrap-calendar.css')}}">--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.css">
{{--        <link rel="stylesheet" href="{{asset('css/bootstrap-calendar/bootstrap-calendar-extra.css')}}">--}}
    @endpush
    <main>
        <div class="relative xs:pt-32 pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{asset('img/banner.jpg')}}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="sm:container relative mx-auto">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h1 class="text-white font-semibold text-5xl">
                            Sunny Lee, Jazz Pianist
                        </h1>
                        <p class="mt-4 lg:w-7/12 mr-auto ml-auto text-lg text-gray-300">
                            <span class="italic">"Sunny is an ambitious musician who is open to other styles and genres of music."</span> <br>- Sabra, S.X.O
                        </p>
                    </div>
                </div>

            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-50 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-50 -mt-24">

            <div class="sm:container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center text-3xl inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-yellow-400">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Professional</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Sunny Lee is a graduate student from the Fontys school of the arts, Jazz Pianist.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center text-3xl inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-pink-400">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Creator</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    There are no boundaries for Sunny. She can make anything work.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="md:pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center text-3xl inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-500">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h6 class="text-xl font-semibold">International friendly</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Sunny, herself, is an international from Korea. Lessons can be in English or Korean.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="about-me" class="flex flex-wrap mt-32">
                    <div class="w-full lg:w-7/12 xl:w-6/12 px-4 mr-auto ml-auto">
                        <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-address-card text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            About Sunny Lee, Jazz Pianist
                        </h3>
                        <div id="biography" class="biography biographyAnimation text-justify">
                            <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                                “Sunny is an ambitious musician who is open to
                                other styles and genre of music.” - Sabra, S.X.O duo
                                member. Sunny is a pianist, composer,
                                accompanist, arranger, sound engineer, producer,
                                video and image maker. She makes her own music
                                videos and records her own songs in the studio
                                herself. She plays not only an acoustic piano but also
                                synthesizer (electronic keyboard). Her range is from
                                classical, jazz to pop. Sunny’s composition style is
                                also wide: from contemporary jazz to lofi music. Her
                                jazz perspective got larger too after she came to the Netherlands: from traditional swing jazz to
                                contemporary and funk. As the range is wide, you can see her interests are in all music and that
                                means she is a multiplayer. If you see what she has done so far, you will see she really has
                                proactive attitude when playing and she can work with everyone.
                            </p>
                            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                Sunny was born and raised in South Korea and recently graduated Fontys Conservatorium in the
                                Netherlands as a jazz pianist. As she experienced two totally different cultures, she mixed them in
                                her own way. You can see all the videos of her piano skills on her Youtube channel as well as her
                                graduation performance (the best video to see her playing varied styles). The most popular song of
                                graduation performance from audience was the arrangement of Mario brother’s game theme.
                                Sunny plays on the grand piano and electronic keys on the song with three brass players,
                                vibraphone and a rhythm section. Now, she is working on a new project with a visual artist, you will
                                get to see the new music and video clip soon.
                            </p>
                            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                Sunny started to play the piano classically when she was 3 years old. Her mom is also a musician
                                (a classical singer), inspired her a lot. She is one of the reasons why Sunny started music. The
                                most valuable of inspirational information that she got from her mom is knowledge of how singers
                                work. Naturally she got perfect pitch and critical way of thinking about music. Maybe we will see
                                her as a singer-song writer some day. Sunny is a challenger and passionate person and that is
                                why she decided to study abroad across the Earth. Her musical journey has just started.
                            </p>
                            <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                                Sunny is an artist not only a musician. She believes music has to come with visual parts.
                                Musicians have to be able to offer to audience the image behind the music. So the musician is an
                                icon of the music and represents it. In her free time she likes coloring and making jewelry, she likes
                                to create new things. And she puts the creation in her music and music videos as well. That is an
                                interdisciplinary work. Nowadays she is busy with fusion music and concentrates more on this style
                                of music. Sunny is a deep thinker. To portray the thoughts she has through her music is of the
                                utmost importance. Whilst she understands her music fully, she enjoys her audience to search and
                                find the meaning in her music. She knows how to put ideas into her music.
                            </p>
                        </div>

                        <p id="biographyReadMore" class="cursor-pointer font-bold text-gray-800 mt-8 block mb-4">Read more...</p>
                    </div>
                    <div class="w-full lg:w-4/12 xl:w-4/12 px-4 mr-auto ml-auto mt-16 lg:mt-64">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-purple-500">
                            <img alt="..." src="{{asset('img/biography.jpg')}}" class="w-full align-middle rounded-t-lg"/>
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-purple-500 fill-current"></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Professional artist </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Sunny Lee is in multiple bands and duo's. One of those is SXO, founded by her. She writes, composes and directs her own music and video-clips too!
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="sm:container mx-auto px-4 pt-12 lg:pt-24 lg:pb-24">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Showcase - My work</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Below are some highlights from my career so far.
                        </p>
                    </div>
                </div>

                <div id="images" class="text-gray-600 p-3 mx-4 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                    <i class="fas fa-images text-3xl"></i>
                </div>

                <div class="flex flex-wrap mt-12 mb-12 justify-center">
                    <div class="w-full md:w-7/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/professional.jpg')}}"/>
                        <blockquote class="relative mt-4">
                            <h4 class="text-xl font-bold text-white">
                                Final exam 1</h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunny Lee's final exam performance with live audience.
                            </p>
                        </blockquote>

                        <div class="flex flex-wrap justify-center">
                            <div class="w-full md:w-6/12 mt-12 ml-auto mr-auto md:pr-4">
                                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/showcase2.jpg')}}"/>
                                <blockquote class="relative mt-4">
                                    <h4 class="text-xl font-bold text-white">
                                        Final exam 2.1</h4>
                                    <p class="text-md font-light mt-2 text-white">
                                        Sunny Lee's final exam performance with live audience.
                                    </p>
                                </blockquote>
                            </div>

                            <div class="w-full md:w-6/12 mt-12 mb-12 ml-auto mr-auto md:pl-4">
                                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/showcase3.png')}}"/>
                                <blockquote class="relative mt-4">
                                    <h4 class="text-xl font-bold text-white">
                                        Final exam 2.2</h4>
                                    <p class="text-md font-light mt-2 text-white">
                                        Sunny Lee's final exam performance with live audience.
                                    </p>
                                </blockquote>
                            </div>

                        </div>
                    </div>

                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/showcase4.jpeg')}}"/>
                        <blockquote class="relative mt-4 mb-12">
                            <h4 class="text-xl font-bold text-white">
                                Final exam 4</h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunny Lee's final exam performance with live audience.
                            </p>
                        </blockquote>

                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/showcase5.png')}}"/>
                        <blockquote class="relative mt-4 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                Final exam 5</h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunny Lee's final exam performance with live audience.
                            </p>
                        </blockquote>
                    </div>

                </div>

                <div id="videos" class="text-gray-600 p-3 mx-4 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                    <i class="fas fa-film text-3xl"></i>
                </div>

                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full lg:w-10/12 mb-12 px-4">
                        @if($currentBrowser == "Safari")
                            <iframe id="videoElement" class="min-w-full rounded-lg shadow-lg ytVideo" src="https://www.youtube.com/embed/GL2ulyPSngc">
                            </iframe>
                        @else
                            <video id="videoElement" class="w-full max-h-screen min-w-full video rounded-lg shadow-lg" controls>
                                <source src="{{asset('video/RDWF.mp4')}}" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                        @endif


                        <blockquote class="relative mt-4 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                Current movie </h4>
                            <p class="text-md font-light mt-2 text-white">
                                The description of the video that is currently playing.
                            </p>
                        </blockquote>
                    </div>


                </div>

                <div class="flex flex-wrap pb-6">
                    <div class="w-full px-4">
                        <p class="font-bold text-gray-500 text-lg">More videos...</p>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center">

                    <div id="videoCarousel" class="w-full w-12/12 space-x-4 overflow-x-scroll flex justify-between px-4 rail">

                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/SXO.mp4')}}" data-ytsrc="" src="{{asset('img/thumbnails/sxo.png')}}"/>
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/RDWF.mp4')}}" data-ytsrc="https://www.youtube.com/embed/GL2ulyPSngc" src="{{asset('img/thumbnails/RDWF.png')}}"/>
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/SXO.mp4')}}" data-ytsrc="" src="{{asset('img/banner.jpg')}}"/>
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/SXO.mp4')}}" data-ytsrc="" src="{{asset('img/piano.jpg')}}"/>
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/RDWF.mp4')}}" data-ytsrc="" src="{{asset('img/professional.jpg')}}"/>
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" data-src="{{asset('video/SXO.mp4')}}" data-ytsrc="" src="{{asset('img/banner.jpg')}}"/>

                    </div>

                    <div id="videoCarouselButtonLeft" class="cursor-pointer h-6 w-6 text-gray-600 p-2 mx-4 text-center inline-flex items-center justify-center w-8 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-caret-left text-lg"></i>
                    </div>
                    <div id="videoCarouselButtonRight" class="cursor-pointer h-6 w-6 top-50 text-gray-600 p-2 mx-4 text-center inline-flex items-center justify-center w-8  mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-caret-right text-lg"></i>
                    </div>

                </div>



            </div>
        </section>

        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="sm:container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4  lg:mt-16 mb-6">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/private_alt.jpeg')}}"/>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div id="private-lesson" class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-calendar-day text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Private lessons</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                               Sunny provides private one-on-one lessons with a quality guarantee. Lessons can vary from 45 minutes for children, to 2 hours max. for adults. It doesnt matter if you have never touched a piano and can't read notes, or if you're an advanced player. <br>
                                You can take lessons in the following categories:
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Category 1 </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Category 2</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Category 3</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20 pb-48">
            <div class="sm:container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Plan your lesson now!</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                           The calendar below shows Sunny's availability. Click on a green part of a day to reserve your spot.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap px-4 justify-between">
                    <ul class="list-none pr-4 mt-24 md:w-12/12 lg:w-3/12">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-500 bg-green-500 mr-3"><i class="fas fa-circle"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">
                                        Sunny is available! Claim that spot.
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-red-500 bg-red-500 mr-3"><i class="fab fa-circle"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-gray-600">Sunny is booked, try another date.</h4>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full md:w-12/12 lg:w-9/12 lg:mb-0 mb-12">
                        <div class="">
                            <div class=" text-center">
                                <div class="mt-6">
{{--                                    Bootstrap calendar--}}
                                    <div id='calendar'>
                                    </div>
{{--                                    End of Bootstrap calendar--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="sm:container mx-auto px-4 pt-12 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Anything left unanswered?</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Whenever you have any more questions, feel free to contact me through the form below. I will do my best to answer your questions in full.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="sm:container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-32">
                    <div class="w-full lg:w-6/12 px-4">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold">More Questions?</h4>
                                <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                    Complete this form and I will get back to you ASAP. </p>
                                <div class="relative w-full mb-3 mt-8">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                                        Name</label><input type="text" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Full Name" style="transition: all 0.15s ease 0s;"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">Email</label><input type="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Email" style="transition: all 0.15s ease 0s;"/>
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="message">Message</label><textarea rows="4" cols="80" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full" placeholder="Type a message..."></textarea>
                                </div>
                                <div class="text-center mt-6">
                                    <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="button" style="transition: all 0.15s ease 0s;">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{--        get categories then load modal--}}
        @include('components.modals.bookSlotModal');
    </main>

    @push('scripts')

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>--}}

{{--        bootstrap calendar js--}}
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{{--        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>--}}
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>

        <script>
            let bookSlotUrl = '{{route('bookSlot')}}';
            let categoriesUrl = '{{route('getAllCategories')}}';
            let slotsUrl = '{{route('getAllSlots')}}';
            var calendar;
            var calendarEl;
            document.addEventListener('DOMContentLoaded', function() {
                //get the categories
                fetch(categoriesUrl, {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    method: 'get',
                    credentials: "same-origin"
                }).then(function(response){
                    return response.json();
                }).then(function(data){
                    data.data.forEach(function(value){
                        var opt = document.createElement('option');
                        opt.setAttribute('value', value.id);
                        opt.innerText = value.name;
                        category.appendChild(opt);
                    });
                });
            });
        </script>

        <script src="{{asset('js/calendar/calendar.js')}}"></script>
        <script>
            var events = [];
            document.addEventListener('DOMContentLoaded', function() {
                fetch(slotsUrl, {
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    method: 'get',
                    credentials: "same-origin"
                }).then(function(response){
                    return response.json();
                }).then(function(data){

                }).then(function(){
                    calendarEl = document.getElementById('calendar');
                    calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        eventDisplay: 'block',
                        eventBorderColor:'transparent',
                        eventOrder:'start',
                        eventSources: [
                            {
                                url:slotsUrl,
                            }
                        ],
                        eventSourceSuccess: function(content, xhr) {
                            events = [];
                            content.data.forEach(function(value){
                                events.push(
                                    {
                                        title: '',
                                        start: value.date + 'T' + value.startTime,
                                        end: value.date + 'T' + value.endTime,
                                        allDay: false,
                                        customId: value.id,
                                        customBooked: value.booked
                                    }
                                );
                            });
                            return events;
                        },
                        height: 'auto',
                        eventDidMount: function(custom){
                            if(custom.event.extendedProps.customBooked){
                                custom.el.classList.add('bg-red-500');
                            }
                            else{
                                custom.el.classList.add('bg-green-500', 'cursor-pointer');
                                custom.el.onclick = function(){
                                    openModal(custom.event);
                                };
                            }
                        },

                        //Activating modal for 'when an event is clicked'
                        // eventClick: function (event) {
                        //     console.log(event);
                        //     openModal();
                        // },
                    });
                    calendar.render();
                    $('.fc-toolbar-chunk').addClass('flex justify-end flex-wrap');
                });
            });
        </script>

        <script src="{{asset('js/carousel/carousel.js')}}"></script>
        <script src="{{asset('js/biography/biography.js')}}"></script>
        <script>
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }
        </script>
    @endpush

@endsection
