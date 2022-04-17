<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vragen-login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
            <h1><span>VREGAN</span><br>A public platform building the definitive
                 <br>collection of questions & answers.</h1>
            <p class="par">A community-based space to find 
                and contribute answers to<br>technical and non-technical challenges,
                and one of the<br>most popular websites in the world.
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
                        <input type="email" class="input-form-tag" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        <span style="font-size: 100%" class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="input-form-tag" name="password" placeholder="Enter Password" id="myInput">
                        <!-- <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i> -->
                        <span style="font-size: 100%" class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group mt-4">
                        <input type="checkbox" onclick="myFunction()">&nbsp;&nbsp;&nbsp;Show Password</input>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                    </div>

                    <div class="form-group">
                        <button class="btnn" type="submit">Login</button>
                    </div>
                </form>


                <p class="link">
                    <a href="{{ route('ForgetPasswordGet') }}">Forgot Your Password? </a>
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