<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/settings.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Settings</title>
</head>

<body>
    <div class="container">
        <div class="content">

            <div class="change_img">
                <div class="img">
                    <img src="images/4.jpg" alt="">
                </div>
                <div class="button">
                    <button class="btns1">Change Profile Picture</button>
                </div>
            </div>

            <div class="des">

                <div class="profile">
                    <h1>
                        Account Settings</h1>
                    <h2>Email</h2>
                    <p>@email.com</p>
                    <h2>Password</h2>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn  btns2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Change Password
  </button>
                    <h2 style="margin-top: 1rem;">Deactivate Account</h2>
                    <button type="button" class="btn  btns2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Deactivate Account
  </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="pass">

                                        <input type="password " placeholder="Old Password " class="input " style=" margin-bottom: 1rem; border: #d9d9d9ff; border-bottom: 1px solid #3c6e71ff;" />
                                        <input type="password " placeholder="New Password " class="input" style=" margin-bottom: 1rem; border: #d9d9d9ff; border-bottom: 1px solid #3c6e71ff; " /></div>
                                </div>
                                <div class="modal-footer ">

                                    <button type="button " class="btn btns2 ">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>


</body>

</html>