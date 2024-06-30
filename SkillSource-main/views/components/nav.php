<nav class="navbar fixed right-0 left-0 top-0 px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 dark:bg-neutral-800 z-40 dark:shadow-neutral-900" id="navbar">
    <div class="mx-auto container-fluid">
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="ml-4 flex items-center">
                <img src="/assets/images/logo.svg" alt="" class="logo-dark block dark:hidden" width="100" height="100">
                <img src="/assets/images/logo.svg" alt="" class="logo-dark hidden dark:block">
            </a>
            <?php if (isLoggedIn()) : ?>
                <button data-collapse-toggle="navbar-collapse" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            <?php endif;?>
            <div class="flex items-center lg:order-2">
                <div id="ChangeAccount" class="flex sm:ml-4 hidden">
                    <!-- <div class="relative dropdown">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                <i class="text-2xl mdi mdi-bell"></i>
                            </button>
                            <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">3</span>
                        </div>
                        <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72 dark:bg-neutral-800 " id="notification">
                            <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                <div class="grid grid-cols-1 ">
                                    <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                        <h6 class="mb-1 text-gray-800 dark:text-gray-50"> Notification </h6>
                                        <p class="mb-0 text-gray-500 text-13 dark:text-gray-300">You have 4 unread Notification</p>
                                    </div>
                                </div>
                                <div class="h-60" data-simplebar>
                                    <div>
                                        <a href="#!">
                                            <div class="flex p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <div class="h-10 w-10 bg-violet-500/20 rounded-full text-center leading-[2.8]">
                                                        <i class="text-lg text-violet-500 uil uil-user-check"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">22 verified registrations</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>3 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/assets/images/user/img-01.jpg" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Kevin Stewart</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>1 hour ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/assets/images/featured-job/img-04.png" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Applications has been approved</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>45 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/assets/images/user/img-02.jpg" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Salena Layfield</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!">
                                            <div class="flex items-center p-4 hover:bg-gray-50/30 dark:hover:bg-neutral-600/50">
                                                <div class="flex-shrink-0 ltr:mr-3 rtl:ml-3">
                                                    <img src="/assets/images/featured-job/img-01.png" class="w-10 h-10 rounded-full" alt="user-pic">
                                                </div>
                                                <div class="flex-grow">
                                                    <h6 class="mb-1 text-sm text-gray-700 dark:text-gray-300">Creative Agency</h6>
                                                    <div class="text-gray-600 text-13 dark:text-gray-300">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline dark:text-gray-300"></i> <span>15 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <div class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center bg-gray-50 dark:bg-neutral-700">
                                    <a class="border-0 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 btn dark:text-gray-50" href="javascript:void(0)">
                                        <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <p id="navText">Here to hire talent?</p><button id="navAccount" class="ml-4 font-medium" style="color: #1F6BAA;">Join as a Client</button>
                </div>
                <div>
                    <div class="relative dropdown ltr:mr-4 rtl:ml-4">
                        <?php if (isLoggedIn()) : ?>
                            <button type="button" class="flex items-center px-4 py-5 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="/assets/images/profile.jpg?v=1.0" alt="Header Avatar">
                                <span class="hidden fw-medium xl:block dark:text-gray-50"><?= auth()->name ?></span>
                            </button>
                        <?php endif; ?>
                        <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                            <?php if (isRecuiter()) : ?>
                                <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                    <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="/jobs/manage">Manage Jobs</a>
                                </li>
                            <?php endif; ?>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="bookmark-jobs.html">Bookmarks Jobs</a>
                            </li>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="/profile">My Profile</a>
                            </li>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="/logout">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="navbar-collapse" class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
            <?php if ($_SERVER['REQUEST_URI'] != '/register' && $_SERVER['REQUEST_URI'] != '/login'): ?>  
                <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                    <li class="py-5 lg:px-4">
                        <a href="/" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Home</a>
                    </li>
                    <li class="relative dropdown lg:mt-0">
                        <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]" id="Jobs" data-bs-toggle="dropdown">Jobs <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                        <ul class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800" aria-labelledby="company">
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="/job/create">Create New Job</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="/jobs/manage">Manage Jobs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative dropdown lg:mt-0">
                        <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]" id="company" data-bs-toggle="dropdown">Company <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                        <ul class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800" aria-labelledby="company">
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="about.html">About Us</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="services.html">Services</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="team.html">Team</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="pricing.html">Pricing</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="privacy-policy.html">Privacy & Policy</a>
                            </li>
                            <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-700 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="faqs.html">Faqs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative dropdown lg:mt-0">
                        <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]" id="pages" data-bs-toggle="dropdown">Pages <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>
                        <div class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute  lg:w-[40rem] lg:shadow-lg dark:bg-neutral-800">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-4">
                                    <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                        <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Jobs</span>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-list.html">Job List</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-list-2.html">Job List-2</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-grid.html">Job Grid</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-grid-2.html">Job Grid-2</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-details.html">Job Details</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="job-categories.html">Jobs Categories</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                        <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Candidates / Companys</span>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="candidate-list.html">Candidate List</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="candidate-grid.html">Candidate Grid</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="candidate-details.html">Candidate Details</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="company-list.html">Company List</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="company-details.html">Company Details</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                        <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Extra Pages</span>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="sign-up.html">Sign Up</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="sign-in.html">Sign In</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="sign-out.html">Sign Out</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="reset-password.html">Reset Password</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="coming-soon.html">Coming Soon</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="404-error.html">404 Error</a>
                                        </li>
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="components.html">Components</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-5 lg:px-4">
                        <a href="contact.html" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Contact </a>
                    </li>
                </ul>
            <?php endif; ?>
            </div>
        </div>
    </div>
</nav>