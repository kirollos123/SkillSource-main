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

    <link rel="stylesheet" href="/assets/libs/choices.js/public//assets/styles/choices.min.css">

    <link rel="stylesheet" href="/assets/css/icons.css" />
    <link rel="stylesheet" href="/assets/css/tailwind.css" />

    <style>
        .ml-0 {
            margin-left: 0;
        }
        @media screen and (min-width: 1024px){
            .lg\:ml-4 {
                margin-left: 1rem;
            }
        }
    </style>

</head>

<body class="bg-white dark:bg-neutral-800 grid place-items-center">

    <?php include_once __DIR__ . '/../components/nav.php'; ?>


    <div class="grid" style="color: black; margin-top: 100px; padding: 20px;">
        <h1 id="SignupText" class="text-3xl font-bold mb-12 text-center">Join as a Recuiter or Job Seeker</h1>
        <form action="/register" method="POST">
        <div id="SelectAccount" class="flex justify-evenly flex-col items-center lg:justify-normal lg:flex-row">
            <label for="Recuiter">
                <div class="relative rounded-lg border border-2 border-gray-200" style="width : 265px; height: 150px;">
                    <input type="radio" name="account_type" id="Recuiter" class="absolute top-5 w-5 h-5 border-2 border-gray-400" style="right: 10%;" value="recuiter">
                    <img class="absolute left-6 top-5" style="top: 40%;" src="/assets/images/Recuiter.svg" alt="Recuiter" width='32' height="32">
                    <p class="absolute font-bold" style="font-size: large; bottom: 40%; left: 10%;">Recuiter</p>
                    <p class="absolute font-bold" style="font-size: 11px; bottom: 15%; left: 10%;">Find and hire top talent quickly and efficiently with our tools.</p>
                </div>
            </label>
            <label for="JobSeeker" class="mt-4 lg:mt-0 ml-0 lg:ml-4">
                <div class="relative rounded-lg border border-2 border-gray-200" style="width : 265px; height: 150px;">
                    <input type="radio" name="account_type" id="JobSeeker" class="absolute top-5 w-5 h-5 border-2 border-gray-400" style="right: 10%;" value="jobseeker">
                    <img class="absolute left-6 top-5" style="top: 40%;" src="/assets/images/freelancer.svg" alt="Recuiter" width='32' height="32">
                    <p class="absolute font-bold" style="font-size: large; bottom: 40%; left: 10%;">Job Seeker</p>
                    <p class="absolute font-bold" style="font-size: 11px; bottom: 15%; left: 10%;">Discover your ideal job and apply effortlessly with our platform.</p>
                </div>
            </label>
        </div>
            <div id="RegistrationForm" class="hidden grid grid-cols-12">
                <div class="col-span-12">
                    <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                        <div class="grid flex-col grid-cols-12">
                            <div class="col-span-12 rounded lg:col-span-12  lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                <div class="flex flex-col justify-center h-full p-12">
                                    <form action="/register" method="POST">
                                        <div class="mt-5">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="firstName" class="text-sm dark:text-gray-50">First Name</label>
                                                        <input type="text" name="firstName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="firstName" placeholder="First Name" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="lastName" class="text-sm dark:text-gray-50">Last Name</label>
                                                        <input type="text" name="lastName" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="lastName" placeholder="Last Name" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12">
                                                    <div class="mb-3">
                                                        <label for="email" class="text-sm  dark:text-gray-50">Email</label>
                                                        <input type="email" name="email" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="email" placeholder="user@example.com" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="choices-single-categories" class="text-sm dark:text-gray-50">Country</label>
                                                        <div class="mt-1">
                                                            <select class="border border-gray-100/50 rounded w-full" data-trigger name="location" id="choices-single-categories" aria-label="Default select example">
                                                                <option value="Afghanistan">Afghanistan</option>
                                                                <option value="Albania">Albania</option>
                                                                <option value="Algeria">Algeria</option>
                                                                <option value="American Samoa">American Samoa</option>
                                                                <option value="Andorra">Andorra</option>
                                                                <option value="Angola">Angola</option>
                                                                <option value="Anguilla">Anguilla</option>
                                                                <option value="Antarctica">Antarctica</option>
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                <option value="Argentina">Argentina</option>
                                                                <option value="Armenia">Armenia</option>
                                                                <option value="Aruba">Aruba</option>
                                                                <option value="Australia">Australia</option>
                                                                <option value="Austria">Austria</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="Bahamas">Bahamas</option>
                                                                <option value="Bahrain">Bahrain</option>
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="Barbados">Barbados</option>
                                                                <option value="Belarus">Belarus</option>
                                                                <option value="Belgium">Belgium</option>
                                                                <option value="Belize">Belize</option>
                                                                <option value="Benin">Benin</option>
                                                                <option value="Bermuda">Bermuda</option>
                                                                <option value="Bhutan">Bhutan</option>
                                                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                                <option value="Botswana">Botswana</option>
                                                                <option value="Bouvet Island">Bouvet Island</option>
                                                                <option value="Brazil">Brazil</option>
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                <option value="Bulgaria">Bulgaria</option>
                                                                <option value="Burkina Faso">Burkina Faso</option>
                                                                <option value="Burundi">Burundi</option>
                                                                <option value="Cambodia">Cambodia</option>
                                                                <option value="Cameroon">Cameroon</option>
                                                                <option value="Canada">Canada</option>
                                                                <option value="Cape Verde">Cape Verde</option>
                                                                <option value="Cayman Islands">Cayman Islands</option>
                                                                <option value="Central African Republic">Central African Republic</option>
                                                                <option value="Chad">Chad</option>
                                                                <option value="Chile">Chile</option>
                                                                <option value="China">China</option>
                                                                <option value="Christmas Island">Christmas Island</option>
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                <option value="Colombia">Colombia</option>
                                                                <option value="Comoros">Comoros</option>
                                                                <option value="Congo">Congo</option>
                                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                <option value="Cook Islands">Cook Islands</option>
                                                                <option value="Costa Rica">Costa Rica</option>
                                                                <option value="C&ocirc;te d'Ivoire">C&ocirc;te d'Ivoire</option>
                                                                <option value="Croatia">Croatia</option>
                                                                <option value="Cuba">Cuba</option>
                                                                <option value="Cyprus">Cyprus</option>
                                                                <option value="Czech Republic">Czech Republic</option>
                                                                <option value="Denmark">Denmark</option>
                                                                <option value="Djibouti">Djibouti</option>
                                                                <option value="Dominica">Dominica</option>
                                                                <option value="Dominican Republic">Dominican Republic</option>
                                                                <option value="Ecuador">Ecuador</option>
                                                                <option value="Egypt">Egypt</option>
                                                                <option value="El Salvador">El Salvador</option>
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                <option value="Eritrea">Eritrea</option>
                                                                <option value="Estonia">Estonia</option>
                                                                <option value="Ethiopia">Ethiopia</option>
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                <option value="Faroe Islands">Faroe Islands</option>
                                                                <option value="Fiji">Fiji</option>
                                                                <option value="Finland">Finland</option>
                                                                <option value="France">France</option>
                                                                <option value="French Guiana">French Guiana</option>
                                                                <option value="French Polynesia">French Polynesia</option>
                                                                <option value="French Southern Territories">French Southern Territories</option>
                                                                <option value="Gabon">Gabon</option>
                                                                <option value="Gambia">Gambia</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Germany">Germany</option>
                                                                <option value="Ghana">Ghana</option>
                                                                <option value="Gibraltar">Gibraltar</option>
                                                                <option value="Greece">Greece</option>
                                                                <option value="Greenland">Greenland</option>
                                                                <option value="Grenada">Grenada</option>
                                                                <option value="Guadeloupe">Guadeloupe</option>
                                                                <option value="Guam">Guam</option>
                                                                <option value="Guatemala">Guatemala</option>
                                                                <option value="Guernsey">Guernsey</option>
                                                                <option value="Guinea">Guinea</option>
                                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                <option value="Guyana">Guyana</option>
                                                                <option value="Haiti">Haiti</option>
                                                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                <option value="Honduras">Honduras</option>
                                                                <option value="Hong Kong">Hong Kong</option>
                                                                <option value="Hungary">Hungary</option>
                                                                <option value="Iceland">Iceland</option>
                                                                <option value="India">India</option>
                                                                <option value="Indonesia">Indonesia</option>
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                                <option value="Iraq">Iraq</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Isle of Man">Isle of Man</option>
                                                                <option value="Italy">Italy</option>
                                                                <option value="Jamaica">Jamaica</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Jordan">Jordan</option>
                                                                <option value="Kazakhstan">Kazakhstan</option>
                                                                <option value="Kenya">Kenya</option>
                                                                <option value="Kiribati">Kiribati</option>
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                                <option value="Kuwait">Kuwait</option>
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                <option value="Latvia">Latvia</option>
                                                                <option value="Lebanon">Lebanon</option>
                                                                <option value="Lesotho">Lesotho</option>
                                                                <option value="Liberia">Liberia</option>
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                <option value="Liechtenstein">Liechtenstein</option>
                                                                <option value="Lithuania">Lithuania</option>
                                                                <option value="Luxembourg">Luxembourg</option>
                                                                <option value="Macao">Macao</option>
                                                                <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                                                <option value="Madagascar">Madagascar</option>
                                                                <option value="Malawi">Malawi</option>
                                                                <option value="Malaysia">Malaysia</option>
                                                                <option value="Maldives">Maldives</option>
                                                                <option value="Mali">Mali</option>
                                                                <option value="Malta">Malta</option>
                                                                <option value="Marshall Islands">Marshall Islands</option>
                                                                <option value="Martinique">Martinique</option>
                                                                <option value="Mauritania">Mauritania</option>
                                                                <option value="Mauritius">Mauritius</option>
                                                                <option value="Mayotte">Mayotte</option>
                                                                <option value="Mexico">Mexico</option>
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                <option value="Monaco">Monaco</option>
                                                                <option value="Mongolia">Mongolia</option>
                                                                <option value="Montenegro">Montenegro</option>
                                                                <option value="Montserrat">Montserrat</option>
                                                                <option value="Morocco">Morocco</option>
                                                                <option value="Mozambique">Mozambique</option>
                                                                <option value="Myanmar">Myanmar</option>
                                                                <option value="Namibia">Namibia</option>
                                                                <option value="Nauru">Nauru</option>
                                                                <option value="Nepal">Nepal</option>
                                                                <option value="Netherlands">Netherlands</option>
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                <option value="New Caledonia">New Caledonia</option>
                                                                <option value="New Zealand">New Zealand</option>
                                                                <option value="Nicaragua">Nicaragua</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Niue">Niue</option>
                                                                <option value="Norfolk Island">Norfolk Island</option>
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                <option value="Norway">Norway</option>
                                                                <option value="Oman">Oman</option>
                                                                <option value="Pakistan">Pakistan</option>
                                                                <option value="Palau">Palau</option>
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                                <option value="Panama">Panama</option>
                                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                                <option value="Paraguay">Paraguay</option>
                                                                <option value="Peru">Peru</option>
                                                                <option value="Philippines">Philippines</option>
                                                                <option value="Pitcairn">Pitcairn</option>
                                                                <option value="Poland">Poland</option>
                                                                <option value="Portugal">Portugal</option>
                                                                <option value="Puerto Rico">Puerto Rico</option>
                                                                <option value="Qatar">Qatar</option>
                                                                <option value="R&eacute;union">R&eacute;union</option>
                                                                <option value="Romania">Romania</option>
                                                                <option value="Russian Federation">Russian Federation</option>
                                                                <option value="Rwanda">Rwanda</option>
                                                                <option value="Saint Barth&eacute;lemy">Saint Barth&eacute;lemy</option>
                                                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                <option value="Saint Lucia">Saint Lucia</option>
                                                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                <option value="Samoa">Samoa</option>
                                                                <option value="San Marino">San Marino</option>
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                                <option value="Senegal">Senegal</option>
                                                                <option value="Serbia">Serbia</option>
                                                                <option value="Seychelles">Seychelles</option>
                                                                <option value="Sierra Leone">Sierra Leone</option>
                                                                <option value="Singapore">Singapore</option>
                                                                <option value="Slovakia">Slovakia</option>
                                                                <option value="Slovenia">Slovenia</option>
                                                                <option value="Solomon Islands">Solomon Islands</option>
                                                                <option value="Somalia">Somalia</option>
                                                                <option value="South Africa">South Africa</option>
                                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                <option value="Spain">Spain</option>
                                                                <option value="Sri Lanka">Sri Lanka</option>
                                                                <option value="Sudan">Sudan</option>
                                                                <option value="Suriname">Suriname</option>
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                                <option value="Swaziland">Swaziland</option>
                                                                <option value="Sweden">Sweden</option>
                                                                <option value="Switzerland">Switzerland</option>
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                <option value="Tajikistan">Tajikistan</option>
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                <option value="Thailand">Thailand</option>
                                                                <option value="Timor-Leste">Timor-Leste</option>
                                                                <option value="Togo">Togo</option>
                                                                <option value="Tokelau">Tokelau</option>
                                                                <option value="Tonga">Tonga</option>
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                <option value="Tunisia">Tunisia</option>
                                                                <option value="Turkey">Turkey</option>
                                                                <option value="Turkmenistan">Turkmenistan</option>
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                <option value="Tuvalu">Tuvalu</option>
                                                                <option value="Uganda">Uganda</option>
                                                                <option value="Ukraine">Ukraine</option>
                                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                                <option value="United Kingdom">United Kingdom</option>
                                                                <option value="United States">United States</option>
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                <option value="Uruguay">Uruguay</option>
                                                                <option value="Uzbekistan">Uzbekistan</option>
                                                                <option value="Vanuatu">Vanuatu</option>
                                                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                                <option value="Viet Nam">Viet Nam</option>
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                                <option value="Western Sahara">Western Sahara</option>
                                                                <option value="Yemen">Yemen</option>
                                                                <option value="Zambia">Zambia</option>
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="phone" class="text-sm dark:text-gray-50">Phone</label>
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
                                                        <label for="new-password-input" class="text-sm dark:text-gray-50">Password</label>
                                                        <input type="password" name="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Enter password" id="new-password-input" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div class="mb-3">
                                                        <label for="confirm-password-input" class="text-sm dark:text-gray-50">Confirm Password</label>
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
                                            <button type="submit" class="text-white btn border-transparent focus:ring" style="background-color: #174ea5;">Create My Account</button>
                                        </div>
                                </div>
        </form>
    </div>
    </div>
    </div>
    </div>

    </div>
    </form>
    <div class="flex flex-col items-center justify-center mt-8">

        <button id="CreateAccount" class="rounded-lg px-2 h-8 bg-gray-200 text-gray-600" style="cursor: not-allowed;" disabled>Create Account</button>
        <span class="mt-4">
            Already have an account?
            <a href="/login" class="underline font-medium" style="color: #1F6BAA;">Log In</a>
        </span>
    </div>
    </div>

    <script src="/assets/libs/choices.js/public//assets/scripts/choices.min.js"></script>


    <script>
        const recuiter = document.getElementById('Recuiter');
        const jobSeeker = document.getElementById('JobSeeker');
        const createAccount = document.getElementById('CreateAccount');
        const navAccount = document.getElementById('navAccount');

        function ChangeStyle() {
            createAccount.classList.remove('bg-gray-200');
            createAccount.classList.remove('text-gray-600');
            createAccount.style.color = 'white';
            createAccount.style.cursor = 'pointer';
            createAccount.disabled = false;
            createAccount.style.backgroundColor = '#174ea5';
        }

        function RecuiterContent() {
            createAccount.innerText = 'Join as a Recuiter';
            navAccount.innerText = 'Apply as a Job Seeker';
            ChangeStyle();
        }

        function JobSeekerContent() {
            createAccount.innerText = 'Join as a Job Seeker';
            navAccount.innerText = 'Join as a Recuiter';
            ChangeStyle();
        }
        recuiter.addEventListener('click', RecuiterContent);
        jobSeeker.addEventListener('click', JobSeekerContent);
        document.getElementById('navAccount').addEventListener('click', () => {
            if (recuiter.checked) {
                jobSeeker.checked = true;
                JobSeekerContent();
                ChangeSignupText('jobseeker')
                } else {
                recuiter.checked = true;
                RecuiterContent();
                ChangeSignupText('recuiter')
            }
        });

        function ChangeSignupText(AccountType) {
            switch (AccountType) {
                case 'recuiter':
                    SignupText.innerText = 'Sign up to hire talent';
                    document.getElementById('navText').innerText = 'Looking for work?';
                    break;
                case 'jobseeker':
                    SignupText.innerText = 'Sign up to find work you love';
                    document.getElementById('navText').innerText = 'Here to hire talent?';
                    break;
            }
        }
        createAccount.addEventListener('click', () => {
            document.getElementById('ChangeAccount').classList.remove('hidden');
            const SignupText = document.getElementById('SignupText');
            const AccountType = document.querySelector('input[name="account_type"]:checked').value;
            ChangeSignupText(AccountType)
            document.getElementById('SelectAccount').classList.add('hidden');
            document.getElementById('RegistrationForm').classList.remove('hidden');
            createAccount.classList.add('hidden')
            SignupText.classList.remove('mb-12')
            SignupText.classList.add('mb-2')
        });
    </script>

</body>

</html>