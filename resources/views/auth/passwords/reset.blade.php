<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('tailwind.css') }}">
    <script src="https://kit.fontawesome.com/a7f14397da.js" crossorigin="anonymous"></script>
    <title>YaganChiz</title>
</head>
<body>
    <section class="section">
        <!-- container -->
        <div class="container-forgot">
            <h3 class="title-email">Password Reset</h3>
            <!-- form -->
            <div class="reset-password-div">
                <p class="description">Enter your new password for your YaganChiz account.</p>
                <form method="POST" action="{{ route('password.update') }}" class="form">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-div">
                        <input id="input" class="input-feiled" type="text" name="email" value="{{ $email ?? old('email') }}" placeholder="Email">
                        <span class="icon fa-solid fa-user" id="fa"></span>
                       
                    </div>
                    <div class="input-div">
                        <input id="input" class="input-feiled" type="password" name="password" placeholder="New Password">
                        <span class="icon fa-solid fa-lock" id="fa"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="password-icon" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                          </svg>
                    </div>
                    <div class="input-div">
                        <input id="input" class="input-feiled" type="password" name="password_confirmation" placeholder="Confirm New Password">
                        <span class="icon fa-solid fa-lock" id="fa"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="password-icon" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                          </svg>
                    </div>
                    <button type="submit" class="btn btn-login">Change my Password</button>
                </form> 
            </div>
        </div>
    </section>
    <script src="index.js"></script>
</body>
</html>
