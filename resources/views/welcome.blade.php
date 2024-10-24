<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ScopeWise helps you to estimate your web-project by using AI."/>
        <meta name="keywords" content="ScopeWise, scoping, AI, estimation, web-project, IT"/>
        <title>ScopeWise - Homepage</title>
        <!-- Fonts -->  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased background">
        
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif

 <!-- Section 1 --> 

<section class="text-white">

  <div class="mx-auto max-w-screen-xl px-4 py-32 md:py-24 lg:py-24 lg:flex lg:h-screen lg:items-center"> 
    <div class="mx-auto max-w-3xl text-center">

      @if(session()->has('message'))
          <div class="alert alert-success mb-12">
              {{ session('message') }}
          </div>
      @endif 

      <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
        Stop misjudging your web projects
        <span class="sm:block">Save time and money</span>
      </h1>

      <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
        We provide an AI assistant that allow you to estimate your web project in a correct way</p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <button id="getStarted" class="btn"> Get Started</button>

        <button id="learnMore"
          class="block w-full rounded border border-indigo-500 px-12 py-3 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          >Learn More
        </button> 

      </div>

      

    </div>
  </div>
</section>

            <!-- Section 2 -->
            <section class="mb-24">
                <div class="container mx-auto" id="ScrollToLearnMore"> 
                <h1 class="text-4xl font-extrabold text-white text-center">WHY?</h1>
                <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed text-center text-white mb-36">
                As freelancer, PM, PO or web-developer it's getting harder and harder to estimate a web-application.</p>

                <div class="flex flex-wrap justify-center md:justify-between gap-8">

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px]">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">😵‍💫</div>
                        <h2 class="text-xl text-white font-bold text-center">Because estimate a project is a nightmare...</h2>
                      </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px]">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">🕧</div>
                        <h2 class="text-xl text-white font-bold text-center">Because setup a project can take a long time</h2>
                      </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px]">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">🐳</div>
                        <h2 class="text-xl text-white font-bold text-center">Because dockerize a project can be a mess..</h2>
                      </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px] h-32">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">😡</div>
                        <h2 class="text-xl text-white font-bold text-center">Because your client is mad</h2>
                      </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px]">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">⚡</div>
                        <h2 class="text-xl text-white font-bold text-center">Because front-end framework are very complicated</h2>
                    </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px] h-32">
                      <div class="w-[320px] background lg:w-96 p-6">
                          <div class="text-4xl text-center">😵</div>
                          <h2 class="text-xl text-white font-bold text-center">Because debugging takes a lot of time</h2>
                      </div>
                  </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px] h-40">
                        <div class="w-[320px] background lg:w-96 p-6">
                          <div class="text-4xl text-center">😅</div>
                          <h2 class="text-xl text-white font-bold text-center">Because the client has updated his specs</h2>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px] h-32">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">⚡</div>
                        <h2 class="text-xl text-white font-bold text-center">Because AWS</h2>
                    </div>
                    </div>

                     <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px]">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">😵‍💫</div>
                        <h2 class="text-xl text-white font-bold text-center">Because no one has ever been able to carry out a project within the estimates made.</h2>
                      </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 rounded-lg p-[1px] h-32">
                      <div class="w-[320px] background lg:w-96 p-6">
                        <div class="text-4xl text-center">🤷‍♂️</div>
                        <h2 class="text-xl text-white font-bold text-center">Because the pipeline failed</h2>
                      </div>
                    </div>

                  </div>
                    

                </div>
                </div>
            </section>

            <!-- They use our app -->
            <section>
              <div class="container mx-auto my-24">

                 <h1 class="text-4xl font-extrabold mb-24 text-white text-center">THEY USE THE APP</h1>

                <div class="flex justify-center">
                  <a href="https://www.red-panda.fr/" target="_blank"><img src="{{asset('images/red_panda.svg')}}" width="150" alt="Red Panda"></a>
                </div>
  
              </div>
            </section>

            <section class="my-24">
            <div id="ScrollGetStarted" class="container mx-auto">
            
              <!-- Display component if user is auth -->
              @auth()

               <h1 class="text-4xl font-extrabold mb-24 text-white text-center">TRY THE BETA SOLUTION!</h1>
                  <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                  <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
                     <livewire:project-form />
                  </div>
                  </div>

              @endauth
              @guest
                <!-- Otherwise register -->
                <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 background">
                  <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">

                    <livewire:pages.auth.register>

                </div>
                </div>
              @endguest

            </div>
            </section>


          <livewire:footer />

      <!-- 100% privacy-first analytics -->
      <script async defer src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
      <noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif" alt="" referrerpolicy="no-referrer-when-downgrade" /></noscript>
    </body>

   

</html>
