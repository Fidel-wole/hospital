<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/register_patient.css') }}">
    <title>Document</title>
</head>

<body>
  

    <section class="main">
        
        <div class="main-container">
            <div class="form-container">
                <div class="form-body">
                    <h2 class="title">Register Patient</h2>
                    @if (Session::get('fail'))
                        {{ Session::get('fail') }}
                    @endif
                    <form action="login" method="POST" class="the-form" encType="multipart/form-data">
                        @csrf
                        <label htmlFor="email">Email</label>
                        <input type="email" name="email" id="email" autoComplete="email">
                        <span>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>

                        <label htmlFor="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your Password">
                        <span>
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                        <input type="submit" value="log In" />
                    </form>
                </div>

                <div class="htmlForm-footer">
                    <div>
                        <span>Don't have an account?</span>{" "}
                        <a href="">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
