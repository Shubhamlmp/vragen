<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vragen-login</title>
    <link rel="icon" href="https://thumbs.dreamstime.com/b/vn-logo-design-initial-letter-sci-fi-style-game-esport-technology-digital-community-business-v-n-sport-modern-italic-192979294.jpg" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                {{-- <h2 class="logo">VRAGEN</h2> --}}
            </div>
        </div>
        <div class="content">
            <h1><span>VREGAN</span><br>You Can post your <br>Query & Answer</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?
            </p>

            <button class="cn"><a href="registration">JOIN US</a></button>

            <div class="form">
                <h2>Login Here</h2>
                <form action="{{route('login-user')}}" method="POST">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        <span style="font-size: 100%" class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        <span style="font-size: 100%" class="text-danger">@error('password') {{$message}} @enderror</span>

                    </div>

                    <div class="form-group">
                        <button class="btnn" type="submit">Login</button>
                    </div>
                </form>


                <p class="link">Don't have an account<br>
                    <a href="registration">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons" style="text-align: center">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>

                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>