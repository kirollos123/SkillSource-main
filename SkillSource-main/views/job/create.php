<?php 
RedirectIfGuest();
redirectIfJobSeeker();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="blue">

<head>
    <meta charset="utf-8" />
    <title>index-1 | Jobcy - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />


    <link rel="stylesheet" href="/assets/libs/choices.js/public//assets/styles/choices.min.css">

    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <style>
        .dollar::after {
            padding: 11px 10px;
            bottom: 0;
            right: 0;
            border-radius: 0 5px 5px 0;
            border-left: 1px solid #e5e7eb;
            font-size: 1rem;
            content: "$";
            position: absolute;
            z-index: 9000;

        }
    </style>


</head>

<body class="bg-white dark:bg-neutral-800">




    <!-- <div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
            <div class="grid items-center grid-cols-12">
                <div class="col-span-7">
                    <ul class="flex items-center py-3">
                        <li class="ltr:mr-4 rtl:ml-4">
                            <p class="mb-0 text-gray-800 text-13 dark:text-gray-50"> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                        </li>
                        <li>
                            <ul class="flex flex-wrap gap-4 text-gray-800 ">
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-span-5 ltr:ml-auto rtl:mr-auto">
                    <ul class="flex items-center gap-4">
                        <li>
                            <a href="#signupModal" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>
               
                            <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                                    <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                                    <div class="box-content p-4 mx-auto animate-translate sm:max-w-lg">
                                        <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-36 dark:bg-neutral-800">
                                            <div class="p-12 bg-white dark:bg-neutral-800">
                                                <div class="mb-4 text-center">
                                                    <h5 class="mb-1 text-gray-800 dark:text-gray-50">Sign Up</h5>
                                                    <p class="text-gray-500 dark:text-gray-300">Sign Up and get access to all the features of Jobcy</p>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="usernameInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Username</label>
                                                    <input type="text" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your username">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="emailInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Email</label>
                                                    <input type="email" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your email">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="passwordInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Password</label>
                                                    <input type="password" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your password">
                                                </div>
                                                <div class="mb-3 ltr:float-left rtl:float-right">
                                                    <a href="#!">
                                                        <input class="mr-1 align-middle rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:ring-0 checked:ring-offset-0 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-violet-500/20" type="checkbox" id="flexCheckDefault">
                                                        <label class="dark:text-gray-50" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Terms and conditions</a></label>
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Sign Up</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <p class="mb-0 text-gray-800 dark:text-gray-300">Already a member ? <a href="sign-in.html" class="font-medium underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"> Sign-in </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative hidden dropdown language sm:block">
                                <button class="px-4 py-3 border-0 btn dropdown-toggle" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                                    <img src="/assets/images/flags/us.jpg" alt="" class="h-4" id="header-lang-img">
                                </button>
                                <div class="absolute top-auto z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-20 dark:bg-neutral-700" id="navNotifications">
                                    <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/us.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">English</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/spain.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Spanish</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/germany.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">German</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="/assets/images/flags/italy.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Italian</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->



    <?php include_once(__DIR__ . "/../components/nav.php") ?>


    <div class="main-content">
        <div class="page-content">

            <!-- <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                    <div class="container mx-auto">
                        <div class="grid place-items-center">
                            <div class="col-span-12">
                                <div class="text-center text-white">
                                    <h3 class="mb-4 text-[26px]">My Profile</h3>
                                    <div class="page-next">
                                        <nav class="inline-block" aria-label="breadcrumb text-center">
                                            <ol class="flex justify-center text-sm font-medium uppercase">
                                                <li><a href="/">Home</a></li>
                                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="/profile">My Profile</a></li>
                                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>My Profile</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section> -->

            <!-- Start grid -->
            <section class="py-28">
                <div class="relative container mx-auto" style="width: 80wh;">
                    <div class="grid grid-cols-10 gap-y-10 lg:gap-12">

                        <div class="col-span-12">
                            <div class="col-span-12">
                                <div class="nav-tabs bottom-border-tab" style="height: 80vh;">


                                    <div class="p-6 tab-content">

                                        <div class="w-full tab-pane" id="settings-tab">
                                            <div class="pt-8 space-x-8">
                                                <form action="/job/create" id="CreateJob" method="POST">
                                                    <div class="mt-5">
                                                        <div class="grid grid-cols-12 gap-5">
                                                            <div id="JobTitle" class="grid grid-cols-12 col-span-12">
                                                                <div class="col-span-12 lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            1/5
                                                                        </span> <span class="ml-6x">Job post</span></div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Let's start with a strong title.</h2>
                                                                            <p class="text-body-sm mb-8x">This helps your job post stand out to the right candidates. It’s the first thing they’ll see, so make it count!</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-12 lg:col-span-5">
                                                                    <label for="firstName" class="text-sm text-gray-900 dark:text-gray-50">Job Title</label>
                                                                    <input name="jobTitle" type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="firstName">
                                                                    <div class="title-examples pt-10"><label class="label">
                                                                            Example titles
                                                                        </label>
                                                                        <ul class="px-4" style="list-style: disc;">
                                                                            <li>
                                                                                <p class="m-md-0 text-body">Build responsive WordPress site with booking/payment functionality</p>
                                                                            </li>
                                                                            <li>
                                                                                <p class="m-md-0 text-body">AR experience needed for virtual product demos (ARCore)</p>
                                                                            </li>
                                                                            <li class="">
                                                                                <p class="m-md-0 text-body">Developer needed to update Android app UI for new OS/device specs</p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <!-- <div class="lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            2/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Next, estimate the scope of your work.</h2>
                                                                            <p class="text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="lg:col-span-5">
                                                                    <div class="flex-1 d-flex flex-column pt-md-8x">
                                                                        <div class="stack">
                                                                            <div class="py-6x py-md-3x">
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <span></span>
                                                                                        <strong class="ml-2">Large</strong>
                                                                                        <small class="block mt-1 description my-0 text-light-on-muted ml-0 text-body">
                                                                                            Longer term or complex initiatives
                                                                                            <span class="d-block d-md-inline">
                                                                                                (ex. translate and localize website from English to Spanish in 10+ dialects)
                                                                                            </span>
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <span></span>
                                                                                        <strong class="ml-2">Medium</strong>
                                                                                        <small class="block mt-1 description my-0 text-light-on-muted ml-0 text-body">
                                                                                            Well-defined projects
                                                                                            <span class="d-block d-md-inline">
                                                                                                (ex. translate technical documentation from Chinese to English)
                                                                                            </span>
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <span></span>
                                                                                        <strong class="ml-2">Small</strong>
                                                                                        <small class="block mt-1 description my-0 text-light-on-muted ml-0 text-body">
                                                                                            Quick and straightforward tasks
                                                                                            <span class="d-block d-md-inline">
                                                                                                (ex. translate an article from English into French)
                                                                                            </span>
                                                                                        </small>
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            <!--end col-->
                                                            <!-- <div class="lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            2/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Next, estimate the scope of your work.</h2>
                                                                            <p class="text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="lg:col-span-5">
                                                                    <div class="flex-1 d-flex flex-column pt-md-8x">
                                                                        <div class="stack">
                                                                        <p class="text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>

                                                                            <div class="py-6x py-md-3x">
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <strong class="ml-2">3 to 6 months</strong>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <strong class="ml-2">1 to 3 months</strong>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio">
                                                                                        <span></span>
                                                                                        <strong class="ml-2">Less than 1 month</strong>
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            <!--end col-->
                                                            <div id="JobExperience" class="hidden grid grid-cols-12 col-span-12">
                                                                <div class="col-span-12 lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            2/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Next, estimate the scope of your work.</h2>
                                                                            <p class="text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-12 lg:col-span-5">
                                                                    <div class="flex-1 d-flex flex-column pt-md-8x">
                                                                        <div class="stack">
                                                                            <p class="text-body-sm mb-8x">What level of experience will it need?</p>
                                                                            <p class="text-gray-400 text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>

                                                                            <div class="py-6x py-md-3x">
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="Experience" value="0-2 years">
                                                                                        <strong class="ml-2">Entry <span class="text-gray-400 ml-2">(0-2 years)</span></strong>
                                                                                        <small class="block mt-1 ml-4 description text-light-on-muted  text-body">
                                                                                            Looking for someone relatively new to this field
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="Experience" value="(3-5 years)">
                                                                                        <strong class="ml-2">Intermediate <span class="text-gray-400 ml-2">(3-5 years)</span></strong>
                                                                                        <small class="block mt-1 ml-4 description text-light-on-muted text-body">
                                                                                            Looking for substantial experience in this field
                                                                                        </small>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="Experience" value="6+ years">
                                                                                        <strong class="ml-2">Expert <span class="text-gray-400 ml-2">(6+ years)</span></strong>
                                                                                        <small class="block mt-1 ml-4 description text-light-on-muted text-body">
                                                                                            Looking for comprehensive and deep expertise in this field
                                                                                        </small>
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div id="JobType" class="hidden grid grid-cols-12 col-span-12">
                                                                <div class="col-span-12 lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            2/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Next, estimate the scope of your work.</h2>
                                                                            <p class="text-body-sm mb-8x">Consider the size of your project and the time it will take.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-12 lg:col-span-5">
                                                                    <div class="flex-1 d-flex flex-column pt-md-8x">
                                                                        <div class="stack">
                                                                            <p class="text-body-sm mb-8x">Is this job a contract-to-hire opportunity?</p>
                                                                            <p class="text-gray-400 text-body-sm mb-8x">This helps set expectations with talent and won't restrict who can submit proposals.</p>

                                                                            <div class="py-6x py-md-3x">
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="jobType" value="Full-Time">
                                                                                        <strong class="ml-2">Full-Time</strong>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="jobType" value="Part-Time">
                                                                                        <strong class="ml-2">
                                                                                            Part-Time</strong>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="jobType" value="Contractor / Freelancer">
                                                                                        <strong class="ml-2">
                                                                                            Contractor / Freelancer</strong>
                                                                                    </label>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <label>
                                                                                        <input type="radio" name="jobType" value="Intern">
                                                                                        <strong class="ml-2">
                                                                                            Intern</strong>
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div id="JobSalary" class="hidden grid grid-cols-12 col-span-12">
                                                                <div class="col-span-12 lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            4/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div class="sticky-step-info">
                                                                        <div>
                                                                            <h2 class="h4 display-rebrand mb-6x line-height-2rem">Tell us about your budget.</h2>
                                                                            <p class="text-body-sm mb-8x">This will help us match you to talent within your range.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-12 lg:col-span-5">
                                                                    <div class="grid grid-cols-2 h-24 gap-6">
                                                                        <label class="relative border border-2 border-gray-300 rounded-lg" for="rangeSalary">
                                                                            <div class="bg-white">
                                                                                <input type="radio" name="SalaryType" id="rangeSalary" class="absolute top-4" style="right: 6%" value="Range">
                                                                                <p class="absolute bottom-3 left-6 font-bold">In Range Salary</p>
                                                                                <i class="fa-regular fa-clock fa-xl absolute top-7 left-6"></i>
                                                                            </div>
                                                                        </label>
                                                                        <label class="relative border border-2 border-gray-300 rounded-lg" for="fixedSalary">
                                                                            <div class="bg-white">
                                                                                <input type="radio" name="SalaryType" id="fixedSalary" class="absolute top-4" style="right: 6%;" value="Fixed" checked>
                                                                                <p class="absolute bottom-3 left-6 font-bold">Fixed Salary</p>
                                                                                <img class="absolute top-3 left-6" src="/assets/images/price-tag-usd-50.png" alt="price tag" width="32" height="32">
                                                                            </div>
                                                                        </label>
                                                                    </div>

                                                                    <div class="block h-24 mt-8">
                                                                        <p class="mb-10">Set a price for the project and pay at the end, or you can divide the project into milestones and pay as each milestone is completed.</p>
                                                                        <p class="font-bold mb-2">What is the best cost estimate for your project?</p>
                                                                        <p class="mb-4">You can negotiate this cost and create milestones when you chat with your freelancer.</p>
                                                                        <input name="salary" id="fixedInput" type="text" class="w-32 text-right rounded-lg">
                                                                        <div id="rangeInput" class="hidden grid grid-cols-2 h-24 mt-8">
                                                                            <div class="bg-white relative">
                                                                                <input class="absolute text-right bottom-3 border left-1 border-gray-500 rounded px-2 py-1 w-32" name="salaryFrom" />
                                                                                <span class="absolute bottom-3 font-medium" style="left: 58%; font-size: 1rem;">/ month</span>
                                                                                <p class="absolute top-4 left-1 font-bold">From</p>
                                                                            </div>
                                                                            <div class="bg-white relative">
                                                                                <input class="absolute text-right bottom-3 border border-gray-500 rounded px-2 py-1 w-32 left-2" name="salaryTo"/>
                                                                                <span class="absolute bottom-3 font-medium" style="left: 60%; font-size: 1rem;">/ month</span>
                                                                                <p class="absolute top-4 left-2 font-bold">To</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div id="JobDescription" class="hidden grid grid-cols-12 col-span-12">
                                                                <div id class="col-span-12 lg:col-span-6" style="width: 70%;">
                                                                    <div class="mb-6x sticky-step-number text-body-sm"><span class="text-light-on-muted"><span class="sr-only">Step</span>
                                                                            5/5
                                                                        </span> <span class="ml-6x">Job post</span>
                                                                    </div>
                                                                    <div>
                                                                        <h2 class="h4 display-rebrand mb-6x line-height-2rem">Start the conversation.</h2>
                                                                        <div class="title-examples pt-5">
                                                                            Talent are looking for:
                                                                            <ul class="px-4 text-left" style="list-style: disc;">
                                                                                <li>
                                                                                    <p>Clear expectations about your task or deliverables
                                                                                    </p>
                                                                                </li>
                                                                                <li>
                                                                                    <p>The skills required for your work</p>
                                                                                </li>
                                                                                <li class="">
                                                                                    <p>Good communication</p>
                                                                                </li>
                                                                                <li class="">
                                                                                    <p>Details about how you or your team like to work</p>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-12 lg:col-span-5">
                                                                    <p class="font-bold">Describe what you need</p>
                                                                    <textarea name="description" id="" class="mt-3 rounded-lg border border-gray-200 w-full" rows="10" placeholder="Already have a description? Paste it here!"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!--end col-->
                                                        <!-- <div class="col-span-12 lg:col-span-12">
                                                                    <div class="relative mb-3">
                                                                        <label for="lastName" class="dollar text-sm text-gray-900 dark:text-gray-50">Salary</label>

                                                                        <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="lastName" value="Dickens">
                                                                    </div>
                                                                </div> -->
                                                        <!--end col-->
                                                        <!-- <div class="col-span-12 lg:col-span-6">
                                                                    <div class="mb-3">
                                                                        <label for="choices-single-categories" class="text-sm text-gray-900 dark:text-gray-50">Employee Type</label>
                                                                        <div class="mt-1">
                                                                            <select class="form-select" data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                                                <option value="1">Full-time</option>
                                                                                <option value="2">Part-time</option>
                                                                                <option value="3">Contract</option>
                                                                                <option value="4">Freelance</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                        <!--end col-->
                                                        <!-- <div class="col-span-12 lg:col-span-6">
                                                                    <div class="mb-3">
                                                                        <label for="email" class="text-sm text-gray-900 dark:text-gray-50">Email</label>
                                                                        <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="email" value="Jansh@gmail.com">
                                                                    </div>
                                                                </div> -->
                                                        <!--end col-->
                                                    </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end account-->
                                        <!-- <div class="mt-4"> -->
                                        <!-- <h5 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Job Details</h5> -->
                                        <!-- <div class="grid grid-cols-12 gap-5"> -->
                                        <!-- <div class="col-span-12">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-label dark:text-gray-300">Job Description</label>
                                                                    <textarea class="w-full mt-1 text-sm rounded border-gray-100/50 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300" id="exampleFormControlTextarea1" rows="5">Developer with over 5 years' experience working in both the public and private sectors. Diplomatic, personable, and adept at managing sensitive situations. Highly organized, self-motivated, and proficient with computers. Looking to boost students’ satisfactions scores for International University. Bachelor's degree in communications.</textarea>
                                                                </div>
                                                            </div> -->
                                        <!--end col-->
                                        <!-- <div class="col-span-12 lg:col-span-6">
                                                                <div class="mb-3">
                                                                    <label for="languages" class="text-sm text-gray-900 dark:text-gray-50">Languages</label>
                                                                    <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="languages" value="English, German, French">
                                                                </div>
                                                            </div> -->
                                        <!--end col-->
                                        <!-- <div class="col-span-12 lg:col-span-6">
                                                                <div class="mb-3">
                                                                    <label for="choices-single-location" class="text-sm text-gray-900 dark:text-gray-50">Location</label>
                                                                    <div class="mt-1">
                                                                        <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select exam
                                                                                    ple">
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AX">&Aring;land Islands</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antarctica</option>
                                                                            <option value="AG">Antigua and Barbuda</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia, Plurinational State of</option>
                                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="IO">British Indian Ocean Territory</option>
                                                                            <option value="BN">Brunei Darussalam</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">C&ocirc;te d'Ivoire</option>
                                                                            <option value="HR">Croatia</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="TF">French Southern Territories</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GG">Guernsey</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                                            <option value="VA">Holy See (Vatican City State)</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IR">Iran, Islamic Republic of</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IM">Isle of Man</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JE">Jersey</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                                                            <option value="KR">Korea, Republic of</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LA">Lao People's Democratic Republic</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macao</option>
                                                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="FM">Micronesia, Federated States of</option>
                                                                            <option value="MD">Moldova, Republic of</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="ME">Montenegro</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="AN">Netherlands Antilles</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PK">Pakistan</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PS">Palestinian Territory, Occupied</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">R&eacute;union</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="BL">Saint Barth&eacute;lemy</option>
                                                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                            <option value="LC">Saint Lucia</option>
                                                                            <option value="MF">Saint Martin (French part)</option>
                                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="RS">Serbia</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SK">Slovakia</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TL">Timor-Leste</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UM">United States Minor Outlying Islands</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands, British</option>
                                                                            <option value="VI">Virgin Islands, U.S.</option>
                                                                            <option value="WF">Wallis and Futuna</option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                        <!--end col-->

                                        <!-- </div> -->
                                        <!--end row-->
                                        <!-- </div> -->
                                        <!--end profile-->

                                        <!--end Change-password-->
                                        </form>
                                        <div class="absolute bottom-0" style="right: 20%;">
                                            <div class="mt-8 text-right absolute bottom-0">
                                                <button id="nextBtn" class="text-white btn group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- End grid -->



    </div>
    </div>


    <!-- start subscribe -->
    <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
        <div class="container mx-auto">
            <div class="grid items-center grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-7">
                    <div class="text-center lg:text-start">
                        <h4 class="text-white">Get New Jobs Notification!</h4>
                        <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs notification.</p>
                    </div>
                </div>
                <div class="z-40 col-span-12 lg:col-span-5">
                    <form class="flex" action="#">
                        <input type="text" class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0" id="subscribe" placeholder="Enter your email">
                        <button class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30" type="button" id="subscribebtn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute right-0 -top-10 -z-0 opacity-20">
            <img src="/assets/images/subscribe.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- end subscribe -->
    <!-- Footer Start -->
    <footer class="hidden footer">
        <!-- start footer -->
        <section class="py-12 bg-zinc-800 dark:bg-neutral-900">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 lg:gap-10">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="mr-12">
                            <h4 class="text-white mb-6 text-[23px]">Jobcy</h4>
                            <p class="text-white/50 dark:text-gray-300">
                                It is a long established fact that a reader will be of a page reader
                                will be of at its layout.
                            </p>
                            <p class="mt-3 text-white dark:text-gray-50">Follow Us on:</p>
                            <div class="mt-5">
                                <ul class="flex gap-3">
                                    <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                        <a href="#">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                        <a href="#">
                                            <i class="uil uil-linkedin-alt"></i>
                                        </a>
                                    </li>
                                    <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                        <a href="#">
                                            <i class="uil uil-google"></i>
                                        </a>
                                    </li>
                                    <li class="w-8 h-8 leading-loose text-center text-gray-200 transition-all duration-300 border rounded-full cursor-pointer border-gray-200/50 hover:text-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:border-transparent">
                                        <a href="#">
                                            <i class="uil uil-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                        <p class="mb-6 text-white text-16">Company</p>
                        <ul class="space-y-4">
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="about.html">
                                    <i class="mdi mdi-chevron-right"></i> About Us
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="contact.html">
                                    <i class="mdi mdi-chevron-right"></i> Contact Us
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="services.html">
                                    <i class="mdi mdi-chevron-right"></i> Services
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="blog.html">
                                    <i class="mdi mdi-chevron-right"></i> Blog
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="team.html">
                                    <i class="mdi mdi-chevron-right"></i> Team
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="pricing.html">
                                    <i class="mdi mdi-chevron-right"></i> Pricing
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                        <p class="mb-6 text-white text-16">For Jobs</p>
                        <ul class="space-y-4">
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="job-categories.html">
                                    <i class="mdi mdi-chevron-right"></i> Browser Categories
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="job-list.html">
                                    <i class="mdi mdi-chevron-right"></i> Browser Jobs
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="job-details.html">
                                    <i class="mdi mdi-chevron-right"></i> Job Details
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="bookmark-jobs.html">
                                    <i class="mdi mdi-chevron-right"></i> Bookmark Jobs
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                        <p class="mb-6 text-white text-16">For Candidates</p>
                        <ul class="space-y-4">
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="candidate-list.html">
                                    <i class="mdi mdi-chevron-right"></i> Candidate List
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="candidate-grid.html">
                                    <i class="mdi mdi-chevron-right"></i> Candidate Grid
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="candidate-details.html">
                                    <i class="mdi mdi-chevron-right"></i> Candidate Details
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 mt-8 md:col-span-6 xl:col-span-2 md:mt-0">
                        <p class="mb-6 text-white text-16">Support</p>
                        <ul class="space-y-4">
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="contact.html">
                                    <i class="mdi mdi-chevron-right"></i> Help Center
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="faqs.html">
                                    <i class="mdi mdi-chevron-right"></i> FAQ'S
                                </a>
                            </li>
                            <li class="text-sm transition-all duration-500 ease-in-out text-white/50 hover:text-gray-50 hover:text-base dark:text-gray-300 dark:hover:text-gray-50">
                                <a href="privacy-policy.html">
                                    <i class="mdi mdi-chevron-right"></i> Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer -->
        <!-- strat footer alt -->
        <section class="py-6 border-t bg-zinc-800 border-gray-100/10 dark:bg-neutral-900">
            <div class="container mx-auto">
                <div class="text-center">
                    <p class="mb-0 text-center text-white/50">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        © Jobcy - Job Listing Page
                        Template by
                        <a href="https://themeforest.net/search/themesdesign" target="_blank" class="underline transition-all duration-300 hover:text-gray-50">Themesdesign</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- end footer alt -->
    </footer>
    <!-- end Footer -->

    <script>
        const nextBtn = document.getElementById('nextBtn');
        const formSteps = FormSteps();
        const steps = FormSteps();
        steps.next();

        function* FormSteps() {
            let step;
            const steps = ['JobTitle', 'JobExperience', 'JobDescription', 'JobType', 'JobSalary'];
            for (step of steps) {
                yield step;
            }
        }
        nextBtn.addEventListener('click', function() {
            var step = formSteps.next();
            if (step.value == 'JobType') {
                nextBtn.innerHTML = 'Submit';
            } else if (step.value == 'JobSalary') {
                document.getElementById('CreateJob').submit();
            }
            var nextStep = steps.next();
            if (!step.done) {
                document.getElementById(step.value)?.classList.add('hidden');
                document.getElementById(nextStep.value)?.classList.remove('hidden');
            }
        });

        const SalaryInputs = document.getElementsByName('SalaryType');
        SalaryInputs.forEach((input) => {
            input.addEventListener('change', function() {
                if (input.value === 'Fixed') {
                    document.getElementById('fixedInput').classList.remove('hidden');
                    document.getElementById('rangeInput').classList.add('hidden');
                } else {
                    document.getElementById('fixedInput').classList.add('hidden');
                    document.getElementById('rangeInput').classList.remove('hidden');
                }
            });
        });
    </script>
    <!-- 
    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>


    <script src="/assets/js/pages/switcher.js"></script>

    <script src="/assets/libs/choices.js/public//assets/scripts/choices.min.js"></script>

    <script src="/assets/js/pages/job-list.init.js"></script>

    <script src="/assets/js/pages/dropdown&modal.init.js"></script>

    <script src="/assets/js/pages/nav&tabs.js"></script>

    <script src="/assets/js/app.js"></script> -->

</body>

</html>