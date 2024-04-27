@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@section('content')

    @vite('resources/js/app.js')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" required
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}"  autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" required
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}"  autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input oninput="passwordStrength()" id="password" type="password"required
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="new-password">
                                         <span class=" text-danger" id="passwordDescription"></span>
                                    @error('password')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" required type="password" class="form-control"
                                        name="password_confirmation"  autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3 ms-1 form-group">

                                <div class="col-md-6 captcha">
                                    <span class=" ms-5 ">{!! captcha_img('flat') !!}</span>
                                    <button type="button" class=" btn btn-danger reload" id="reload"> &#x21bb;</button>
                                </div>
                                <div class="col-md-4">
                                    <input  type="text" required class="  form-control @error('captcha') is-invalid @enderror" placeholder="Enter captcha!"
                                        name="captcha"  >
                                        @error('captcha')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                            </div>
                            </div>




                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- script for captcha --}}
<script type="module">
    $('#reload').click(function() {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function(data) {
                $(".captcha span").html(data.captcha)
            }

        });
    });
</script>
<script >
    function passwordStrength(password)
    {
        var password = document.getElementById("password").value;
      var desc = new Array();
      desc[0] = "";
      desc[1] = "Weakest";
      desc[2] = "Weak";
      desc[3] = "Better";
      desc[4] = "Medium";
      desc[5] = "Strong";
      desc[6] = "Strongest";
      var score   = 0;
      if (password.length >= 1)score++;
      //if password bigger than 6 give 1 point
      if (password.length > 6) score++;
      //if password has both lower and uppercase characters give 1 point
      if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;
      //if password has at least one number give 1 point
      if (password.match(/\d+/)) score++;
      //if password has at least one special caracther give 1 point
      if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;
      //if password bigger than 12 give another 1 point
      if (password.length > 12) score++;
       document.getElementById("passwordDescription").innerHTML = desc[score];

    }
    </script>
