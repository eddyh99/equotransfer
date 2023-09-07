<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">

                <div class="row" style="margin-top: 5rem;">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3">

                            <div class="d-flex  flex-row">
                                <div class="d-flex flex-column">
                                    <div class="copy-uqcode mt-3 mb-2 me-4 d-flex flex-row align-items-center">
                                        <span class="me-2">Short Code : </span>
                                        <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                                        <a class="btn btn-copy me-2" id="btnuq">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#003B43" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fs-6 my-2">Copy & share your referral link to earn money</span>
                                        <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                            <input class="me-2 ps-2 py-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly >
                                            <a class="btn btn-copy me-2" id="btnref">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#003B43" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?= base_url()?>homepage/preview_qr" target="_blank" class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center">
                                    <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="90" height="90">
                                    <div>
                                        <img class="img-fluid d-block d-sm-none" src="<?=base_url()?>assets/img/btn-qrdw-mobile.png" alt="dw-qr" width="15" height="auto">
                                    </div>
                                    <div>
                                        <img class="img-fluid d-none d-sm-block" src="<?=base_url()?>assets/img/btn-qrdw.png" alt="dw-qr" width="45" height="auto">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 text-center mt-4">
                                <div class="d-inline-block btn-head-crypto">
                                    <a class="crypto px-4 py-2 active" href="<?= base_url() ?>homepage/">FIAT</a>
                                    <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row d-flex justify-content-center">
                    
                    <div class="row col-12 col-md-10 d-flex justify-content-center">
                        <div class="col-12 mx-auto my-5">
                            <h1 class="text-blue-freedy fw-bolder f-hahmlet text-center">Dashboard</h1>
                        </div>

                        <div class="col-12 menus-list-app mb-2">
                            <div class="row currencies-card mx-auto">
                                <div class="col-12 col-md-6 text-center mx-auto">
                                    <a href="<?= base_url() ?>homepage/setting_currency" class=" d-flex align-items-center justify-content-center p-2 my-2">
                                        <!-- <img src="<?= base_url()?>assets/img/select-currencies.png" alt="gear"> -->
                                        <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.72505 28.4983C0.979415 27.1096 0.399803 25.625 0 24.0797C0.870121 23.6031 1.60086 22.8765 2.11138 21.9804C2.6219 21.0842 2.8923 20.0535 2.89267 19.0021C2.89303 17.9508 2.62335 16.9198 2.11345 16.0232C1.60355 15.1267 0.873317 14.3995 0.00352787 13.9222C0.800852 10.8172 2.31899 7.98187 4.41492 5.68336C5.23351 6.25654 6.18339 6.57461 7.15943 6.60238C8.13548 6.63016 9.09963 6.36654 9.94518 5.84072C10.7907 5.31489 11.4847 4.54736 11.9503 3.62307C12.4159 2.69877 12.635 1.65376 12.5833 0.603667C15.4798 -0.202508 18.5191 -0.2012 21.4149 0.607467C21.3637 1.65753 21.5832 2.70239 22.0492 3.62643C22.5151 4.55046 23.2094 5.31763 24.0551 5.84305C24.9008 6.36847 25.865 6.63165 26.841 6.60347C27.817 6.57529 28.7667 6.25684 29.5851 5.68336C30.6063 6.80417 31.513 8.07884 32.275 9.50169C33.0387 10.9245 33.6102 12.4082 34 13.9203C33.1299 14.3969 32.3991 15.1235 31.8886 16.0196C31.3781 16.9158 31.1077 17.9465 31.1073 18.9979C31.107 20.0492 31.3767 21.0802 31.8865 21.9768C32.3964 22.8733 33.1267 23.6005 33.9965 24.0778C33.1991 27.1828 31.681 30.0181 29.5851 32.3166C28.7665 31.7435 27.8166 31.4254 26.8406 31.3976C25.8645 31.3698 24.9004 31.6335 24.0548 32.1593C23.2093 32.6851 22.5153 33.4526 22.0497 34.3769C21.5841 35.3012 21.365 36.3462 21.4167 37.3963C18.5202 38.2025 15.4809 38.2012 12.5851 37.3925C12.6363 36.3425 12.4168 35.2976 11.9508 34.3736C11.4849 33.4495 10.7906 32.6824 9.9449 32.1569C9.09918 31.6315 8.13498 31.3683 7.15899 31.3965C6.183 31.4247 5.23328 31.7432 4.41492 32.3166C3.37247 31.171 2.46868 29.8881 1.72505 28.4983ZM11.7084 28.8706C13.5881 30.0382 15.0013 31.912 15.6771 34.1327C16.5573 34.222 17.441 34.2239 18.3211 34.1346C18.9974 31.9136 20.4113 30.0398 22.2916 28.8725C24.1704 27.7018 26.3846 27.3195 28.5091 27.7992C29.0206 27.0242 29.4616 26.1978 29.8285 25.3335C28.3811 23.5923 27.5815 21.337 27.5831 19C27.5831 16.6064 28.4121 14.3705 29.8285 12.6665C29.459 11.8025 29.0162 10.977 28.5056 10.2008C26.3824 10.6801 24.1697 10.2986 22.2916 9.12935C20.4119 7.96177 18.9987 6.08796 18.3229 3.86729C17.4427 3.778 16.559 3.7761 15.6789 3.86539C15.0026 6.08637 13.5887 7.96022 11.7084 9.12745C9.82956 10.2982 7.61539 10.6805 5.49087 10.2008C4.98035 10.9764 4.53862 11.8019 4.17151 12.6665C5.61887 14.4077 6.41845 16.663 6.41689 19C6.41689 21.3936 5.58788 23.6295 4.17151 25.3335C4.54098 26.1975 4.98383 27.023 5.4944 27.7992C7.61757 27.3199 9.83031 27.7014 11.7084 28.8706ZM17 24.699C15.5966 24.699 14.2507 24.0986 13.2583 23.0298C12.2659 21.961 11.7084 20.5115 11.7084 19C11.7084 17.4885 12.2659 16.039 13.2583 14.9702C14.2507 13.9014 15.5966 13.301 17 13.301C18.4034 13.301 19.7493 13.9014 20.7417 14.9702C21.7341 16.039 22.2916 17.4885 22.2916 19C22.2916 20.5115 21.7341 21.961 20.7417 23.0298C19.7493 24.0986 18.4034 24.699 17 24.699ZM17 20.8997C17.4678 20.8997 17.9164 20.6995 18.2472 20.3433C18.578 19.987 18.7639 19.5038 18.7639 19C18.7639 18.4962 18.578 18.013 18.2472 17.6567C17.9164 17.3005 17.4678 17.1003 17 17.1003C16.5322 17.1003 16.0836 17.3005 15.7528 17.6567C15.422 18.013 15.2361 18.4962 15.2361 19C15.2361 19.5038 15.422 19.987 15.7528 20.3433C16.0836 20.6995 16.5322 20.8997 17 20.8997Z" fill="#003B43" fill-opacity="0.9"/>
                                        </svg>
                                        <span class="ms-2 f-roboto text-blue-freedy fw-bolder btn-select-currencies">Select Currencies</span>
                                    </a>
                                </div>
                                <div id="btn-card-load" class="col-12 col-md-6 text-center mx-auto">
                                    <a href="<?= base_url() ?>card" class="d-flex align-items-center justify-content-center p-2 my-2 ">
                                        <!-- <img class="" src="<?= base_url()?>assets/img/cardhome.png" alt="card"> -->
                                        <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.75 4.5C0.75 2.61438 0.75 1.67157 1.33579 1.08579C1.92157 0.5 2.86438 0.5 4.75 0.5H43.25C45.1356 0.5 46.0784 0.5 46.6642 1.08579C47.25 1.67157 47.25 2.61438 47.25 4.5V27.5C47.25 29.3856 47.25 30.3284 46.6642 30.9142C46.0784 31.5 45.1356 31.5 43.25 31.5H4.75C2.86438 31.5 1.92157 31.5 1.33579 30.9142C0.75 30.3284 0.75 29.3856 0.75 27.5V4.5Z" fill="#1A4F56"/>
                                            <ellipse cx="8.49996" cy="23.7498" rx="2.58333" ry="2.58333" fill="url(#paint0_linear_260_8683)"/>
                                            <rect x="0.75" y="8.25" width="46.5" height="5.16667" fill="url(#paint1_linear_260_8683)"/>
                                            <defs>
                                            <linearGradient id="paint0_linear_260_8683" x1="8.49996" y1="21.1665" x2="8.49996" y2="26.3332" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.510417" stop-color="#FFCE00"/>
                                            <stop offset="1" stop-color="#FFCE00"/>
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_260_8683" x1="24" y1="8.25" x2="24" y2="13.4167" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.510417" stop-color="#FFCE00"/>
                                            <stop offset="1" stop-color="#FFCE00"/>
                                            </linearGradient>
                                            </defs>
                                        </svg>
                                        <span class="ms-5 f-roboto text-blue-freedy fw-bolder btn-select-currencies">Card</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 curencies-list-app">
                            <div class="col-12">
                                <?php foreach ($currency as $dt) {
                                    if ($dt->status == 'active') {
                                        if (($dt->currency == "USD") || ($dt->currency == "EUR")) {
                                ?>
                                            <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                                <span class="me-auto"><?= $dt->currency ?></span>
                                                <span><?= $dt->symbol; ?>
                                                    <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                            </a>
                                <?php }
                                    }
                                }
                                ?>
                                <?php foreach ($currency as $dt) {
                                    if ($dt->status == 'active') {
                                        if (($dt->currency != "USD") && ($dt->currency != "EUR")) {
                                ?>
                                            <a href="<?= base_url() ?>homepage/wallet?cur=<?= $dt->currency ?>" class="d-flex flex-row justify-content-center align-items-center curencies-list py-4 px-3 my-2">
                                                <span class="me-auto"><?= $dt->currency ?></span>
                                                <span><?= $dt->symbol; ?>
                                                    <?= substr(number_format($dt->balance, 4), 0, -2) ?></span>
                                            </a>
                                <?php }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>