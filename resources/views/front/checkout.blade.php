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
    <title>Checkout</title>
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

    <div
        style="width: 100%; height: 60%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 34.32px; display: inline-flex">
        <div
            style="padding-left: 28.25px; padding-right: 28.25px; padding-top: 14.12px; padding-bottom: 14.12px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 20.90304183959961px rgba(115, 96, 255, 0.50) inset; border-radius: 59.74px; border: 1.27px #3625B3 solid; justify-content: center; align-items: center; gap: 12.71px; display: inline-flex">
            <div style="color: white; font-size: 18.32px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                Join Subscription</div>
        </div>
        <div
            style="width: 1162px; text-align: center; color: white; font-size: 60px; font-family: Inter; font-weight: 700; word-wrap: break-word">
            Checkout Subscription</div>
    </div>

    <div class="h-[100px]"></div>

    <div class=""
        style="  opacity: 0.70; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
        <div
            style=" padding: 40px;  background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 150px rgba(54, 37, 179, 0.25) inset; border-radius: 30px; overflow: hidden; border: 1px #05011F solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 68px; display: inline-flex">
            <div
                style="align-self: stretch;  flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 35px; display: flex">
                <div
                    style=" flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 14px; display: flex">
                    <div
                        style="align-self: stretch; color: white; font-size: 60px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                        Rp 49.000</div>
                    <div
                        style="align-self: stretch; color: rgba(255, 255, 255, 0.80); font-size: 30px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                        /Monthly</div>
                </div>
                <div
                    style="align-self: stretch;  flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 39px; display: flex">
                    <div
                        style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div
                            style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="">
                            </div>
                        </div>
                        <div
                            style="flex: 1 1 0; color: #9FAAB8; font-size: 17.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Access all course materials including videos, e-book, and others</div>
                    </div>
                    <div
                        style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div
                            style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt=""> </div>
                        </div>
                        <div
                            style="flex: 1 1 0; color: #9FAAB8; font-size: 17.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Receive premium rewards such as templates</div>
                    </div>
                    <div
                        style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 13.51px; display: inline-flex">
                        <div
                            style="width: 27.02px; height: 27.02px; justify-content: center; align-items: center; display: flex">
                            <div style="width: 27.02px; height: 27.02px; position: relative">
                                <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="">
                            </div>
                        </div>
                        <div
                            style="flex: 1 1 0; color: #9FAAB8; font-size: 17.01px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Have the opportunity to have free consultations with teachers</div>
                    </div>
                </div>
            </div>
        </div>
        <form
            style=" width: 700px; padding: 40px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 192.913818359375px rgba(54, 37, 179, 0.25) inset; border-radius: 38.58px; overflow: hidden; border: 1.29px #05011F solid; flex-direction: column; justify-content: flex-start; align-items: flex-start;  display: inline-flex"
            action="{{route('front.checkout.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <p class="text-white text-4xl font-bold mb-10 ">Send Payment</p>
            <div class="py-2 flex w-full text-[#9FAAB8] text-xl   justify-between">
                <p class="font-medium">Bank Name</p>
                <p class="font-bold">bank Rakyat Indonesia</p>
            </div>
            <div class="py-2 flex w-full text-[#9FAAB8] text-xl   justify-between">
                <p class="font-medium">Account Number</p>
                <p class="font-bold">1234567890123</p>
            </div>
            <div class="py-2 flex w-full text-[#9FAAB8] text-xl   justify-between">
                <p class="font-medium">Account Name</p>
                <p class="font-bold">Ihsan Fakhriansyah</p>
            </div>

            <div class="h-[30px]"></div>
            <div class="relative">
                <button type="button" class="p-4 rounded-full flex gap-3 w-[620px] ring-1 ring-white transition-all duration-300 hover:ring-2 hover:ring-[#A0A0A0]" onclick="document.getElementById('file').click()">
                    <div class="w-6 h-6 flex shrink-0">
                        <img src="assets/icon/note-add.svg" alt="icon">
                    </div>
                    <p id="fileLabel" class="text-white">Add a file attachment</p>
                </button>
                <input id="file" type="file" name="proof" class="hidden" onchange="updateFileName(this)">
            </div>
            <button class="mt-10 w-full bg-[#3928B6] py-5 text-2xl rounded-[40px] font-semibold text-white items-center flex justify-center transition-all duration-300 hover:bg-[#2B1E8E]  ">I've Made The Payment</button>




        </form>


    </div>

    <div class="h-[100px]"></div>

    <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous">
</script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
