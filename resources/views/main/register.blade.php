@extends('layout')

@section('content')
    <!-- Page Title Section Start -->
    <div class="page-title-section section">
        <div class="page-title">
            <div class="container">
                <h1 class="title">Sign Up</h1>
            </div>
        </div>
        <div class="page-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Sign Up</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!--Login Register section start-->
    <div class="login-register-section section section-padding-bottom">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">

                        <div class="col-xl-6 offset-xl-1 col-lg-6">
                            <!-- Register Form Start -->
                            <div class="login-form-wrapper mt-sm-50 mt-xs-50">
                                <h3 class="title">Register</h3>
                                <form class="register-form" action="#">
                                    <div class="single-input mb-30">
                                        <label for="usernameOne">Username</label>
                                        <input type="text" id="username" name="username" placeholder="Username">
                                    </div>
                                    <div class="single-input mb-30">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="single-input mb-30">
                                        <label for="date">Date of Birth</label>
                                        <input type="date" id="date" name="date">
                                    </div>
                                    <div class="single-input mb-30">
                                        <label for="country">Country</label>
                                        <select class="select-country" name="country" id=country>
                                           <option value="" disabled>Choose One</option>
                                            @foreach(\App\Models\Country::all() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="single-input mb-30">
                                        <label for="gender">Gender</label>
                                        <select class="select-2" name="gender" id=gender>
                                            <option value="" disabled>Choose One</option>
                                            @foreach(\App\Models\User::GENDER as $gender)
                                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="single-input mb-30">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Password">
                                        <p class="description">The password must be at least twelve characters long, contain upper and lower case letters, contain numbers, contain symbols like ! " ? $ % ^ &amp; ).</p>
                                    </div>
                                    <div class="single-input mb-30">
                                        <label for="passwordConfirm">Comfirm Password</label>
                                        <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password">
                                        <p class="description">The password must be same with the password that you fill above.</p>
                                    </div>
                                    <div class="single-input">
                                        <button class="btn btn-primary btn-hover-secondary btn-width-100">Register</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Register Form End -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Login Register section end-->
@endsection

<script type="text/javascript">
    $(document).ready(function() {
        $('.select-country').select2();
    });
</script>