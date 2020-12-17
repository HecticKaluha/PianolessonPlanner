@extends ('layouts.landing')

@section ('content')

    @push('style')
        <link rel="stylesheet" href="{{asset('css/bootstrap-calendar.css')}}">
{{--        <link rel="stylesheet" href="{{asset('css/bootstrap-calendar-extra.css')}}">--}}
    @endpush
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("{{asset('img/banner.jpg')}}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h1 class="text-white font-semibold text-5xl">
                            Start learning, start living.
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            Playing the piano is fun and good for your brain. Step up your game, start learning now, with private piano lessons from Sunhee Lee.
                        </p>
                    </div>
                </div>

            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden" style="height: 70px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-300 -mt-24">

            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Graduate Student</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Sunhee Lee is a graduate student from the Fontys school of the arts, Jazz Pianist.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-glasses"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Innovator</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Sunhee keeps innovating, and likes to mix things up. Different disciplines overlap in her work.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h6 class="text-xl font-semibold">International friendly</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Sunhee, herself, is an international student from Korea. Lessons can be in English or Korean.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <a name="about-me"></a>
                <div class="flex flex-wrap items-center mt-32">
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <div class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-address-card text-xl"></i>
                        </div>
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            About Sunhee Lee, Jazz Pianist
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            Write some text about yourself here. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Atque beatae consequuntur dolore doloribus, eius eveniet explicabo illo iste iure
                            laboriosam libero necessitatibus numquam obcaecati perspiciatis, possimus tenetur vero
                            vitae voluptatem!
                        </p>
                        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700">
                            Write Some text about your career here. Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Dolorum incidunt officia ut? Ab aperiam, atque, autem delectus doloribus eos, maiores
                            numquam odit quae quia repellat voluptatem. Ipsa molestiae quae velit.
                        </p>
                        <a href="#" class="font-bold text-gray-800 mt-8 block mb-4">Check out Sunhee Lee's Instagram...</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img alt="..." src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80" class="w-full align-middle rounded-t-lg"/>
                            <blockquote class="relative p-8 mb-4">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                    <polygon points="-30,95 583,95 583,65" class="text-pink-600 fill-current"></polygon>
                                </svg>
                                <h4 class="text-xl font-bold text-white">
                                    Professional artist </h4>
                                <p class="text-md font-light mt-2 text-white">
                                    Sunhee Lee is in multiple bands and duo's. One of those is SXO, founded by her. She writes, composes and directs her own music and video-clips too!
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a name="videos"></a>
        <section class="pb-20 relative block bg-gray-900">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-900 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-24">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Showcase - My work</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Below are some highlights from my career so far.
                        </p>
                    </div>
                </div>


                <div class="flex flex-wrap mt-12 justify-center">
                    <div class="w-full md:w-12/12 mb-12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/piano.jpg')}}"/>
                        <blockquote class="relative mt-4 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                Final exam </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunhee Lee's final exam performance with live audience.
                            </p>
                        </blockquote>
                    </div>
                    <p>slider here</p>

                    <a name="images"></a>

                    <div class="w-full md:w-5/12 mb-12  ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/piano.jpg')}}"/>
                        <blockquote class="relative mt-4 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                Final exam </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunhee Lee's final exam performance with live audience.
                            </p>
                        </blockquote>
                    </div>

                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{asset('img/piano.jpg')}}"/>
                        <blockquote class="relative mt-4 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                Final exam </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Sunhee Lee's final exam performance with live audience.
                            </p>
                        </blockquote>
                    </div>
                </div>
                <div class="flex flex-wrap pt-12">
                    <div class="w-full lg:w-6/12 px-4">
                        <a href="#" class="font-bold text-gray-500 mt-8 text-lg">Learn more about me...</a>
                    </div>
                </div>
            </div>
        </section>

        <a name="private-lesson"></a>
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20" style="height: 80px; transform: translateZ(0px);">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"/>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-calendar-day text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">Private lessons</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                               Sunhee provides private one-on-one lessons with a quality guarantee. Lessons can vary from 45 minutes for children, to 2 hours max. for adults. It doesnt matter if you have never touched a piano and can't read notes, or if you're an advanced player. <br>
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
                                                Carefully crafted components </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Amazing page examples</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Dynamic components</h4>
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
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center mb-24">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold">Plan your lesson now!</h2>
                        <p class="text-lg leading-relaxed m-4 text-gray-600">
                           The calendar below shows Sunhee's availability. Click on a green part of a day to reserve your spot.
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
                                        Sunhee is available! Claim that spot.
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
                                    <h4 class="text-gray-600">Sunhee is booked, try another date.</h4>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full md:w-12/12 lg:w-9/12 lg:mb-0 mb-12">
                        <div class="">
                            <div class=" text-center">
                                <div class="mt-6">
{{--                                    Bootstrap calendar--}}
                                    <div id='wrap'>
                                        <div id='calendar'></div>
                                        <div style='clear:both'></div>
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
            <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
                <div class="flex flex-wrap text-center justify-center">
                    <div class="w-full lg:w-6/12 px-4">
                        <h2 class="text-4xl font-semibold text-white">Anything left unanswered?</h2>
                        <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                            Whenever you have any more questions, feel free to contact me through the form below. I will do my best to answer your questions in full.
                        </p>
                    </div>
                </div>
{{--                <div class="flex flex-wrap mt-12 justify-center">--}}
{{--                    <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">--}}
{{--                            <i class="fas fa-medal text-xl"></i>--}}
{{--                        </div>--}}
{{--                        <h6 class="text-xl mt-5 font-semibold text-white">--}}
{{--                            Excelent Services </h6>--}}
{{--                        <p class="mt-2 mb-4 text-gray-500">--}}
{{--                            Some quick example text to build on the card title and make up--}}
{{--                            the bulk of the card's content. </p>--}}
{{--                    </div>--}}
{{--                    <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">--}}
{{--                            <i class="fas fa-poll text-xl"></i>--}}
{{--                        </div>--}}
{{--                        <h5 class="text-xl mt-5 font-semibold text-white">--}}
{{--                            Grow your market </h5>--}}
{{--                        <p class="mt-2 mb-4 text-gray-500">--}}
{{--                            Some quick example text to build on the card title and make up--}}
{{--                            the bulk of the card's content. </p>--}}
{{--                    </div>--}}
{{--                    <div class="w-full lg:w-3/12 px-4 text-center">--}}
{{--                        <div class="text-gray-900 p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">--}}
{{--                            <i class="fas fa-lightbulb text-xl"></i>--}}
{{--                        </div>--}}
{{--                        <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>--}}
{{--                        <p class="mt-2 mb-4 text-gray-500">--}}
{{--                            Some quick example text to build on the card title and make up--}}
{{--                            the bulk of the card's content. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
        <section class="relative block py-24 lg:pt-0 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
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
    </main>

    @push('scripts')
{{--        bootstrap calendar js--}}
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="{{asset('js/bootstrap-calendar.js')}}"></script>
        <script src="{{asset('js/bootstrap-calendar-extra.js')}}"></script>
{{--        end of bootstrap calendar js--}}
        <script>
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }
        </script>
    @endpush

@endsection
