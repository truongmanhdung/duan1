<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    li {
      list-style: none;
    }

    :root {
      --white: #fff;
      --black: #000;
      --bg: #f8f8f8;
      --grey: #999;
      --dark: #1a1a1a;
      --light: #e6e6e6;
      --wrapper: 1000px;
      --blue: #00b0ff;
    }

    body {
      background-color: var(--bg);
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
      background-size: cover;
      background-repeat: none;
    }

    .wrapper {
      position: relative;
      left: 50%;
      width: var(--wrapper);
      height: 800px;
      transform: translate(-50%, 0);
    }

    .container1 {
      position: relative;
      top: 50%;
      left: 50%;
      width: 80%;
      height: 75%;
      background-color: var(--white);
      transform: translate(-50%, -50%);
    }

    .container1 .left {
      float: left;
      width: 37.6%;
      height: 100%;
      border: 1px solid var(--light);
      background-color: var(--white);
    }

    .container1 .left .top {
      position: relative;
      width: 100%;
      height: 96px;
      padding: 29px;
    }

    .container1 .left .top:after {
      position: absolute;
      bottom: 0;
      left: 50%;
      display: block;
      width: 80%;
      height: 1px;
      content: '';
      background-color: var(--light);
      transform: translate(-50%, 0);
    }

    .container1 .left input {
      float: left;
      width: 188px;
      height: 42px;
      padding: 0 15px;
      border: 1px solid var(--light);
      background-color: #eceff1;
      border-radius: 21px;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
    }

    .container1 .left input:focus {
      outline: none;
    }

    .container1 .left a.search {
      display: block;
      float: left;
      width: 42px;
      height: 42px;
      margin-left: 10px;
      border: 1px solid var(--light);
      background-color: var(--blue);
      background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/name-type.png');
      background-repeat: no-repeat;
      background-position: top 12px left 14px;
      border-radius: 50%;
    }

    .container1 .left .people {
      margin-left: -1px;
      border-right: 1px solid var(--light);
      border-left: 1px solid var(--light);
      width: calc(100% + 2px);
    }

    .container1 .left .people .person {
      position: relative;
      width: 100%;
      padding: 12px 10% 16px;
      cursor: pointer;
      background-color: var(--white);
    }

    .container1 .left .people .person:after {
      position: absolute;
      bottom: 0;
      left: 50%;
      display: block;
      width: 80%;
      height: 1px;
      content: '';
      background-color: var(--light);
      transform: translate(-50%, 0);
    }

    .container1 .left .people .person img {
      float: left;
      width: 40px;
      height: 40px;
      margin-right: 12px;
      border-radius: 50%;
      object-fit: cover;
    }

    .container1 .left .people .person .name {
      font-size: 14px;
      line-height: 22px;
      color: var(--dark);
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
    }

    .container1 .left .people .person .time {
      font-size: 14px;
      position: absolute;
      top: 16px;
      right: 10%;
      padding: 0 0 5px 5px;
      color: var(--grey);
      background-color: var(--white);
    }

    .wrapper {
      position: fixed !important;
      left: 60%;
      top: -3%;
    }

    .container1 .left .people .person .preview {
      font-size: 14px;
      display: inline-block;
      overflow: hidden !important;
      width: 70%;
      white-space: nowrap;
      text-overflow: ellipsis;
      color: var(--grey);
    }

    .container1 .left .people .person.active,
    .container1 .left .people .person:hover {
      margin-top: -1px;
      margin-left: -1px;
      padding-top: 13px;
      border: 0;
      background-color: var(--blue);
      width: calc(100% + 2px);
      padding-left: calc(10% + 1px);
    }

    .container1 .left .people .person.active span,
    .container1 .left .people .person:hover span {
      color: var(--white);
      background: transparent;
    }

    .container1 .left .people .person.active:after,
    .container1 .left .people .person:hover:after {
      display: none;
    }

    .container1 .right {
      position: relative;
      float: left;
      width: 62.4%;
      height: 100%;
    }

    .container1 .right .top {
      width: 100%;
      height: 47px;
      padding: 15px 29px;
      background-color: #eceff1;
    }

    .container1 .right .top span {
      font-size: 15px;
      color: var(--grey);
    }

    .container1 .right .top span .name {
      color: var(--dark);
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 600;
    }

    body::-webkit-scrollbar {
      display: none;
    }

    .container1 .right .chat {
      position: relative;
      display: none;
      overflow-y: scroll;
      height: 480px;

      padding: 0 40px;
      border-width: 1px 1px 1px 0;
      border-style: solid;
      border-color: var(--light);

      flex-direction: column;
    }

    .container1 .right .chat.active-chat {
      display: block;
      display: flex;
    }

    .container1 .right .chat.active-chat .bubble {
      transition-timing-function: cubic-bezier(0.4, -0.04, 1, 1);
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(1) {
      animation-duration: 0.15s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(2) {
      animation-duration: 0.3s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(3) {
      animation-duration: 0.45s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(4) {
      animation-duration: 0.6s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(5) {
      animation-duration: 0.75s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(6) {
      animation-duration: 0.9s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(7) {
      animation-duration: 1.05s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(8) {
      animation-duration: 1.2s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(9) {
      animation-duration: 1.35s;
    }

    .container1 .right .chat.active-chat .bubble:nth-of-type(10) {
      animation-duration: 1.5s;
    }

    .container1 .right .write {
      display: none;
      position: absolute;
      bottom: 29px;
      left: 30px;
      height: 42px;
      padding-left: 8px;
      border: 1px solid var(--light);
      background-color: #eceff1;
      width: calc(100% - 58px);
      border-radius: 5px;
    }

    .activeoke {
      display: block !important;
    }

    .container1 .right .write input {
      font-size: 16px;
      float: left;
      width: 347px;
      height: 40px;
      padding: 0 10px;
      color: var(--dark);
      border: 0;
      outline: none;
      background-color: #eceff1;
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 400;
    }

    .container1 .right .write .write-link.attach:before {
      display: inline-block;
      float: left;
      width: 20px;
      height: 42px;
      content: '';
      background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/attachment.png');
      background-repeat: no-repeat;
      background-position: center;
    }

    .container1 .right .write .write-link.smiley:before {
      display: inline-block;
      float: left;
      width: 20px;
      height: 42px;
      content: '';
      background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/smiley.png');
      background-repeat: no-repeat;
      background-position: center;
    }

    .container1 .right .write .write-link.send:before {
      display: inline-block;
      float: left;
      width: 20px;
      height: 42px;
      margin-left: 11px;
      content: '';
      background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/send.png');
      background-repeat: no-repeat;
      background-position: center;
    }

    .container1 .right .bubble {
      font-size: 16px;
      position: relative;
      display: inline-block;
      clear: both;
      margin-bottom: 8px;
      padding: 13px 14px;
      vertical-align: top;
      border-radius: 5px;
    }

    .container1 .right .bubble:before {
      position: absolute;
      top: 19px;
      display: block;
      width: 8px;
      height: 6px;
      content: '\00a0';
      transform: rotate(29deg) skew(-35deg);
    }

    .container1 .right .bubble.you {
      float: left;
      color: var(--white);
      background-color: var(--blue);
      align-self: flex-start;
      animation-name: slideFromLeft;
    }

    .container1 .right .bubble.you:before {
      left: -3px;
      background-color: var(--blue);
    }

    .container1 .right .bubble.me {
      float: right;
      color: var(--dark);
      background-color: #eceff1;
      align-self: flex-end;
      animation-name: slideFromRight;
    }

    .container1 .right .bubble.me:before {
      right: -3px;
      background-color: #eceff1;
    }

    .container1 .right .conversation-start {
      position: relative;
      width: 100%;
      margin-bottom: 27px;
      text-align: center;
    }

    .container1 .right .conversation-start span {
      font-size: 14px;
      display: inline-block;
      color: var(--grey);
    }

    .container1 .right .conversation-start span:before,
    .container1 .right .conversation-start span:after {
      position: absolute;
      top: 10px;
      display: inline-block;
      width: 30%;
      height: 1px;
      content: '';
      background-color: var(--light);
    }

    .container1 .right .conversation-start span:before {
      left: 0;
    }

    .container1 .right .conversation-start span:after {
      right: 0;
    }

    @keyframes slideFromLeft {
      0% {
        margin-left: -200px;
        opacity: 0;
      }

      100% {
        margin-left: 0;
        opacity: 1;
      }
    }

    @-webkit-keyframes slideFromLeft {
      0% {
        margin-left: -200px;
        opacity: 0;
      }

      100% {
        margin-left: 0;
        opacity: 1;
      }
    }

    @keyframes slideFromRight {
      0% {
        margin-right: -200px;
        opacity: 0;
      }

      100% {
        margin-right: 0;
        opacity: 1;
      }
    }

    @-webkit-keyframes slideFromRight {
      0% {
        margin-right: -200px;
        opacity: 0;
      }

      100% {
        margin-right: 0;
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="container1">
      <div class="left">
        <div class="top">
          <input type="text" placeholder="Search" />
          <a href="javascript:;" class="search"></a>
        </div>
        <ul class="people">
          <?php
          $sql_mess = "SELECT DISTINCT id_user FROM message";
          $result_mess = $conn->query($sql_mess);
          if ($result_mess->num_rows > 0) {
            while ($row_mess = $result_mess->fetch_assoc()) {
              $id_user = $row_mess['id_user'];
              $sql_user = "SELECT avatar FROM user where id=$id_user";
              $result_user = $conn->query($sql_user);
              if ($result_user->num_rows > 0) {
                while ($row_user = $result_user->fetch_assoc()) {
                  $avatar = $row_user['avatar'];
                }
              }

              $sql_meet = "SELECT * FROM message WHERE id_user=$id_user LIMIT 1";
              $result_meet = $conn->query($sql_meet);
              if ($result_meet->num_rows > 0) {
                while ($row_meet = $result_meet->fetch_assoc()) {
                  $name = $row_meet['name'];
                  $message = $row_meet['message'];
                }
              }
              echo '<li class="person" data-chat="person' . $id_user . '">
                      <img src="../public/image/user/' . $avatar . '" alt="" />
                      <span class="name">' . $name . '</span>
                      <span class="preview">' . $message . '...</span>
                    </li>';
            }
          }
          ?>
        </ul>
      </div>
      <div class="right">
        <div class="top"><span>To: <span class="name">Dog Woofson</span></span>
        </div>
        <?php
        $sql_mess = "SELECT DISTINCT id_user FROM message";
        $result_mess = $conn->query($sql_mess);
        if ($result_mess->num_rows > 0) {
          while ($row_mess = $result_mess->fetch_assoc()) {
            $id_user = $row_mess['id_user'];
            $sql_meet = "SELECT * FROM message WHERE id_user=$id_user ORDER BY time ASC";
            $result_meet = $conn->query($sql_meet);
            if ($result_meet->num_rows > 0) {
              echo '<div class="chat" id="message_cuon' . $id_user . '" data-chat="person' . $id_user . '">';
              while ($row_meet = $result_meet->fetch_assoc()) {
                $id_message = $row_meet['id'];
                $name = $row_meet['name'];
                $email = $row_meet['email'];
                $message = $row_meet['message'];
                $status = $row_meet['status'];
                if ($status == 0) {
                  echo '<div class="bubble you">
                      ' . $message . '
                      </div>';
                } else {
                  echo '<div class="bubble me">
                      ' . $message . '
                    </div>';
                }
              }
              echo '</div>';
        ?>
              <div class="write d-none" data-rep="person<?= $id_user ?>" id="activeok<?= $id_user ?>">
                <form action="" autocomplete="off">
                  <input type="text" id="message_add<?= $id_user ?>" />
                  <button type="submit" id="submit_message<?= $id_user ?>" style="margin-left: 30px;" class="btn btn-primary">Gửi</button>
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                <script>
                  var element = document.getElementById("message_cuon<?= $id_user ?>");
                  element.scrollTop = element.scrollHeight;

                  $(document).ready(function() {
                    $("#submit_message<?= $id_user ?>").click(function(e) {
                      e.preventDefault();
                      $.ajax({
                        type: "post",
                        url: "messagerep.php",
                        data: "message=" + $("#message_add<?= $id_user ?>").val() + "&&id_user=" + <?= $id_user ?>,
                        success: function(data) {
                          $("#message_add<?= $id_user ?>").val('');
                          $("#message_cuon<?= $id_user ?>").html(data)
                          var settime = setInterval(() => {
                            var element = document.getElementById("message_cuon<?= $id_user ?>");
                            element.scrollTop = element.scrollHeight;
                          }, 100);
                          setInterval(() => {
                            clearInterval(settime);
                          }, 1000);
                        }
                      });
                    });
                  });
                </script>
              </div>

        <?php
            }
          }
        }
        ?>

      </div>
    </div>
  </div>
</body>
<script>
  var id = <?php echo $id_user; ?>;
  document.querySelector(`.chat[data-chat=person${id}]`).classList.add('active-chat')
  document.querySelector(`.person[data-chat=person${id}]`).classList.add('active')
  document.querySelector(`.write[data-rep=person${id}]`).classList.add('activeoke')
  let friends = {
      list: document.querySelector('ul.people'),
      all: document.querySelectorAll('.left .person'),
      rep: document.querySelectorAll('.right .write'),
      name: ''
    },
    chat = {
      container1: document.querySelector('.container1 .right'),
      current: null,
      person: null,
      person2: null,
      current2: null,
      name: document.querySelector('.container1 .right .top .name ')
    }

  friends.all.forEach(f => {
    f.addEventListener('mousedown', () => {
      f.classList.contains('active') || setAciveChat(f)
    })
  });
  var rep = document.querySelectorAll('.right .write');
  var all = document.querySelectorAll('.left .person');


  for (let i = 0; i < all.length; i++) {
    all[i].onclick = function(e) {
      setAciveRep(rep[i])
    }

  }

  function setAciveRep(f) {
    chat.current2 = chat.container1.querySelector('.activeoke')
    chat.person2 = f.getAttribute('data-rep')
    chat.current2.classList.remove('activeoke')
    chat.container1.querySelector('[data-rep="' + chat.person2 + '"]').classList.add('activeoke')
  }

  function setAciveChat(f) {
    friends.list.querySelector('.active').classList.remove('active')
    f.classList.add('active')
    chat.current = chat.container1.querySelector('.active-chat')
    chat.person = f.getAttribute('data-chat')
    chat.current.classList.remove('active-chat')
    chat.container1.querySelector('[data-chat="' + chat.person + '"]').classList.add('active-chat')
    friends.name = f.querySelector('.name').innerText
    chat.name.innerHTML = friends.name
  }
</script>

</html>
<?php
include 'footer.php';
?>