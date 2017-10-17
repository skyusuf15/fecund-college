<!DOCTYPE html>
<head>
<title>Administrator | @yield('title') </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}" >
<!-- //bootstrap-css -->


<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic);
@import url(https://zavoloklom.github.io/material-design-iconic-font/css/docs.md-iconic-font.min.css);

ul li{
  list-style: none;
}
textarea {
  resize: none;
} 
.fabs {
  bottom: 0;
  position: fixed;
  margin: 1em;
  right: 0;
  z-index: 998;
  
}

.fab {
  display: block;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  text-align: center;
  color: #f0f0f0;
  margin: 25px auto 0;
  box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
  cursor: pointer;
  -webkit-transition: all .1s ease-out;
  transition: all .1s ease-out;
  position: relative;
  z-index: 998;
  overflow: hidden;
  background: #42a5f5;
}

.fab > i {
  font-size: 2em;
  line-height: 55px;
  -webkit-transition: all .2s ease-out;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.fab:not(:last-child) {
  width: 0;
  height: 0;
  margin: 20px auto 0;
  opacity: 0;
  visibility: hidden;
  line-height: 40px;
}

.fab:not(:last-child) > i {
  font-size: 1.4em;
  line-height: 40px;
}

.fab:not(:last-child).is-visible {
  width: 40px;
  height: 40px;
  margin: 15px auto 10;
  opacity: 1;
  visibility: visible;
}

.fab:nth-last-child(1) {
  -webkit-transition-delay: 25ms;
  transition-delay: 25ms;
}

.fab:not(:last-child):nth-last-child(2) {
  -webkit-transition-delay: 20ms;
  transition-delay: 20ms;
}

.fab:not(:last-child):nth-last-child(3) {
  -webkit-transition-delay: 40ms;
  transition-delay: 40ms;
}

.fab:not(:last-child):nth-last-child(4) {
  -webkit-transition-delay: 60ms;
  transition-delay: 60ms;
}

.fab:not(:last-child):nth-last-child(5) {
  -webkit-transition-delay: 80ms;
  transition-delay: 80ms;
}

.fab(:last-child):active,
.fab(:last-child):focus,
.fab(:last-child):hover {
  box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
}
/*Chatbox*/

.chat {
  position: fixed;
  right: 85px;
  bottom: 20px;
  width: 70%;
  font-size: 12px;
  line-height: 22px;
  font-family: 'Roboto';
  font-weight: 500;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  opacity: 0;
  box-shadow: 1px 1px 100px 2px rgba(0, 0, 0, 0.22);
  border-radius: 10px;
  -webkit-transition: all .2s ease-out;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.chat_fullscreen {
    position: fixed;
    right: 0px;
    bottom: 0px;
    top: 0px;
  }
.chat_header {
      /* margin: 10px; */
    font-size: 13px;
    font-family: 'Roboto';
    font-weight: 500;
    color: #f3f3f3;
    height: 55px;
    background: #8b5c7e;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding-top: 8px;
}
.chat_header2 {
      /* margin: 10px; */
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.chat_header .span {
  float:right;
}

.chat_fullscreen_loader {
  display: none;
    float: right;
    cursor: pointer;
    /* margin: 10px; */
    font-size: 20px;
    opacity: 0.5;
    /* padding: 20px; */
    margin: -10px 10px;
}

.chat.is-visible {
  opacity: 1;
  -webkit-animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
}
.is-hide{
  opacity: 0
}

.chat_option {
  float: left;
  font-size: 15px;
  list-style: none;
  position: relative;
  height: 100%;
  width: 100%;
  text-align: relative;
  margin-right: 10px;
      letter-spacing: 0.5px;
      font-weight: 400
}


.chat_option img {
    border-radius: 50%;
    width: 55px;
    float: left;
    margin: -30px 20px 10px 20px;
    border: 4px solid rgba(0, 0, 0, 0.21);
}

.change_img img{
    width: 35px;
    margin: 0px 20px 0px 20px;
}
.chat_option .agent {
  font-size: 12px;
    font-weight: 300;
}
.chat_option .online{
      opacity: 0.4;
    font-size: 11px;
    font-weight: 300;
}
.chat_color {
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  margin: 10px;
  float: left;
}


.chat_body {
  background: #fff;
  width: 100%;

  display: inline-block;
  text-align: center;
    overflow-y: auto;

}
#chat_body{
    height: 450px;
}
.chat_login p,.chat_body li, p, a{
    -webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
}
.chat_body p {
  padding: 20px;
  color: #888
}
.chat_body a {
  width: 10%;
  text-align: center;
  border: none;
  box-shadow: none;
  line-height: 40px;
  font-size: 15px;
}



.chat_field {
  position: relative;
  margin: 5px 0 5px 0;
  width: 50%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 30px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  border: none;
  outline: none;
  display: inline-block;
}

.chat_field.chat_message {
  height: 30px;
  resize: none;
      font-size: 13px;
    font-weight: 400;
}
.chat_category{
  text-align: left;
}

.chat_category{
  margin: 20px;
  background: rgba(0, 0, 0, 0.03);
  padding: 10px;
}

.chat_category ul li{
    width: 80%;
    height: 30px;
    background: #fff;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    border-radius: 3px;
    border: 1px solid #e0e0e0;
    font-size: 13px;
    cursor: pointer;
    line-height: 30px;
    color: #888;
    text-align: center;
}

.chat_category li:hover{
    background: #83c76d;
    color: #fff;
}
.chat_category li.active{
    background: #83c76d;
    color: #fff;
}

.tags{
 margin: 20px;
    bottom: 0px;
    display: block;
    width: 120%
}
.tags li{
    padding: 5px 10px;
    border-radius: 40px;
    border: 1px solid rgb(3, 117, 208);
    margin: 5px;
    display: inline-block;
    color: rgb(3, 117, 208);
    cursor: pointer;

}
.fab_field {
  width: 100%;
  display: inline-block;
  text-align: center;
  background: #fff;
  border-top: 1px solid #eee;
  border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;

}
.fab_field2 {
    bottom: 0px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
        z-index: 999;
  }

.fab_field a {
  display: inline-block;
  text-align: center;
}

#fab_camera {
  float: left;
  background: rgba(0, 0, 0, 0);
}

#fab_send {
  float: right;
  background: rgba(0, 0, 0, 0);
}

.fab_field .fab {
  width: 35px;
  height: 35px;
  box-shadow: none;
  margin: 5px;
}

.fab_field .fab>i {
  font-size: 1.6em;
  line-height: 35px;
  color: #bbb;
}
.fab_field .fab>i:hover {
  color: #42a5f5;
}
.chat_conversion {

}

.chat_converse {
  position: relative;
    background: #fff;
    margin: 6px 0 0px 0;
    height: 300px;
    min-height: 0;
    font-size: 12px;
    line-height: 18px;
    overflow-y: auto;
    width: 100%;
    float: right;
    padding-bottom: 100px;
}
.chat_converse2{
      height: 100%;
    max-height: 800px
}
.chat_list {
  opacity: 0;
  visibility: hidden;
  height: 0;
}

.chat_list .chat_list_item {
  opacity: 0;
  visibility: hidden;
}

.chat .chat_converse .chat_msg_item {
  position: relative;
  margin: 8px 0 15px 0;
  padding: 8px 10px;
  max-width: 60%;
  display: block;
  word-wrap: break-word;
  border-radius: 3px;
  -webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  clear: both;
  z-index: 999;
}
.status {
    margin: 45px -50px 0 0;
    float: right;
    font-size: 11px;
    opacity: 0.3;
}
.status2 {
    margin: -10px 20px 0 0;
    float: right;
    display: block;
    font-size: 11px;
    opacity: 0.3;
}
.chat .chat_converse .chat_msg_item .chat_avatar {
  position: absolute;
  top: 0;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin .chat_avatar {
  left: -52px;
  background: rgba(0, 0, 0, 0.03);
}

.chat .chat_converse .chat_msg_item.chat_msg_item_user .chat_avatar {
  right: -52px;
  background: rgba(0, 0, 0, 0.6);
}

.chat .chat_converse .chat_msg_item .chat_avatar, .chat_avatar img{
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50%;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin {
  margin-left: 60px;
  float: left;
  background: rgba(0, 0, 0, 0.03);
  color: #666;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_user {
  margin-right: 20px;
  float: right;
  background: #42a5f5;
  color: #eceff1;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin:before {
  content: '';
  position: absolute;
  top: 15px;
  left: -12px;
  z-index: 998;
  border: 6px solid transparent;
  border-right-color: rgba(255, 255, 255, .4);
}

.chat_form .get-notified label{
    color: #077ad6;
    font-weight: 600;
    font-size: 11px;
}

input {
  position: relative;
  width: 90%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 20px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  outline: none;
  background: #fff;
  display: inline-block;
  resize: none;
  padding: 5px;
  border-radius: 3px;
}
.chat_form .get-notified input {
  margin: 2px 0 0 0;
  border: 1px solid #83c76d;
}
.chat_form .get-notified i {
    background: #83c76d;
    width: 30px;
    height: 32px;
    font-size: 18px;
    color: #fff;
    line-height: 30px;
    font-weight: 600;
    text-align: center;
    margin: 2px 0 0 -30px;
    position: absolute;
    border-radius: 3px;
}
.chat_form .message_form {
  margin: 10px 0 0 0;
}
.chat_form .message_form input{
  margin: 5px 0 5px 0;
  border: 1px solid #e0e0e0;
}
.chat_form .message_form textarea{
  margin: 5px 0 5px 0;
  border: 1px solid #e0e0e0;
  position: relative;
  width: 90%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 20px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  outline: none;
  background: #fff;
  display: inline-block;
  resize: none;
  padding: 5px;
  border-radius: 3px;
}
.chat_form .message_form button{
    margin: 5px 0 5px 0;
    border: 1px solid #e0e0e0;
    position: relative;
    width: 95%;
    font-family: 'Roboto';
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: #fff;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    outline: none;
    background: #fff;
    display: inline-block;
    resize: none;
    padding: 5px;
    border-radius: 3px;
    background: #83c76d;
    cursor: pointer;
}
strong.chat_time {
  padding: 0 1px 1px 0;
  font-weight: 500;
  font-size: 8px;
  display: block;
}

/*Chatbox scrollbar*/

::-webkit-scrollbar {
  width: 6px;
}

::-webkit-scrollbar-track {
  border-radius: 0;
}

::-webkit-scrollbar-thumb {
  margin: 2px;
  border-radius: 10px;
  background: rgba(0, 0, 0, 0.2);
}
/*Element state*/

.is-active {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}

.is-float {
  box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
}

.is-loading {
  display: block;
  -webkit-animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
  animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
}
/*Animation*/

@-webkit-keyframes zoomIn {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes zoomIn {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}

@-webkit-keyframes load {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  50% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}

@keyframes load {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  50% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}
/* SMARTPHONES PORTRAIT */

@media only screen and (min-width: 300px) {
  .chat {
    width:  65%;
  }
}
/* SMARTPHONES LANDSCAPE */

@media only screen and (min-width: 480px) {
  .chat {
    width:  70%;
  }
  .chat_field {
    width: 65%;
  }
}
/* TABLETS PORTRAIT */

@media only screen and (min-width: 768px) {
  .chat {
    width:  70%;
  }
  .chat_field {
    width: 65%;
  }
}
/* TABLET LANDSCAPE / DESKTOP */

@media only screen and (min-width: 1024px) {
  .chat {
    width: 70%;
  }
  .chat_field {
    width: 65%;
  }
}
/*Color Options*/



.blue .fab {
  background: #42a5f5;
  color: #fff;
}



.blue .chat {
  background: #42a5f5;
  color: #999;
}


/* Ripple */

.ink {
  display: block;
  position: absolute;
  background: rgba(38, 50, 56, 0.4);
  border-radius: 100%;
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  webkit-transform: scale(0);
  -webkit-transform: scale(0);
          transform: scale(0);
}
/*animation effect*/

.ink.animate {
  -webkit-animation: ripple 0.5s ease-in-out;
          animation: ripple 0.5s ease-in-out;
}

@-webkit-keyframes ripple {
  /*scale the element to 250% to safely cover the entire link and fade it out*/
  
  100% {
    opacity: 0;
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    webkit-transform: scale(5);
    -webkit-transform: scale(5);
            transform: scale(5);
  }
}

@keyframes ripple {
  /*scale the element to 250% to safely cover the entire link and fade it out*/
  
  100% {
    opacity: 0;
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    webkit-transform: scale(5);
    -webkit-transform: scale(5);
            transform: scale(5);
  }
}
::-webkit-input-placeholder { /* Chrome */
  color: #bbb;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #bbb;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #bbb;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: #bbb;
}

</style>
<!-- Custom CSS -->
<link href="{{ url('/css/admin-style.css') }}" rel='stylesheet' type='text/css' />
<link href=" {{ url('css/admin-style-responsive.css') }}" rel="stylesheet"/>
<!-- font CSS -->
<link href={{ url('//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic') }} rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ url('css/font.css') }}" type="text/css"/>
<link href="{{ url('css/font-awesome.css') }}" rel="stylesheet"> 
<link href="{{ url('plugins/bootstrap-sweetalert/sweet-alert.css') }}" rel="stylesheet"/>


 @yield('styles')
 
<script src="{{ url('js/jquery2.0.3.min.js') }}"></script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ url('/home') }}" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="">
                        <span class="photo"><img alt="avatar" src="{{ url('images/admin/3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="photo"><img alt="avatar" src="{{ url('images/admin/1.png') }}"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="photo"><img alt="avatar" src="{{ url('images/admin/3.png') }}"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="photo"><img alt="avatar" src="{{ url('images/admin/2.png') }}"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href=""> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href=""> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href=""> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>


       <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ url('images/admin/2.png') }}">
                <span class="username">{{ Auth::user()->name }}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li>
                <a onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-key"></i>Log Out
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="GET" style="display: none;">
                    {{ csrf_field() }}
                </form></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ url('home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/mail') }}">Inbox</a></li>
                        <li><a href="{{ url('/mail_compose') }}">Compose Mail</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Create</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/create/pages') }}">Create Pages</a></li>
                        <li><a href="{{ url('/create/content') }}">Create Pages Content</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Edit</span>
                    </a>
                    <ul class="sub">
            						<li><a href="{{ url('/edit/images') }}">Change Images</a></li>
            						<li><a href="{{ url('/edit/page') }}">Edit Pages</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Delete</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/create/pages') }}">Delete Page</a></li>
                        <li><a href="{{ url('/create/content') }}">Delete Page Title</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Services</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/services/') }}">Edit Module Content</a></li> 
                        <li><a href="{{ url('/services/images') }}">Change Images</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('gallery/new/profile') }}">Add New Student Profile</a></li>
                        <li><a href="{{ url('gallery/edit/profile') }}">Edit Student Profile</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('/map') }}">Edit Map Direction</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Contact</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ url('contact/social') }}">Change Social Media Link</a></li>
						<li><a href="{{ url('contact/edit') }}">Edit Contact</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/register') }}">
                        <i class="fa fa-user"></i>
                        <span>Create a New Admin</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->


<!--main content start-->
<section id="main-content">
  	<section class="wrapper">
         @yield('content')
   </section>
 <!-- footer -->
		<div class="footer fixed-bottom">
			<div class="wthree-copyright">
            <p>{{ date('Y') ." © ". config('app.name', 'Fecund College') ." " }}  Tutorial. All Rights Reserved | Design by <a href="https://skytechnology.000webhostapp.com/"> SKYTech </a></p>
			</div>
		</div>
  <!-- / footer -->
</section>


<!--main content end-->
</section>

<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
<script src="{{ url('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ url('js/scripts.js') }}"></script>
<!--script src="{{ url('js/jquery.slimscroll.js') }}"></script-->
<script src="{{ url('js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ url('js/jquery.scrollTo.js') }}"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
<script src="{{ url('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>

@yield('script')

</body>
</html>