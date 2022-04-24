<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="ans.css"> -->

  <title>Answers</title>

  <style>
    * {
      box-sizing: border-box;
      outline: none;
    }

    body {
      margin: 0;
      font-family: Sans-serif;
      overflow: hidden;
      height: 100vh;
      background: #efefef;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      background: linear-gradient(to right bottom, #fecb89, #e6b2c6);
    }

    .wrapper2 {
      padding: 0 25px;
      height: 100%;
      overflow: auto;
    }

    .compose {
      width: 150px;
      text-align: center;
      height: 50px;
      border-radius: 13px;
      border: 1px solid;
      background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
      color: white;
      font-size: 16px;
      padding-left: 20px;
      position: relative;
    }

    .folders {
      margin-top: 30px;
      color: #b8b8b8;
      font-size: 14px;
    }

    .folder-icons {
      margin-top: 20px;
      display: flex;
      align-items: center;
    }

    .icon-name1 {
      margin-left: 10px;
      color: #8b47a9;
    }

    .icon-name {
      margin-left: 10px;
      color: grey;
    }

    .names {
      margin-left: 10px;
      font-weight: bold;
      font-size: 15px;
    }

    .avatar>img {
      width: 35px;
      border-radius: 10px;
    }

    .section1 {
      margin-top: 25px;
      margin-bottom: 10px;
    }

    .btn {
      border-radius: 3px;
      border: 1px;
      padding: 0 10px 0 30px;
      height: 30px;
      font-weight: bold;
      position: relative;
    }

    .buton1 {
      background-color: #f8f1ff;
      color: #a84bfe;
    }

    .buton2 {
      background-color: #fff1f6;
      color: #fe4b85;
    }

    .buton3 {
      background-color: #eef0ff;
      color: #2632fe;
    }

    .buton4 {
      background-color: #ebfbf8;
      color: #01c991;
    }

    .tag {
      position: absolute;
      left: 8px;
      top: 10px;
    }

    .plus>img {
      width: 16px;
      height: 16px;
    }

    .plus {
      left: 10px;
      position: absolute;
    }

    .buton-span {
      border-radius: 15px;
      padding: 5px 10px;
      border: 1px;
      color: white;
      background-color: #fe365c;
      box-shadow: 0px 0px 10px 2px #f7bfc9;
      margin-left: 70px;
    }

    .online {
      position: absolute;
      top: -5px;
      right: -5px;
      border: 4px solid #fbfcf8;
      box-sizing: unset;
      background-color: #02c997;
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }

    .avatar {
      position: relative;
    }

    .red {
      background-color: #fe4663;
    }

    .big-inbox {
      font-size: 25px;
      font-weight: 500;
    }

    .right-side {
      background-color: #f2f3f7;
      width: 100%;
      padding: 8px 30px;
      display: flex;
      flex-direction: column;
    }

    .right-body {
      flex: 1;
      display: flex;
      overflow: hidden;
    }

    .top-bar {
      display: flex;
      align-items: center;
      text-align: center;
    }

    .top-bar-justify {
      display: flex;
      justify-content: space-between;
      width: 100%;
    }

    .top-bar-items {
      align-items: center;
      display: flex;
      justify-content: space-between;
      width: 180px;
    }

    .profile2>img {
      border-radius: 50%;
      width: 28x;
      height: 28px;
      border: 2px solid white;
      margin-left: 25px;
      margin-right: 5px;
    }

    .profile2 {
      display: flex;
      align-items: center;

      width: 120px;
    }

    .icon-name5 {
      font-size: 13px;
      color: grey;
    }

    .new-hr {
      border: 0.6px solid #ddd;
      margin-bottom: 25px;
    }

    .notif {
      position: relative;
    }

    .pink {
      background-color: #fe96db;
      width: 7px;
      height: 7px;
      margin: -3px;
    }

    .checkbox>input {
      width: 20px;
      height: 20px;
    }

    .right-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .down-arrow>img {
      width: 12px;
      height: 14px;
      margin-bottom: -2px;
      margin-left: 5px;
    }

    .new:hover {
      background-color: white;
    }

    .new {
      border-radius: 4px;
      border: none;
      width: 40px;
      height: 30px;
      background-color: #edeef5;
    }

    .check {
      display: flex;
      align-items: center;
    }

    .has-search .text {
      padding-left: 30px;
      margin-left: 45px;
    }

    .form {
      display: flex;
      align-items: center;
    }

    .searchIcon {
      margin-left: 53px;
      position: absolute;
      margin-top: 2px;
    }

    .text {
      border: 1px solid #ddd;
      border-radius: 4px;
      width: 280px;
      height: 30px;
      background-color: #edeef5;
    }

    .buttons {
      display: flex;
    }

    .middle-buttons {
      display: flex;
    }

    .scroll-cards {
      width: 370px;
      height: 100%;
      overflow: auto;

      padding: 20px 0px 5px 0px;
    }

    .card {
      background-color: white;
      border-radius: 4px;
      margin-top: 8px;
      margin-bottom: 5px;
      padding: 25px 25px 15px 25px;
      transition: 0.3s;
    }

    .card:hover {
      box-shadow: 5px 1px 20px 1px #ddd;
      transform: scale(0.96);
    }

    .mail-names {
      color: grey;
      font-weight: bold;
      font-size: 15px;
      margin-left: 10px;
    }

    .mails {
      display: flex;
      align-items: center;
    }

    .mails>img {
      width: 35px;
      border-radius: 10px;
    }

    .mail-info {
      margin: 10px 65px;
      margin-left: 0px;
      line-height: 1.7;
      font-weight: 600;
    }

    .check1 {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100px;
    }

    .bottom-info {
      display: flex;
      justify-content: space-between;
    }

    .date {
      color: grey;
    }

    .person {
      width: 25px;
      height: 25px;
      border-radius: 10px;
      text-align: center;
      color: white;
      padding: 5px 3px 0px;
    }

    .border1 {
      background-color: #5f4bfd;
    }

    .border2 {
      background-color: #e32553;
    }

    .border3 {
      background-color: #01c828;
    }

    .message {
      width: 800px;
      height: 70%;
      margin: 20px 10px;
      flex: 1;
      background-color: white;
      padding: 25px;
      overflow: auto;
    }

    .mes-date {
      color: grey;
      font-size: 14px;
    }

    .who {
      font-weight: 600;
    }

    .title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
      margin-top: 10px;
    }

    .message-from {
      margin-top: 20px;
      color: grey;
      font-size: 17px;
    }

    .attachment-last {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 350px;
    }

    .att-write {
      color: grey;
    }

    .buton0 {
      background-color: #ecefff;
      color: #7175c0;
    }

    .buton9 {
      background-color: #e0f8e3;
      color: #79b992;
    }

    .btn1 {
      border-radius: 3px;
      border: 1px;
      height: 25px;
      font-weight: bold;
    }

    .inside-img>img {
      width: 100px;
      border-radius: 10px;
      margin-top: 20px;
    }

    .inside-img>img:hover {
      transform: scale(0.95);
    }

    .son-buton {
      width: 100px;
      height: 68px;
      border-radius: 10px;
      border: 1px;
      margin-top: 17px;
      background-color: #f5e9f9;
      color: #b79ed8;
      font-weight: 500;
      font-size: 20px;
    }

    .son-images {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 520px;
    }

    .btn2 {
      margin-top: 40px;
      border-radius: 3px;
      border: 1px;
      height: 35px;
      padding: 5px 30px;
      color: white;
      position: relative;
    }

    .butona {
      background-color: #8e44ad;
    }

    .butonb {
      background-color: #fe4a85;
    }

    .butona:hover {
      background-color: #892bb4;
    }

    .butonb:hover {
      background-color: #ec195f;
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>

</head>

<body>
  <div class="content">
    <div class="title" style="padding-left:20px;">
      {{$queA->add_question}}
      <div class="title-icons">
      </div>
    </div>

    @if($Answers->isNotEmpty())
    @foreach($Answers as $ans)
    <div class="message">

      <div class="from">
        <span class="who">{{ App\Models\User::getUserNameByID($ans->ans_User_id) }}</span> answered
      </div>
      <div class="mes-date">
        answered {{ \Carbon\Carbon::parse($ans->created_at)->format('M d, Y H:i A')}}
      </div>
      <div class="message-from">
        <!-- Hello Malikan! -->
        <p> {{$ans->add_answer}}</p>
        <!-- <p> {{$queA}}</p> -->
        <!-- <p>Ashraf</p> -->
      </div>
      <!-- <div class="attachment-last">
        <img src="https://i.ibb.co/FW9tsHK/attachment.png" />
        <div class="att-write">
          Attachment (80MB)
        </div>
        <button class="btn1 buton0"> View All
          <span class="tag">
        </button>

        <button class="btn1 buton9"> Download All
        </button>

      </div> -->
      <!-- <div class="son-images">
        <div class="inside-img">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" />
          <img src="https://images.unsplash.com/photo-1500917293891-ef795e70e1f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" />
          <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" />
          <img src="https://images.unsplash.com/photo-1450609283058-0ec52fa7eac4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" />

        </div>
        <button class="son-buton"> 20+
        </button>
      </div> -->
      <button class="btn2 butona"> Reply
        <span class="tag">
          <img src="https://i.ibb.co/GQf8frw/reply.png" />
        </span>
      </button>

      <button class="btn2 butonb"> Forward
        <span class="tag">
          <img src="https://i.ibb.co/6W40kTg/forward-arrow.png" />
        </span>
      </button>


    </div>
    @endforeach
    @else
    <div>
      <h2>No Answers found</h2>
    </div>
    @endif


  </div>
</body>

</html>