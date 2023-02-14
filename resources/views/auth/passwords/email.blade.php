<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('tailwind.css') }}">
    <script src="https://kit.fontawesome.com/a7f14397da.js" crossorigin="anonymous"></script>
    <title>YaganCiz</title>
</head>
<body>
    <section class="section">
        <!-- container -->
        <div class="container-forgot">
            <h3 class="title-email">Email Address</h3>
            <!-- form -->
            <div class="reset-password-div">
                <p class="description">Write the email address you provided when creating this account.</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="form">
                    @csrf
                    <div class="input-div">
                        <input id="input" class="input-feiled" type="email" name="email" placeholder="Email">
                        <span class="icon fa-solid fa-envelope" id="fa"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-login">Send</button>
                </form> 
            </div>
        </div>
    </section>
    <script src="index.js"></script>
</body>
</html>
