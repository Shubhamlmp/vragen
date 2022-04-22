<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vragen</title>

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="icon" href="https://thumbs.dreamstime.com/b/vn-logo-design-initial-letter-sci-fi-style-game-esport-technology-digital-community-business-v-n-sport-modern-italic-192979294.jpg" type="image/x-icon">

</head>


<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">VRAGEN</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href='dashboard'>HOME</a></li>
                    <li><a href="#">ANSWER</a></li>
                    <li><a href="#">NOTIFICATION</a></li>
                    <li><a href="#">PROFILE</a></li>
                    <li><a href="logout">LOGOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <form action="{{ route('search') }}" method="GET">
                    <input class="srch" type="search" name="search" placeholder="Search Question" required>
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="content">
            <table id="customers">
                <tr>
                    <td style="background-color: #ff7200;">Questions</td>
                </tr>
                @if($Questions->isNotEmpty())
                @foreach($Questions as $ques)
                <tr>
                    <td>{{$ques->add_question}}</td>
                </tr>
                @endforeach
                @else
                <div>
                    <h2>No Questions found</h2>
                </div>
                @endif

            </table>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>
