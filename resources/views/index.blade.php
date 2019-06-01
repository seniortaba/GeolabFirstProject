<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
</head>

<body>
<!-- background-img -->
<section class="fluid-container position-relative">

    <div class="icon-fas burger-icon" id="toogle">
        <i class="fas fa-bars" id="bar"></i>
        <i class="fas fa-times" id="delete" style="display: none; color: red;"></i>
    </div>

    <div class="background-img d-flex justify-content-between ">
        <img src="{{ asset('images/frontend_images/logo.png') }}" alt="logo">

        <div class="Auto-exhibition position-absolute">
            <h3 class="date  text-right">
                27.11.
            </h3>
            <h3 class="roboto text-uppercase">
                Vintage Auto Exhibition
            </h3>
        </div>
    </div>

    <div class="balls position-absolute">
    </div>

    <div class="opacity position-absolute" id="menu-bg">
    </div>

    <div class="opacity-menu position-absolute" id="menu-content">
        <img src="{{ asset('images/frontend_images/red-logo.png') }}" alt="logo">
        <div class="mtavari">
            <h3 class="roboto text-uppercase">
                home
            </h3>
            <h3 class="roboto text-uppercase">
                services
            </h3>
            <h3 class="roboto text-uppercase">
                contact
            </h3>
        </div>
    </div>
</section>

<!-- icon-section -->
<section class="fluid-container">
    <div class="container icon-section">
        <h2 class="text-center roboto text-uppercase">The corner garage for collector cars</h2>
        <div class="row ">
            <div class="col-4 col-lg-4 col-md-4 col-sm-12 box text-center">
                <div class="bg-light">
                    <img src="{{ asset('images/frontend_images/modify.png') }}" alt="icon">
                    <h3 class="roboto text-uppercase">modify</h3>
                </div>
            </div>
            <div class="col-4 col-lg-4 col-md-4 col-sm-12 box text-center">
                <div class="bg-light">
                    <img src="{{ asset('images/frontend_images/car.png') }}" alt="icon">
                    <h3 class="roboto text-uppercase">buy</h3>
                </div>
            </div>
            <div class="col-4 col-lg-4 col-md-4 col-sm-12 box text-center">
                <div class="bg-light">
                    <img src="{{ asset('images/frontend_images/setting.png') }}" alt="icon">
                    <h3 class="roboto text-uppercase">repair</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fluid-container animation-section position-relative">
    <div class="background-mountains">
    </div>
    <div class="background-trees position-absolute">
    </div>
    <div class="background-bus position-absolute">
    </div>
    <div class="background-way position-absolute">
    </div>
</section>
<section class="container">
    @if (Session::has('flash_message'))
        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif
    <form method="post" action="{{ route('contact.store') }}"> {{csrf_field()}}

        <div class="map-section position-relative">

            <iframe class="position-absolut"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.471050675869!2d44.74190721573583!3d41.79661192848808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446e1375b6850f%3A0xf7ebfe7742d5c7f1!2sNew+Dighomi%2C+Tbilisi!5e0!3m2!1sen!2sge!4v1558865906793!5m2!1sen!2sge"
                    width="100%" height="600" frameborder="0" style="border:0" allowfullscreen>
            </iframe>


            <div class="row  Two-boxes">
                <div class="col-4 d-lg-none d-xl-block p-6 beige-box ">
                    <div class="beige-box-text">
                        <h1 class="text-uppercase roboto">contact
                            information</h1>
                        <h3 class="text-center text-uppercase roboto">click to <br>
                            view</h3>
                        <div class="icon-boxs d-flex justify-content-center">
                            <div class="google-icon text-center m-1">
                                <i class="fab fa-google-plus-g "></i>
                            </div>
                            <div class="google-icon text-center m-1">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="google-icon text-center m-1">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8   p-4 white-box">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-left text-uppercase roboto">GET IN TOUCH</h1>
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-12 col-md-6 input-box ">

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput"  placeholder="name">
                                @if ($errors->has('name'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                                @endif
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="email">
                                @if ($errors->has('email'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                @endif
                                <input type="text" name="subject" class="form-control" id="formGroupExampleInput"
                                       placeholder="subject">
                                @if ($errors->has('subject'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('subject') }}</small>
                                @endif
                                <textarea name="text" class="form-control roboto " id="exampleFormControlTextarea1" rows="3">text</textarea>
                                @if ($errors->has('text'))
                                    <small class="form-text invalid-feedback">{{ $errors->first('text') }}</small>
                                @endif
                            </div>

                        </div>

                        <div class="col-12 col-md-6 pt-4">
                            <div class="two-form-check-input d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="exampleRadios1" value="option1">
                                    <label class="form-check-label roboto" for="exampleRadios1">
                                        male
                                    </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="exampleRadios2" value="option2">
                                    <label class="form-check-label roboto" for="exampleRadios2">
                                        female
                                    </label>
                                    @if ($errors->has('gender'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('gender') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="Sign-up-box">
                                <h6 class="text-uppercase roboto">
                                    Sign up for newsletter:
                                </h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label roboto" for="defaultCheck1">
                                        recive images
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label roboto" for="defaultCheck2">
                                        recive promotions
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label roboto" for="defaultCheck1">
                                        recive updates
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label roboto" for="defaultCheck2">
                                        recive job offers
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-12 button text-right">
                            <button type="submit" name="submit" class="btn btn-outline-dark">send</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</section>
<footer class="footer container-fluid">
    <div class="row text-center">
        <div class="col-6">
            <h6 class="text-left roboto"> © copyright 2017</h6>
        </div>
        <div class="col-6 text-right">
            <h6 class="roboto">created by: name surname</h6>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {

        $("#toogle").click(function () {
            $("#menu-bg").toggle("slow", function () {

            });
            $("#menu-content").toggle("slow", function () {

            });
            $("#bar").toggle("slow", function () {

            });
            $("#delete").toggle("slow", function () {

            });
        })
    });





</script>
</body>

</html>