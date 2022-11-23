<div class="px-4 lg:px-48 pb-6 mt-40 lg:mt-64 text-sm xl:text-base">
    <div class="flex flex-col space-y-8 lg:flex-row lg:space-x-64 lg:space-y-0">
        <div class="lg:basis-1/3">
            <x-logo></x-logo>

            <div class="leading-relaxed font-medium text-gray-600 mt-4">WeCare bisa membantu mengecek tingkat kesuburanmu dengan cepat dan mudah. Jaga kualitas sperma Anda. Cek Kualitas sperma Anda sekarang bersama kami.</div>
        </div>
        <div class="">
            <div class="flex space-x-32">
                <div>
                    <h6 class="font-semibold mb-4 truncate">Quick Links</h6>
                    <ul class="flex flex-col space-y-2 font-medium text-gray-600">
                        <li class="hover:text-gray-900 @if( Route::is('home') ) text-gray-900 @endif">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="hover:text-gray-900 @if( Route::is('diagnosis') ) text-gray-900 @endif">
                            <a href="{{ route('diagnosis') }}">Prediksi</a>
                        </li>
                        @guest
                        <li class="hover:text-gray-900 @if( Route::is('login') ) text-gray-900 @endif">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="hover:text-gray-900 @if( Route::is('result') ) text-gray-900 @endif">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endguest
                        @auth
                        <li class="hover:text-gray-900 @if( Route::is('account') ) text-gray-900 @endif">
                            <a href="{{ route('account') }}">Akun</a>
                        </li>
                        <li class="hover:text-gray-900 @if( Route::is('other-result') ) text-gray-900 @endif">
                            <a href="{{ route('other-result') }}">Hasil</a>
                        </li>
                        @endauth
                    </ul>
                </div>
                <div>
                    <h6 class="font-semibold mb-4">Resources</h6>
                    <ul class="flex flex-col space-y-2 font-medium text-gray-600">
                        <li class="hover:text-gray-900">
                            <a href="https://archive.ics.uci.edu/ml/datasets/Fertility" class="focus:outline-none">Dataset</a>
                        </li>
                        <li class="hover:text-gray-900">
                            <a href="https://www.freepik.com/vectors/technology">Vector by jcomp</a>
                        </li>
                        <li class="hover:text-gray-900">
                            <a href='https://www.freepik.com/vectors/man'>Vector by studiogstock</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="border-b border-gray-200 my-6"></div>
    <div class="flex items-center justify-between">
        <div class="font-semibold text-sm text-gray-600">Copyright &copy; WeCare. All Rights Reserved</div>
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-pink-500 w-5 h-5 cursor-pointer" x="0px" y="0px" viewBox="0 0 64 64">
                <path d="M 21.580078 7 C 13.541078 7 7 13.544938 7 21.585938 L 7 42.417969 C 7 50.457969 13.544938 57 21.585938 57 L 42.417969 57 C 50.457969 57 57 50.455062 57 42.414062 L 57 21.580078 C 57 13.541078 50.455062 7 42.414062 7 L 21.580078 7 z M 47 15 C 48.104 15 49 15.896 49 17 C 49 18.104 48.104 19 47 19 C 45.896 19 45 18.104 45 17 C 45 15.896 45.896 15 47 15 z M 32 19 C 39.17 19 45 24.83 45 32 C 45 39.17 39.169 45 32 45 C 24.83 45 19 39.169 19 32 C 19 24.831 24.83 19 32 19 z M 32 23 C 27.029 23 23 27.029 23 32 C 23 36.971 27.029 41 32 41 C 36.971 41 41 36.971 41 32 C 41 27.029 36.971 23 32 23 z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-pink-500 w-5 h-5 cursor-pointer" x="0px" y="0px" viewBox="0 0 64 64">
                <path d="M48,7H16c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8h17V38h-6v-7h6v-5c0-7,4-11,10-11c3.133,0,5,1,5,1v6h-4 c-2.86,0-4,2.093-4,4v5h7l-1,7h-6v17h8c4.418,0,8-3.582,8-8V15C56,10.582,52.418,7,48,7z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-pink-500 w-5 h-5 cursor-pointer" x="0px" y="0px" viewBox="0 0 30 30">
                <path d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-pink-500 w-5 h-5 cursor-pointer" x="0px" y="0px" viewBox="0 0 24 24">    
                <path d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4S5.746,4,4.186,4.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.861-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M10,14.598V9.402c0-0.385,0.417-0.625,0.75-0.433l4.5,2.598c0.333,0.192,0.333,0.674,0,0.866l-4.5,2.598 C10.417,15.224,10,14.983,10,14.598z"></path>
            </svg>
        </div>
    </div>
</div>