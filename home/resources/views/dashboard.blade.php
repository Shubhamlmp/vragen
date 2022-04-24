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
            <div class="scroll-cards" id="data">
                @if($Questions->isNotEmpty())
                @foreach($Questions as $ques)
                <div class="card">
                    <div class="mails">
                        <img src="https://randomuser.me/api/portraits/men/20.jpg" />
                        <div class="mail-names">
                            {{ App\Models\User::getUserNameByID($ques->add_User_id) }}

                        </div>
                    </div>
                    <div class="mail-info">
                        <a style="color: black; text-decoration:none;" href="{{ url ('/answer/'.$ques->que_id) }}" class="s-link">{{$ques->add_question}}</a>
                    </div>
                    <div>
                    </div>
                    <div class="bottom-info">
                        <div class="mes-date">
                            {{ App\Models\Answer::getTotalAns($ques->que_id) }} answers
                        </div>
                        <div class="mes-date">
                            {{ App\Models\Question::getTotalCount($ques->que_id) }} views
                        </div>

                        <div class="date"><b>asked</b> {{$ques->created_at->diffForHumans() }}</div>
                    </div>
                </div>
                @endforeach
                @else
                <div>
                    <h2>No Questions found</h2>
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $Questions->appends(['search' => request()->query('search')])->links() !!}
        </div>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>
