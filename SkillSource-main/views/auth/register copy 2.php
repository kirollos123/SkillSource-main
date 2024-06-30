<?php isGuest(); ?>
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

    <?php include_once __DIR__ . '/../components/nav.php'; ?>



    <div class="main-content">
        <div class="page-content">

            <section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                            <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                                <div class="grid flex-col grid-cols-12">
                                    <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                        <div class="p-10">
                                            <a href="/">
                                                <img src="assets/images/logo.svg" alt="" class="hidden mx-auto dark:block" width="136">
                                                <img src="assets/images/logo.svg" alt="" class="block mx-auto dark:hidden" width="136">
                                            </a>
                                            <div class="mt-5">
                                                <img src="/assets/images/auth/sign-up.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                        <div class="flex flex-col justify-center h-full p-12">
                                            <div class="text-center">
                                                <h5 class="text-[18.5px] text-white">Let's Get Started</h5>
                                                <p class="mt-3 text-gray-50">Sign Up and get access to all the features of HireMe</p>
                                            </div>
                                            <form action="/register" method="POST">
                                                <div class="mt-5">
                                                    <div class="grid grid-cols-12 gap-5">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="firstName" class="text-sm text-white dark:text-gray-50">First Name</label>
                                                                <input type="text" name="firstName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="firstName" placeholder="First Name" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="lastName" class="text-sm text-white dark:text-gray-50">Last Name</label>
                                                                <input type="text" name="lastName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="lastName" placeholder="Last Name" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12">
                                                            <div class="mb-3">
                                                                <label for="email" class="text-sm text-white dark:text-gray-50">Email</label>
                                                                <input type="email" name="email" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="email" placeholder="user@example.com" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-categories" class="text-sm text-white dark:text-gray-50">Account Type</label>
                                                                <div class="mt-1">
                                                                    <select class="rounded w-full" data-trigger name="accountType" id="choices-single-categories" aria-label="Default select example">
                                                                        <option value="jobseeker">Job Seeker</option>
                                                                        <option value="Recuiter">Recuiter</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="phone" class="text-sm text-white dark:text-gray-50">Phone</label>
                                                                <input type="text" name="phone" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="phone" placeholder="+20123456789" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                    </div>
                                                </div>
                                                <!--end row-->

                                                <!--end account-->
                                                <div class="mt-4">
                                                    <div class="grid grid-cols-12 gap-5">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="new-password-input" class="text-sm text-white dark:text-gray-50">Password</label>
                                                                <input type="password" name="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Enter password" id="new-password-input" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="confirm-password-input" class="text-sm text-white dark:text-gray-50">Confirm Password</label>
                                                                <input type="password" name="passwordConfirmation" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Confirm Password" id="confirm-password-input" required>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12">
                                                            <?php if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') : ?>
                                                                <div class="bg-red-500 text-white p-1 text-center rounded">Password mismatch</div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <!--end Change-password-->
                                                <div class="mt-8 flex w-full justify-between items-center">
                                                    <p class="text-white text-left">Already a member ? <a href="/login" class="text-white underline fw-medium"> Sign In </a></p>
                                                    <button type="submit" class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Create Account</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
        </section>

    </div>


    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>


    <script src="/assets/js/pages/switcher.js"></script>

    <script src="/assets/js/app.js"></script>

</body>

</html>