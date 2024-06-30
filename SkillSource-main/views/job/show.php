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


    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />




</head>

<body class="bg-white dark:bg-neutral-800">


    <?php include_once __DIR__."/../components/nav.php" ?>


    <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
        <!-- light-dark mode button -->
        <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
            <span class="ltr:hidden">LTR</span>
            <span class="rtl:hidden">RTL</span>
        </a>

    </div>

    <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
        <div class="w-48 p-4 bg-white shadow-md">
            <div>
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                <ul class="flex gap-3 ">
                    <li>
                        <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                    </li>
                </ul>
                <ul class="flex gap-3 mt-4">
                    <li>
                        <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink" href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                    </li>
                </ul>
            </div>

            <div class="mt-5">
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                <div class="flex justify-center mt-2">
                    <!-- light-dark mode button -->
                    <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                        <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                        <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
        <i class="text-xl mdi mdi-cog mdi-spin"></i>
    </a>

    <div class="main-content">
        <div class="page-content">

            <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative">
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Job Details</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                            <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Job Details </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="/assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
            </section>

            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded-md border-gray-100/30 dark:border-neutral-600/80">
                                <div class="relative">
                                    <img src="/assets/images/job-detail.jpg" alt="" class="rounded-md img-fluid mb-7">
                                    <div class="absolute z-20 -bottom-7 left-7">
                                        <img src="/assets/images/featured-job/img-10.png" alt="" class="rounded-md img-fluid">
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-8">
                                            <div class="relative">
                                                <h5 class="mb-1 text-gray-900 dark:text-gray-50"><?= $job->job_title ?></h5>
                                                <ul class="flex gap-4 text-gray-500 dark:text-gray-300">
                                                    <li>
                                                        <i class="mdi mdi-account"></i> 8 Vacancy
                                                    </li>
                                                    <li class="text-yellow-500">
                                                        <span class="px-2 py-1 text-white bg-yellow-500 rounded text-13">4.8</span> <i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="flex gap-3 md:justify-end">
                                                <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                                </div>
                                                <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-setting text-lg leading-[1.8]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-12 mt-8 gap-y-3 lg:gap-3">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Experience</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50"><?= $job->Experience_level ?></p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Employee type</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50"><?= $job->Employee_type ?></p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Position</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50"><?= $job->position ?></p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13"><?= $job->salary_type == 'Range' ?: 'Salary' ?></p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">$<?= $job->salary_type == 'Range'? $job->salary_range: $job->salary ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Job Description</h5>
                                        <div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300 break-words"><?= $job->description ?></p>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Responsibilities</h5>
                                        <div>
                                            <p class="mb-3 text-gray-500 dark:text-gray-300">As a Product Designer, you will work within a Product Delivery Team fused with UX, engineering, product and data talent.</p>

                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Have sound knowledge of commercial activities.</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Build next-generation web applications with a focus on the client side</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Work on multiple projects at once, and consistently meet draft deadlines</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> have already graduated or are currently in any year of study</li>
                                                <li class="text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Revise the work of previous designers to create a unified aesthetic for our brand materials</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Qualification</h5>
                                        <div>
                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> B.C.A / M.C.A under National University course complete.</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> 3 or more years of professional design experience</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> have already graduated or are currently in any year of study </li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Advanced degree or equivalent experience in graphic and web design</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Skill & Experience</h5>
                                        <div>
                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Understanding of key Design Principal</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Proficiency With HTML, CSS, Tailwind</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Wordpress: 1 year (Required) </li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Experience designing and developing responsive design websites </li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> web designing: 1 year (Preferred) </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">PHP</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">JS</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Marketing</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">REACT</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">PHOTOSHOP</span>
                                    </div>

                                </div>

                            </div>
                            <div class="mt-10 space-y-8 relative">
                                <h5 class="text-gray-900 dark:text-gray-50">Comments</h5>

                                <div class="relative transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 ">
                                    <div id="comments" style="max-height: 320px;" class="p-6 overflow-auto">
                                        <?php

                                        use Models\Comment;

                                        if ($comments == []) : ?>
                                            <div id="EmptyState" class="w-full flex flex-col justify-center items-center" style="height: 100px;">
                                                <p class="text-gray-500 dark:text-gray-300 mb-2" style="font-size:x-large;">No comments yet</p>
                                                <p class="text-gray-500 dark:text-gray-300">We encourage you to share your thoughts and insights.</p>
                                            </div>
                                        <?php else :
                                            $count = 0;
                                        ?>
                                            <?php foreach ($comments as $comment) : ?>
                                                <?php
                                                $user = Comment::user($comment['user_id']);
                                                $count++;
                                                ?>
                                                <?php if ($count > 1) : ?>
                                                    <hr class="my-4">
                                                <?php endif; ?>
                                                <div class="grid grid-cols-12 gap-5 comment">
                                                    <div class="col-span-12 lg:col-span-1">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img src="/assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-10">
                                                        <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50"><?= $user['name'] ?></a>
                                                            <small class="font-normal text-gray-500 dark:text-gray-300">(0-2 Yrs Exp.)</small>
                                                        </h5>
                                                        <ul class="flex flex-wrap gap-3 mb-0">
                                                            <li>
                                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Creative Agency</p>
                                                            </li>
                                                            <li>
                                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> New York</p>
                                                            </li>
                                                            <li>
                                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                            </li>
                                                        </ul>
                                                        <div class="mt-4">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                                <span class="bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                                <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <p><?= $comment['comment'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        <!--end row-->
                                    </div>
                                    <div class="w-full px-4 py-3  dark:bg-neutral-700">
                                        <div class="relative w-full flex justify-between">
                                            <input style="width: 100%;" id="comment" class="border border-gray-300 rounded-lg" type="text" class="form-control" placeholder="Write a comment">
                                            <!--end col-->
                                            <input type="hidden" id="job_id" value="<?= $job->id ?>">
                                            <button id="AddComment" class="absolute bottom-1 bg-gray-200 px-2 rounded-lg" style="right: 1px; top: 1px; padding-block: 8.8px;">Comment</button>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 space-y-6 lg:col-span-4">
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <h6 class="text-gray-900 text-17 dark:text-gray-50">Job Overview</h6>

                                    <ul>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-user icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Job Title</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"><?= $job->job_title ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-star-half-alt icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Experience</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"><?= $job->Experience_level ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-location-point icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"><?= $job->location ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-usd-circle icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Offered Salary</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">$35k - $45k</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-graduation-cap icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Qualification</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Bachelor Degree</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-building icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Industry</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Private</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Date Posted</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Posted 2 hrs ago</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        <a href="/job/<?= $job->id ?>/apply" data-bs-toggle="modal" class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5">Apply Now <i class="uil uil-arrow-right"></i></a>
                                        <a href="bookmark-jobs.html" class="btn w-full bg-yellow-500/20 border-transparent text-yellow-500 hover:-translate-y-1.5 dark:bg-yellow-500/30"><i class="uil uil-bookmark"></i> Add Bookmark</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="/assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">
                                            <h6 class="text-gray-900 text-17 dark:text-gray-50">Jobcy Technology Pvt.Ltd</h6>
                                            <p class="text-gray-500 dark:text-gray-300">Since July 2017</p>
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Phone</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">+589 560 56555</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">pixltechnology@info.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-globe group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Website</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300 fs-14 text-break">www.Jobcytechnology.pvt.ltd.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">Oakridge Lane Richardson.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="mt-6">
                                            <a href="company-details.html" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"><i class="mdi mdi-eye"></i> View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 text-16 dark:text-gray-50">Job location</h6>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin" style="width:100%" height="250" allowfullscreen="" loading="lazy"></iframe>
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
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12 lg:col-span-1">
            <div class="mb-4 text-center mb-md-0">
                <a href="company-details.html"><img src="/assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
            </div>
        </div>
        <!--end col-->

    </div>
    <script>
        document.getElementById('AddComment').addEventListener('click', function() {
            var comment = document.getElementById('comment').value;
            var job_id = document.getElementById('job_id').value;
            var formData = new FormData();
            formData.append('comment', comment);

            fetch('/job/' + job_id + '/comment', {
                    method: 'POST',
                    body: formData
                })
                .then((response) => {
                    if (response.ok) {
                        var comments = document.getElementById('comments');
                        var div = document.createElement('div');
                        div.classList.add('grid', 'grid-cols-12', 'gap-5', 'comment');
                        div.innerHTML = `
                                <div class="col-span-12 lg:col-span-1">
                                    <div class="mb-4 text-center mb-md-0">
                                        <a href="company-details.html"><img src="/assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-span-12 lg:col-span-10">
                                    <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50"><?= auth()->name ?></a>
                                        <small class="font-normal text-gray-500 dark:text-gray-300">(0-2 Yrs Exp.)</small>
                                    </h5>
                                    <ul class="flex flex-wrap gap-3 mb-0">
                                        <li>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Creative Agency</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> New York</p>
                                        </li>
                                        <li>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                        </li>
                                    </ul>
                                    <div class="mt-4">
                                        <div class="flex flex-wrap gap-1.5">
                                            <span class="bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">Full Time</span>
                                            <span class="bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">Urgent</span>
                                            <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p>${comment}</p>
                                    </div>
                                </div>
                    `;
                    const EmptyState = document.getElementById('EmptyState');
                    if (EmptyState) {
                        EmptyState.remove();
                    }
                    comments.insertBefore(div, comments.firstChild);
                    comments.scroll({
                        top: 0,
                        behavior: 'smooth'
                    })
                    if (document.querySelectorAll('.comment').length > 1) {
                        div.outerHTML += '<hr class="my-4">';
                    }
                    document.getElementById('comment').value = '';
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
    <?php include_once(__DIR__ . "/../components/scripts.php"); ?>

</body>

</html>