<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylelogin.css">

</head>

<body>
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input type="text" placeholder="Username" class="input" />
                <input type="email" placeholder="Email" class="input" />
                <label class="select" for="slct">
                    <select id="slct" required="required">
                      <option value="" disabled="disabled" selected="selected">Gender</option>
                      <option value="#">Male</option>
                      <option value="#">Female</option>
                      <option value="#">Other</option>
                     
                    </select>
                    <!-- SVG Sprites-->
<svg class="sprites">
    <symbol id="select-arrow-down" viewbox="0 0 10 6">
      <polyline points="1 1 5 5 9 1"></polyline>
    </symbol>
  </svg>

                <input type="text " placeholder="Username " class="input " />
                <input type="email " placeholder="Email " class="input " />
                <input type="password " placeholder="Password " class="input " />
                <button class="btn">Sign Up</button>
            </form>
        </div>
        <!-- Sign In -->
        <div class="container__form container--signin">

            <form action="#" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="email" placeholder="Email" class="input" />
                <input type="password" placeholder="Password" class="input" />

                <p class="liw"> Log in with</p>
                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>
                <button class="btn">Sign In</button>

            </form>

        </div>
        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");
        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });
        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });
        fistForm.addEventListener("submit", (e) => e.preventDefault());
        secondForm.addEventListener("submit", (e) => e.preventDefault());
    </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>