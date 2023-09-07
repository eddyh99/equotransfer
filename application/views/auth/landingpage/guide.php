<!-- ======= Hero Section ======= -->
<section id="" class="d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>#guide">
                        <img src="<?= base_url() ?>assets/img/back-link.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($guide == 99) { ?>
                <div class="col-12 my-5 text-center">
                    <h1>Coming soon!</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <!-- Start Wallet -->
            <?php if ($guide == 1) { ?>
                <div class="col-12 my-5 ">
                    <div class="d-flex justify-content-center">
                    <svg width="82" height="106" viewBox="0 0 82 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.6112 23.0077C45.0688 23.3545 33.5493 13.9603 25.5771 14.1297C17.6048 14.2991 -0.667659 29.1884 0.0188197 70.4083C0.705298 111.628 49.1519 112.488 49.1519 95.9239C90.2067 95.0608 90.9049 22.392 61.6112 23.0077Z" fill="#EFEFEF"/>
                    <path d="M15.1799 80.7259L10.953 73.5921C10.0197 72.017 10.2003 70.1828 11.3562 69.4979L6.64476 72.2895C5.48889 72.9744 5.30824 74.8086 6.24155 76.3838L10.4685 83.5175C11.4018 85.0926 13.0973 85.8152 14.2532 85.1303L18.9647 82.3386C17.8088 83.0235 16.1132 82.301 15.1799 80.7259Z" fill="#003B43"/>
                    <path d="M80.9698 46.605C80.9698 49.292 78.7915 51.4702 76.1045 51.4702C73.4175 51.4702 71.2393 49.292 71.2393 46.605C71.2393 43.918 73.4175 41.7397 76.1045 41.7397C78.7915 41.7397 80.9698 43.918 80.9698 46.605ZM73.2831 46.605C73.2831 48.1632 74.5463 49.4264 76.1045 49.4264C77.6627 49.4264 78.9259 48.1632 78.9259 46.605C78.9259 45.0468 77.6627 43.7836 76.1045 43.7836C74.5463 43.7836 73.2831 45.0468 73.2831 46.605Z" fill="#003B43"/>
                    <circle cx="37.5752" cy="4.86525" r="4.86525" fill="#003B43"/>
                    <path d="M26.8713 39.4307C24.6019 39.4307 22.7822 41.2707 22.7822 43.5197V72.1432C22.7822 73.2277 23.213 74.2677 23.9799 75.0346C24.7467 75.8014 25.7868 76.2322 26.8713 76.2322H55.4947C56.5792 76.2322 57.6193 75.8014 58.3861 75.0346C59.153 74.2677 59.5838 73.2277 59.5838 72.1432V67.4816C60.7901 66.7661 61.6283 65.478 61.6283 63.965V51.6979C61.6283 50.1849 60.7901 48.8968 59.5838 48.1813V43.5197C59.5838 42.4352 59.153 41.3952 58.3861 40.6283C57.6193 39.8615 56.5792 39.4307 55.4947 39.4307H26.8713ZM26.8713 43.5197H55.4947V47.6088H43.2275C42.1431 47.6088 41.103 48.0396 40.3361 48.8064C39.5693 49.5733 39.1385 50.6134 39.1385 51.6979V63.965C39.1385 65.0495 39.5693 66.0896 40.3361 66.8564C41.103 67.6233 42.1431 68.0541 43.2275 68.0541H55.4947V72.1432H26.8713V43.5197ZM43.2275 51.6979H57.5393V63.965H43.2275V51.6979ZM49.3611 54.7647C48.5478 54.7647 47.7677 55.0878 47.1926 55.6629C46.6174 56.238 46.2943 57.0181 46.2943 57.8314C46.2943 58.6448 46.6174 59.4249 47.1926 60C47.7677 60.5751 48.5478 60.8982 49.3611 60.8982C50.1745 60.8982 50.9545 60.5751 51.5297 60C52.1048 59.4249 52.4279 58.6448 52.4279 57.8314C52.4279 57.0181 52.1048 56.238 51.5297 55.6629C50.9545 55.0878 50.1745 54.7647 49.3611 54.7647Z" fill="black"/>
                    </svg>
                    </div>
                    <div class="logo-text wallet text-center">
                        <span class="fw-bolder text-blue-freedy f-hahmlet py-3">Wallet</span>
                    </div>
                </div>
                <div class="position-relative mb-0 mb-lg-5">
                    <div class="position-absolute element-banking d-none d-lg-block">
                    <svg width="111" height="349" viewBox="0 0 111 349" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-195 4.99999C-195 2.23857 -192.761 0 -190 0H106C108.761 0 111 2.23858 111 5V344C111 346.761 108.761 349 106 349H-190C-192.761 349 -195 346.761 -195 344V4.99999Z" fill="url(#paint0_linear_104_17080)"/>
                        <defs>
                        <linearGradient id="paint0_linear_104_17080" x1="-195" y1="247.208" x2="132.905" y2="241.764" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#336c74"/>
                        <stop offset="0.444301" stop-color="#578187"/>
                        <stop offset="0.916667" stop-color="#003B43"/>
                        </linearGradient>
                        </defs>
                    </svg>

                    </div>
                    <div class="position-absolute element-banking right d-none d-lg-block">
                        <svg width="106" height="349" viewBox="0 0 106 349" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="306" height="349" rx="5" fill="url(#paint0_linear_104_17079)"/>
                            <defs>
                            <linearGradient id="paint0_linear_104_17079" x1="5.08901e-08" y1="247.208" x2="327.905" y2="241.764" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#003B43"/>
                            <stop offset="0.444301" stop-color="#578187"/>
                            <stop offset="0.916667" stop-color="#336c74"/>
                            </linearGradient>
                            </defs>
                        </svg>

                    </div>
                    <div class="container p-r mb-5 pb-5">
                        <div class="row gx-0 features-text">
                            <div class="col-12 col-lg-7 mx-auto ">
                                <div class="content-freedy text-center">
                                    <h3 class="d-inline-block p-r f-hahmlet text-black">
                                        The Importance of the <span class="text-blue-freedy"> Short Code </span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mx-auto text-center mt-4 f-jakarta content-freedy">
                                <p>
                                    Your wallet is identified through the ‘’Short Code’’ <br> (you can find it on the homepage of your  wallet ). <br>
                                    You have to use your Short Code in order to top up your wallet and receive incoming transfers.
                                </p>
                                <p >
                                    <span translate="no"> EquoTransfer </span> offers the possibility of making bank transfers, directly from your wallet, to any  bank accounts, even not under your name,without any documentation required and anonymously.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="accordion" id="accordionFreedy">
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageOne">
                                <button id="btnaccorionOne" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-blue-freedy f-hahmlet py-3">How to Topup your wallet and receive funds</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageTwo">
                                <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-blue-freedy f-hahmlet py-3">How to make a wallet to wallet transfer</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageThree">
                                <button id="btnaccorionThree" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-blue-freedy f-hahmlet py-3">How to convert currencies </span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-3'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageFour">
                                <button id="btnaccorionFour" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-blue-freedy f-hahmlet py-3">How to withdraw funds and make bank transfers</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-4'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Wallet  -->
            
            <!-- Start Capital Exportation -->
            <?php if ($guide == 2) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center features-text">
                        <svg width="142" height="129" viewBox="0 0 142 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M127.394 24.8141C127.394 53.0119 142 72.3757 142 85.963C142 99.5503 134.189 128.086 71.6828 128.086C9.17641 128.086 0 89.6971 0 74.7523C0 4.76945 127.394 -25.1242 127.394 24.8141Z" fill="#EFEFEF"/>
                            <path d="M111.829 16.8963C108.457 16.8963 105.714 14.1527 105.714 10.7814C105.714 7.41005 108.457 4.6665 111.829 4.6665C115.2 4.6665 117.944 7.41005 117.944 10.7814C117.944 14.1527 115.2 16.8963 111.829 16.8963ZM111.829 8.7431C110.708 8.7431 109.79 9.65625 109.79 10.7814C109.79 11.9065 110.708 12.8197 111.829 12.8197C112.95 12.8197 113.867 11.9065 113.867 10.7814C113.867 9.65625 112.95 8.7431 111.829 8.7431Z" fill="#003B43"/>
                            <path d="M124.059 93.3619C120.688 93.3619 117.944 90.6183 117.944 87.247C117.944 83.8756 120.688 81.1321 124.059 81.1321C127.431 81.1321 130.174 83.8756 130.174 87.247C130.174 90.6183 127.431 93.3619 124.059 93.3619ZM124.059 85.2087C122.938 85.2087 122.021 86.1218 122.021 87.247C122.021 88.3721 122.938 89.2853 124.059 89.2853C125.18 89.2853 126.098 88.3721 126.098 87.247C126.098 86.1218 125.18 85.2087 124.059 85.2087Z" fill="#003B43"/>
                            <path d="M72.6446 25.0708C64.7303 25.0708 57.1403 28.2147 51.544 33.8109C45.9478 39.4071 42.8039 46.9972 42.8039 54.9115C42.8039 69.9437 53.9942 82.5887 68.9145 84.491V88.4822H65.1844C64.1951 88.4822 63.2464 88.8752 62.5469 89.5747C61.8473 90.2743 61.4543 91.223 61.4543 92.2123H35.3438V99.6725H61.4543C61.4543 100.662 61.8473 101.611 62.5469 102.31C63.2464 103.01 64.1951 103.403 65.1844 103.403H80.1048C81.094 103.403 82.0428 103.01 82.7423 102.31C83.4418 101.611 83.8348 100.662 83.8348 99.6725H109.945V92.2123H83.8348C83.8348 91.223 83.4418 90.2743 82.7423 89.5747C82.0428 88.8752 81.094 88.4822 80.1048 88.4822H76.3747V84.491C91.295 82.626 102.485 69.9437 102.485 54.9115C102.485 46.9972 99.3413 39.4071 93.7451 33.8109C88.1489 28.2147 80.5588 25.0708 72.6446 25.0708ZM72.6446 32.531C72.6446 32.531 75.4048 37.3055 77.3445 43.7212H67.9447C69.8843 37.3055 72.6446 32.531 72.6446 32.531ZM64.3265 34.1349C63.3194 35.9999 61.79 39.3943 60.4845 43.7212H53.2855C55.8592 39.3943 59.5893 35.9999 64.3265 34.1349ZM80.9627 34.1722C85.6999 36.0372 89.43 39.3943 92.0037 43.7212H84.8047C83.4991 39.3943 81.9698 35.9999 80.9627 34.1722ZM50.5998 51.1814H58.9179C58.7687 52.4123 58.6568 53.6432 58.6568 54.9115C58.6568 56.1797 58.7687 57.4106 58.9179 58.6416H50.5998C50.376 57.4106 50.2641 56.1797 50.2641 54.9115C50.2641 53.6432 50.376 52.4123 50.5998 51.1814ZM66.378 51.1814H78.9111C79.0603 52.4123 79.1722 53.6432 79.1722 54.9115C79.1722 56.1797 79.0603 57.4106 78.9111 58.6416H66.378C66.2288 57.4106 66.1169 56.1797 66.1169 54.9115C66.1169 53.6432 66.2288 52.4123 66.378 51.1814ZM86.3713 51.1814H94.6894C94.9132 52.4123 95.0251 53.6432 95.0251 54.9115C95.0251 56.1797 94.9132 57.4106 94.6894 58.6416H86.3713C86.5205 57.4106 86.6324 56.1797 86.6324 54.9115C86.6324 53.6432 86.5205 52.4123 86.3713 51.1814ZM53.2855 66.1017H60.4845C61.79 70.4286 63.3194 73.823 64.3265 75.6507C59.5893 73.7857 55.8592 70.4286 53.2855 66.1017ZM67.9447 66.1017H77.3445C75.4048 72.5175 72.6446 77.292 72.6446 77.292C72.6446 77.292 69.8843 72.5175 67.9447 66.1017ZM84.8047 66.1017H92.0037C89.43 70.4286 85.6999 73.823 80.9627 75.688C81.9698 73.823 84.8047 66.1017 84.8047 66.1017Z" fill="#003B43"/>
                            <rect x="34.3945" y="90.856" width="76.5006" height="9.76604" fill="black"/>
                            <rect x="60.4375" y="87.6006" width="24.4151" height="16.2767" rx="2" fill="#0A0A0A"/>
                        </svg>
                        <span class="fw-bolder title-top-header text-blue-freedy f-hahmlet">Capital Exportation</span>
                    </div>
                </div>
                <div class="col-12 mb-5 features-text">
                    <div class="col-12 col-lg-8 text-center mb-5 mx-auto">
                        <p class="f-jakarta">
                            Given the increasingly stringent and restrictive regulations on international bank transfers,
                            <span translate="no"> EquoTransfer </span> offers a simple, risk-free and 100% legal solution. <br>
                            The user who wants to send capital abroad will have to open a <span translate="no"> EquoTransfer
                            </span> account and will
                            have to carry out the following procedure to remain in the legality and away from tax
                            assessments:
                        </p>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-blue-freedy fw-bold pb-3">Step 1</h5>
                                        <p class="card-textblack f-jakarta"><b>Top up wallet</b> (the top up is not a credit transfer and
                                            therefore is not fiscally relevant as it is not comparable to a payment).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-blue-freedy fw-bold pb-3">Step 2</h5>
                                        <p class="card-textblack f-jakarta"><b>Convert</b> the amount to export into the currency of the
                                            destination country (the currency conversion is also not fiscally relevant).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-blue-freedy fw-bold pb-3">Step 3</h5>
                                        <p class="card-textblack f-jakarta"><b>Send</b> the converted amount, via our platform, as a
                                            national transfer (with this procedure the international transfer is
                                            eliminated).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mb-5 features-text">
                        <h3 class="text-dark f-hahmlet fw-bold">How we make this service possible?</h3>
                        <div class="col-12 col-md-8 mx-auto my-4">
                            <img src="<?= base_url() ?>assets/img/img-13.png" alt="img" class="img-fluid">
                        </div>
                        <p class="col-12 col-lg-9 mx-auto f-jakarta">
                            <span translate="no"> EquoTransfer, </span> making use of the licensee company's capitals, partners and offices, in order to respect the laws in force on the matter, will not carry out an international transfer but will send a national transfer from the current account of the country of destination to the current account required by the sender, in the same country, carrying out an internal clearing only afterwards (the internal clearing procedure is 100% legal).
                        </p>
                    </div>
                </div>
            <?php } ?>
            <!-- End Capital Exportation -->

            <!-- Start Easy Trip -->
            <?php if ($guide == 3) { ?>
                <div class="col-12 my-5 features-text">
                    <div class="logo-text text-center">
                        <svg width="120" height="134" viewBox="0 0 120 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.2475 119.351C49.6651 119.351 67.8064 133.035 80.5359 133.035C93.2654 133.035 120 125.718 120 67.1573C120 8.59708 84.0343 0 70.033 0C4.46835 0 -23.5381 119.351 23.2475 119.351Z" fill="#EFEFEF"/>
                        <circle cx="109.516" cy="53.6254" r="5.29384" fill="#003B43"/>
                        <path d="M19.4519 92.6859C19.4519 95.6096 17.0818 97.9798 14.1581 97.9798C11.2344 97.9798 8.86426 95.6096 8.86426 92.6859C8.86426 89.7622 11.2344 87.3921 14.1581 87.3921C17.0818 87.3921 19.4519 89.7622 19.4519 92.6859ZM11.5782 92.6859C11.5782 94.1108 12.7333 95.2658 14.1581 95.2658C15.5829 95.2658 16.738 94.1108 16.738 92.6859C16.738 91.2611 15.5829 90.106 14.1581 90.106C12.7333 90.106 11.5782 91.2611 11.5782 92.6859Z" fill="#003B43"/>
                        <path d="M58.002 16.9565L63.4032 11.5553L66.1038 14.2559L60.7026 19.6571L58.002 16.9565Z" fill="#003B43"/>
                        <path d="M42.4727 32.4824L47.8766 27.0785L50.5772 29.7791L45.1733 35.183L42.4727 32.4824Z" fill="#003B43"/>
                        <path d="M42.4756 13.582L45.1762 10.8814L50.5801 16.2853L47.8795 18.9859L42.4756 13.582Z" fill="#003B43"/>
                        <g clip-path="url(#clip0_39_11951)">
                        <path d="M80.6791 85.1077C77.3787 87.0352 74.6345 89.7782 72.7061 93.1513L64.2881 76.9528L49.8625 91.2979L51.1233 100.565L47.2295 104.494L40.6657 92.6694L28.873 86.1456L32.8039 82.2164L42.0007 83.5138L56.4263 69.0574L28.873 54.6753L34.1019 49.4487L68.219 57.3071L82.6446 42.8878C84.7954 40.7008 88.3184 40.7008 90.5063 42.8878C92.6572 45.0748 92.6572 48.6703 90.5063 50.7461L76.0807 65.1654L80.6791 85.1077Z" fill="black"/>
                        </g>
                        <path d="M86.208 96.1171L100.029 82.4951L104.494 87.8453L86.208 105.869L75.6211 94.4855L80.0868 90.084L86.208 96.1171Z" fill="#003B43"/>
                        <defs>
                        <clipPath id="clip0_39_11951">
                        <rect width="64.6213" height="64.6213" fill="white" transform="translate(28.873 39.8726)"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <span class="fw-bold title-top-header f-hahmlet text-blue-freedy mt-4">During trips</span>
                    </div>
                </div>
                <div class="col-12 mb-5 text-center  features-text">
                    <h3 class="fw-semibold f-hahmlet">With <span translate="no"> EquoTransfer </span> your money travels with you.</h3>
                    <p class="f-jakarta col-12 col-lg-7 mx-auto mt-3">Follow few easy steps to instant convert FIAT currencies and make easy payments from wherever
                        you want
                    </p>
                </div>

                <div class="col-12 mb-5">
                    <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-green-freedy linear fw-bold ">Step 1</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-textblack">
                                        <span class="fw-bolder pb-3">
                                            Top up your wallet by bank transfers
                                        </span>
                                        <br> <br>
                                        in one of the 10 currencies that allows you to receive bank transfers.<br>
                                        You just need to follow the easy procedure that you can find in the
                                        ‘’Deposit/Receive’’ section of your wallet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-green-freedy linear fw-bold">Step 2</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-textblack">
                                        <span class="fw-bolder pb-3">
                                            Select one of the currencies
                                        </span>
                                        <br> <br>
                                        where you have the funds and
                                        Click the button ‘’Swap’’ </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-green-freedy linear fw-bold">Step 3</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-textblack">
                                        <span class="fw-bolder pb-3">
                                            Enter the amount
                                        </span>
                                        <br> <br>
                                        choose
                                        one of the 40 currencies that allows you to convert and send and
                                        click ‘’Confirm’’
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-green-freedy linear fw-bold">Step 4</h5>
                            <div class="card freedy-card text-center">
                                <div class="card-body">
                                    <p class="card-textblack">
                                        <span class="fw-bolder pb-3">
                                            Congratulations!
                                        </span>
                                        <br> <br>
                                        Now you can make easy and fast payments in the currency of the country you are in
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Easy Trip -->

            <!-- Start Daily Use -->
            <?php if ($guide == 4) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <img src="<?= base_url() ?>assets/img/icon-guide-4.svg" alt="icon">
                        <span class="f-hahmlet fw-bold text-blue-freedy">Daily use</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-8 features-text">
                            <p class="f-jakarta">
                                The wallet functions of <span translate="no"> EquoTransfer </span> are suitable for all daily
                                payments, even for small
                                amounts; everywhere in the world.
                            </p>
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy circle text-start">
                                    <ul class="ps-0 text-black f-jakarta">
                                        <li class="ali">Low and fixed fees </li>
                                        <li class="ali">Convert currencies for free during any trip</li>
                                        <li class="ali">More convenient, faster and safer than the use of cash and credit cards</li>
                                        <li class="ali">Users will be able to make any payment from his own device </li>
                                        <li class="ali">The balance will be updated in real time </li>
                                        <li class="ali">The remaining balance can be consulted directly through the specific application</li>
                                        <li class="ali">Respect of the privacy and anonymity of each user as no sms email or
                                            paper will be sent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-14.svg" alt="icon" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Daily Use -->

            <!-- Start Buy & Sell FIAT Currencies -->
            <?php if ($guide == 5) { ?>
                <div class="col-12 mt-5"></div>
                <div class="position-relative mt-5 mb-0 mb-lg-5">
                    <div class="position-absolute element-banking d-none d-lg-block">
                        <svg width="109" height="517" viewBox="0 0 109 517" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-225 4.99999C-225 2.23856 -222.761 0 -220 0H104C106.761 0 109 2.23858 109 5V512C109 514.761 106.761 517 104 517H-220C-222.761 517 -225 514.761 -225 512V4.99999Z" fill="url(#paint0_linear_104_16354)"/>
                            <defs>
                            <linearGradient id="paint0_linear_104_16354" x1="-225" y1="366.208" x2="132.954" y2="361.83" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#336c74"/>
                        <stop offset="0.444301" stop-color="#578187"/>
                        <stop offset="0.916667" stop-color="#003B43"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="position-absolute element-banking right d-none d-lg-block">
                        <svg width="109" height="517" viewBox="0 0 109 517" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-225 4.99999C-225 2.23856 -222.761 0 -220 0H104C106.761 0 109 2.23858 109 5V512C109 514.761 106.761 517 104 517H-220C-222.761 517 -225 514.761 -225 512V4.99999Z" fill="url(#paint0_linear_104_16354)"/>
                            <defs>
                            <linearGradient id="paint0_linear_104_16354" x1="-225" y1="366.208" x2="132.954" y2="361.83" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#003B43"/>
                            <stop offset="0.444301" stop-color="#578187"/>
                            <stop offset="0.916667" stop-color="#336c74"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="container p-r mb-5 pb-5">
                        <div class="row gx-0">
                            <div class="col-12 col-lg-7 mx-auto ">
                                <div class="content-freedy text-center">
                                    <div>
                                    <svg width="126" height="114" viewBox="0 0 126 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M113.039 22.0181C113.039 47.0387 126 64.2207 126 76.277C126 88.3333 119.069 113.654 63.6059 113.654C8.14245 113.654 0 79.5904 0 66.3295C0 4.23205 113.039 -22.2933 113.039 22.0181Z" fill="#EFEFEF"/>
                                    <path d="M99.2286 14.9924C96.2371 14.9924 93.8027 12.558 93.8027 9.56651C93.8027 6.57504 96.2371 4.14062 99.2286 4.14062C102.22 4.14062 104.655 6.57504 104.655 9.56651C104.655 12.558 102.22 14.9924 99.2286 14.9924ZM99.2286 7.75788C98.2339 7.75788 97.42 8.56815 97.42 9.56651C97.42 10.5649 98.2339 11.3751 99.2286 11.3751C100.223 11.3751 101.037 10.5649 101.037 9.56651C101.037 8.56815 100.223 7.75788 99.2286 7.75788Z" fill="#B6A4C1"/>
                                    <path d="M110.081 82.8425C107.09 82.8425 104.655 80.4081 104.655 77.4166C104.655 74.4251 107.09 71.9907 110.081 71.9907C113.073 71.9907 115.507 74.4251 115.507 77.4166C115.507 80.4081 113.073 82.8425 110.081 82.8425ZM110.081 75.608C109.086 75.608 108.273 76.4182 108.273 77.4166C108.273 78.415 109.086 79.2252 110.081 79.2252C111.076 79.2252 111.89 78.415 111.89 77.4166C111.89 76.4182 111.076 75.608 110.081 75.608Z" fill="#B6A4C1"/>
                                    <path d="M100.597 68.4438C100.597 82.3678 89.3351 93.6293 75.4111 93.6293L79.1889 87.3329" stroke="#003B43" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28.6387 46.8563C28.6387 32.9324 39.9002 21.6709 53.8241 21.6709L50.0463 27.9673" stroke="#003B43" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M70.7344 30.4849L85.0537 38.76L99.2295 30.5209" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M85.0537 53.4051V38.7256" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M81.6725 22.4265L73.0375 27.2115C71.0946 28.2909 69.4756 31.0253 69.4756 33.256V42.3949C69.4756 44.6256 71.0587 47.36 73.0375 48.4393L81.6725 53.2247C83.5075 54.268 86.5297 54.268 88.4006 53.2247L97.0356 48.4393C98.9785 47.36 100.598 44.6256 100.598 42.3949V33.256C100.598 31.0253 99.0145 28.2909 97.0356 27.2115L88.4006 22.4265C86.5657 21.419 83.5434 21.419 81.6725 22.4265V22.4265Z" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29.8975 70.0625L44.1812 78.3374L58.3931 70.0985" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M44.1807 92.9813V78.3018" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M40.8356 62.0041L32.2006 66.7893C30.2578 67.8687 28.6387 70.6028 28.6387 72.8335V81.9726C28.6387 84.2033 30.2218 86.9377 32.2006 88.0171L40.8356 92.8023C42.6706 93.8457 45.6928 93.8457 47.5637 92.8023L56.1987 88.0171C58.1416 86.9377 59.7607 84.2033 59.7607 81.9726V72.8335C59.7607 70.6028 58.1776 67.8687 56.1987 66.7893L47.5637 62.0041C45.6928 60.9967 42.6706 60.9967 40.8356 62.0041V62.0041Z" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                    </div>
                                    <h3 class="d-inline-block p-r f-hahmlet text-blue-freedy">
                                        Buy and sell crypto using Fiat currencies <span translate="no"> ‘’Trade-Off </span> Platform’’
                                    </h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 mx-auto text-center mt-4 features-text">
                                <p class="text-black f-jakarta">
                                    <span translate="no"> EquoTransfer </span> offers the possibility to buy and sell cryptocurrencies using FIAT, directly from any FIAT balance of your <span translate="no"> EquoTransfer </span>  wallet.
                                    <br>
                                    <span translate="no"> EquoTransfer </span> also gives the possibility to withdraw
                                    your funds by converting them INTO ANY FIAT CURRENCY; after conversion you can send your funds to any bank account, even if it is not under your name,
                                    thanks to the integrated <span translate="no"> trade-off </span> platform.
                                </p>
                                <p class="text-black f-jakarta">
                                    On <span translate="no"> EquoTransfer, </span> being a trade-off platform,  the ‘’Buy’’ and ‘’Sell’’ orders are just  ‘’LIMIT’’ orders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 mb-5 ">
                    <div class="col-12 text-center mb-5 features-text ">
                        <h3 class="fw-bold text-blue-freedy f-hahmlet">How to top up crypto wallet</h3>

                        <p class="mt-3 f-jakarta">In order to topup your <span translate="no"> EquoTransfer </span> crypto wallet follow the procedure below :</p>

                    </div>
                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">Log in to your <b class="fw-semibold" translate="no"> EquoTransfer </b> wallet and select
                                    crypto</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-1.png" alt="crypto-1">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Click top up <br> button</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-2.png" alt="">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">Select the Fiat currency that you want to convert in USDX, enter the
                                    amount and click convert</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking convert make sure that all data are correct and then click
                                    on the confirm button</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now you can start to buy and sell crypto</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5 features-text">
                        <h3 class="fw-bold f-hahmlet text-blue-freedy">How to buy and sell crypto by placing limit order</h3>

                        <p class="mt-3 col-10 mx-auto f-jakarta">
                            A buy limit order will be executed only at the limit price or a lower price and a sell limit order will be executed only at the limit price or a higher one.The price is guaranteed, but the filling of the order is not. Limit orders will be executed only if the price meets the order qualifications.
                        </p>

                        <div class="box-p-crypto p-4">
                            <p class="f-jakarta col-11 mx-auto">To start trading, enter the price you want to trade at, once you've entered the amount, you
                                can choose to enter the amount of cryptocurrency you want to buy/sell  or the USDX amount
                                you want to spend or receive.</p>
                        </div>

                        <h3 class="fw-bold f-hahmlet text-blue-freedy mt-5">How to withdraw your earning</h3>

                        <p class="mt-3 f-jakarta">
                            In order to withdraw your your funds follow the procedure below :
                        </p>

                    </div>

                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">From your wallet, in crypto section, click the button withdraw</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/crypto-3.png" alt="icon">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Enter the USDX amount that you want to convert, choose your favorite FIAT
                                    currency and click withdraw</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking withdraw make sure that all data are correct and then click
                                    on confirm</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now your balance is available on your FIAT wallet, in the
                                    chosen currency</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Now you can transfer your funds to any bank account, even if is not under
                                    your name, in more than 40 currencies</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center fw-bold">
                    <h3 class="fw-bold">Coming soon</h3>
                </div>
            <?php } ?>
            <!-- End Buy & Sell FIAT Currencies -->

            <?php if ($guide == 11) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <svg width="138" height="125" viewBox="0 0 138 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M123.356 24.0277C123.356 51.3319 137.5 70.0821 137.5 83.2388C137.5 96.3955 129.937 124.027 69.4112 124.027C8.88561 124.027 0 86.8546 0 72.3834C0 4.61831 123.356 -24.328 123.356 24.0277Z" fill="#EFEFEF"/>
                        <path d="M28.6484 100.898L23.526 94.8905L26.5297 92.3293L31.6521 98.3367L28.6484 100.898Z" fill="#003B43"/>
                        <path d="M43.375 118.171L38.25 112.16L41.2537 109.599L46.3787 115.61L43.375 118.171Z" fill="#003B43"/>
                        <path d="M23.9023 116.617L21.3411 113.613L27.3515 108.489L29.9127 111.492L23.9023 116.617Z" fill="#003B43"/>
                        <path d="M101.073 58.918V39.0201C101.073 35.4378 98.1747 32.5069 94.5599 32.5069H80.9472C79.5795 28.7292 75.9972 25.9937 71.7636 25.9937C67.53 25.9937 63.9477 28.7292 62.58 32.5069H48.9673C45.3851 32.5069 42.4541 35.4378 42.4541 39.0201V84.6126C42.4541 88.2275 45.3851 91.1259 48.9673 91.1259H68.8652C72.9685 95.1641 78.5699 97.6391 84.79 97.6391C97.3931 97.6391 107.586 87.4459 107.586 74.8428C107.586 68.6227 105.111 63.0213 101.073 58.918ZM71.7636 32.5069C73.5547 32.5069 75.0202 33.9723 75.0202 35.7635C75.0202 37.5546 73.5547 39.0201 71.7636 39.0201C69.9725 39.0201 68.507 37.5546 68.507 35.7635C68.507 33.9723 69.9725 32.5069 71.7636 32.5069ZM48.9673 84.6126V39.0201H55.4805V45.5333H88.0466V39.0201H94.5599V54.261C91.5963 52.8607 88.3072 52.0465 84.79 52.0465H55.4805V58.5598H68.8326C66.8787 60.416 65.3806 62.6305 64.2083 65.073H55.4805V71.5862H62.2543C62.0915 72.6609 61.9938 73.7356 61.9938 74.8428C61.9938 78.3599 62.8079 81.6491 64.2083 84.6126H48.9673ZM84.79 91.1259C75.8018 91.1259 68.507 83.831 68.507 74.8428C68.507 65.8546 75.8018 58.5598 84.79 58.5598C93.7783 58.5598 101.073 65.8546 101.073 74.8428C101.073 83.831 93.7783 91.1259 84.79 91.1259ZM86.4183 75.657L95.7322 81.1606L93.2898 85.1337L81.5334 78.0994V61.8164H86.4183V75.657Z" fill="black"/>
                        <path d="M107.587 74.8427C107.587 87.4327 97.3804 97.6389 84.7904 97.6389C72.2004 97.6389 61.9941 87.4327 61.9941 74.8427C61.9941 62.2526 72.2004 52.0464 84.7904 52.0464C97.3804 52.0464 107.587 62.2526 107.587 74.8427ZM68.527 74.8427C68.527 83.8247 75.8084 91.1061 84.7904 91.1061C93.7725 91.1061 101.054 83.8247 101.054 74.8427C101.054 65.8606 93.7725 58.5792 84.7904 58.5792C75.8084 58.5792 68.527 65.8606 68.527 74.8427Z" fill="#003B43"/>
                        </svg>
                        <span class="f-lexend text-blue-freedy">Essential for your trips</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3 class="text-dark">With SpeedyBank your money travels with you.</h3>
                            <p>
                                With this function integrated into your wallet, you will be able to see all the activities
                                that accept <b translate="no"> ExchangeTailor </b> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-6 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Start Search -->
            <?php if ($guide == 6) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                    <svg width="128" height="116" viewBox="0 0 128 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M114.834 22.3676C114.834 47.7853 128 65.2401 128 77.4878C128 89.7355 120.959 115.458 64.6155 115.458C8.27169 115.458 0 80.8538 0 67.3824C0 4.29922 114.834 -22.6472 114.834 22.3676Z" fill="#EFEFEF"/>
                    <path d="M26.6699 93.9272L21.9014 88.3349L24.6976 85.9507L29.4661 91.543L26.6699 93.9272Z" fill="#003B43"/>
                    <path d="M40.3789 110.007L35.608 104.412L38.4042 102.027L43.1751 107.623L40.3789 110.007Z" fill="#003B43"/>
                    <path d="M22.251 108.561L19.8667 105.764L25.4619 100.993L27.8461 103.79L22.251 108.561Z" fill="#003B43"/>
                    <path d="M70.7916 49.1673C69.5128 49.9665 68.298 50.9256 67.1471 52.0446C66.0921 53.1315 65.133 54.3144 64.3657 55.5612H54.6789V50.7658C54.6789 49.8706 55.3822 49.1673 56.2774 49.1673H70.7916ZM93.0425 42.7734H35.4971V23.5916H93.0425V42.7734ZM86.6486 29.9855H41.891V36.3794H86.6486V29.9855ZM45.088 74.743V45.9703H38.694V81.137H66.8913C65.0371 79.2188 63.6304 77.0449 62.6713 74.743H45.088Z" fill="black"/>
                    <path d="M99.4365 85.5807L103.88 81.1369L94.0336 71.2263C95.4403 69.0204 96.2395 66.3669 96.2395 63.5536C96.2395 55.5612 89.8456 49.1672 81.8532 49.1672C73.8607 49.1672 67.4668 55.5612 67.4668 63.5536C67.4668 71.546 73.8607 77.94 81.8532 77.94C84.6345 77.94 87.256 77.1407 89.4619 75.766L99.4365 85.5807Z" fill="#003B43"/>
                    <circle cx="82.0184" cy="63.4983" r="7.9373" fill="#D9D9D9"/>
                    </svg>
                        <span class="f-hahmlet fw-bolder text-blue-freedy">Search</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto features-text">
                            <p class="f-jakarta px-5">With this function integrated into your wallet, you will be able to see all the activities
                                that accept <span translate="no"> EquoTransfer </span> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-6 d-none d-md-grid mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-15.svg" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Search -->
            
            <!-- Start Findme -->
            <?php if ($guide == 7) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <div class="d-flex justify-content-center align-items-center mx-auto ">
                        <svg width="120" height="156" viewBox="0 0 120 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M90.1693 33.6722C65.9591 34.1798 49.1001 20.4312 37.4326 20.6791C25.765 20.927 -0.977133 42.7178 0.027543 103.044C1.03222 163.37 71.9348 164.628 71.9349 140.387C132.019 139.123 133.041 32.7711 90.1693 33.6722Z" fill="#EFEFEF"/>
                        <path d="M22.2161 118.144L16.0299 107.704C14.664 105.399 14.9284 102.714 16.6201 101.712L9.72474 105.797C8.03309 106.8 7.76872 109.484 9.13463 111.789L15.3208 122.23C16.6867 124.535 19.1682 125.592 20.8599 124.59L27.7552 120.504C26.0635 121.507 23.582 120.449 22.2161 118.144Z" fill="#003B43"/>
                        <path d="M118.502 68.2073C118.502 72.1398 115.314 75.3277 111.381 75.3277C107.449 75.3277 104.261 72.1398 104.261 68.2073C104.261 64.2748 107.449 61.0869 111.381 61.0869C115.314 61.0869 118.502 64.2748 118.502 68.2073ZM107.252 68.2073C107.252 70.4878 109.101 72.3365 111.381 72.3365C113.662 72.3365 115.51 70.4878 115.51 68.2073C115.51 65.9268 113.662 64.0781 111.381 64.0781C109.101 64.0781 107.252 65.9268 107.252 68.2073Z" fill="#003B43"/>
                        <circle cx="54.9915" cy="7.12039" r="7.12039" fill="#003B43"/>
                        <path d="M83.1409 70.2101H36.1204V64.3325H83.1409V70.2101ZM70.4748 93.7203H65.5083V98.6869C63.6568 101.479 62.5695 104.8 62.5695 108.414C62.5695 109.413 62.687 110.383 62.834 111.353H36.1204V93.7203H33.1816V87.8428L36.1204 73.1489H83.1409L86.0797 87.8428V91.8101C84.2283 91.1636 82.2593 90.7816 80.2022 90.7816C76.5875 90.7816 73.2666 91.8689 70.4748 93.7203ZM59.6307 93.7203H41.998V105.475H59.6307V93.7203ZM80.0846 87.8428L78.3213 79.0264H40.94L39.1768 87.8428H80.0846Z" fill="black"/>
                        <path d="M83.1412 96.6592V105.476H91.9575V111.353H83.1412V120.169H77.2636V111.353H68.4473V105.476H77.2636V96.6592H83.1412Z" fill="#003B43"/>
                        </svg>

                        </div>
                        <span class="f-hahmlet fw-bolder text-blue-freedy mt-3">Find me</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row features-text d-flex align-items-start">
                        <div class="col-12 col-md-6 text-md-start">
                            <p class="f-jakarta"><span translate="no"> EquoTransfer </span> allows you to increase the visibility of your business
                                by including it in the
                                search section that will be in every single wallet of all the users.
                                <br>
                                In this way your company will be easily accessible and traceable by all users who use
                                <span translate="no"> EquoTransfer </span> for daily payments.
                            </p>
                            <h6 class="fw-bolder f-hahmlet mt-5 " style="color: #003B43;">
                                START TO APPLY NOW FOR FIND ME SERVICE
                            </h6>
                            <form id="form-input-unique-code" action="<?=base_url()?>link/getref" method="post" class="w-100 my-3">
                                <input 
                                    type="hidden" 
                                    id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>" 
                                    class="input-unique-code"    
                                >   
                                <div class="row d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-lg-start">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-5">
                                        <input type="text" name="ucode" maxlength="8" class="input-unique-code" placeholder="Enter your Unique Code">
                                    </div>
                                    <div class="col-12 col-md-3 col-lg-2">
                                        <button type="submit" class="btn-unique-code d-flex justify-content-center align-items-center btn my-3">
                                            <span class="mx-3">
                                                Next
                                            </span>
                                            <div class="circle-btn-unique-code flex justify-content-center">
                                                <i class="ri-arrow-right-line fs-4"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="fw-bolder f-hahmlet my-5" style="color: #1D003F;">
                                How to register to FIND ME service :
                            </h6>
                            
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy line text-start d-flex flex-row">
                                
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-6 d-none d-md-block mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-17.svg" alt="img" class="img-fluid">
                        </div>
                        
                        <div class="d-none d-md-block col-12 col-lg-10 features-text mt-4">
                            <p class="f-jakarta">
                                Enter your unique code in order to validate your account, then click next and fill out all the fields that you find on the next pages, make sure to have ready an image of your business logo of and prepare the google maps link your business location
                            </p>

                            <p class="f-jakarta">
                                If you encounter problems while applying, contact our support service :
                            </p>

                            <p class="fw-semibold f-jakarta text-decoration-underline">
                                    contact@EquoTransfer.com
                            </p>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
            <!-- End Findme -->
            
            <!-- Start Collection & Payment -->
            <?php if ($guide == 8) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center features-text">
                    <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M92.1901 13.373C68.5605 13.8137 52.1058 1.87588 40.718 2.09113C29.3303 2.30638 5.54004 9.29688 6.52062 61.6778C7.5012 114.059 39.8126 121.141 52.3381 120.909C110.982 119.812 134.034 12.5905 92.1901 13.373Z" fill="#EFEFEF"/>
                        <path d="M22.5723 11.6476L27.4042 6.81569L29.8201 9.23164L24.9882 14.0635L22.5723 11.6476Z" fill="#B6A4C1"/>
                        <path d="M8.67676 25.5377L13.5111 20.7034L15.927 23.1194L11.0927 27.9537L8.67676 25.5377Z" fill="#B6A4C1"/>
                        <path d="M8.68164 8.62927L11.0976 6.21332L15.9319 11.0476L13.516 13.4636L8.68164 8.62927Z" fill="#B6A4C1"/>
                        <path d="M113.532 52.7639C110.707 52.7639 108.407 50.4645 108.407 47.6389C108.407 44.8133 110.707 42.5139 113.532 42.5139C116.358 42.5139 118.657 44.8133 118.657 47.6389C118.657 50.4645 116.358 52.7639 113.532 52.7639ZM113.532 45.9306C112.593 45.9306 111.824 46.6959 111.824 47.6389C111.824 48.5819 112.593 49.3472 113.532 49.3472C114.472 49.3472 115.241 48.5819 115.241 47.6389C115.241 46.6959 114.472 45.9306 113.532 45.9306Z" fill="#B6A4C1"/>
                        <path d="M96.5208 38.4375H26.4792C24.5932 38.4375 23.e68 23.0625 35.0208V26.4792C23.0625 24.5932 24.5932 23.0625 26.4792 23.0625H96.5208C98.4068 23.0625 99.9375 24.5932 99.9375 26.4792V35.0208C99.9375 36.9068 98.4068 38.4375 96.5208 38.4375Z" fill="#003B43"/>
                        <path d="M92.25 69.1875C88.0031 69.1875 84.5625 65.7469 84.5625 61.5C84.5625 57.2531 88.0031 53.8125 92.25 53.8125C96.4969 53.8125 99.9375 57.2531 99.9375 61.5C99.9375 65.7469 96.4969 69.1875 92.25 69.1875Z" fill="#003B43"/>
                        <path d="M92.25 99.9375C88.0031 99.9375 84.5625 96.4969 84.5625 92.25C84.5625 88.0031 88.0031 84.5625 92.25 84.5625C96.4969 84.5625 99.9375 88.0031 99.9375 92.25C99.9375 96.4969 96.4969 99.9375 92.25 99.9375Z" fill="#003B43"/>
                        <path d="M30.75 35.0208V26.4792C30.75 24.5932 32.2807 23.0625 34.1667 23.0625H26.4792C24.5932 23.0625 23.0625 24.5932 23.0625 26.4792V35.0208C23.0625 36.9068 24.5932 38.4375 26.4792 38.4375H34.1667C32.2807 38.4375 30.75 36.9068 30.75 35.0208Z" fill="#D5DBE1"/>
                        <path d="M92.25 61.5C92.25 58.6608 93.8046 56.211 96.0938 54.8785C94.9594 54.2191 93.6577 53.8125 92.25 53.8125C88.0031 53.8125 84.5625 57.2531 84.5625 61.5C84.5625 65.7469 88.0031 69.1875 92.25 69.1875C93.6577 69.1875 94.9594 68.7809 96.0938 68.1215C93.8046 66.789 92.25 64.3393 92.25 61.5Z" fill="#003B43"/>
                        <path d="M92.25 92.25C92.25 89.4108 93.8046 86.961 96.0938 85.6285C94.9594 84.9691 93.6577 84.5625 92.25 84.5625C88.0031 84.5625 84.5625 88.0031 84.5625 92.25C84.5625 96.4969 88.0031 99.9375 92.25 99.9375C93.6577 99.9375 94.9594 99.5309 96.0938 98.8715C93.8046 97.539 92.25 95.0893 92.25 92.25Z" fill="#003B43"/>
                        <path d="M96.5228 40.9998H26.4811C23.184 40.9998 20.502 38.3177 20.502 35.0206V26.4789C20.502 23.1818 23.184 20.4998 26.4811 20.4998H96.5228C99.8199 20.4998 102.502 23.1818 102.502 26.4789V35.0206C102.502 38.3177 99.8199 40.9998 96.5228 40.9998ZM26.4811 25.6248C26.0096 25.6248 25.627 26.0074 25.627 26.4789V35.0206C25.627 35.4921 26.0096 35.8748 26.4811 35.8748H96.5228C96.9943 35.8748 97.3769 35.4921 97.3769 35.0206V26.4789C97.3769 26.0074 96.9943 25.6248 96.5228 25.6248H26.4811Z" fill="black"/>
                        <path d="M23.0625 54.6665H72.6042V59.7915H23.0625V54.6665Z" fill="black"/>
                        <path d="M23.0625 64.9161H72.6042V70.0411H23.0625V64.9161Z" fill="black"/>
                        <path d="M23.0625 85.4165H72.6042V90.5415H23.0625V85.4165Z" fill="black"/>
                        <path d="M23.0625 95.6664H72.6042V100.791H23.0625V95.6664Z" fill="black"/>
                        <path d="M92.252 71.7498C86.6008 71.7498 82.002 67.1509 82.002 61.4998C82.002 55.8486 86.6008 51.2498 92.252 51.2498C97.9031 51.2498 102.502 55.8486 102.502 61.4998C102.502 67.1509 97.9031 71.7498 92.252 71.7498ZM92.252 56.3748C89.4264 56.3748 87.127 58.6742 87.127 61.4998C87.127 64.3253 89.4264 66.6248 92.252 66.6248C95.0775 66.6248 97.377 64.3253 97.377 61.4998C97.377 58.6742 95.0775 56.3748 92.252 56.3748Z" fill="black"/>
                        <path d="M92.252 102.5C86.6008 102.5 82.002 97.9009 82.002 92.2497C82.002 86.5986 86.6008 81.9998 92.252 81.9998C97.9031 81.9998 102.502 86.5986 102.502 92.2497C102.502 97.9009 97.9031 102.5 92.252 102.5ZM92.252 87.1248C89.4264 87.1248 87.127 89.4242 87.127 92.2497C87.127 95.0753 89.4264 97.3747 92.252 97.3747C95.0775 97.3747 97.377 95.0753 97.377 92.2497C97.377 89.4242 95.0775 87.1248 92.252 87.1248Z" fill="black"/>
                    </svg>
                        <span class="f-hahmlet title-top-header fw-bolder text-blue-freedy mt-4">Collections and Payments</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="content-freedy">
                        <div class="row features-text mx-auto">
                            <div class="col-12 col-md-7">
                                <p class="f-jakarta">
                                    <span translate="no"> EquoTransfer </span> offers your company, a multi-currency collection
                                    and payment system that
                                    can
                                    be easily integrated into your e-commerce :
                                </p>
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <div class="content-freedy circle text-start d-flex flex-row">
                                        <ul class="ps-0 f-jakarta">
                                            <li class="ali text-black">Integration is free of charge</li>
                                            <li class="ali text-black">No monthly and no annual fees</li>
                                            <li class="ali text-black">Collections in real time from users of the <span translate="no"> EquoTransfer </span> circuit
                                            </li>
                                            <li class="ali text-black">Cheaper than credit cards</li>
                                            <li class="ali text-black">Reception and sending of national and international bank transfers at the lowest rates on the market</li>
                                            <li class="ali text-black">100% secure and free custody of funds</li>
                                            <li class="ali text-black">Possibility of converting instantly to and from other currencies.</li>
                                            <li class="ali text-black">Eliminates the problem of tedious changes compared to the use of
                                                cash</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-5 d-none d-md-block ">
                                <img src="<?= base_url() ?>assets/img/img-16.svg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-12 features-text">
                                <h4 class="text-dark f-jakarta">Request the service by contacting : ........@trackless.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Collection & Payment -->
        </div>
    </div>
</section><!-- End Hero -->


<!-- Notifikasi -->
<?php if (@isset($_SESSION["success"])) { ?>
<div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["success"]; ?>
</div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
<div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["failed"]; ?>
</div>
<?php } ?>