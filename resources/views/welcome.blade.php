<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
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
      <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
        Stop misjudging your web projects

        <span class="sm:block"> Increase Conversion.</span>
      </h1>

      <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
        We provide an AI assistant that allow you to estimate your web project in the correct way</p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <button id="getStarted" class="btn"> Get Started</button>

        <button id="learnMore"
          class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          >Learn More
        </button> 

      </div>

      

    </div>
  </div>
</section>

            <!-- Section 2 -->
            <section>
                <div class="container mx-auto" id="ScrollToLearnMore"> 
                <h1 class="text-4xl font-extrabold text-white text-center">WHY?</h1>
                  <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed text-white mb-36">
         It's getting harder and harder to estimate a web-application..</p>

                <div class="flex flex-wrap justify-center md:justify-between gap-8">

                    <div class="w-[320px] rounded-lg lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">😵‍💫</div>
                      <h2 class="text-xl text-white font-bold text-center">Because estimate a project is a nightmare...</h2>
                    </div>

                     <div class="w-[320px] rounded-lg lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">🕧</div>
                      <h2 class="text-xl text-white font-bold text-center">Because setup a project can take a long time</h2>
                    </div>

                    <div class="w-[320px] rounded-lg lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">🐳</div>
                      <h2 class="text-xl text-white font-bold text-center">Because dockerize a project can be a mess..</h2>
                    </div>

                    <div class="w-[320px] rounded-lg h-auto lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">😡</div>
                      <h2 class="text-xl text-white font-bold text-center">Because your client is mad</h2>
                    </div>

                    <div class="w-[320px] rounded-lg h-auto lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">😵</div>
                      <h2 class="text-xl text-white font-bold text-center">Because debugging</h2>
                    </div>

                    <div class="w-[320px] rounded-lg h-auto lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">⚡</div>
                      <h2 class="text-xl text-white font-bold text-center">Because front-end framework are very complicated</h2>
                    </div>


                    <div class="w-[320px] rounded-lg lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">⚡</div>
                      <h2 class="text-xl text-white font-bold text-center">Because AWS</h2>
                    </div>

                      <div class="w-[320px] rounded-lg lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                        <div class="text-4xl text-center">😅</div>
                        <h2 class="text-xl text-white font-bold text-center">Because the client has updated his specs</h2>
                    </div>

                    <div class="w-[320px] rounded-lg h-auto lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">🤷‍♂️</div>
                      <h2 class="text-xl text-white font-bold text-center">Because the pipeline failed</h2>
                    </div>

                    <div class="w-[320px] rounded-lg h-auto lg:w-96 p-6 border-double border-4 border-indigo-500 rounded-lg hover:scale-105 transition duration-500">
                      <div class="text-4xl text-center">😵‍💫</div>
                      <h2 class="text-xl text-white font-bold text-center">Because no one has ever been able to carry out a project within the estimates made.</h2>
                    </div>

                  </div>
                    

                </div>
                </div>
            </section>

            <section class="text-center mt-16">
            <div id="ScrollGetStarted" class="container mx-auto">
            
              <livewire:project-form />

            </div>
            </section>


          <livewire:footer />

  
    </body>

   

</html>
