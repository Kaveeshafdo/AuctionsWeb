
    <header class="p">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="logo" src="images/_Bunz+logo+black+Copy.png" alt="" />
                </a>

                <div class="forms col-12 col-lg-6 mb- mb-lg-0 me-lg-12 ">
                    <div class="s003">
                        <form>
                            <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="input-select">
                                        <select data-trigger="" name="choices-single-defaul">
                                            <option placeholder="">Category</option>
                                            <option>New Arrivals</option>
                                            <option>Sale</option>
                                            <option>Ladies</option>
                                            <option>Men</option>
                                            <option>Clothing</option>
                                            <option>Footwear</option>
                                            <option>Accessories</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-field second-wrap">
                                    <input id="search" type="text" placeholder="Enter Keywords?" />
                                </div>
                                <div class="input-field third-wrap">
                                    <button class="btn-search" type="button">
                                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true"
                                            data-prefix="fas" data-icon="search" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor"
                                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-end">
                    <button type="button" class="btn me-3 login">Login</button>
                    <button type="button" class="btn me-3 signup">Sign-up</button>
                    <button type="button" class="btn user">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <script src="js/extention/choices.js"></script>
    <script>
        const choices = new Choices("[data-trigger]", {
            searchEnabled: false,
            itemSelectText: "",
        });
    </script>
    <script src="https://kit.fontawesome.com/9d5313112d.js" crossorigin="anonymous"></script>

