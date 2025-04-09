<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/output.css')}}" rel="stylesheet">
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
    <title>DT Developers - eLearning Platform</title>
    <style>
        .drop-in {
            animation: drop-in 1s ease 200ms backwards;
        }

        .drop-in-2 {
            animation: drop-in 1200ms ease 500ms backwards;
        }

        .drop-in-3 {
            animation: drop-in 1500ms ease 800ms backwards;
        }

        .drop-in-4 {
            animation: drop-in 1800ms ease 1000ms backwards;
        }

        .drop-in-5 {
            animation: drop-in 2000ms ease 1200ms backwards;
        }

        @keyframes drop-in {
            from {
                opacity: 0;
                transform: translatex(-100px);
            }

            to {
                opacity: 1;
                transform: translate(0px);
            }
        }


        :root {
            --animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            --animation-duration: 1s;
        }


        @keyframes slideInUp {
            0% {
                opacity: 0;
                transform: translateY(25%);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes slideInDown {
            0% {
                opacity: 0;
                transform: translateY(-25%);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes slideInleft {
            0% {
                opacity: 0;
                transform: translateX(25%);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(-25%);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                transform: scale(0.75);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes zoomReverseIn {
            0% {
                opacity: 0;
                transform: scale(1.25);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes flipInY {
            0% {
                opacity: 0;
                transform: perspective(90vw) rotateY(67.50deg);
            }

            100% {
                opacity: 1;
                transform: none;
            }
        }


        [data-animation] {
            opacity: 0;
            animation-timing-function: var(--animation-timing-function);
            animation-fill-mode: both;
            animation-duration: var(--animation-duration);
            will-change: transform, opacity;
        }


        .animations-disabled {

            &,
            [data-animation] {
                animation: none !important;
                opacity: 1 !important;
            }
        }


        .slideInUp {
            animation-name: slideInUp;
        }

        .slideInDown {
            animation-name: slideInDown;
        }

        .slideInLeft {
            animation-name: slideInleft;
        }

        .slideInRight {
            animation-name: slideInRight;
        }


        .fadeIn {
            animation-name: fadeIn;
        }


        .zoomIn {
            animation-name: zoomIn;
        }

        .zoomReverseIn {
            animation-name: zoomReverseIn;
        }

        .flipInY {
            animation-name: flipInY;
        }

        .flipOutY {
            animation-name: flipInY;
            animation-direction: reverse;
        }

    </style>
</head>

<body class="px-[80px] pt-[20px]" style="overflow-x: hidden ; background-image: url('/assets/bg.png');">
    <div class=""></div>
    <nav class="flex justify-between items-center pt-6 ">
        <a href="{{Route('front.index')}}">
            <p class="text-white font-bold text-2xl">DT Developers</p>
        </a>
        <ul class="flex items-center gap-[30px] text-white">
            <li>
                <a href="{{Route('front.index')}}" class="text-[#7360FF] font-semibold">Home</a>
            </li>
            <li>
                <a href="" class="font-semibold">Category</a>
            </li>
            <li>
                <a href="{{Route('front.pricing')}}" class="font-semibold">Pricing</a>
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

    <div class="h-[600px] flex-col flex justify-center">
        <div class="drop-in"
            style="margin-bottom: 20px;  width: 19%; padding-left: 10px; padding-right: 10px; padding-top: 20px; padding-bottom: 20px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 20.90304183959961px rgba(115, 96, 255, 0.50) inset; border-radius: 59.74px; border: 1.27px #3625B3 solid; justify-content: center; align-items: center; gap: 12.71px; display: inline-flex">
            <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 500; word-wrap: break-word">Join
                1000+ Students</div>
        </div>
        <div class="drop-in-2" style="width: 100%"><span
                style="color: white; font-size: 97.40px; font-family: Inter; font-weight: 700; word-wrap: break-word">Digital
                Things </span><span
                style="color: #7360FF; font-size: 97.40px; font-family: Inter; font-weight: 700; word-wrap: break-word">Developer</span>
        </div>
        <div class="drop-in-3" style="width: 100%"><span
                style="color: rgba(255, 255, 255, 0.50); font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">Develop
                your </span><span
                style="color: #7360FF; font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">digital
                skills</span><span
                style="color: rgba(255, 255, 255, 0.50); font-size: 40px; font-family: Inter; font-weight: 400; word-wrap: break-word">.
                anytime, anywhere</span></div>
        <div class="flex gap-[10px] items-center mt-[50px]">
            <a href=""
                class="drop-in-5 text-white font-semibold text-2xl rounded-[70px] p-[20px_50px] bg-[#3625B3] transition-all duration-300 hover:bg-[#2B1E8E]">About
                Us</a>
            <a href=""
                class="drop-in-4 text-white font-semibold text-2xl rounded-[70px] p-[20px_50px] ml-4 ring-1 ring-white transition-all duration-300 hover:ring-2 hover:ring-[#E9E9E9]">Course
                List</a>

        </div>
    </div>

    <div class="h-56"></div>

    <div
        style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; gap: 96px; display: inline-flex">
        <div
            style="width: 519px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 21px; display: inline-flex">
            <div data-animation="slideInRight" data-animation-delay="0.2s" class="feature" style="align-self: stretch"><span
                    style="color: #725FFE; font-size: 40px; font-family: Inter; font-weight: 700; word-wrap: break-word">Develop</span><span
                    style="color: white; font-size: 40px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                    with us, and achieve your </span><span
                    style="color: #725FFE; font-size: 40px; font-family: Inter; font-weight: 700; word-wrap: break-word">career</span>
            </div>
            <div data-animation="slideInRight" data-animation-delay="0.4s" class="feature"
                style="align-self: stretch; color: rgba(255, 255, 255, 0.80); font-size: 19px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                Our platform has been trusted by many students, by providing quality courses and expert teachers</div>
        </div>
        <div style="justify-content: flex-start; align-items: center; gap: 44px; display: flex">
            <div data-animation="slideInLeft" data-animation-delay="0.6s" class="feature"
                style="padding-left: 52.29px; padding-right: 52.29px; padding-top: 41.84px; padding-bottom: 41.84px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 81.81666564941406px rgba(54, 37, 179, 0.25) inset; border-radius: 33.95px; overflow: hidden; border: 3.39px #3625B3 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div
                    style="color: white; font-size: 84.87px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                    1K+</div>
                <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                    Active Student</div>
            </div>
            <div data-animation="slideInLeft" data-animation-delay="0.4s" class="feature"
                style="padding-left: 52.29px; padding-right: 52.29px; padding-top: 41.84px; padding-bottom: 41.84px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 81.81666564941406px rgba(54, 37, 179, 0.25) inset; border-radius: 33.95px; overflow: hidden; border: 3.39px #3625B3 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div
                    style="color: white; font-size: 84.87px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                    20+</div>
                <div style="color: white; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                    Expert Teacher</div>
            </div>
            <div data-animation="slideInLeft" data-animation-delay="0.2s" class="feature"
                style="padding-left: 52.29px; padding-right: 52.29px; padding-top: 41.84px; padding-bottom: 41.84px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 81.81666564941406px rgba(54, 37, 179, 0.25) inset; border-radius: 33.95px; overflow: hidden; border: 3.39px #3625B3 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div
                    style="color: white; font-size: 84.87px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                    30+</div>
                <div
                    style="align-self: stretch; color: white; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                    Career Course</div>
            </div>
        </div>
    </div>

    <div class="h-[200px]"></div>

    <div data-animation="slideInDown" data-animation-delay="0.1s" class="feature"
        style="width: 100%; text-align: center; color: white; font-size: 35px; font-family: Inter; font-weight: 700; word-wrap: break-word">
        DT-Developers graduates work at great <br> and successful companies</div>

    <div class="h-[60px]"></div>

    <div data-animation="slideInDown" data-animation-delay="0.3s" class="feature testi w-full overflow-hidden flex flex-col gap-6 relative">
        <div class="fade-overlay absolute z-10 h-full w-[50px] bg-gradient-to-r from-[#04001C] to-[#04001C00]"></div>
        <div class="fade-overlay absolute right-0 z-10 h-full w-[50px] bg-gradient-to-r from-[#04001C00] to-[#04001C]">
        </div>
        <div class="group/slider flex flex-nowrap w-max items-center">
            <div
                class="testi-container animate-[slideToL_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap">
                <img style="height: 80px;" src="assets/companies/dbs.png" alt="">
                <img style="height: 80px;" src="assets/companies/gojek.png" alt="">
                <img style="height: 80px;" src="assets/companies/google.png" alt="">
                <img style="height: 80px;" src="assets/companies/samsung.png" alt="">
                <img style="height: 80px;" src="assets/companies/shopee.png" alt="">
            </div>
            <div
                class="logo-container animate-[slideToL_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap">
                <img style="height: 80px;" src="assets/companies/telkom.png" alt="">
                <img style="height: 80px;" src="assets/companies/tiketcom.png" alt="">
                <img style="height: 80px;" src="assets/companies/tokopedia.png" alt="">
                <img style="height: 80px;" src="assets/companies/traveloka.png" alt="">
            </div>

        </div>
    </div>

    <div class="h-[200px]"></div>

    <div
        style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 42px; display: inline-flex">
        <div data-animation="slideInDown" data-animation-delay="0.2s" class="feature" style="align-self: stretch"><span
                style="color: #7360FF; font-size: 50px; font-family: Inter; font-weight: 700; word-wrap: break-word">Learning
            </span><span
                style="color: white; font-size: 50px; font-family: Inter; font-weight: 700; word-wrap: break-word">category</span>
        </div>
        <div data-animation="slideInDown" data-animation-delay="0.4s" class="feature"
            style="align-self: stretch; height: 291px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 43px; display: flex">
            <div
                style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 29.49px; display: inline-flex">
                <a href="{{route('front.category', 'mobile-development')}}"
                    class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icmobiledev.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Mobile Development</div>
                    </div>
                </a>
                <a href="{{route('front.category', 'web-development')}}"
                    class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">

                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icwebdev.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Web Development</div>
                    </div>
                </a>
                <a href="{{route('front.category', 'ui-design')}}"
                    class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">

                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icuides.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            UI Design</div>
                    </div>
                </a>
                <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icuxres.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            UX Research</div>
                    </div>
                </a>
            </div>
            <div data-animation="slideInDown" data-animation-delay="0.6s" class="feature"
                style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 29.49px; display: inline-flex">
                <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icdevops.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Devops</div>
                    </div>
                </a>
                <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icgamedev.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Game Development</div>
                    </div>
                </a>
                <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icdataana.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Data analytics</div>
                    </div>
                </a>
                <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">

                    <div
                        style="flex: 1 1 0; height: 124px; padding-left: 22.51px; padding-right: 22.51px; padding-top: 22px; padding-bottom: 22px; background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 80px rgba(53.57, 37, 179, 0.25) inset; border-radius: 20px; overflow: hidden; border: 1.32px #3625B3 solid; justify-content: flex-start; align-items: center; gap: 27.64px; display: flex">
                        <div
                            style="padding: 14.78px; background: #04001C; border-radius: 49.26px; justify-content: flex-start; align-items: center; gap: 0.99px; display: flex">
                            <div style="width: 50.44px; height: 50.44px; position: relative">
                                <img style="width: 50.44px; height: 50.44px; left: 0px; top: 0px; position: absolute"
                                    src="assets/icon/icdigifree.png" />

                            </div>
                        </div>
                        <div
                            style="width: 180.08px; color: white; font-size: 26.33px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                            Digital Freelance</div>
                    </div>
                </a>



            </div>
        </div>
    </div>

    <div class="h-[200px]"></div>
    <section data-animation="slideInUp" data-animation-delay="0.2s"  id="Popular-Courses" class="feature mx-auto flex flex-col p-[70px_82px_0px] gap-[30px]  rounded-[32px]"
        style="background: rgba(217, 217, 217, 0.01); box-shadow: 0px 0px 100px 10px rgba(54, 37, 179, 0.20) inset; border-radius: 56px; border: 5px rgba(53.57, 37, 179, 0.12) solid">
        <div class="flex flex-col gap-[30px] items-center text-center">
            <div data-animation="slideInUp" data-animation-delay="0.6s" class="feature"
                style=" height: 100%; padding-left: 30px; padding-right: 30px; padding-top: 11.01px; padding-bottom: 11.01px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 16.288915634155273px rgba(54, 37, 179, 0.50) inset; border-radius: 46.56px; border: 0.99px #3625B3 solid; justify-content: center; align-items: center; gap: 9.91px; display: inline-flex">
                <div
                    style="color: white; font-size: 20.51px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                    Popular Course</div>
            </div>
            <div data-animation="slideInUp" data-animation-delay="0.8s" class="feature"
                style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 11.52px; display: inline-flex">
                <div style="align-self: stretch; text-align: center"><span 
                        style="color: #7360FF; font-size: 46.09px; font-family: Inter; font-weight: 700; word-wrap: break-word">Join
                        now! </span><span
                        style="color: white; font-size: 46.09px; font-family: Inter; font-weight: 700; word-wrap: break-word">develop
                        your skills</span></div>
                <div data-animation="slideInUp" data-animation-delay="1s" class="feature"
                    style="align-self: stretch; color: rgba(255, 255, 255, 0.50); font-size: 22.88px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                    Great learning opportunity, Let’s be successful together</div>
            </div>
        </div>
        <div class="relative feature" data-animation="slideInUp" data-animation-delay="1.0s" >
            <button class="btn-prev  absolute rotate-180 -left-[52px] top-[216px]">
                <img src="assets/icon/arrow-right.svg" alt="icon">
            </button>
            <button class="btn-prev absolute -right-[52px] top-[216px]">
                <img src="assets/icon/arrow-right.svg" alt="icon">
            </button>
            <div id="course-slider" class="w-full ">
                @forelse ($courses as $course)
                <div class="course-card w-1/3 px-3 pb-[70px] mt-[2px]">
                    <div style=" background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 97.5px rgba(53, 37, 179, 0.25) inset;"
                        class="flex flex-col rounded-t-[12px] rounded-b-[24px] gap-[32px]  w-full pb-[10px] overflow-hidden transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E] ">
                        <a href="{{route('front.details', $course->slug)}}"
                            class="thumbnail w-full  shrink-0 rounded-[10px] overflow-hidden">
                            <img src="{{Storage::url($course->thumbnail)}}" class="w-full h-full object-cover"
                                alt="thumbnail">
                        </a>
                        <div class="flex flex-col px-4 gap-[10px]">
                            <a href="{{route('front.details', $course->slug)}}"
                                class="font-semibold text-lg line-clamp-2 hover:line-clamp-none min-h-[56px] text-white">{{$course->name}}</a>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-[2px]">
                                    <div>
                                        <img src="assets/icon/star.svg" alt="star">
                                    </div>
                                    <div>
                                        <img src="assets/icon/star.svg" alt="star">
                                    </div>
                                    <div>
                                        <img src="assets/icon/star.svg" alt="star">
                                    </div>
                                    <div>
                                        <img src="assets/icon/star.svg" alt="star">
                                    </div>
                                    <div>
                                        <img src="assets/icon/star.svg" alt="star">
                                    </div>
                                </div>
                                <p class="text-right text-xl text-[#6D7786]">{{$course->students->count()}} students</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                    <img src="{{Storage::url($course->teacher->user->avatar)}}"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <div class="flex flex-col">
                                    <p class="font-semibold text-white">{{$course->teacher->user->name}}</p>
                                    <p class="text-[#6D7786]">{{$course->teacher->user->occupation}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p>belum ada data kelas terbaru</p>
                @endforelse



            </div>
        </div>
    </section>
    <div class="h-[150px]"></div>

    <section id="FAQ" class=" mx-auto flex flex-col py-[70px] px-[100px]">
        <div class="flex justify-between items-start">
            <div
                style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 49.97px; display: inline-flex">
                <div
                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div data-animation="slideInRight" data-animation-delay="0.2s" class="feature"
                        style="align-self: stretch; color: white; font-size: 48.97px; font-family: Poppins; font-weight: 700; line-height: 86.62px; word-wrap: break-word">
                        Get Your Answers</div>
                    <div data-animation="slideInRight" data-animation-delay="0.4s" class="feature"
                        style="align-self: stretch; color: white; font-size: 23.98px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                        it's time to join to become greater</div>
                </div>
            </div>
            <div class="flex flex-col gap-[30px] w-[552px] shrink-0">
                <div data-animation="slideInLeft" data-animation-delay="0.6s" 
                    class="feature flex flex-col p-5 rounded-2xl bg-[#171044] has-[.hide]:bg-transparent border-t-4 border-[#ffffff] has-[.hide]:border-0 w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center"
                        data-accordion="accordion-faq-1">
                        <span class="font-semibold text-lg text-left text-white">Can beginner join the course?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="assets/icon/add.svg" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-1" class="accordion-content hide">
                        <p class="leading-[30px] text-[#E9E9E9] pt-[10px]">Yes, we have provided a variety range of
                            course from beginner to intermediate level to prepare your next big career,</p>
                    </div>
                </div>
                <div data-animation="slideInLeft" data-animation-delay="0.8s" 
                    class="feature flex flex-col p-5 rounded-2xl bg-[#171044] has-[.hide]:bg-transparent border-t-4 border-[#ffffff] has-[.hide]:border-0 w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center"
                        data-accordion="accordion-faq-2">
                        <span class="font-semibold text-lg text-left text-white">How does the DI-Developer learning
                            system </span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="assets/icon/add.svg" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-2" class="accordion-content hide">
                        <p class="leading-[30px] text-[#E9E9E9] pt-[10px]">Yes, we have provided a variety range of
                            course from beginner to intermediate level to prepare your next big career,</p>
                    </div>
                </div>
                <div data-animation="slideInLeft" data-animation-delay="1s" 
                    class="feature flex flex-col p-5 rounded-2xl bg-[#171044] has-[.hide]:bg-transparent border-t-4 border-[#ffffff] has-[.hide]:border-0 w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center"
                        data-accordion="accordion-faq-3">
                        <span class="font-semibold text-lg text-left text-white">Is the material in class here easy to
                            understand?</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="assets/icon/add.svg" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-3" class="accordion-content hide">
                        <p class="leading-[30px] text-[#E9E9E9] pt-[10px]">Yes, we have provided a variety range of
                            course from beginner to intermediate level to prepare your next big career,</p>
                    </div>
                </div>
                <div data-animation="slideInLeft" data-animation-delay="1.2s" 
                    class="feature flex flex-col p-5 rounded-2xl bg-[#171044] has-[.hide]:bg-transparent border-t-4 border-[#ffffff] has-[.hide]:border-0 w-full">
                    <button class="accordion-button flex justify-between gap-1 items-center"
                        data-accordion="accordion-faq-4">
                        <span class="font-semibold text-lg text-left text-white">How long does it take to complete the
                            class</span>
                        <div class="arrow w-9 h-9 flex shrink-0">
                            <img src="assets/icon/add.svg" alt="icon">
                        </div>
                    </button>
                    <div id="accordion-faq-4" class="accordion-content hide">
                        <p class="leading-[30px] text-[#E9E9E9] pt-[10px]">Yes, we have provided a variety range of
                            course from beginner to intermediate level to prepare your next big career,</p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <div class="h-[150px]"></div>

    <section id="Zero-to-Success" data-animation="slideInDown" data-animation-delay="0.2s" 
        style="background: rgba(217, 217, 217, 0.01); box-shadow: 0px 0px 100px 10px rgba(54, 37, 179, 0.20) inset; "
        class="feature mx-auto flex flex-col py-[70px] px-[50px] gap-[30px]] rounded-[32px]">
        <div class="flex flex-col gap-[30px] items-center text-center">
            <div
                style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 30.72px; display: inline-flex">
                <div data-animation="slideInDown" data-animation-delay="0.6s" class="feature"
                    style="padding-left: 22.01px; padding-right: 22.01px; padding-top: 6.01px; padding-bottom: 11.01px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 16.288915634155273px rgba(54, 37, 179, 0.50) inset; border-radius: 46.56px; border: 0.99px #3625B3 solid; justify-content: center; align-items: center; gap: 9.91px; display: inline-flex">
                    <div  
                        style="color: white; font-size: 20.51px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                        Testimonial</div>
                </div>
                <div
                    style="align-self: stretch; height: 115.52px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 11.52px; display: flex">
                    <div  data-animation="slideInDown" data-animation-delay="0.8s" class="feature"
                        style="align-self: stretch; text-align: center; color: white; font-size: 46.09px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                        Trusted By 1000k+ Students</div>
                    <div  data-animation="slideInDown" data-animation-delay="1s" class="features" 
                        style="align-self: stretch; text-align: center; color: #9DA1D2; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                        Sharing Their Successes and Transformative Experiences with DT-Developers, learning Solutions
                    </div>
                </div>
            </div>
        </div>
        <div class="h-[50px]"></div>
        <div class="testi w-full overflow-hidden flex flex-col gap-6 relative">
            <div class="fade-overlay absolute z-10 h-full w-[50px] bg-gradient-to-r from-[#0E0930] to-[#0E093000]">
            </div>
            <div
                class="fade-overlay absolute right-0 z-10 h-full w-[50px] bg-gradient-to-r from-[#0E093000] to-[#0E0930]">
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center feature" data-animation="slideInDown" data-animation-delay="1.2s" >
                <div
                    class="testi-container animate-[slideToL_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap">
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">DT-Developers has helped me to grow to perfect digital career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://www.man-shop.eu/media/db/93/05/1726129673/MAN%20Lifestyle%20Merchandising%20Shop%20Bekleidung%20Herren.png"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Dio Pradana</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">DT-Developers has helped me to grow to perfect digital career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">DT-Developers has helped me to grow to perfect digital career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://www.man-shop.eu/media/db/93/05/1726129673/MAN%20Lifestyle%20Merchandising%20Shop%20Bekleidung%20Herren.png"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Dio Pradana</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">DT-Developers has helped me to grow to perfect digital career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/035/997/315/small_2x/ai-generated-cheerful-business-woman-standing-isolated-free-photo.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Vina aminaa</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">DT-Developers has helped me to grow to perfect digital career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="logo-container animate-[slideToL_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap ">
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center feature" data-animation="slideInDown" data-animation-delay="1.4s">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap">
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Yudhi ardian</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://www.man-shop.eu/media/db/93/05/1726129673/MAN%20Lifestyle%20Merchandising%20Shop%20Bekleidung%20Herren.png"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Dio Pradana</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/035/997/315/small_2x/ai-generated-cheerful-business-woman-standing-isolated-free-photo.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Vina aminaa</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/035/997/315/small_2x/ai-generated-cheerful-business-woman-standing-isolated-free-photo.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Vina aminaa</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-6 pl-6 items-center flex-nowrap ">
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://dy7glz37jgl0b.cloudfront.net/advice/images/54781057df5a48802fb00169e02f36ca-woman-takes-notes-in-a-journal-while-sitting-at-a-desk-in-front-of-her-laptop_l.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Nia Narina</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/035/997/315/small_2x/ai-generated-cheerful-business-woman-standing-isolated-free-photo.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Vina aminaa</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/035/997/315/small_2x/ai-generated-cheerful-business-woman-standing-isolated-free-photo.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Vina aminaa</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="test-card w-[300px] flex flex-col h-full bg-[#0E0930] rounded-xl gap-3 p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 flex shrink-0 rounded-full overflow-hidden">
                                <img src="https://dy7glz37jgl0b.cloudfront.net/advice/images/54781057df5a48802fb00169e02f36ca-woman-takes-notes-in-a-journal-while-sitting-at-a-desk-in-front-of-her-laptop_l.jpg"
                                    class="w-full h-full object-cover" alt="photo">
                            </div>
                            <p class="font-semibold text-white">Nia Narina</p>
                        </div>
                        <p class="text-sm text-[#E9E9E9]">Alqowy has helped me to grow from zero to perfect career,
                            thank you!</p>
                        <div class="flex gap-[2px]">
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                            <div>
                                <img src="assets/icon/star.svg" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="h-[150px]"></div>

    <section>
        <div
            style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; gap: 95px; display: inline-flex">
            <div
                style="align-self: stretch; height: 193.26px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 30.72px; display: flex">
                <div data-animation="slideInDown" data-animation-delay="0.2s" class="feature"
                    style="padding-left: 22.01px; padding-right: 22.01px; padding-top: 11.01px; padding-bottom: 11.01px; background: rgba(255, 255, 255, 0.02); box-shadow: 0px 0px 16.288915634155273px rgba(54, 37, 179, 0.50) inset; border-radius: 46.56px; border: 0.99px #3625B3 solid; justify-content: center; align-items: center; gap: 9.91px; display: inline-flex">
                    <div
                        style="color: white; font-size: 20.51px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                        Join Subscription</div>
                </div>
                <div 
                    style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 11.52px; display: flex">
                    <div data-animation="slideInDown" data-animation-delay="0.4s" class="feature"
                        style="text-align: center; color: white; font-size: 46.09px; font-family: Inter; font-weight: 700; word-wrap: break-word">
                        Come join us, and become a great digital talent</div>
                    <div data-animation="slideInDown" data-animation-delay="0.6s" class="feature"
                        style="width: 827px; text-align: center; color: #9DA1D2; font-size: 20px; font-family: Inter; font-weight: 400; word-wrap: break-word">
                        Get an interesting and good learning experience, by subscribing, you can access all learning
                        classes</div>
                </div>
            </div>
            <a href="#" class="rounded-2xl transition-all duration-300 hover:shadow-[0_10px_20px_0_#2B1E8E]">
                <div data-animation="slideInDown" data-animation-delay="0.8s" class="feature"
                    style="padding-left: 28px; padding-right: 28px; padding-top: 17px; padding-bottom: 17px; background: #3525B3; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 13px; display: inline-flex">
                    <div
                        style="text-align: center; color: white; font-size: 20px; font-family: Inter; font-weight: 500; word-wrap: break-word">
                        View Pricing</div>

                </div>
            </a>
        </div>
    </section>

    <div class="h-[200px]"></div>

    <p class="pb-5 w-full flex justify-center text-[#A0A0A0] bg-[#07002F] align-center items-center text-xs md:text-lg text-align font-medium pt-6"
        style="border-radius: 30px 30px 0px 0px;">
        Copyright © 2024 DT Developers. All Rights Reserved.</p>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
       

        const AnimateOnScroll = function ({
            offset
        } = {
            offset: 10
        }) {
            // Define a dobra superior, inferior e laterais da tela
            const windowTop = (offset * window.innerHeight) / 100;
            const windowBottom = window.innerHeight - windowTop;
            const windowLeft = 0;
            const windowRight = window.innerWidth;

            this.start = (element) => {
                window.requestAnimationFrame(() => {
                    // Seta os atributos customizados
                    element.style.animationDelay = element.dataset.animationDelay;
                    element.style.animationDuration = element.dataset.animationDuration;

                    // Inicia a animacao setando a classe para animar
                    element.classList.add(element.dataset.animation);

                    // Seta o elemento como animado
                    element.dataset.animated = "true";
                });
            };

            this.inViewport = (element) => {
                // Obtem o boundingbox do elemento
                const elementRect = element.getBoundingClientRect();
                const elementTop =
                    elementRect.top + parseInt(element.dataset.animationOffset) ||
                    elementRect.top;
                const elementBottom =
                    elementRect.bottom - parseInt(element.dataset.animationOffset) ||
                    elementRect.bottom;
                const elementLeft = elementRect.left;
                const elementRight = elementRect.right;

                // Verifica se o elemento esta na tela
                return (
                    elementTop <= windowBottom &&
                    elementBottom >= windowTop &&
                    elementLeft <= windowRight &&
                    elementRight >= windowLeft
                );
            };

            // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
            this.verifyElementsInViewport = (els = elements) => {
                for (let i = 0, len = els.length; i < len; i++) {
                    // Passa para o proximo laço se o elemento ja estiver animado
                    if (els[i].dataset.animated) continue;

                    this.inViewport(els[i]) && this.start(els[i]);
                }
            };

            // Obtem todos os elementos a serem animados
            this.getElements = () =>
                document.querySelectorAll("[data-animation]:not([data-animated])");

            // Atualiza a lista de elementos a serem animados
            this.update = () => {
                elements = this.getElements();
                elements && this.verifyElementsInViewport(elements);
            };

            // Inicia os eventos
            window.addEventListener("load", this.update, false);
            window.addEventListener(
                "scroll",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
            window.addEventListener(
                "resize",
                () => this.verifyElementsInViewport(elements), {
                    passive: true
                }
            );
        };

        // Initialize
        const options = {
            offset: 15 // percentage of the window
        };

        const animation = new AnimateOnScroll(options);

        // fade in on scrool bawah ================================= end

    </script>


</body>

</html>
