<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>modal_adduser</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="../css/bootstrap-select.min.css">



    <!-- Style -->
    <link rel="stylesheet" href="../css/style_multi.css">


    <link href="../css/modal1_addusername.css" rel="stylesheet" />



    <script src="https://kit.fontawesome.com/9d5313112d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">








</head>

<body>
    <div class="container">


        <div class="row mb-4">
            <div class="col text-center">
                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" itemid="carousel">
                            <div class="carousel-indicators ci">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="modal_body">
                                        <div class="logo"><img src="../images/_Bunz+logo+black+Copy.png" alt=""></div>
                                        <div class="heading">Pick a Username </div>
                                        <div class="form"><label class="label">Username</label><input class="input" type="text " placeholder="Username " class="input " /></div>
                                        <div class="profile_logo"><img src="../images/4.jpg" alt=""></div>
                                    </div>
                                </div>
                                <div class="carousel-item" style="margin-bottom:20rem;">
                                    <div class=" modal_body ">
                                        <div class="heading ">Create Your List</div>
                                        <div class="container text-left ">
                                            <div class="row justify-content-end ">
                                                <div class="col-md-12">
                                                    <select class="selectpicker form-control" multiple>
                                                        <option value="AL ">Alabama</option>
                                                        <option value="AK ">Alaska</option>
                                                        <option value="AZ ">Arizona</option>
                                                        <option value="AR ">Arkansas</option>
                                                        <option value="CA ">California</option></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="modal_body">
                                        <div class="logo"><img src="../images/_Bunz+logo+black+Copy.png" alt=""></div>
                                        <div class="heading">Registration Finished
                                            <h1><span>Almost done 🎉</span></h1>
                                            <p><span>Check your inbox to confirm your email to be able to activate your wallet,<br> create posts, and interact with other Bunz users.</span></p>
                                        </div>

                                        <div class="profile_logo"><img src="../images/4.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev " type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide="prev ">
                                <span class="carousel-control-prev-icon " aria-hidden="true " ><i class="fa-solid fa-circle-chevron-left "></i></span>
                              <span class="visually-hidden " style="color: black; ">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button " data-bs-target="#carouselExampleIndicators " data-bs-slide="next ">
                              <span class="carousel-control-next-icon " aria-hidden="true "><i class="fa-solid fa-circle-chevron-right " style="color: black; "></i></span>
                              <span class="visually-hidden ">Next</span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>




    <script>
        $('.carousel').carousel({
            interval: false,
        });
    </script>
    <script src="../js/jquery-3.3.1.min.js "></script>
    <script src="../js/popper.min.js "></script>
    <script src="../js/bootstrap.min.js "></script>
    <script src="../js/bootstrap-select.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js " integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2 " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>


    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script>
    </script>

    <script src="js/main.js"></script>
</body>

</html>