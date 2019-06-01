<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
    <style>
        .invalid-feedback {
            display: block;
        }
    </style>
</head>

{{--///////////////////////////////////////////////////////////////////////////////--}}


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-left">GET IN TOUCH</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6 input-box ">
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <form method="post" action="{{ route('contact.store') }}"> {{csrf_field()}}

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
                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1"  rows="3">text</textarea>
                    @if ($errors->has('text'))
                        <small class="form-text invalid-feedback">{{ $errors->first('text') }}</small>
                    @endif
                </div>

        </div>

        <div class=" col-6 pt-4">
            <div class="two-form-check-input d-flex">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="mail">
                    <label class="form-check-label" for="exampleRadios1">
                        mail
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="femail">

                    <label class="form-check-label" for="exampleRadios2">
                        femail
                    </label>
                    @if ($errors->has('gender'))
                        <small class="form-text invalid-feedback">{{ $errors->first('gender') }}</small>
                    @endif
                </div>
            </div>

            <div class="Sign-up-box">
                <h6>
                    Sign up for newsletter:
                </h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="r_images"  value="r_images" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        recive images
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="r_promotiond"  value="r_promotiond" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        recive promotions
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="r_updates"  value="r_updates" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        recive updates
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="r_job_offers"  value="r_job_offers" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        recive job offers
                    </label>
                </div>
                <div class="row">
                    <div class="col-12 button text-right">
                        <button name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





