<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="shortcut icon" type="x-icon" href="assets/logo/icon.png">
    <title>Course Details</title>
</head>

<body class="px-[80px] pt-[20px]" style="overflow-x: hidden ; background-image: url('/assets/bg.png');">
    <div class=""></div>
    <nav class="flex justify-between items-center pt-6 ">
        <a href="{{Route('front.index')}}">
            <p class="text-white font-bold text-2xl">DT Developers</p>
        </a>
        <ul class="flex items-center gap-[30px] text-white">
            <li>
                <a href="{{Route('front.index')}}" class=" font-semibold">Home</a>
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

    <div class="h-[80px]"></div>

    <div class=" w-full mx-auto flex flex-col gap-8 text-white">
        <h1 class="title font-extrabold text-[50px] leading-[45px]">{{$course->name}}</h1>
        <div class="flex items-center gap-5">
            <div class="flex items-center gap-[6px] text-2xl">
                <div>
                    <img src="{{asset('assets/icon/crown.svg')}}" alt="icon">
                </div>
                <p class="font-medium">{{$course->category->name}}</p>
            </div>
            <div class="flex items-center gap-[6px] text-2xl">
                <div>
                    <img src="{{asset('assets/icon/award-outline.svg')}}" alt="icon">
                </div>
                <p class="font-medium">Certificate</p>
            </div>
            <div class="flex items-center gap-[6px] text-2xl">
                <div>
                    <img src="{{asset('assets/icon/profile-2user.svg')}}" alt="icon">
                </div>
                <p class="font-medium">{{$course->students->count()}} students</p>
            </div>
        </div>
    </div>
    <div class="flex gap-8 justify-between w-full  mt-[60px]">
        <div id="About" class="tabcontent max-w-[1050px]  ">
            <div class="plyr__video-embed w-full h-[620px] overflow-hidden relative rounded-[20px]" id="player">
                <iframe
                    src="https://www.youtube.com/embed/{{$video->path_video}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                    allowfullscreen allowtransparency allow="autoplay"></iframe>
            </div>
            <div class="flex flex-col gap-5 shrink-0 mt-20">
                <h3 class="font-bold text-white text-5xl">Course Description</h3>
                <p class="font-medium text-lg text-[#A0A0A0] leading-[30px]">
                    {{$course->about}}
                </p>

                <div class="grid grid-cols-2 gap-x-[30px] gap-y-5 mt-10">
                    @forelse ($course->course_keypoints as $keypoint)

                    <div class="benefit-card flex items-center gap-3">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{asset('assets/icon/tick-circle.svg')}}" alt="icon">
                        </div>
                        <p class="font-medium text-[#A0A0A0] leading-[30px]">{{$keypoint->name}}</p>
                    </div>
                    @empty

                    @endforelse


                </div>
            </div>
        </div>

        <section id="video-content" class=" w-full mx-auto">
            <div class="video-player  flex flex-nowrap gap-5">

                <div class="">
                    <div class="mentor-sidebar flex flex-col gap-[30px] w-full">
                        <div style=" background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 249.71429443359375px rgba(53.57, 37, 179, 0.25) inset;"
                            class="mentor-info flex flex-col gap-4 rounded-2xl p-5">
                            <p class="font-bold text-white text-lg text-left w-full">Teacher</p>
                            <div class="flex items-center justify-between w-full">
                                <div class="flex items-center gap-3">
                                    <a href="" class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{Storage::url($course->teacher->user->avatar)}}"
                                            class="w-full h-full object-cover" alt="photo">
                                    </a>
                                    <div class="flex flex-col gap-[2px]">
                                        <a href="" class="font-semibold text-white">{{$course->teacher->user->name}}</a>
                                        <p class="text-sm text-[#6D7786]">{{$course->teacher->user->occupation}}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="h-[30px]"></div>
                    <div style=" background: rgba(255, 255, 255, 0.01); box-shadow: 0px 0px 249.71429443359375px rgba(53.57, 37, 179, 0.25) inset;"
                        class="video-player-sidebar text-[#A0A0A0] flex flex-col shrink-0 w-[330px] h-[570px]  rounded-[20px] p-5 gap-5 pb-0 overflow-y-scroll no-scrollbar">
                        <p class="font-bold text-lg text-white">{{$course->course_videos->count()}} Lessons</p>
                        <div class="flex flex-col gap-3">
                            <a href="{{route('front.details', $course)}}">
                                <div
                                    class="group p-[12px_16px] flex items-center gap-[10px] bg-[#3F3B62] rounded-full hover:bg-[#3525B3] transition-all duration-300">
                                    <div class="text-[#A0A0A0] group-hover:text-white transition-all duration-300">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.97 2C6.44997 2 1.96997 6.48 1.96997 12C1.96997 17.52 6.44997 22 11.97 22C17.49 22 21.97 17.52 21.97 12C21.97 6.48 17.5 2 11.97 2ZM14.97 14.23L12.07 15.9C11.71 16.11 11.31 16.21 10.92 16.21C10.52 16.21 10.13 16.11 9.76997 15.9C9.04997 15.48 8.61997 14.74 8.61997 13.9V10.55C8.61997 9.72 9.04997 8.97 9.76997 8.55C10.49 8.13 11.35 8.13 12.08 8.55L14.98 10.22C15.7 10.64 16.13 11.38 16.13 12.22C16.13 13.06 15.7 13.81 14.97 14.23Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>
                                    <p class="font-semibold group-hover:text-white transition-all duration-300">
                                        Course Trailer</p>
                                </div>
                            </a>

                            @forelse ($course->course_videos as $video)

                            @php
                        $currentVideoId = Route::current()->parameter('courseVideoId');
                        $isActive = $currentVideoId == $video->id;   
                    @endphp


                            <a href="{{route('front.learning', [$course, 'courseVideoId' => $video->id])}}">
                                <div
                                    class="group p-[12px_16px] flex items-center gap-[10px] bg-[#3525B3] {{ $isActive ? 'bg-[#3525B3]' : 'bg-[#3F3B62] hover:bg-[#3525B3]'}}  rounded-full  transition-all duration-300">
                                    <div class=" {{ $isActive ? 'text-white' : 'text-[#A0A0A0]'}} group-hover:text-white transition-all duration-300">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.97 2C6.44997 2 1.96997 6.48 1.96997 12C1.96997 17.52 6.44997 22 11.97 22C17.49 22 21.97 17.52 21.97 12C21.97 6.48 17.5 2 11.97 2ZM14.97 14.23L12.07 15.9C11.71 16.11 11.31 16.21 10.92 16.21C10.52 16.21 10.13 16.11 9.76997 15.9C9.04997 15.48 8.61997 14.74 8.61997 13.9V10.55C8.61997 9.72 9.04997 8.97 9.76997 8.55C10.49 8.13 11.35 8.13 12.08 8.55L14.98 10.22C15.7 10.64 16.13 11.38 16.13 12.22C16.13 13.06 15.7 13.81 14.97 14.23Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>
                                    <p
                                        class="font-semibold group-hover:text-white transition-all duration-300  {{ $isActive ? 'text-white' : 'text-[#A0A0A0]'}}">
                                        {{$video->name}}</p>
                                </div>
                            </a>
                            @empty

                            @endforelse


                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

    <div class="h-[150px]"></div>

    <p class="pb-5 w-full flex justify-center text-[#A0A0A0] bg-[#07002F] align-center items-center text-xs md:text-lg text-align font-medium pt-6"
        style="border-radius: 30px 30px 0px 0px;">
        Copyright © 2024 DT Developers. All Rights Reserved.</p>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
