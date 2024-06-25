<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset("images/mizuku.png") }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lacquer:400&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Mizuku SMP</title>
  @vite('resources/css/app.css')
</head>

<body>
  <div id="landingBackground" class="w-screen h-screen overflow-hidden relative">
    <div class="block md:hidden"></div>
    <img class="hidden md:block absolute z-0 bg-center bg-no-repeat bg-cover h-screen max-w-fit" src="{{ asset('images/lobby.jpg') }}" alt="">
    <div class="hidden md:block absolute z-10 bg-[rgb(0,0,0,0.75)] w-full h-full">
      <div class="container h-full realtive">
        <div class="flex flex-col justify-center items-center h-full gap-10">
          <div id="landingLogo">
            <img src="{{ asset('images/mizuku-png.png') }}" class="h-[15rem]" alt="">
          </div>
          <div id="landingTexts" class="text-white text-center">
            <h1 class="text-[5rem] leading-[1]"><span style="font-family: Lacquer">Mizuku</span></h1>
            <h2 class="text-[3.5rem] leading-[1]">Survival Multiplayer</h2>
          </div>
          <div id="landingFAQs" class="text-[rgb(255,255,255,0.65)] text-center">
            <h2 class="text-white text-[2rem] mb-4">- Guide -</h2>
            <ol class="flex gap-16 text-[1.4rem]">
              <li>
                <a href="" class="landingLinks">
                  Jual/Beli Shop
                </a>
              </li>
              <li>
                <a href="" class="landingLinks">
                  Claim Land
                </a>
              </li>
              <li>
                <a href="" class="landingLinks">
                  TPA/Teleport
                </a>
              </li>
              <li>
                <a href="" class="landingLinks">
                  Tentang Uang
                </a>
              </li>
            </ol>
          </div>
          <div id="landingArrows" class="text-white absolute flex flex-col items-center bottom-10">
            <p>Scroll ke bawah</p>
            <i class="fa-solid fa-chevron-down animate__animated animate__fadeOutDown animate__infinite animate__slow"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://kit.fontawesome.com/bfcc361c81.js" crossorigin="anonymous"></script>
</html>