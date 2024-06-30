<?php
if (isset($_SESSION['user'])) header('Location: /home');
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />



    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />




</head>

<body class="bg-white dark:bg-neutral-800">

    <div class="grid place-items-center" style="height: 100vh;">
        <div class="flex flex-col justify-center px-12 py-12 rounded-lg lg:border lg:border-gray-500" style="max-width: 450px;">
            <div class="flex flex-col items-center text-center">
                <img src="/assets/images/logo.svg" alt="logo" width="120" height="120">
                <h5 class="text-[18.5px]">Welcome Back !</h5>
                <p class="mt-3">Sign in to continue to HireMe.</p>
            </div>
            <form action="login" method="POST" class="mt-8">
                <?php if (isset($_GET['error'])) : ?>
                    <div class="w-full flex justify-center">    
                        <p class="text-white bg-red-500 p-1 w-40 text-center rounded"><?= $_GET['error'] ?></p>
                        </div>
                <?php endif; ?>
                <div class="mb-5">
                    <label for="usernameInput">Email</label>
                    <input type="text" name="email" class="w-full mt-1 py-2.5 rounded border border-gray-300 placeholder:text-sm placeholder:text-gray-300 " required="" id="usernameInput" placeholder="Enter your username" required>
                </div>
                <div class="mb-5">
                    <label for="emailInput">Password</label>
                    <input type="password" name="password" class="w-full mt-1 rounded border-gray-300 placeholder:text-sm placeholder:text-gray-300" id="passwordInput" placeholder="Enter your password" required>
                </div>

                <div class="my-8 text-center">
                    <button type="submit" class="btn text-gray-900 font-medium border hover:-translate-y-1.5 duration-500 ease">Login
                    </button>
                </div>
            </form>
            <div class="text-center">
                <p>Create Account ? <a href="/register" class="underline fw-medium" style="color: #1F6BAA;"> Sign Up </a></p>
            </div>
        </div>
    </div>


    <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>


    <script src="assets/js/pages/switcher.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>