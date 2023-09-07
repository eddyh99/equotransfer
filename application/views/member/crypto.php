<div class="navbar-app fixed-top d-flex justify-content-center" style="background-color: #1E1E1E;">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom"
        style="background-color: #1E1E1E;">
        <a href="<?= base_url() ?>homepage" class="d-flex align-items-center border-0 ms-0 me-auto">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <img src="<?= base_url() ?>assets/img/logo2.png" alt="logo">
            </div>
        </a>

    </div>
</div>

<div class="navbar-app fixed-bottom d-flex justify-content-center" style="background-color: #1E1E1E;">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex justify-content-end align-items-center top"
        style="background-color: #1E1E1E;">
        <a href="<?= base_url() ?>auth/logout" class="d-flex align-items-center logout">
            <div class="icon-menus d-flex align-items-center home-svg">
                <span class="fs-6 py-0 py-md-1">Log out</span>
            </div>
        </a>
    </div>
</div>
<div class="d-flex justify-content-center" style="background-color: #1E1E1E; height: 100vh;">
    <div class="col-12 col-lg-8 col-xl-6" style="background-color: #1E1E1E;">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <div class="row" style="margin-top: 5rem;">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 box-code-freedy px-4 py-3">
                            <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                                <span class="me-2 text-white">UNIQUE CODE : </span>
                                <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>"
                                    readonly style="color: #fff;">
                                <a class="btn btn-copy me-2" id="btnuq">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#003B43" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="text-white">Copy & share your referral link to earn money</span>
                            <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                                <input class="me-2" type="text" name="" id="refcode"
                                    value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                                <a class="btn btn-copy me-2" id="btnref">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#003B43" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="w-100 text-center">
                                <div class="d-inline-block btn-head-crypto">
                                    <a class="crypto px-4 py-2" href="<?= base_url() ?>homepage/">FIAT</a>
                                    <a class="crypto px-4 py-2 active"
                                        href="<?= base_url() ?>homepage/crypto">CRYPTO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="receive-title d-flex flex-row justify-content-center align-items-center my-5">
                            <span>COMING SOON!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>