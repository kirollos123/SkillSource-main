<?php redirectIfJobSeeker() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="blue">
    <head>
        <meta charset="utf-8" />
        <title>index-1 | Jobcy - Admin & Dashboard Template</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Multipurpose Admin & Dashboard Template"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico" />


         <!-- Swiper Css -->
       <link rel="stylesheet" href="/assets/libs/glightbox/css/glightbox.min.css">

        <link rel="stylesheet" href="/assets/css/icons.css" />
        <link rel="stylesheet" href="/assets/css/tailwind.css" />




    </head>
    
    <body class="bg-white dark:bg-neutral-800">
        <?php include_once(__DIR__."/../components/nav.php"); ?>

        <div class="main-content">
            <div class="page-content">

                <section class="pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
                    <div class="container mx-auto">
                        <div class="grid">
                            <div class="col-span-12">
                                <div class="text-center text-white">
                                    <h3 class="mb-4 text-[26px]">Candidate Details</h3>
                                    <div class="page-next">
                                        <nav class="inline-block" aria-label="breadcrumb text-center">
                                            <ol class="flex justify-center text-sm font-medium uppercase">
                                                <li><a href="index.html">Home</a></li>
                                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Pages</a></li>
                                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Candidate Details</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- Start grid -->
                    <section class="py-20">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                                <div class="col-span-12 lg:col-span-4">
                                    <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                        <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                            <div class="text-center">
                                                <img src="/assets/images/user/img-01.jpg" alt="" class="w-20 h-20 mx-auto rounded-full">
                                                <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50"><?= $candidate->name ?></h6>
                                                <p class="mb-4 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                                <ul class="flex justify-center gap-4">
                                                    <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                                                    </li>
                                                    <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a>
                                                    </li>
                                                    <li class="h-10 w-10 text-center leading-[2.2] bg-gray-50 rounded-full text-lg text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white cursor-pointer transition-all duration-300 ease-in dark:bg-neutral-700 dark:text-white dark:hover:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="social-link"><i class="uil uil-phone-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                            <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Profile Overview</h6>
                                            <ul class="space-y-4">
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Categories</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Accounting / Finance</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Offered Salary</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">$450 per hour</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Languages</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">English, Turkish, Japanese</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Experience</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">3 Years</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Qualification</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Associate Degree</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex">
                                                        <label class="text-gray-900 w-[118px] font-medium dark:text-gray-50">Views</label>
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">2574</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mt-8">
                                                <a href="javascript:void(0)" class="btn w-full bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-phone"></i> Contact Me</a>
                                                <a href="javascript:void(0)" class="btn w-full mt-3 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5 hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/30 group-data-[theme-color=sky]:hover:ring-sky-500/30 group-data-[theme-color=red]:hover:ring-red-500/30 group-data-[theme-color=green]:hover:ring-green-500/30 group-data-[theme-color=pink]:hover:ring-pink-500/30 group-data-[theme-color=blue]:hover:ring-blue-500/30"><i class="uil uil-import"></i> Download CV</a>
                                            </div>
                                            <ul class="flex items-center justify-between mt-5">
                                                <li class="text-yellow-500 text-16">
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>  
                                                    <i class="mdi mdi-star-half-full"></i>
                                                </li>
                                                <div class="border border-gray-100/50 rounded h-8 w-8 text-center leading-[2.4] text-gray-500 hover:bg-red-500 hover:text-white transition-all duration-500 ease-out hover:border-transparent dark:border-neutral-600">
                                                    <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                                </div>
                                            </ul>
                                        </div>
                                        <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                            <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Professional Skills</h6>
                                            <div class="flex flex-wrap gap-2">
                                                <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">User Interface Design</span>
                                                <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Web Design</span>
                                                <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Responsive Design</span>
                                                <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">Mobile App Design</span>
                                                <span class="px-2 py-1 font-medium text-green-500 rounded bg-green-400/20 text-13">UI Design</span>
                                            </div>
                                        </div>
                                        <div class="p-5">
                                            <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Contact Details</h6>
                                            <ul>
                                                <li>
                                                    <div class="flex items-center mt-4">
                                                        <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                            <i class="uil uil-envelope-alt"></i>
                                                        </div>
                                                        <div class="ltr:ml-3 rtl:mr-3">
                                                            <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Email</h6>
                                                            <p class="text-gray-500 dark:text-gray-300"><?= $candidate->email ?></p> 
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center mt-4">
                                                        <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                            <i class="uil uil-map-marker"></i>
                                                        </div>
                                                        <div class="ltr:ml-3 rtl:mr-3">
                                                            <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Address</h6>
                                                            <p class="text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p> 
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center mt-4">
                                                        <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                            <i class="uil uil-phone"></i>
                                                        </div>
                                                        <div class="ltr:ml-3 rtl:mr-3">
                                                            <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Phone</h6>
                                                            <p class="text-gray-500 dark:text-gray-300"><?= $candidate->phone ?></p> 
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-8">
                                    <div class="p-6 border rounded border-gray-100/50 dark:border-neutral-600">
                                        <div>
                                            <h6 class="mb-3 text-gray-900 text-17 dark:text-gray-50">About Me</h6>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                        shortcuts. Even if the client is being careless. Some quick example text to build on the card title and bulk the card's content Moltin gives you platform.</p>

                                            <p class="mb-0 text-gray-500 dark:text-gray-300">As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience lies in successfully conceptualizing, designing, and modifying consumer products specific to interior design and home furnishings.</p>
                                        </div>
                                        <div class="pt-5">
                                            <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Education</h6>
                                            <div class="relative flex mt-4">
                                                <div class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500"> B </div>
                                                <div class="after:contant[''] after:border after:absolute after:h-24 ltr:after:left-4 rtl:after:right-4 after:top-10 after:border-dashed group-data-[theme-color=violet]:after:border-violet-500/30 group-data-[theme-color=sky]:after:border-sky-500/30 group-data-[theme-color=red]:after:border-red-500/30 group-data-[theme-color=green]:after:border-green-500/30 group-data-[theme-color=pink]:after:border-pink-500/30 group-data-[theme-color=blue]:after:border-blue-500/30 hidden md:block"></div>
                                                <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                                    <div>
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">BCA - Bachelor of Computer Applications</h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">International University - (2004 - 2010)</p>
                                                        <p class="text-gray-500 dark:text-gray-300">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative flex mt-8">
                                                <div class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500"> M </div>
                                                <div class="after:contant[''] after:border after:absolute after:h-24 ltr:after:left-4 rtl:after:right-4 after:top-10 after:border-dashed group-data-[theme-color=violet]:after:border-violet-500/30 group-data-[theme-color=sky]:after:border-sky-500/30 group-data-[theme-color=red]:after:border-red-500/30 group-data-[theme-color=green]:after:border-green-500/30 group-data-[theme-color=pink]:after:border-pink-500/30 group-data-[theme-color=blue]:after:border-blue-500/30 hidden md:block"></div>
                                                <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                                    <div>
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">MCA - Master of Computer Application</h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">International University - (2010 - 2012)</p>
                                                        <p class="text-gray-500 dark:text-gray-300">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex mt-8">
                                                <div class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500"> M </div>
                                                <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                                    <div>
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">Design Communication Visual</h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">International University - (2012-2015)</p>
                                                        <p class="text-gray-500 dark:text-gray-300">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="pt-10">
                                            <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Experience</h6>
                                            <div class="relative flex mt-4">
                                                <div class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500"> W </div>
                                                <div class="after:contant[''] after:border after:absolute after:h-24 ltr:after:left-4 rtl:after:right-4 after:top-10 after:border-dashed group-data-[theme-color=violet]:after:border-violet-500/30 group-data-[theme-color=sky]:after:border-sky-500/30 group-data-[theme-color=red]:after:border-red-500/30 group-data-[theme-color=green]:after:border-green-500/30 group-data-[theme-color=pink]:after:border-pink-500/30 group-data-[theme-color=blue]:after:border-blue-500/30 hidden md:block"></div>
                                                <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                                    <div>
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">Web Design & Development Team Leader</h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">Creative Agency - (2013 - 2016)</p>
                                                        <p class="text-gray-500 dark:text-gray-300">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex mt-8">
                                                <div class="h-8 w-8 text-center leading-[2.2] group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 shrink-0 rounded-full font-medium text-violet-500"> P </div>
                                                <div class="space-y-6 ltr:ml-4 rtl:mr-4">
                                                    <div>
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">Project Manager</h6>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd - (Pressent)</p>
                                                        <p class="text-gray-500 dark:text-gray-300">There are many variations of passages of available, but the majority alteration in some form. As a highly skilled and successfull product development and design specialist with more than 4 Years of My experience.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="pt-10">
                                            <h6 class="mb-0 text-gray-900 text-17 fw-bold dark:text-gray-50">Projects</h6>
                                            <div class="mt-4 ">
                                                <div class="grid grid-cols-12 gap-5">
                                                    <div class="col-span-4">
                                                        <div class="relative overflow-hidden rounded-md group/project">
                                                            <img src="/assets/images/blog/img-01.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                            <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                            <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                                <a href="/assets/images/blog/img-01.jpg" class="text-white image-popup" data-title="The Coding Awards" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <div class="relative overflow-hidden rounded-md group/project">
                                                            <img src="/assets/images/blog/img-02.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                            <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                            <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                                <a href="/assets/images/blog/img-02.jpg" class="text-white image-popup" data-title="Project Explained" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-span-4">
                                                        <div class="relative overflow-hidden rounded-md group/project">
                                                            <img src="/assets/images/blog/img-03.jpg" alt="" class="transition-all duration-300 ease-in-out group-hover/project:scale-110">
                                                            <div class="transition-all duration-300 ease-in-out group-hover/project:bg-black/40 group-hover/project:absolute group-hover/project:inset-0"></div>
                                                            <div class="absolute top-[50%] left-[50%] -translate-x-5 -translate-y-5 group-hover/project:block hidden transition-all duration-300 ease-in-out text-2xl">
                                                                <a href="/assets/images/blog/img-03.jpg" class="text-white image-popup" data-title="Social Geek Made" data-description="There are many variations of passages of available, but the majority alteration in some form."><i class="uil uil-search-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3 mt-4">
                                            <div class="sm:flex">
                                                <div class="shrink-0">
                                                    <img class="w-16 h-16 p-1 border-2 rounded-full border-gray-100/50" src="/assets/images/user/img-04.jpg" alt="img">
                                                </div>
                                                <div class="grow ltr:ml-3 rtl:mr-3">
                                                    <div>
                                                        <p class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">Jun 23, 2021</p>
                                                        <h6 class="text-gray-900 dark:text-gray-50">Michelle Durant</h6>
                                                        <div class="text-yellow-500 text-17">
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>  
                                                            <i class="mdi mdi-star-half-full"></i>
                                                        </div>
                                                        <p class="mt-3 italic text-gray-500 dark:text-gray-300">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-6 sm:flex">
                                                <div class="flex-shrink-0">
                                                    <img class="w-16 h-16 p-1 border-2 rounded-full border-gray-100/50" src="/assets/images/user/img-02.jpg" alt="img">
                                                </div>
                                                <div class="grow ltr:ml-3 rtl:mr-3">
                                                    <div>
                                                        <p class="mb-2 text-sm text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300">Jun 25, 2021</p>
                                                        <h6 class="text-gray-900 dark:text-gray-50">Jeffrey Montgomery</h6>
                                                        <div class="text-yellow-500 text-17">
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star"></i>
                                                            <i class="mdi mdi-star-half-full"></i>
                                                            <i class="mdi mdi-star-outline"></i>
                                                        </div>
                                                        <p class="mt-3 italic text-gray-500 dark:text-gray-300">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5">
                                            <form action="#">
                                                <h6 class="font-semibold text-gray-900 text-17 dark:text-gray-50">Add a review</h6>
                                                <p class="mb-5 text-gray-500 dark:text-gray-300">Your Rating for this listing</p>
                                                <div class="grid grid-cols-12 gap-4">
                                                    <div class="col-span-12">
                                                        <div class="mb-3">
                                                            <label for="inputname" class="text-sm text-gray-900 dark:text-gray-50">Your Name</label>
                                                            <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputname" placeholder="Enter your name">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label for="inputemail" class="text-sm text-gray-900 dark:text-gray-50">Email</label>
                                                            <input type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputemail" placeholder="Enter your email">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label for="inputsubject" class="text-sm text-gray-900 dark:text-gray-50">Subject</label>
                                                            <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputsubject" placeholder="Subject">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-12">
                                                        <div class="mb-3">
                                                            <label for="inputcoment" class="text-sm text-gray-900 dark:text-gray-50">Review</label>
                                                            <textarea class="w-full mt-1 rounded border-gray-100/50 placeholder:text-13 placeholder:text-gray-200 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300 focus:ring-0 focus:ring-offset-0" id="inputcoment" rows="3" placeholder="Add your review"></textarea>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                                <div class="text-end">
                                                    <button type="submit" class="text-white transition-all duration-500 ease-in-out border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2">Submit Review <i class="uil uil-angle-right-b"></i></button>
                                                </div>
                                            </form>
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
                            <input
                                type="text" class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                                id="subscribe" placeholder="Enter your email" >
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
        <footer class="footer ">
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
                            <script>document.write(new Date().getFullYear())</script>
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


     <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
     <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>
     <script src="/assets/libs/simplebar/simplebar.min.js"></script>


        <script src="/assets/js/pages/switcher.js"></script>

        <!-- Light Box Js -->
        <script src="/assets/libs/glightbox/js/glightbox.min.js"></script>

        <script src="/assets/js/pages/lightbox.init.js"></script>

    <script src="/assets/js/pages/dropdown&modal.init.js"></script>

    <script src="/assets/js/pages/nav&tabs.js"></script>

    <script src="/assets/js/app.js"></script>
    
</body>
</html>
