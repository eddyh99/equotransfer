<div class="navbar-app fixed-top d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex flex-row justify-content-start align-items-center bottom">
        <a href="<?= base_url() ?>homepage" class="d-flex align-items-center border-0 ms-0 me-auto">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <img src="<?= base_url() ?>assets/img/logo.png" alt="logo">
            </div>
        </a>
        <a href="<?= base_url() ?>search" class=" icon-soon align-items-center border-0 mx-2">
            <div class="icon-menus d-flex align-items-center home-svg py-0">
                <svg width="34" height="29" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.787598" width="32.5366" height="29" rx="2" fill="#003B43"/>
                    <path d="M24.7876 22L20.9209 18.1333M15.8987 8.66667C18.3533 8.66667 20.3432 10.6565 20.3432 13.1111M23.0098 13.1111C23.0098 17.0385 19.8261 20.2222 15.8987 20.2222C11.9714 20.2222 8.7876 17.0385 8.7876 13.1111C8.7876 9.18375 11.9714 6 15.8987 6C19.8261 6 23.0098 9.18375 23.0098 13.1111Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </a>
    </div>
</div>

<div class="navbar-app fixed-bottom d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6 box-navbar-freedy d-flex justify-content-center align-items-center top">
        <a href="<?= base_url() ?>homepage" class="d-flex align-items-center me-auto">
            <div class="icon-menus d-flex align-items-center home-svg">
                <svg width="30" height="39" viewBox="0 0 34 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.7917 34.7666V23.5166C21.7917 22.9643 21.344 22.5166 20.7917 22.5166H12.375C11.8227 22.5166 11.375 22.9643 11.375 23.5166V34.7666" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 17.9421C2 15.17 2 13.784 2.57179 12.5656C3.14359 11.3473 4.21743 10.4453 6.36511 8.64121L8.44844 6.89121C12.3304 3.6304 14.2713 2 16.5833 2C18.8954 2 20.8363 3.6304 24.7182 6.89121L26.8016 8.64121C28.9492 10.4453 30.0231 11.3473 30.5949 12.5656C31.1667 13.784 31.1667 15.17 31.1667 17.9421V26.5996C31.1667 30.4494 31.1667 32.3743 29.9463 33.5702C28.7259 34.7662 26.7617 34.7662 22.8333 34.7662H10.3333C6.40496 34.7662 4.44078 34.7662 3.22039 33.5702C2 32.3743 2 30.4494 2 26.5996V17.9421Z" stroke="#003B43" stroke-width="4"/>
                </svg>

            </div>
            <span class="ps-2 fs-6" style="color:#003B43">Home</span>
        </a>
        <a href="<?= base_url() ?>auth/logout" class="d-flex align-items-center logout">
            <div class="icon-menus d-flex align-items-center home-svg">
                <span class="fs-6 py-0 py-md-1">Log out</span>
            </div>
        </a>
    </div>
</div>