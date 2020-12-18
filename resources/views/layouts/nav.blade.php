<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
    <div class="sm:container xs:w-full px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-3xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-pink-500" href="{{ url('/') }}">Sunny World</a>
            <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#about-me"><i class="lg:text-gray-300 text-gray-500 fas fa-user-circle text-lg leading-lg mr-2"></i>
                        About me</a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#images"><i class="lg:text-gray-300 text-gray-500 fas fa-images text-lg leading-lg mr-2"></i>
                        Images</a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#videos"><i class="lg:text-gray-300 text-gray-500 fas fa-film text-lg leading-lg mr-2"></i>
                        Videos</a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#private-lesson"><i class="lg:text-gray-300 text-gray-500 fas fa-chalkboard-teacher text-lg leading-lg mr-2"></i>
                        Plan a lesson</a>
                </li>
            </ul>
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#" target="_blank"><i class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Instagram</span></a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="#" target="_blank"><i class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Facebook</span></a>
                </li>
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-lg uppercase font-bold" href="https://www.youtube.com/channel/UCf-Mu_IQF7t78sPrxSFBaHg" target="_blank"><i class="lg:text-gray-300 text-gray-500 fab fa-youtube text-lg leading-lg "></i><span class="lg:hidden inline-block ml-2">Youtube</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
