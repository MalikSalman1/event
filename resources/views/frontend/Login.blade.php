<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/blogger_img_proxy/ANbyha3zPnk8dfy-MEUs0RJPDE0gRPASAECwtBUT1unzgejaWSCdHI4lN8Gied23p-4sdpOgYjWVCcXKs8N-p8Yqq5DVwjCA_pxJx1cAJ898-oPhKRoBjZWnguTeLxV1hd4mDnc4-1IDWc6bE7ElVvBsuQ=w1200-h630-p-k-no-nu">
  <title>Login - Ikhaith BLOG</title>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>
<body>
  <div class="lg:content-auto">
  <div class="lg:content-auto">
  <div class="relative h-screen w-screen">
  <img src="https://images.pexels.com/photos/3747463/pexels-photo-3747463.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="absolute inset-0 object-cover w-full h-full" alt="" />
  <div class="relative h-full bg-gray-900 bg-opacity-75">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl h-screen md:px-24 lg:px-8 lg:py-20">
      <div class="flex flex-col items-center lg:mt-40 h- full justify-between xl:flex-row">
        <div class="w-full max-w-xl xl:mb-0 xl:pr-16 xl:w-7/12">
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
          Login to Your
            <!-- <br class="hidden md:block" /> -->
             <span class="text-teal-400">Ikhaith BLOG</span>
          </h2>
          <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
          "Programs must be written for people to read, and only incidentally for machines to execute." - Harold Abelson and Gerald Jay Sussman, Structure and Interpretation of Computer Programs.
          </p>
          <a href="{{url('signup')}}" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-400 hover:text-teal-accent-700">
            Sign up
            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
              <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
            </svg>
          </a>
        </div>
        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
          <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
              Login to your account
            </h3>
            <form method="post" action="{{url('login')}}">
                @csrf
              
              
              <div class="mb-1 sm:mb-2">
                <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                <input
                  placeholder="john.doe@example.org"
                  required=""
                  type="text"
                  class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                  id="email"
                  name="email"
                />
              </div>
              <span class="text-red-900">
                @error('email')
                {{$message}}
                @enderror
              </span>
              <div class="mb-1 sm:mb-2">
                <label for="password" class="inline-block mb-1 font-medium">Password</label>
                <input
                
                  required=""
                  type="password"
                  class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                  id="password"
                  name="password"
                />
              </div>
              <span class="text-red-900">
                @error('password')
                {{$message}}
                @enderror
              </span>
             
              <div class="mt-4 mb-2 sm:mb-4">
                <button
                  type="submit"
                  class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-[#7e57c2] hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                >
                  Login
                </button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  </div>
</body>
</html>