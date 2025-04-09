<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="shortcut icon" type="x-icon" href="assets/logo/icon.png">
    <title>Pricing</title>
</head>

<body class="px-[80px] pt-[20px]" style="overflow-x: hidden ; background-image: url('/assets/bg.png');">
    <nav class="flex justify-between items-center pt-6 ">
        <a href="">
            <p class="text-white font-bold text-2xl">DT Developers</p>
        </a>
        <ul class="flex items-center gap-[30px] text-white">
            <li>
                <a href="" class=" font-semibold">Home</a>
            </li>
            <li>
                <a href="" class="font-semibold">Category</a>
            </li>
            <li>
                <a href="" class="font-semibold text-[#7360FF]">Pricing</a>
            </li>
            <li>
                <a href="" class="font-semibold">Benefits</a>
            </li>
        </ul>
        @auth
        <div class="flex gap-[10px] items-center">
            <div class="flex flex-col items-end justify-center">
                <p class="font-semibold text-white">Hi, {{Auth::user()->name}}</p>
                @if(Auth::user()->hasActiveSubscription())
                <p class="p-[2px_10px] rounded-full bg-[#FF6129] font-semibold text-xs text-white text-center">PRO
                </p>
                @endif
            </div>
            <div class="w-[56px] h-[56px] overflow-hidden rounded-full flex shrink-0">
                <a href="{{Route('dashboard')}}">
                    <img src="{{Storage::url(Auth::user()->avatar)}}" class="w-full h-full object-cover" alt="photo">
                </a>
            </div>
        </div>
        @endauth
        @guest
        <div class="flex gap-[10px] items-center">
        <a href="{{Route('register')}}"
                class="text-white font-semibold rounded-[30px] p-[16px_32px] ring-1 ring-white transition-all duration-300 hover:ring-2 hover:ring-[#E9E9E9]">Sign
                Up</a>
            <a href="{{Route('login')}}"
                class="text-white font-semibold rounded-[30px] p-[16px_32px] bg-[#3625B3] transition-all duration-300 hover:bg-[#2B1E8E]">Sign
                In</a>
        </div>
        @endguest

        
    </nav>
    
    <div class="h-[100px]"></div>
    <div style="width: 100%; height: 100%; justify-content: center; align-items: center; gap: 85px; display: inline-flex">
        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 61px; display: inline-flex">
            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 34.32px; display: flex">
                <div style="padding-left: 28.25px; padding-right: 28.25px; padding-top: 14.12px; padding-bottom: 14.12px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 20.90304183959961px rgba(115, 96, 255, 0.50) inset; border-radius: 59.74px; border: 1.27px #3625B3 solid; justify-content: center; align-items: center; gap: 12.71px; display: inline-flex">
                    <div style="color: white; font-size: 18.32px; font-family: Inter; font-weight: 500; word-wrap: break-word">Join Subscription</div>
                </div>
                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 19.48px; display: flex">
                    <div style="width: 713px; color: white; font-size: 60px; font-family: Inter; font-weight: 700; word-wrap: break-word">Low invest, big profits</div>
                    <div style="color: rgba(255, 255, 255, 0.50); font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">Join premium and get benefit for yourself, for a successful future</div>
                </div>
                <div style="align-self: stretch; height: 306.02px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 39px; display: flex">
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="">
                            </div>
                        </div>
                        <div style="flex: 1 1 0; color: #9FAAB8; font-size: 18.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Access all course materials including videos, e-book, and others</div>
                    </div>
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="">
                            </div>
                        </div>
                        <div style="flex: 1 1 0; color: #9FAAB8; font-size: 18.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Have the opportunity to have free consultations with teachers</div>
                    </div>
                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="">
                            </div>
                        </div>
                        <div style="flex: 1 1 0; color: #9FAAB8; font-size: 18.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Get a certificate to beautify your portfolio</div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-bottom: 30px; padding-right: 50px;  padding-left: 50px; padding-top: 30px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 150px rgba(54, 37, 179, 0.25) inset; border-radius: 30px; overflow: hidden; border: 1px #05011F solid; flex-direction: column; justify-content: flex-center; align-items: center; gap: 68px; display: inline-flex">
            <div style="align-self: stretch;  flex-direction: column; justify-content: flex-start; align-items: flex-start;  display: flex">
                <div style=" flex-direction: column; justify-content: flex-start; align-items: flex-start;  display: flex">
                    <div style="align-self: stretch; color: white; font-size: 100px; font-family: Inter; font-weight: 700; word-wrap: break-word">Rp 49.000</div>
                    <div style="align-self: stretch; color: rgba(255, 255, 255, 0.80); font-size: 40px; font-family: Inter; font-weight: 300; word-wrap: break-word">/Monthly</div>
                    <div class="h-[40px]"></div>
                    <a href="{{route('front.checkout')}}" class="w-full bg-[#3928B6] py-10 text-2xl rounded-2xl font-semibold hover:bg-[#2B1E8E] transition-all duration-300 text-white items-center flex justify-center  ">
                        Subsctribe Now
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>