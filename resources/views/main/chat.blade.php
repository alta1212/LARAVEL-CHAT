<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <title>{{$userInfo->name}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="username" content="{{$userInfo->name}}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Chitchat">
    <meta name="keywords" content="Chitchat">
    <meta name="author" content="{{$userInfo->userid}}">
    <link rel="icon" href='{{asset("assets/images/favicon/favicon.png")}}' type="image/x-icon">
    <link rel="shortcut icon" href='{{asset("assets/images/favicon/favicon.png")}}' type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href='{{asset("assets/css/date-picker.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/css/magnific-popup.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/css/style.css")}}' media="screen" id="color">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/skins/moono-lisa/editor.css?t=HBDD")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/plugins/scayt/dialogs/dialog.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/plugins/tableselection/styles/tableselection.css")}}'>
    <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css")}}'>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
   <link rel="stylesheet" type="text/css" href='{{asset("assets/js/ckeditor/plugins/copyformatting/styles/copyformatting.css")}}'>
   
</head>

<body class="sidebar-active">
 
    <div class="chitchat-loader">
        <div><img src='{{asset("assets/images/logo/logo_big.png")}}' alt="" />
            <h3>Simple, secure messaging for fast connect to world..!</h3>
        </div>
    </div>
    <div class="chitchat-container sidebar-toggle">
        <nav class="main-nav on custom-scroll">
            <div class="logo-warpper"><a href="/")}}'><img src='{{asset("assets/images/logo/logo.png")}}' alt="logo"/></a></div>
            <div class="sidebar-main">
                <ul class="sidebar-top">
                    <li>
                        <a class="button-effect" href="status" data-tippy-content="status" data-intro="Check Status here">
                            <div class="user-popup status one">
                           
                                  <div> <img class="bg-img" id="avataTao" src="{{url('storage/'.$userInfo->avata)}}" alt="Avatar" /></div>
                          
                               
                            </div>
                        </a>
                    </li>
                    <li><a class="icon-btn btn-light button-effect" href="favourite" data-tippy-content="Friend List"><i class="fa fa-user">               </i></a></li>
                    <li><a id="get-Friend-Request" class="icon-btn btn-light button-effect" href="Friend-Request" data-tippy-content="Friend request"><i class="fa fa-user-plus"></i></a></li>
                    <li id="getRecommend"><a class="icon-btn btn-light button-effect" href="appoint-list" data-tippy-content="Add Friend"> <i class="fa fa-users">  </i></a></li>
                    <li>
                        <div class="dot-btn dot-danger grow"><a class="icon-btn btn-light button-effect" href="notification" data-tippy-content="Notification"> <i class="fa fa-bell"></i></a></div>
                    </li>
                    <li><a class="icon-btn btn-light button-effect" href="settings" data-tippy-content="Setting" data-intro="You can change settings by clicking here"> <i class="fa fa-cog"></i></a></li>
                </ul>
                <ul class="sidebar-bottom">
                    <li><a class="icon-btn btn-light button-effect mode" href="#" data-tippy-content="Theme Mode" data-intro="Change mode"><i class="fa fa-moon-o"></i></a></li>
                    <li><a class="icon-btn btn-light" href="logout")}}' data-tippy-content=" SignOut"> <i class="fa fa-power-off">  </i></a></li>
                </ul>
            </div>
        </nav>
        <aside class="chitchat-left-sidebar left-disp">
            <div class="recent-default dynemic-sidebar active">
                <!-- <div class="recent">
                    <div class="theme-title">
                        <div class="media">
                            <div>
                                <h2>Recent</h2>
                                <h4>Chat from your friends &#128536;</h4>
                            </div>
                            <div class="media-body"><a class="icon-btn btn-outline-light button-effect pull-right mobile-back" href="#"><i class="ti-angle-right"></i></a><a class="icon-btn btn-outline-light button-effect pull-right mainnav" href="#"><i class="ti-layout-grid2"></i></a></div>
                        </div>
                    </div>
                    <div class="recent-slider recent-chat owl-carousel owl-theme">
                        <div class="item">
                            <div class="recent-box">
                                <div class="dot-btn dot-danger grow"></div>
                                <div class="recent-profile"><img class="bg-img" src='{{asset("assets/images/avtar/1.jpg")}}' alt="Avatar" />
                                    <h6> John deo</h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="recent-box">
                                <div class="dot-btn dot-success grow"></div>
                                <div class="recent-profile online"><img class="bg-img" src='{{asset("assets/images/avtar/big/audiocall.jpg")}}' alt="Avatar" />
                                    <h6> John </h6>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="recent-box">
                                <div class="dot-btn dot-warning grow"></div>
                                <div class="recent-profile"><img class="bg-img" src='{{asset("assets/images/avtar/2.jpg")}}' alt="Avatar" />
                                    <h6> Jpny</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="chat custom-scroll">
                    <ul class="chat-cont-setting">
                        <li> <a href="#" data-toggle="modal" data-target="#msgchatModal"><span>new gruop chat</span>
                  <div class="icon-btn btn-outline-primary button-effect btn-sm"><i data-feather="message-square"></i></div></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#msgcallModal"><span>new call</span>
                  <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span>new Contact</span>
                  <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="users"></i></div></a></li>
                    </ul>
                    <div class="theme-title">
                        <div class="media">
                            <div>
                                <h2>Chat</h2>
                                <h4>Start New Conversation</h4>
                            </div>
                            <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm search contact-search" href="#"> <i data-feather="search"></i></a>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                        <div class="icon-close close-search"> </div>
                                    </div>
                                </form><a class="icon-btn btn-primary btn-fix chat-cont-toggle outside" href="#"><i data-feather="plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="theme-tab tab-sm chat-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" data-to="chat-content"><a class="nav-link button-effect active" id="chat-tab" data-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true" data-intro="Start chat"><i data-feather="message-square"> </i>Chat</a></li>
                            <li class="nav-item" data-to="call-content"><a class="nav-link button-effect" id="call-tab" data-toggle="tab" href="#call" role="tab" aria-controls="call" aria-selected="false"><i data-feather="phone"> </i>Call</a></li>
                            <li class="nav-item" data-to="contact-content"><a class="nav-link button-effect" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <i data-feather="users"> </i>Contact</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                                <div class="theme-tab">
                                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                        <li class="nav-item"><a class="nav-link button-effect active" id="direct-tab" data-toggle="tab" href="#direct" role="tab" aria-controls="direct" aria-selected="false" data-to="chating">Direct</a></li>
                                        <li class="nav-item"><a class="nav-link button-effect" id="group-tab" data-toggle="tab" href="#group" role="tab" aria-controls="group" aria-selected="true" data-to="group_chat">Group</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent1">
                                        <div class="tab-pane fade show active" id="direct" role="tabpanel" aria-labelledby="direct-tab">
                                            <ul id="chat-list" class="chat-main">
                                                @foreach($listChat as $r)

                                                    <li class="aaaaaa" userid="{{$r->chanel}}" >
                                                        <div class="chat-box">
                                                            <div class="profile online">
                                                              
                                                                   <img class="bg-img" src="{{ url('storage/'.$r->useravt)}}" alt="Avatar" />
                                                          
                                                            </div>
                                                            <div class="details">
                                                                <h5>{{$r->username}}</h5>
                                                                <h6 class="mes">{{$r->lastmes}}</h6>
                                                            </div>
                                                            <div class="date-status"><i class="ti-pin2"></i>
                                                                <h6>{{$r->time}}</h6>
                                                                <!-- <div class="badge badge-primary sm">8</div> -->
                                                                <!-- <h6 class="font-dark status"> Seen ✅</h6> -->
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                              
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="group-tab">
                                            <div class="search2">
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-append"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                                                        <input class="form-control" type="text" placeholder="Start Chat" />
                                                    </div>
                                                </div>
                                            </div>
                                            <ul id="groupchat" class="group-main">
                                                @foreach($listGruop as $r)
                                                <li groupid="{{$r->id}}" data-to="group_blank">
                                                    <div class="group-box">
                                                        <div class="profile"><img class="bg-img" src='https://www.cnet.com/a/img/kIbpaeeo0oJp5B59YKUGNYo3QaA=/940x0/2020/05/18/2d39045b-ac0e-44ec-9dd7-57d830539c69/screenshot-20200518-104704-facebook.jpg' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>{{$r->tittle}}</h5>
                                                             <h6>&nbsp;</h6> 
                                                        </div>
                                                        <div class="date-status">
                                                            <!-- <ul class="grop-icon">
                                                                <li><a class="group-tp" href="#" data-tippy-content="Josephin"> <img src='{{asset("assets/images/contact/1.jpg")}}' alt="group-icon-img"/></a></li>
                                                                <li><a class="group-tp" href="#" data-tippy-content="Jony "> <img src='{{asset("assets/images/contact/2.jpg")}}' alt="group-icon-img"/></a></li>
                                                                <li><a class="group-tp" href="#" data-tippy-content="Pabelo"> <img src='{{asset("assets/images/contact/3.jpg")}}' alt="group-icon-img"/></a></li>
                                                                <li>+ 12</li>
                                                            </ul> -->
                                                            <div class="badge badge-primary"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="call" role="tabpanel" aria-labelledby="call-tab">
                                <div class="theme-tab tab-icon">
                                    <ul class="nav nav-tabs" id="contactTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="con1-tab" data-toggle="tab" href="#con1" role="tab" aria-controls="con1" aria-selected="true">All</a></li>
                                        <li class="nav-item"><a class="nav-link" id="con3-tab" data-toggle="tab" href="#con3" role="tab" aria-controls="con3" aria-selected="false"> <i data-feather="phone-incoming"></i></a></li>
                                        <li class="nav-item"><a class="nav-link" id="con4-tab" data-toggle="tab" href="#con4" role="tab" aria-controls="con4" aria-selected="false"> <i data-feather="phone-outgoing"></i></a></li>
                                        <li class="nav-item"><a class="nav-link" id="con2-tab" data-toggle="tab" href="#con2" role="tab" aria-controls="con2" aria-selected="false"> <i data-feather="phone-missed"></i></a></li>
                                    </ul>
                                    <div class="tab-content" id="contactTabContent">
                                        <div class="tab-pane fade show active" id="con1" role="tabpanel" aria-labelledby="con1-tab">
                                            <ul class="call-log-main">
                                                <li class="active">
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="con2" role="tabpanel" aria-labelledby="con2-tab">
                                            <ul class="call-log-main">
                                                <li class="active">
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:30 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:10 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="con3" role="tabpanel" aria-labelledby="con3-tab">
                                            <ul class="call-log-main">
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="con4" role="tabpanel" aria-labelledby="con4-tab">
                                            <ul class="call-log-main">
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-up-right"></i>3:10 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="call-box">
                                                        <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                        <div class="details">
                                                            <h5>Jony Lynetin</h5>
                                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                                        </div>
                                                        <div class="call-status">
                                                            <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <ul class="contact-log-main">
                                    <li>
                                        <div class="contact-box">
                                            <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                            <div class="details">
                                                <h5>Jony Lynetin</h5>
                                                <h6>+21 3523 25544 </h6>
                                            </div>
                                            <div class="contact-action">
                                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="contact-box">
                                            <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                            <div class="details">
                                                <h5>Jony Lynetin</h5>
                                                <h6>+54 541447 255 </h6>
                                            </div>
                                            <div class="contact-action">
                                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-box">
                                            <div class="profile busy"><img class="bg-img" src='{{asset("assets/images/contact/3.jpg")}}' alt="Avatar" /></div>
                                            <div class="details">
                                                <h5>Jony Lynetin</h5>
                                                <h6>+58 2564 02554</h6>
                                            </div>
                                            <div class="contact-action">
                                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-box">
                                            <div class="profile unreachable"><img class="bg-img" src='{{asset("assets/images/contact/4.jpg")}}' alt="Avatar" /></div>
                                            <div class="details">
                                                <h5>Jony Lynetin</h5>
                                                <h6>+44 55124 2524</h6>
                                            </div>
                                            <div class="contact-action">
                                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-box">
                                            <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/4.jpg")}}' alt="Avatar" /></div>
                                            <div class="details">
                                                <h5>Jony Lynetin</h5>
                                                <h6>+54 541447 255 </h6>
                                            </div>
                                            <div class="contact-action">
                                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fevorite-tab dynemic-sidebar" id="favourite">
                <div class="theme-title">
                    <div class="media">
                        <div>
                            <h2>Favourite</h2>
                            <h4>Last Recent</h4>
                        </div>
                        <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                    <div class="icon-close close-search"></div>
                                </div>
                            </form><a class="icon-btn btn-outline-light btn-sm m-r-15" href="#" data-toggle="modal" data-target="#addcallmodal"><i data-feather="plus">                              </i></a><a class="icon-btn btn-outline-light btn-sm close-panel"
                                href="#"><i data-feather="x"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="chat-main">
                <!-- //ttttt -->
                @foreach($listChat as $r)
                    <li>
                        <div class="chat-box">
                            <div class="media">
                          
                            <div class="profile offline"><img class="bg-img" src="{{ url('storage/'.$r->useravt)}}" alt="Avatar" /></div>
                         
                                <div class="details">
                                    <h5>{{$r->username}}</h5>
                                    
                                </div>
                                <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                            </div>
                        </div>
                    </li>
                    
                    @endforeach
                </ul>
            </div>
            <div class="document-tab dynemic-sidebar" id="Friend-Request">
            <div class="theme-title">
                    <div class="media">
                            <h2>Friend Request</h2>
                            <div class="media-body text-right">
                             <a class="icon-btn btn-outline-light btn-sm close-panel"
                                href="#"><i data-feather="x"></i></a>
                        </div>
                    </div>
                </div>
                <ul id="list-friend-request" class="chat-main">

                </ul>
            </div>
            <div class="contact-list-tab dynemic-sidebar custom-scroll" id="appoint-list">
                <div class="theme-title">
                    <div class="media">
                        <div>
                            <h2>You may know</h2>

                        </div>
                        <div  class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                            <form id="search-friend"class="form-inline search-form">
                                
                                <div class="form-group">
                                    @csrf
                                    <input id="search-friend-input" class="form-control-plaintext" name="key" type="text" placeholder="Email hoặc tên người dừng" />
                                    <div class="icon-close close-search"> </div>
                                </div>
                            </form>
                            <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
                        </div>
                    </div>
                </div>
                <ul id="list-recommend" class="chat-main">

                </ul>
            </div>
            <div class="notification-tab dynemic-sidebar custom-scroll" id="notification">
                <div class="theme-title">
                    <div class="media">
                        <div>
                            <h2>Notification</h2>
                            <h4>List of notification</h4>
                        </div>
                        <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
                    </div>
                </div>
                <ul class="chat-main">
                    <li>
                        <div class="chat-box notification">
                            <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                            <div class="details"><span>Josephin water</span>
                                <h5>Upload New Photos</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                            <div class="date-status">
                                <h6>Now</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-box notification">
                            <div class="profile bg-success offline"><span>J</span></div>
                            <div class="details"><span>Jony Today Birthday</span>
                                <h5>Upload New Photos</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                            <div class="date-status">
                                <h6>1 hour ago</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-box notification">
                            <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                            <div class="details"><span>Sufiya Elija</span>
                                <h5>Comment On your Photo</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                            <div class="date-status">
                                <h6>5 hour ago</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-box notification">
                            <div class="profile unreachable"><img class="bg-img" src='{{asset("assets/images/contact/3.jpg")}}' alt="Avatar" /></div>
                            <div class="details"><span>Pabelo Mukrani</span>
                                <h5>Invite Your New Friend</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                            <div class="date-status">
                                <h6>6 hour ago</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="chat-box notification">
                            <div class="profile bg-success offline"><span>PM</span></div>
                            <div class="details"><span>Pabelo Mukrani</span>
                                <h5>Update Profile Picture</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing.</p>
                            </div>
                            <div class="date-status">
                                <h6>6 hour ago</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="settings-tab dynemic-sidebar custom-scroll" id="settings">
                <div class="theme-title">
                    <div class="media">
                        <div>
                            <h2>Settings</h2>
                            <h4>Change your app setting.</h4>
                        </div>
                        <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
                    </div>
                    <div class="profile-box">
                        <div class="media">
                          
                                <img src="{{ url('storage/'.$userInfo->avata) }}" onclick='$("#avt").click()' class="profile" id="cr-avt" alt="">
                            
                           
                            <div style="display: none;" onclick='$("#avt").click()'>
                      
                        </div>


                            <div class="details">
                                <h5>{{$userInfo->name}}</h5>
                                <h6>{{$userInfo->diachi}}</h6>
                            </div>
                            <div class="details edit">
                                <form  enctype="multipart/form-data"  action="{{route('updateDataU')}}" method="POST"id="inf0" class="form-radious form-sm">
                                    @csrf
                                    <input accept="image/*" type="file" name="avt" style=" display: none" id="avt">
                                    <div class="form-group mb-2">
                                        <input class="form-control" type="text" name="username" placeholder="Tên bạn" value="{{$userInfo->name}}" />
                                    </div>    
                                    <div class="form-group mb-2">
                                        <input class="form-control" type="text" name="address" placeholder="Địa chỉ" value="{{$userInfo->diachi}}" />
                                    </div>
                                    <div class="form-group mb-0">
                                        <input class="form-control" type="text" name="about" placeholder="Mô tả" value="{{$userInfo->mota}}" />
                                    </div>    
                                  
                                </form>
                            </div>
                            <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right edit-btn" href="#"> <i data-feather="edit">       </i></a></div>
                        </div>
                    </div>
                </div>
                <div class="setting-block">
                    <div class="block">
                        <div class="media">
                            <div class="media-body">
                                <h3>Account</h3>
                            </div>
                            <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left">                </i></a></div>
                        </div>
                        <div class="theme-according" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingTwo" role="heading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><a>Security<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Show Security notification</h5>
                                            </div>
                                            <div class="media-right">
                                                <input class="js-switch8" type="checkbox" />
                                            </div>
                                        </div>
                                        <p> <b>Note : </b>turn on this setting to recive notification when a contact's security code has been changes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne" role="heading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><a>Privacy<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul class="privacy">
                                            <li>
                                                <h5>Last seen</h5>
                                                <input class="js-switch10" type="checkbox" checked="" />
                                                <p> <b>Note : </b>turn on this setting to whether your contact can see last seen or not.</p>
                                            </li>
                                            <li>
                                                <h5>Profile Photo</h5>
                                                <input class="js-switch11" type="checkbox" />
                                                <p>
                                                    turn on this setting to whether your contact can see your profile or not.</p>
                                            </li>
                                            <li>
                                                <h5>About</h5>
                                                <input class="js-switch12" type="checkbox" />
                                                <p> <b>Note : </b>turn on this setting to whether your contact can see about status or not.</p>
                                            </li>
                                            <li>
                                                <h5>Status</h5>
                                                <input class="js-switch14" type="checkbox" />
                                                <p> <b>Note : </b>turn on this setting to whether your contact can see your status or not. </p>
                                            </li>
                                            <li>
                                                <h5>Read receipts</h5>
                                                <input class="js-switch16" type="checkbox" />
                                                <p> <b>Note : </b>If turn off this option you won't be able to see read recipts from contact. read receipts are always sent for group chats. </p>
                                            </li>
                                            <li>
                                                <h5>Groups</h5>
                                                <input class="js-switch13" type="checkbox" checked="" />
                                                <p> <b>Note : </b>turn on this setting to whether your contact can add in groups or not. </p>
                                            </li>
                                            <li>
                                                <h5>Screen Lock(Require Touch ID)</h5>
                                                <input class="js-switch17" type="checkbox" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree" role="heading" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><a>Two Step verification<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Enable</h5>
                                            </div>
                                            <div class="media-right">
                                                <input class="js-switch9" type="checkbox" />
                                            </div>
                                        </div>
                                        <p> <b>Note : </b>For added security, enable two-step verifiation, which will require a PIN when registering your phone number with Chitchat again.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour" role="heading" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><a>Change login information<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                                    <form id="changeLoginInfo" class="card-body change-number">
                                        <h5>Your new phone number</h5>
                                        <div class="input-group">
                                            <input name="phone" class="form-control" type="number"  value="{{$userInfo->phone}}"/>
                                        </div>
                                        <h5>Your new email</h5>
                                        <div class="input-group">
                                            <input name="email" class="form-control" type="email" value="{{$userInfo->email}}"/>
                                        </div>
                                        <h5>Your password</h5>
                                        <div class="input-group">                              
                                            <input name="password" class="form-control" type="password" />
                                        </div>
                                       
                                        <div class="text-right"> <a id="submitInfo" class="btn btn-outline-primary button-effect btn-sm" href="#">confirm</a></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive" role="heading" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><a>Request account info<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body"><a class="p-0 req-info" id="demo" href="#" onclick="document.getElementById('demo').innerHTML = 'Request sent'">Request Info                            </a>
                                        <p> <b>Note : </b>Create a report of your account information and settings, which you can access ot port to another app.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix" role="heading" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><a>Delete My account<i class="fa fa-angle-down"></i></a></div>
                                <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body"><a class="p-0 req-info font-danger" href="#">Delete Account                            </a>
                                        <p> <b>Note :</b>Deleting your account will delete your account info, profile photo, all groups & chat history.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3>Account</h3>
                            <h4>Update Your Account Details</h4>
                        </div>
                        <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
                    </div>
                </div>
                <div class="setting-block">
                    <div class="block">
                        <div class="media">
                            <div class="media-body">
                                <h3>Chat</h3>
                            </div>
                            <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
                        </div>
                        <ul class="help">
                            <li>
                                <h5>Chat Backup</h5>
                                <ul class="switch-list">
                                    <li>
                                        <input class="js-switch5" type="checkbox" checked="" />
                                        <h5>Auto Backup</h5>
                                    </li>
                                    <li>
                                        <input class="js-switch6" type="checkbox" />
                                        <h5>Include document</h5>
                                    </li>
                                    <li>
                                        <input class="js-switch7" type="checkbox" />
                                        <h5>Include Videos</h5>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h5>Chat wallpaper</h5>
                                <ul class="wallpaper">
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/2.jpg")}}' alt="Avatar" /></li>
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/1.jpg")}}' alt="Avatar" /></li>
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/3.jpg")}}' alt="Avatar" /></li>
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/4.jpg")}}' alt="Avatar" /></li>
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/5.jpg")}}' alt="Avatar" /></li>
                                    <li><img class="bg-img" src='{{asset("assets/images/wallpaper/6.jpg")}}' alt="Avatar" /></li>
                                </ul>
                            </li>
                            <li>
                                <h5> <a href="#">Archive all chat</a></h5>
                            </li>
                            <li>
                                <h5> <a href="#"> Clear all chats</a></h5>
                            </li>
                            <li>
                                <h5> <a class="font-danger" href="#">Delete all chats</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3>Chat</h3>
                            <h4>Control Your Chat Backup</h4>
                        </div>
                        <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">     </i></a></div>
                    </div>
                </div>
                <div class="setting-block">
                    <div class="block">
                        <div class="media">
                            <div class="media-body">
                                <h3>Integratin</h3>
                            </div>
                            <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
                        </div>
                        <ul class="integratin">
                            <li>
                                <div class="media">
                                    <div class="media-left"> <a class="fb" href="https://www.facebook.com/login" target="_blank"><i class="fa fa-facebook"></i>
                        <h5>Facebook   </h5></a></div>
                                    <div class="media-right">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left"> <a class="insta" href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa fa-instagram"></i>
                        <h5>instagram</h5></a></div>
                                    <div class="media-right">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left"> <a class="twi" href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i>
                        <h5>twitter   </h5></a></div>
                                    <div class="media-right">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/contact/3.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left"> <a class="ggl" href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                            target="_blank"><i class="fa fa-google"></i>
                        <h5>google   </h5></a></div>
                                    <div class="media-right">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-left"> <a class="slc" href="#"><i class="fa fa-slack"></i>
                        <h5>Slack   </h5></a></div>
                                    <div class="media-right">
                                        <div class="profile"><a href="https://slack.com/get-started#/" target="_blank"><i data-feather="plus-circle"></i></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3>Integratin</h3>
                            <h4>Sync Your Other Social Account</h4>
                        </div>
                        <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
                    </div>
                </div>
                <div class="setting-block">
                    <div class="block">
                        <div class="media">
                            <div class="media-body">
                                <h3>Help</h3>
                            </div>
                            <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
                        </div>
                        <ul class="help">
                            <li>
                                <h5> <a href="#">FAQ</a></h5>
                            </li>
                            <li>
                                <h5> <a href="#"> Contact Us</a></h5>
                            </li>
                            <li>
                                <h5> <a href="#">Terms and Privacy Policy</a></h5>
                            </li>
                            <li>
                                <h5> <a href="#">Licenses</a></h5>
                            </li>
                            <li>
                                <h5> <a href="#">2019 - 20 Powered by Pixelstrap</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h3>Help</h3>
                            <h4>You are Confusion, Tell me</h4>
                        </div>
                        <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right"></i></a></div>
                    </div>
                </div>
            </div>

        </aside>
        <div class="chitchat-main small-sidebar" id="content">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
            <div class="chat-content tabto active">
                <div class="messages custom-scroll active" id="chating">
                    <div id="info-contact-with" class="contact-details">
                        <div class="row">
                            <div class="col-7">
                                <div class="media left">
                                    <div class="media-left mr-3">
                                        <div ><img class="profile online menu-trigger" class="bg-img" id="avt-contact-with" alt="Avatar" /></div>
                                    </div>
                                    <div class="media-body">
                                        <h5 id="name-contact-with">Josephin water</h5>
                                        <div class="badge badge-success">Active</div>
                                    </div>
                                    <div class="media-right">
                                        <ul>
                                            <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                                         
                                            <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <ul class="calls text-right">
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-toggle="modal" ><i data-feather="phone"></i></a></li>
                                    <li style="display: none;"><a class="icon-btn btn-light button-effect" href="#" id="aaaaaa" data-tippy-content="Quick Audio Call" data-toggle="modal" data-target="#videocall"></a></li>
                                    <li id="callVideoButton"><a class="icon-btn btn-light button-effect" href="#"  data-tippy-content="Quick Video Call" data-toggle="modal" data-target="#outvideocall"><i data-feather="video"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                                        <div class="chat-frind-content">
                                            <ul>
                                                <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                                                    <h5>Profile</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="flag"></i></a>
                                                    <h5>Report</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                                                    <h5>Delete</h5>
                                                </li>
                                                <li onclick="blockuser()"><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                                                    <h5>Block/Unblock</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-content" class="contact-chat">
                         <ul class="chatappend">
                        <li >                     
                            <h5> Welecome Back {{$userInfo->name}} ! Choose a chat to start chat </h5>       
                        </li>

                        </ul> 
                    </div>
                </div>
                <div class="messages custom-scroll" id="blank">
                    <div class="contact-details">
                        <div class="row">
                            <div class="col">
                                <div class="media left">
                                    <div class="media-left mr-3">
                                        <div class="profile online menu-trigger"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Josephin water</h5>
                                        <h6>Last Seen 5 hours</h6>
                                    </div>
                                    <div class="media-right">
                                        <ul>
                                            <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                                            <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                                                <form class="form-inline search-form">
                                                    <div class="form-group">
                                                        <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                                        <div class="icon-close close-search"> </div>
                                                    </div>
                                                </form>
                                            </li>
                                            <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <ul class="calls text-right">
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-toggle="modal" data-target="#audiocall"><i data-feather="phone"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-toggle="modal" data-target="#videocall"><i data-feather="video"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                                        <div class="chat-frind-content">
                                            <ul>
                                                <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                                                    <h5>profile</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                                                    <h5>archive</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                                                    <h5>delete</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                                                    <h5>block</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-chat">
                        <div class="rightchat animat-rate">
                            <div class="bg_circle">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="cross"></div>
                            <div class="cross1"></div>
                            <div class="cross2"></div>
                            <div class="dot"></div>
                            <div class="dot1"> </div>
                        </div>
                    </div>
                    <div class="call-list-center"><img src='{{asset("assets/images/chat.png")}}' alt="" />
                        <div class="animated-bg"><i></i><i></i><i></i></div>
                        <p>Select a chat to read messages</p>
                    </div>
                </div>
                <div class="messages custom-scroll" id="group_chat">
                    <div class="contact-details">
                        <div class="row">
                            <div class="col">
                                <div class="media left">
                                    <div class="media-left mr-3">
                                        <div class="profile online menu-trigger"><img class="bg-img" src='{{asset("assets/images/avtar/teq.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Tech Ninjas</h5>
                                        <div class="badge badge-success">Active</div>
                                    </div>
                                    <div class="media-right">
                                        <ul>
                                            <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                                            <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                                                <form class="form-inline search-form">
                                                    <div class="form-group">
                                                        <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                                        <div class="icon-close close-search"> </div>
                                                    </div>
                                                </form>
                                            </li>
                                            <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <ul class="calls text-right">
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Start Audio Conference" data-toggle="modal" data-target="#confercall"><i data-feather="phone"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Start Video Conference" data-toggle="modal" data-target="#confvideocl"><i data-feather="video"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"></a>
                                        <div class="chat-frind-content">
                                            <ul>
                                                <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                                                    <h5>profile</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                                                    <h5>archive</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                                                    <h5>delete</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                                                    <h5>block</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-chat">
                        <ul id="content-chat-gruop" class="chatappend">
                        <li >                     
                            <h5> Welecome Back {{$userInfo->name}} ! Choose a chat to start chat </h5>       
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="messages custom-scroll" id="group_blank">
                    <div class="contact-details">
                        <div class="row">
                            <div class="col">
                                <div class="media left">
                                    <div class="media-left mr-3">
                                        <div class="profile online menu-trigger"><img class="bg-img" src='{{asset("assets/images/avtar/family.jpg")}}' alt="Avatar" /></div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Family Ties</h5>
                                        <h6>Last Seen 2 hours</h6>
                                    </div>
                                    <div class="media-right">
                                        <ul>
                                            <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                                            <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                                                <form class="form-inline search-form">
                                                    <div class="form-group">
                                                        <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                                        <div class="icon-close close-search"> </div>
                                                    </div>
                                                </form>
                                            </li>
                                            <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <ul class="calls text-right">
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-toggle="modal" data-target="#confercall"><i data-feather="phone"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-toggle="modal" data-target="#confvideocl"><i data-feather="video"></i></a></li>
                                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                                        <div class="chat-frind-content">
                                            <ul>
                                                <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                                                    <h5>profile</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                                                    <h5>archive</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                                                    <h5>delete</h5>
                                                </li>
                                                <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                                                    <h5>block</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-chat">
                        <div class="rightchat animat-rate">
                            <div class="bg_circle">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="cross"></div>
                            <div class="cross1"></div>
                            <div class="cross2"></div>
                            <div class="dot"></div>
                            <div class="dot1"> </div>
                        </div>
                    </div>
                    <div class="call-list-center"><img src='{{asset("assets/images/chat.png")}}' alt="" />
                        <div class="animated-bg"><i></i><i></i><i></i></div>
                        <p>Select a chat to read messages</p>
                    </div>
                </div>
                <div class="message-input">
                    <div class="wrap emojis-main"><a class="icon-btn btn-outline-primary button-effect mr-3 toggle-sticker outside" href="#">
                <svg id="Layer_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2158px" height="2148px" viewbox="0 0 2158 2148" enable-background="new 0 0 2158 2148" xml:space="preserve">
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="60" stroke-miterlimit="10" d="M699,693                        c0,175.649,0,351.351,0,527c36.996,0,74.004,0,111,0c18.058,0,40.812-2.485,57,1c11.332,0.333,22.668,0.667,34,1                        c7.664,2.148,20.769,14.091,25,20c8.857,12.368,6,41.794,6,62c0,49.329,0,98.672,0,148c175.649,0,351.351,0,527,0                        c0-252.975,0-506.025,0-759C1205.692,693,952.308,693,699,693z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M886,799c59.172-0.765,93.431,25.289,111,66c6.416,14.867,14.612,39.858,9,63                        c-2.391,9.857-5.076,20.138-9,29c-15.794,35.671-47.129,53.674-90,63c-20.979,4.563-42.463-4.543-55-10                        c-42.773-18.617-85.652-77.246-59-141c10.637-25.445,31.024-49,56-60c7.999-2.667,16.001-5.333,24-8                        C877.255,799.833,882.716,801.036,886,799z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1258,799c59.172-0.765,93.431,25.289,111,66c6.416,14.867,14.612,39.858,9,63                        c-2.391,9.857-5.076,20.138-9,29c-15.794,35.671-47.129,53.674-90,63c-20.979,4.563-42.463-4.543-55-10                        c-42.773-18.617-85.652-77.246-59-141c10.637-25.445,31.024-49,56-60c7.999-2.667,16.001-5.333,24-8                        C1249.255,799.833,1254.716,801.036,1258,799z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1345,1184c-0.723,18.71-11.658,29.82-20,41c-18.271,24.489-50.129,37.183-83,47                        c-7.333,1-14.667,2-22,3c-12.013,2.798-33.636,5.15-44,3c-11.332-0.333-22.668-0.667-34-1c-15.332-3-30.668-6-46-9                        c-44.066-14.426-80.944-31.937-110-61c-22.348-22.353-38.992-45.628-37-90c0.667,0,1.333,0,2,0c9.163,5.585,24.723,3.168,36,6                        c26.211,6.583,54.736,7.174,82,14c34.068,8.53,71.961,10.531,106,19c9.999,1.333,20.001,2.667,30,4c26.193,6.703,54.673,7.211,82,14                        C1304.894,1178.445,1325.573,1182.959,1345,1184z"></path>
                  <polygon fill-rule="evenodd" clip-rule="evenodd" points="668.333,1248.667 901.667,1482 941.667,1432 922.498,1237.846                         687,1210.667 "></polygon>
                </svg></a>
                        <div class="dot-btn dot-primary mr-3"><a class="icon-btn btn-outline-primary button-effect toggle-emoji" href="#"><i data-feather="smile"></i></a></div>
                        <div class="contact-poll"><a class="icon-btn btn-outline-primary mr-4 outside" href="#"><i class="fa fa-plus"></i></a>
                            <div class="contact-poll-content">
                                <ul>
                                    <li><a href="#"><i data-feather="image"></i>gallery</a></li>
                                    <li><a href="#"><i data-feather="camera"></i>camera</a></li>
                                    <li><a data-toggle="modal" data-target="#snippetModal"><i data-feather="code">                       </i>Code Snippest</a></li>
                                    <li><a href="#"><i data-feather="user">                              </i>contact</a></li>
                                    <li><a href="#"><i data-feather="map-pin">                       </i>location</a></li>
                                    <li><a href="#"><i data-feather="clipboard"> </i>document</a></li>
                                    <li><a data-toggle="modal" data-target="#pollModal"><i data-feather="bar-chart-2">                       </i>poll</a></li>
                                    <li><a onclick="$('#filetrans').click()" href="#"><i data-feather="paperclip"></i>attach</a>
                                    <input style="display: none;" accept="audio/*,video/*,image/*" type="file" name="filetrans" id="filetrans">      
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input class="setemoj" id="setemoj" type="text" placeholder="Write your message..." /><a class="icon-btn btn-outline-primary button-effect mr-3 ml-3" href="#"><i data-feather="mic">                </i></a>
                        <button class="submit icon-btn btn-primary disabled" id="send-msg" disabled="disabled"><i data-feather="send">               </i></button>
                        <div class="emojis-contain">
                            <div class="emojis-sub-contain custom-scroll">
                                <ul>
                                    <li>&#128512;</li>
                                    <li>&#128513;</li>
                                    <li>&#128514;</li>
                                    <li>&#128515;</li>
                                    <li>&#128516;</li>
                                    <li>&#128517;</li>
                                    <li>&#128518;</li>
                                    <li>&#128519;</li>
                                    <li>&#128520;</li>
                                    <li>&#128521;</li>
                                    <li>&#128522;</li>
                                    <li>&#128523;</li>
                                    <li>&#128524;</li>
                                    <li>&#128525;</li>
                                    <li>&#128526;</li>
                                    <li>&#128527;</li>
                                    <li>&#128528;</li>
                                    <li>&#128529;</li>
                                    <li>&#128530;</li>
                                    <li>&#128531;</li>
                                    <li>&#128532;</li>
                                    <li>&#128533;</li>
                                    <li>&#128534;</li>
                                    <li>&#128535;</li>
                                    <li>&#128536;</li>
                                    <li>&#128537;</li>
                                    <li>&#128538;</li>
                                    <li>&#128539;</li>
                                    <li>&#128540;</li>
                                    <li>&#128541;</li>
                                    <li>&#128542;</li>
                                    <li>&#128543;</li>
                                    <li>&#128544;</li>
                                    <li>&#128545;</li>
                                    <li>&#128546;</li>
                                    <li>&#128547;</li>
                                    <li>&#128549;</li>
                                    <li>&#128550;</li>
                                    <li>&#128551;</li>
                                    <li>&#128552;</li>
                                    <li>&#128553;</li>
                                    <li>&#128554;</li>
                                    <li>&#128555;</li>
                                    <li>&#128557;</li>
                                    <li>&#128558;</li>
                                    <li>&#128559;</li>
                                    <li>&#128560;</li>
                                    <li>&#128561;</li>
                                    <li>&#128562;</li>
                                    <li>&#128563;</li>
                                    <li>&#128564;</li>
                                    <li>&#128565;</li>
                                    <li>&#128566;</li>
                                    <li>&#128567;</li>
                                    <li>&#128568;</li>
                                    <li>&#128569;</li>
                                    <li>&#128570;</li>
                                    <li>&#128571;</li>
                                    <li>&#128572;</li>
                                    <li>&#128573;</li>
                                    <li>&#128574;</li>
                                    <li>&#128576; </li>
                                    <li>&#128579; </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sticker-contain">
                            <div class="sticker-sub-contain custom-scroll">
                                <ul>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/1.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/2.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/3.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/3.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/4.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/5.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/6.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/7.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/8.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/9.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/10.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/11.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/12.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/13.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/14.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/15.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/16.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/17.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/18.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/19.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/20.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/21.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/22.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/23.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/24.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/25.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/26.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/27.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/28.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/29.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/30.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/31.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/32.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/33.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/34.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/35.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/36.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/37.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/38.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/39.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/40.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/41.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/42.gif")}}' alt="sticker"/></a></li>
                                    <li><a href="#"><img class="img-fluid" src='{{asset("assets/images/sticker/43.gif")}}' alt="sticker"/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="call-content tabto"><a class="icon-btn btn-outline-primary button-effect mobile-back mb-3" href="#"><i class="ti-angle-left">                       </i></a>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="user-profile mb-3">
                            <div class="user-content"><img class="img-fluid" src='{{asset("assets/images/contact/2.jpg")}}' alt="user-img" />
                                <h3>Josephin water</h3>
                                <h4 class="mt-2">+0 1800 76855</h4>
                                <ul>
                                    <li><i class="fa fa-twitch"></i>massage</li>
                                    <li><i class="fa fa-phone" data-toggle="modal" data-target="#audiocall"></i>voice call</li>
                                    <li> <i class="fa fa-video-camera" data-toggle="modal" data-target="#videocall"></i>video call</li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-profile">
                            <div class="document">
                                <div class="filter-block">
                                    <div class="collapse-block open">
                                        <h5 class="block-title">Shared Document
                                            <label class="badge badge-success sm ml-2">3</label>
                                        </h5>
                                        <div class="block-content">
                                            <ul class="document-list">
                                                <li><i class="ti-folder font-danger"></i>
                                                    <h5>Simple_practice_project-zip</h5>
                                                </li>
                                                <li><i class="ti-write font-success"></i>
                                                    <h5>Word_Map-jpg</h5>
                                                </li>
                                                <li><i class="ti-zip font-primary"></i>
                                                    <h5>Latest_Design_portfolio.pdf</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="call-log-main custom-scroll">
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-incoming"></i>
                                        <div class="media-body">
                                            <h5>incoming call </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>15 Minutes ago 5:10 &nbsp;(22/10/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-incoming"></i>
                                        <div class="media-body">
                                            <h5>outgoing call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>30 Minutes ago 10:30 &nbsp;(12/09/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-missed"></i>
                                        <div class="media-body">
                                            <h5>missed call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>1 Minutes ago 8:30 &nbsp; (28/08/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-missed"></i>
                                        <div class="media-body">
                                            <h5>missed call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>10 Minutes ago 9:10 &nbsp; (18/01/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-missed"></i>
                                        <div class="media-body">
                                            <h5>missed call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>35 Minutes ago 9:10 &nbsp; (17/01/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-missed"></i>
                                        <div class="media-body">
                                            <h5>missed call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>80 Minutes ago 12:05 &nbsp; (17/01/19)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-incoming"></i>
                                        <div class="media-body">
                                            <h5>incoming call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>15 Minutes ago 15:20 &nbsp; (28/02/20)</h6>
                                </div>
                            </div>
                            <div class="coll-log-group">
                                <div class="log-content-left">
                                    <div class="media"><i data-feather="phone-incoming"></i>
                                        <div class="media-body">
                                            <h5>incoming call</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="log-content-right">
                                    <h6>10 Minutes ago 20m 26s &nbsp; 10/3/20 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="call-log-clear"> <i class="ti-trash font-danger"></i><span class="font-danger">Delete call log</span></div>
                    </div>
                </div>
            </div>
            <div class="contact-content tabto">
                <div class="contact-sub-content"><a class="icon-btn btn-outline-primary button-effect mobile-back mb-3" href="#"><i class="ti-angle-left"></i></a>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="user-profile">
                                <div class="user-content"><img class="img-fluid bg-icon" src='{{asset("assets/images/contact/2.jpg")}}' alt="user-img" />
                                    <h3>Josephin water</h3>
                                    <ul>
                                        <li><i class="fa fa-twitch"> </i>massage</li>
                                        <li><i class="fa fa-phone"> </i>voice call</li>
                                        <li> <i class="fa fa-video-camera"> </i>video call</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="personal-info-group">
                                <div class="social-info-group">
                                    <ul class="integratin mt-0">
                                        <li>
                                            <div class="media">
                                                <div class="media-left"><a class="fb" href="https://www.facebook.com/login" target="_blank"><i class="fa fa-facebook"></i>
                              <h5>Facebook   </h5></a></div>
                                                <div class="media-right">
                                                    <div class="profile bg-size"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left"><a class="twi" href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i>
                              <h5>twitter   </h5></a></div>
                                                <div class="media-right">
                                                    <div class="profile bg-size"><img class="bg-img" src='{{asset("assets/images/contact/3.jpg")}}' alt="Avatar" /></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left"><a class="ggl" href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                                        target="_blank"><i class="fa fa-google"></i>
                              <h5>google   </h5></a></div>
                                                <div class="media-right">
                                                    <div class="profile bg-size"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="personal-info-group">
                                <h3>contact info</h3>
                                <ul class="basic-info">
                                    <li>
                                        <h5>name</h5>
                                        <h5 class="details">Nick</h5>
                                    </li>
                                    <li>
                                        <h5>gender</h5>
                                        <h5 class="details">male</h5>
                                    </li>
                                    <li>
                                        <h5>Birthday</h5>
                                        <h5 class="details">9 april 1994</h5>
                                    </li>
                                    <li>
                                        <h5>Favorite Book</h5>
                                        <h5 class="details">Perfect Chemistry</h5>
                                    </li>
                                    <li>
                                        <h5>Personality</h5>
                                        <h5 class="details">Cool</h5>
                                    </li>
                                    <li>
                                        <h5>City</h5>
                                        <h5 class="details">Moline Acres</h5>
                                    </li>
                                    <li>
                                        <h5>mobile no</h5>
                                        <h5 class="details">+0 1800 76855</h5>
                                    </li>
                                    <li>
                                        <h5>email</h5>
                                        <h5 class="details">pixelstrap@test.com</h5>
                                    </li>
                                    <li>
                                        <h5>Website</h5>
                                        <h5 class="details">www.test.com</h5>
                                    </li>
                                    <li>
                                        <h5 class="m-0">Interest</h5>
                                        <h5 class="details">Photography</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="chitchat-right-sidebar" id="slide-menu">
            <div class="custom-scroll right-sidebar">
                <div class="contact-profile">
                    <div class="theme-title">
                        <div class="media">
                            <div>
                                <h2>Profile</h2>
                                <h4>Personal Information</h4>
                            </div>
                            <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm close-profile ml-3" href="#"> <i data-feather="x"> </i></a></div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="contact-top"><img class="bg-img" src='{{asset("assets/images/avtar/2.jpg")}}' alt="" /></div>
                        <div class="name">
                            <h3>Josephin water</h3>
                            <h6>Add Description</h6>
                        </div>
                        <ul class="medialogo">
                            <li><a class="icon-btn btn-danger button-effect" href="#"><i class="fa fa-google"></i></a></li>
                            <li><a class="icon-btn btn-primary button-effect" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="icon-btn btn-facebook button-effect" href="#"><i class="fa fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="document">
                    <div class="filter-block">
                        <div class="collapse-block open">
                            <h5 class="block-title">Shared Document
                                <label class="badge badge-success sm ml-2">3</label>
                            </h5>
                            <div class="block-content">
                                <ul class="document-list">
                                    <li><i class="ti-folder font-danger"></i>
                                        <h5>Simple_practice_project-zip</h5>
                                    </li>
                                    <li><i class="ti-write font-success"></i>
                                        <h5>Word_Map-jpg</h5>
                                    </li>
                                    <li><i class="ti-zip font-primary"></i>
                                        <h5>Latest_Design_portfolio.pdf</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-gallery portfolio-section grid-portfolio">
                    <div class="collapse-block open">
                        <h5 class="block-title">Shared Media
                            <label class="badge badge-primary sm ml-2">2</label>
                        </h5>
                        <div class="block-content">
                            <div class="row share-media zoom-gallery">
                                <div class="col-12">
                                    <h6 class="mb-2">22/03/2019</h6>
                                </div>
                                <div class="col-4 isotopeSelector filter">
                                    <div class="media-big">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/1.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/1.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media-small isotopeSelector filter fashion">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/5.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/5.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="mb-2 mt-2">20/04/2019</h6>
                                </div>
                                <div class="col-4">
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="media-small isotopeSelector filter">
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                    <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="status">
                    <div class="collapse-block open">
                        <h5 class="block-title">Starred Messages
                            <label class="badge badge-outline-dark sm ml-2">2</label>
                        </h5>
                        <div class="block-content">
                            <div class="contact-chat p-0 m-0">
                                <ul class="str-msg">
                                    <li>
                                        <div class="media">
                                            <div class="profile mr-4"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                            <div class="media-body">
                                                <div class="contact-name">
                                                    <h5>Alan josheph</h5>
                                                    <h6>01:35 AM</h6>
                                                    <ul class="msg-box">
                                                        <li>
                                                            <h5>Hi I am Alan,</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="profile mr-4"><img class="bg-img" src='{{asset("assets/images/contact/3.jpg")}}' alt="Avatar" /></div>
                                            <div class="media-body">
                                                <div class="contact-name">
                                                    <h5>Josephin water</h5>
                                                    <h6>01:35 AM</h6>
                                                    <ul class="msg-box">
                                                        <li>
                                                            <h5>Can you help me to find best chat app?.</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="status">
                    <div class="collapse-block open">
                        <h5 class="block-title">Common groups
                            <label class="badge badge-outline-dark sm ml-2">3</label>
                        </h5>
                        <div class="block-content">
                            <ul class="group-main">
                                <li>
                                    <div class="group-box">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/teq.jpg")}}' alt="Avatar" /></div>
                                        <div class="details">
                                            <h5>Tech Ninjas</h5>
                                            <h6>johan, deo, Sufiya Elija, Pabelo & you</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="group-box">
                                        <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/family.jpg")}}' alt="Avatar" /></div>
                                        <div class="details">
                                            <h5>Family Ties</h5>
                                            <h6>Mukrani, deo & you</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="status other">
                    <h5 class="block-title p-b-25">Contact info</h5>
                    <ul>
                        <li>
                            <h5> <a href="#"> <i data-feather="smartphone"></i>+12 3456789587</a></h5>
                        </li>
                        <li>
                            <h5><a href="https://themeforest.net/user/pixelstrap/portfolio"> <i data-feather="crosshair"></i>https://pixelstrap</a></h5>
                        </li>
                        <li>
                            <h5><a href="#"> <i data-feather="map-pin"></i>1766  Fidler Drive Texas, 78238.</a></h5>
                        </li>
                    </ul>
                </div>
                <div class="status">
                    <ul>
                        <li>
                            <input class="js-switch" type="checkbox" />
                            <h5>Block </h5>
                        </li>
                        <li>
                            <input class="js-switch1" type="checkbox" />
                            <h5>Mute </h5>
                        </li>
                        <li>
                            <input class="js-switch2" type="checkbox" checked="" />
                            <h5>Get Notification</h5>
                        </li>
                    </ul>
                </div>
                <div class="status other">
                    <ul>
                        <li>
                            <h5> <a href="#"> <i data-feather="share-2"></i>share Contact</a></h5>
                        </li>
                        <li>
                            <h5><a href="#"> <i data-feather="trash-2"></i>Clear Chat</a></h5>
                        </li>
                        <li>
                            <h5><a href="#"> <i data-feather="external-link"></i>Export Chat</a></h5>
                        </li>
                        <li>
                            <h5><a href="#"> <i data-feather="alert-circle"></i>Report Contact             </a></h5>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <aside class="app-sidebar active">
            <div class="apps">
                <ul class="apps-ul">
                    <li id="todo">
                        <div class="todo-main">
                            <div class="theme-title">
                                <div class="media">
                                    <div>
                                        <h2>Todo</h2>
                                        <h4>to create your task</h4>
                                    </div>
                                    <div class="media-body media-body text-right"><a class="icon-btn btn-sm btn-outline-light close-apps" href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </div>
                            <div class="todo-name">
                                <form class="default-form">
                                    <select class="custom-scroll" name="support[support_type]">
                      <option>All Conversations</option>
                      <option>Josephin water</option>
                      <option>Jony Lynetin</option>
                      <option>Sufiya Elija</option>
                      <option>Mukrani Pabelo</option>
                      <option>Jhon Deo</option>
                    </select>
                                </form>
                            </div>
                            <div class="todo-tab theme-tab custom-scroll">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link button-effect active show" data-toggle="pill" href="#todo1">All</a></li>
                                    <li class="nav-item"><a class="nav-link button-effect" data-toggle="pill" href="#todo2">My to-dos</a></li>
                                    <li><a class="icon-btn btn-light button-effect btn-sm" data-toggle="modal" data-target="#todoModal"><i data-feather="plus">                      </i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="todo1">
                                        <div class="tab-card text-left">
                                            <div class="todo-task">
                                                <h4>Designer Discussion </h4>
                                                <div class="todo-main-content">
                                                    <div class="input-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" />
                                                        <input id="user_input12" type="text" name="todo-text" placeholder="Give me review on our side" />
                                                    </div>
                                                    <div class="drop-picker">
                                                        <div class="dropdown currency" tabindex="1">
                                                            <div class="select"><span>Assign To</span></div>
                                                            <input type="hidden" name="currency" />
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-divider">
                                                                    <div class="fa fa-user"></div>
                                                                    <h5 class="text-muted">Assign To</h5>
                                                                </li>
                                                                <li><a href="#">Josephin john</a></li>
                                                                <li><a href="#">Lynetin john</a></li>
                                                                <li><a href="#">Sufiya john</a></li>
                                                                <li><a href="#">Jhon john</a></li>
                                                            </ul>
                                                        </div>
                                                        <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date" />
                                                    </div>
                                                </div>
                                                <div class="todo-list">
                                                    <div class="element" id="div_3"><span class="add add-to-do">Add-To-Do</span></div>
                                                </div>
                                                <div class="todo-main-content">
                                                    <div class="input-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" />
                                                        <input id="user_input13" type="text" name="todo-text" placeholder="Redesign Your Design" />
                                                    </div>
                                                    <div class="drop-picker">
                                                        <div class="dropdown currency" tabindex="1">
                                                            <div class="select"><span>Assign To</span></div>
                                                            <input type="hidden" name="currency" />
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-divider">
                                                                    <div class="fa fa-user"></div>
                                                                    <h5 class="text-muted">Assign To</h5>
                                                                </li>
                                                                <li><a href="#">Josephin john</a></li>
                                                                <li><a href="#">Lynetin john</a></li>
                                                                <li><a href="#">Sufiya john</a></li>
                                                                <li><a href="#">Jhon john</a></li>
                                                            </ul>
                                                        </div>
                                                        <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date" />
                                                    </div>
                                                </div>
                                                <div class="todo-list">
                                                    <div class="element" id="div_2"><span class="add add-to-do">Add-To-Do</span></div>
                                                </div>
                                                <div class="todo-main-content">
                                                    <div class="input-text">
                                                        <input type="checkbox" aria-label="Checkbox for following text input" />
                                                        <input id="user_input14" type="text" name="todo-text" placeholder=" Complete Project report" />
                                                    </div>
                                                    <div class="drop-picker">
                                                        <div class="dropdown currency" tabindex="1">
                                                            <div class="select"><span>Assign To</span></div>
                                                            <input type="hidden" name="currency" />
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-divider">
                                                                    <div class="fa fa-user"></div>
                                                                    <h5 class="text-muted">Assign To</h5>
                                                                </li>
                                                                <li><a href="#">Josephin john</a></li>
                                                                <li><a href="#">Lynetin john</a></li>
                                                                <li><a href="#">Sufiya john</a></li>
                                                                <li><a href="#">Jhon john</a></li>
                                                            </ul>
                                                        </div>
                                                        <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date" />
                                                    </div>
                                                </div>
                                                <div class="todo-list">
                                                    <div class="element" id="div_1"><span class="add add-to-do">Add-To-Do</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="todo2">
                                        <div class="converstaion-docs tab-card"><i class="fa fa-sticky-note-o"></i>
                                            <h5 class="mb-3">No Open To-Dos Here </h5><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createtodoModal">Create A To-Do</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="files">
                        <div class="theme-title">
                            <div class="media">
                                <div>
                                    <h2>Files</h2>
                                    <h4>Shared Media</h4>
                                </div>
                                <div class="media-body media-body text-right"><a class="icon-btn btn-sm btn-outline-light close-apps" href="#"><i data-feather="x">  </i></a></div>
                            </div>
                        </div>
                        <div class="theme-tab">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link button-effect active" data-toggle="pill" href="#tab1">Media</a></li>
                                <li class="nav-item"><a class="nav-link button-effect" data-toggle="pill" href="#tab2">Link</a></li>
                                <li class="nav-item"><a class="nav-link button-effect" data-toggle="pill" href="#tab3">Docs</a></li>
                            </ul>
                        </div>
                        <div class="file-tab">
                            <div class="tab-content custom-scroll">
                                <div class="tab-pane active" id="tab1">
                                    <div class="media-gallery portfolio-section grid-portfolio">
                                        <div class="collapse-block open">
                                            <h5 class="block-title">12/12/2019
                                                <label class="badge badge-primary sm ml-2">8</label>
                                            </h5>
                                            <div class="block-content">
                                                <div class="row share-media zoom-gallery">
                                                    <div class="col-4 isotopeSelector filter">
                                                        <div class="media-big">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/1.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/1.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter fashion">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/5.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/5.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="block-title">10/01/2020
                                                <label class="badge badge-primary sm ml-2">5</label>
                                            </h5>
                                            <div class="block-content">
                                                <div class="row share-media zoom-gallery">
                                                    <div class="col-4 isotopeSelector filter">
                                                        <div class="media-big">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/1.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/1.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter fashion">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/5.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/5.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="block-title">30/04/2020
                                                <label class="badge badge-primary sm ml-2">2</label>
                                            </h5>
                                            <div class="block-content">
                                                <div class="row share-media zoom-gallery">
                                                    <div class="col-4 isotopeSelector filter">
                                                        <div class="media-big">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/1.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/1.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter fashion">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/5.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/5.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="block-title">10/01/2020
                                                <label class="badge badge-primary sm ml-2">2</label>
                                            </h5>
                                            <div class="block-content">
                                                <div class="row share-media zoom-gallery">
                                                    <div class="col-4 isotopeSelector filter">
                                                        <div class="media-big">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/1.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/1.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-small isotopeSelector filter fashion">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/5.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/5.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/2.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/2.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/3.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/3.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="media-small isotopeSelector filter">
                                                            <div class="overlay">
                                                                <div class="border-portfolio">
                                                                    <a href='{{asset("assets/images/gallery/4.jpg")}}'>
                                                                        <div class="overlay-background"><i class="ti-plus" aria-hidden="true"></i></div><img class="img-fluid bg-img" src='{{asset("assets/images/gallery/4.jpg")}}' alt="portfolio-image" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Jquery Template</h5>
                                                <h6>12:05 PM Today </h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/endless-react-admin-template/25365098">https://themeforest.net/item/endless-react-admin-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/12.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>React Template</h5>
                                                <h6 class="mt-0">Functionality integration project.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Multikart Template</h5>
                                                <h6>05:12 AM Today</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/multikart-responsive-vuejs-ecommerce-template/25174665">https://themeforest.net/item/multikart-responsive-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/3.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Multipurpose Vuejs.</h5>
                                                <h6 class="mt-0">Template is a multi-use Vue template.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Unice-Multipurpose</h5>
                                                <h6>03:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/unice-angular-multipurpose-template/24776272">https://themeforest.net/item/unice-angular-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/8.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Angular Template.</h5>
                                                <h6 class="mt-0">Unice is a Perfect Respon.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Endless-Angular</h5>
                                                <h6>02:26 AM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/endless-angular-admin-template/23884779">https://themeforest.net/item/endless-angular-admin-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/12.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Endless Document.</h5>
                                                <h6 class="mt-0">Help you understand angular.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Bigdeal-eCommerce</h5>
                                                <h6>04:00 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/bigdeal-ecommerce-html-template/24809149">https://themeforest.net/item/bigdeal-ecommerce-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/9.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>HTML Template.</h5>
                                                <h6 class="mt-0">eCommerce HTML Template.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Multikart-Responsive.</h5>
                                                <h6>11:05 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/multikart-responsive-react-ecommerce-template/23067773">https://themeforest.net/item/multikart-responsive-react-ecommerce</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/3.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Multipurp eComme.</h5>
                                                <h6 class="mt-0">Well with multi-purpose websites.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Creative - Responsive</h5>
                                                <h6>12:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/creative-responsive-admin-template/24978419">https://themeforest.net/item/creative-responsive</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/11.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Dashboard Templa.</h5>
                                                <h6 class="mt-0">Creative Admin is a full featured.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">eComme Template</h5>
                                                <h6>12:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/multikart-responsive-angular-ecommerce-template/22905358">https://themeforest.net/item/multikart-responsive-angular</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/3.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Responsive Ang.</h5>
                                                <h6 class="mt-0">Multikart – Multipurpose.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media">
                                            <div class="media"></div><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Multikart Templat.</h5>
                                                <h6>12:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/multikart-responsive-ecommerce-html-template/22809967">https://themeforest.net/item/multikart-responsive-ecommerce</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/10.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Multi Responsive.</h5>
                                                <h6 class="mt-0">Ecommerce HTML Theme.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media">
                                            <div class="media"></div><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">BigBoost Template</h5>
                                                <h6>04:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/bigboost-ecommerce-html-template/24168053">https://themeforest.net/item/bigboost-ecommerce-html-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/7.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Fully Responsive.</h5>
                                                <h6 class="mt-0">Multiple Header Varations.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">App Landing </h5>
                                                <h6>10:05 PM 20/05/2019</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/unice-app-landing-corporate-and-portfolio-multipurpose-template/24581311">https://themeforest.net/item/unice-app-landing-corporate-and-portfolio-multipurpose-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/4.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Multi-Purpos theme.</h5>
                                                <h6 class="mt-0">Unice is a Perfect Responsive.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Reno - Tools Store</h5>
                                                <h6>12:26 PM</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/reno-multipurpose-html-template/24141678">https://themeforest.net/item/reno-multipurpose-html-template</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/6.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Reno Template is a busines.</h5>
                                                <h6 class="mt-0">Android Mobile or tablets.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-group">
                                        <div class="media"><i data-feather="link"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Shop - Mart</h5>
                                                <h6>12:26 PM 03/11/2019</h6>
                                            </div>
                                        </div><a href="https://themeforest.net/item/shopmart-multipurpose-shopify-theme/24040917?s_rank=12">https://themeforest.net/item/shopmart-multipurpose-shopify-theme</a>
                                        <div class="media"><img class="img-fluid" src='{{asset("assets/images/file_icons/5.png")}}' alt="media-img" />
                                            <div class="media-body">
                                                <h5>Shop Mart Landing Page.</h5>
                                                <h6 class="mt-0">This is App Landing Template.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <ul class="chat-main">
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15" href="#"><i class="fa fa-file-code-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>messenger.html</h5>
                                                        <h6>2, octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/messenger.html")}}' target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15" href="#"><i class="fa fa-file-video-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>chapter1.MP4</h5>
                                                        <h6>3, Octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/chapter1.mp4")}}' target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-primary btn-xl pull-right rouded15" href="#"><i class="fa fa-file-word-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>salary.xlsx</h5>
                                                        <h6>5, Octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/salary.xlsx")}}'target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-warning btn-xl pull-right rouded15" href="#"><i class="fa fa-file-pdf-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>document.pdf</h5>
                                                        <h6>7, Octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/document.pdf")}}' target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15" href="#"><i class="fa fa-file-text-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>details.txt</h5>
                                                        <h6>20, Octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/details.txt")}}' target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-box">
                                                <div class="media">
                                                    <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15" href="#"><i class="fa fa-file-code-o"></i></a></div>
                                                    <div class="details">
                                                        <h5>messenger.html</h5>
                                                        <h6>2, octomber 2019</h6>
                                                    </div>
                                                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right" href='{{asset("assets/doc/messenger.html")}}' target="_blank"><i data-feather="download"></i></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="notes">
                        <div class="notes-main">
                            <div class="theme-title">
                                <div class="media">
                                    <div>
                                        <h2>Notes</h2>
                                        <h4>Notes List</h4>
                                    </div>
                                    <div class="media-body media-body text-right"><a class="icon-btn btn-sm btn-outline-light close-apps" href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </div>
                            <form class="default-form">
                                <div class="form-group notes-content">
                                    <select> 
                      <option>Contact Or Channel</option>
                      <option>Weekdays (Mon-Fri)</option>
                      <option>Daily</option>
                      <option>Weekly (Custom)</option>
                    </select>
                                    <ul>
                                        <li><a class="icon-btn btn-light button-effect btn-sm" data-toggle="modal" data-target="#notesModal"><i data-feather="plus"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                            <div class="notes-list">
                                <h6 class="mb-2 text-muted">Joshephin Water.10 Jan</h6>
                                <div class="media"><img class="img-fluid mr-3" src='{{asset("assets/images/file_icons/5.png")}}' alt="media-img" />
                                    <div class="media-body">
                                        <h5 class="mt-0">Joshephin Water</h5>
                                    </div>
                                </div>
                                <h5 class="mb-2">Imporatnt project link</h5>
                                <h6 class="mb-2">Please start testing task of your projects.</h6>
                                <div class="forward-main"><a class="line fa fa-mail-forward" href="#">Forward                         </a></div>
                            </div>
                        </div>
                    </li>
                    <li id="reminder">
                        <div class="reminder-main">
                            <div class="theme-title">
                                <div class="media">
                                    <div>
                                        <h2>Reminders</h2>
                                        <h4>Set reminders</h4>
                                    </div>
                                    <div class="media-body media-body text-right"><a class="icon-btn btn-sm btn-outline-light close-apps" href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </div>
                            <div class="reminder-content tab-card"><i class="ti-alarm-clock"></i>
                                <p>Never forget important tasks. Set personal and group reminders.</p><a class="setreminder btn btn-primary button-effect btn-sm" data-toggle="modal" data-target="#setReminder">set reminder</a>
                            </div>
                            <div class="reminder-list-disp">
                                <h5>Themeforest Discusssion</h5>
                                <h6>Project Discussion</h6><span>11:22 PM | 15 FAB</span>
                                <ul class="reminder-disp">
                                    <li class="reminder-list-toggle"><a class="icon-btn bg-transparent" href="#"><i data-feather="more-vertical"></i></a>
                                        <div class="reminder-contentlist-toggle">
                                            <ul>
                                                <li><a class="icon-btn btn-sm" href="#"><i data-feather="trash"></i></a>
                                                    <h5>Delete</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="reminder-list">
                                <button class="Show-reminder">Show Completed</button>
                                <button class="Hide-reminder">Hide Completed</button>
                                <div class="target-reminder-list">
                                    <h5>Session Start</h5>
                                    <h6>Project Discussion</h6>
                                    <h6>05:22 PM | 1 JAN</h6>
                                    <ul class="reminder-disp">
                                        <li class="reminder-toggle"><a class="icon-btn bg-transparent" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                                            <div class="reminder-content-toggle">
                                                <ul>
                                                    <li><a class="icon-btn btn-sm" href="#"><i data-feather="trash"></i></a>
                                                        <h5>Delete</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="app-list">
                <ul class="app-list-ul custom-scroll">
                    <li class="title apps-toggle"><i data-feather="grid"></i>
                        <h5>Apps</h5>
                    </li>
                    <li><a class="icon-btn btn-outline-success btn-sm button-effect" href="files"><i data-feather="file"></i></a>
                        <h5>Files </h5>
                    </li>
                    <li><a class="icon-btn btn-outline-primary btn-sm button-effect" href="notes"><i data-feather="book"></i></a>
                        <h5>Notes </h5>
                    </li>
                    <li><a class="icon-btn btn-outline-danger btn-sm button-effect" href="todo"><i data-feather="list"></i></a>
                        <h5>Todo </h5>
                    </li>
                    <li><a class="icon-btn btn-outline-warning btn-sm button-effect" href="reminder"><i data-feather="clock"></i></a>
                        <h5>Reminder</h5>
                    </li>
                    <li class="close-app"><a class="icon-btn btn-danger" href="#" onclick="removedefault()"><i data-feather="x"></i></a>
                        <h5>close</h5>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="modal fade add-popup add-contact-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Add Contact</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <div class="form-group">
                            <h5>Email or Username</h5>
                            <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Josephin water" />
                        </div>
                        <div class="form-group mb-0">
                            <h5>Contact number</h5>
                            <input class="form-control" id="examplemsg" type="number" placeholder="12345678912" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal pol-modal-main add-popup" id="pollModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><i data-feather="bar-chart-2"></i>poll</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <h3>create poll</h3>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="ask que" />
                            <input class="form-control" type="text" placeholder="add commatn" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="option 1" />
                            <input class="form-control" type="text" placeholder="option 2" /><a class="add-option" href="#">add an option</a>
                        </div>
                        <div class="form-group">
                            <div class="post-poll">
                                <ul>
                                    <li>post poll in
                                        <p class="pt-0">test name</p>
                                    </li>
                                    <li>poll expier in 7 days
                                        <p class="pt-0">test name</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="allow-group">
                                <input class="allow-check" type="checkbox" />Allow users to vote anonymously
                            </div>
                        </div>
                        <div class="creat-poll-btn"><a class="btn btn-primary button-effect btn-sm" href="#" data-dismiss="modal" aria-label="Close">Create poll</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal notes-modal-main add-popup" id="notesModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><i class="ti-bookmark-alt"></i>notes</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body custom-scroll">
                    <div class="card">
                        <div class="card-header">
                            <h5>Inline Editor</h5>
                        </div>
                        <div class="card-body">
                            <div class="cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" id="area1" contenteditable="true" tabindex="0" spellcheck="false" role="textbox" aria-label="Rich Text Editor, area1" title="Rich Text Editor, area1">
                                <h1>Your title</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vulputate urna, sed dignissim arcu. Aliquam at ligula imperdiet, faucibus ante a, interdum enim. Sed in mauris a lectus lobortis condimentum. Sed in nunc
                                    magna. Quisque massa urna, cursus vitae commodo eget, rhoncus nec erat. Sed sapien turpis, elementum sit amet elit vitae, elementum gravida eros. In ornare tempus nibh ut lobortis. Nam venenatis justo ex, vitae vulputate
                                    neque laoreet a.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
                            <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal reminder-modal-main add-popup" id="setReminder" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Set redminders</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="form default-form">
                        <div class="lable">Reminder for (Groups or contacts)</div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="contact or channel" />
                        </div>
                        <div class="lable">Remind about</div>
                        <div class="form-group">
                            <textarea class="form-control dib" rows="3" placeholder="Some details about task"></textarea>
                        </div>
                        <div class="lable">Remind about</div>
                        <div class="form-group">
                            <ul class="reminder-count">
                                <li class="active">
                                    <div class="reminder-box">
                                        <h3 class="remi-num">15</h3>
                                        <h5 class="remi-val">minutes</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="reminder-box">
                                        <h3 class="remi-num">1</h3>
                                        <h5 class="remi-val">hour</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="reminder-box">
                                        <h3 class="remi-num">5 PM</h3>
                                        <h5 class="remi-val">today</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group mb-0">
                            <div class="lable">select custom time</div>
                            <div class="custom-remider-main">
                                <div class="custom-remider-content">
                                    <div class="custom-reminder-inline">
                                        <input class="form-control" type="date" />
                                        <input class="form-control" type="time" />
                                    </div>
                                    <div class="custom-reminder-block">
                                        <select> 
                        <option>Do not repeat</option>
                        <option>Weekdays (Mon-Fri)</option>
                        <option>Daily</option>
                        <option>Weekly (Custom)</option>
                      </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reminder-btn"><a class="btn btn-primary button-effect">set reminder</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal snippet-modal-main add-popup" id="snippetModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"><i class="fa fa-code"></i>code snippets</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <h3>creat snippets</h3>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="title(optional)" />
                        </div>
                        <div class="form-group">
                            <select class="mb-0">
                  <option>ebnf</option>
                  <option>c++</option>
                  <option>diff</option>
                  <option>dart</option>
                </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control mb-0" type="text" placeholder="add commant (optional)" />
                        </div>
                        <div class="form-group mb-0">
                            <div class="btn-snipate"><a class="btn btn-danger button-effect btn-sm mr-3" href="#" data-dismiss="modal" aria-label="Close">Cancel</a><a class="btn btn-primary button-effect btn-sm" href="#" data-dismiss="modal" aria-label="Close">Create & post</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="audiocall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <div class="audiocall1 call-modal"><img class="bg-img" src='{{asset("assets/images/avtar/big/audiocall.jpg")}}' alt="Avatar" />
                    <div class="center-con text-center">
                        <div class="title2">Josephin water</div>
                        <h6>log angelina california</h6>
                        <ul>
                            <li ><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#" data-toggle="modal" data-target="#audiorcvcall" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                            <li> <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="videocall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <div class="audiocall1 call-modal"><img class="bg-img"  src="{{url('storage/'.$userInfo->avata)}}" alt="Avatar" />
                    <div class="center-con text-center">
                        <div class="title2">Gọi video</div>
                        <ul>
                            <li ><a id="yesVideoCall" class="icon-btn btn-success button-effect btn-xl is-animating" href="#" data-toggle="modal" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                            <li> <a id="noVideoCall" class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="outvideocall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <div class="audiocall1 call-modal"><img class="bg-img" src='{{asset("assets/images/avtar/big/audiocall.jpg")}}' alt="Avatar" />
                    <div class="center-con text-center">
                        <!-- <div class="title2">Josephin water</div> -->
                        <h6>đang gọi</h6>
                        <ul>
                            <!-- <li ><a id="yesVideoCall" class="icon-btn btn-success button-effect btn-xl is-animating" href="#" data-toggle="modal" data-dismiss="modal"> <i data-feather="phone"></i></a></li> -->
                            <li> <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confercall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <div class="conferencecall call-modal"><img class="bg-img" src='{{asset("assets/images/avtar/big/audiocall.jpg")}}' alt="Avatar" />
                    <div class="center-con text-center">
                        <div class="usersprof">
                            <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/2.jpg")}}' alt="Avatar" /></div>
                            <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/3.jpg")}}' alt="Avatar" /></div>
                            <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/5.jpg")}}' alt="Avatar" /></div>
                            <div class="profile"><img class="bg-img" src='{{asset("assets/images/avtar/big/videocall_bg.jpg")}}' alt="Avatar" /></div>
                        </div>
                        <p>Incoming Call</p>
                        <h3>Conference Call</h3>
                        <ul>
                            <li> <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                            <li><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#"> <i data-feather="video"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confvideocl" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row confimg">
                        <div class="col-6">
                            <div class="vclimg"><img class="bg-img" src='{{asset("assets/images/avtar/big/videocall_bg.jpg")}}' alt="Avatar" /></div>
                        </div>
                        <div class="col-6">
                            <div class="vclimg"><img class="bg-img" src='{{asset("assets/images/avtar/5.jpg")}}' alt="Avatar" /></div>
                        </div>
                        <div class="col-6">
                            <div class="vclimg"><img class="bg-img" src='{{asset("assets/images/avtar/2.jpg")}}' alt="Avatar" /></div>
                        </div>
                        <div class="col-6">
                            <div class="vclimg"><img class="bg-img" src='{{asset("assets/images/avtar/3.jpg")}}' alt="Avatar" /></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer clfooter">
                    <div id="basicUsage3">00:00:00</div>
                    <ul>
                        <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="speaker"><i data-feather="volume-2"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Camera"><i data-feather="camera-off"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
                        <li><a class="icon-btn btn-danger button-effect btn-sm is-animating" href="#" data-dismiss="modal" data-tippy-content="Hangup"><i data-feather="phone"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Disable Video"><i data-feather="video-off"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect mic" href="#" data-tippy-content="Mute"><i data-feather="mic-off"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Hold"><i data-feather="pause"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade audiorcvcall" id="audiorcvcall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <div class="audiocall2 call-modal"><img class="bg-img" src='{{asset("assets/images/avtar/big/audiocall.jpg")}}' alt="Avatar" />
                    <div class="center-con text-center">
                        <div id="basicUsage2">00:00:00</div>
                        <div class="title2">Josephin water</div>
                        <h6>log angelina california</h6>
                        <ul>
                            <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Mute"><i class="fa fa-microphone"></i></a></li>
                            <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Speaker"><i class="fa fa-volume-up"></i></a></li>
                            <li><a class="icon-btn btn-danger button-effect btn-xl is-animating"  href="#" data-tippy-content="Hangup" data-dismiss="modal"> <i data-feather="phone"></i></a></li>
                            <li ><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
                            <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Pause"><i data-feather="pause"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade fev-addcall-main add-popup" id="addcallmodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Add Contact</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <div class="form-group">
                            <h5>Email or Username</h5>
                            <input class="form-control" id="exampleInputEmail12" type="text" placeholder="Josephin water" />
                        </div>
                        <div class="form-group">
                            <h5>Contact number</h5>
                            <input class="form-control" id="examplemsg2" type="number" placeholder="12345678912" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade add-popup todo-main-modal" id="todoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Welcome to Chitchat</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <div class="todo-task">
                            <h5>Felling Lonely</h5>
                            <div class="todo-main-content">
                                <div class="form-group">
                                    <input type="checkbox" aria-label="Checkbox for following text input" />
                                    <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings " />
                                </div>
                                <div class="drop-picker">
                                    <div class="dropdown currency" tabindex="1">
                                        <div class="select"><span>Assign To</span></div>
                                        <input type="hidden" name="currency" />
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-divider">
                                                <div class="fa fa-user text-muted"></div>
                                                <h5 class="text-muted">Assign To</h5>
                                            </li>
                                            <li>Josephin john</li>
                                            <li>Lynetin john</li>
                                            <li>Sufiya john</li>
                                            <li>Jhon john</li>
                                        </ul>
                                    </div>
                                    <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
                    <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade add-popup create-todo-main-modal" id="createtodoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Today's ToDo</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form class="default-form">
                        <div class="todo-task">
                            <h5>Felling Lonely</h5>
                            <div class="todo-main-content">
                                <div class="form-group">
                                    <input type="checkbox" aria-label="Checkbox for following text input" />
                                    <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings " />
                                </div>
                                <div class="drop-picker">
                                    <div class="dropdown currency" tabindex="1">
                                        <div class="select"><span>Assign To</span></div>
                                        <input type="hidden" name="currency" />
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-divider">
                                                <div class="fa fa-user text-muted"></div>
                                                <h5 class="text-muted">Assign To</h5>
                                            </li>
                                            <li>Josephin john</li>
                                            <li>Lynetin john</li>
                                            <li>Sufiya john</li>
                                            <li>Jhon john</li>
                                        </ul>
                                    </div>
                                    <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
                    <button class="btn btn-primary button-effect btn-sm" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade add-popup msg-chat-modal" id="share" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Create New Message</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="chat-msg-search">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Title" id="Title" aria-label="Recipient's username" aria-describedby="basic-addon21" />
                           
                        </div>
                    </div>
                    <ul id="gruopChose" class="chat-main custom-scroll">
                      @foreach($listChat as $s)
                        <li  userid="{{$s->chanel}}">
                            <div class="chat-box">
                                <div class="profile online"><img class="bg-img" src="{{url('storage/'.$s->useravt)}}" alt="Avatar" /></div>
                                <div class="details">
                                    <h5>{{$s->username}}</h5>
                                    <h6>{{$s->lastmes}}</h6>
                                </div> 
                                <div class="date-status"><i class="ti-pin2"></i>
                                <button class="btn btn-danger button-effect btn-sm forwardclass" data-value="{{$s->chanel}}" type="button" data-dismiss="modal">Forward</button>
                                </div>
                            </div>
                        </li>
                      @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade add-popup msg-chat-modal" id="msgchatModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Create New Message</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="chat-msg-search">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Title" id="Title" aria-label="Recipient's username" aria-describedby="basic-addon21" />
                           
                        </div>
                    </div>
                    <ul id="gruopChose" class="chat-main custom-scroll">
                      @foreach($listChat as $s)
                        <li  userid="{{$s->chanel}}">
                            <div class="chat-box">
                                <div class="profile online"><img class="bg-img" src="{{url('storage/'.$s->useravt)}}" alt="Avatar" /></div>
                                <div class="details">
                                    <h5>{{$s->username}}</h5>
                                    <h6>{{$s->lastmes}}</h6>
                                </div> 
                                <div class="date-status"><i class="ti-pin2"></i>
                                    <h6>{{$s->time}}</h6>
                                    <div class="badge badge-primary sm">8</div>
                                </div>
                            </div>
                        </li>
                      @endforeach
                      <button id="createGruopButton" type="button" class="btn btn-success" style="position: absolute;bottom: 30px;right: 30px;">Create</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade add-popup msg-chat-modal" id="msgcallModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Create New Message</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="chat-msg-search">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon20" />
                            <div class="input-group-append"><span class="input-group-text" id="basic-addon20">@</span></div>
                        </div>
                    </div>
                    <ul class="call-log-main custom-scroll">
                        <li class="active">
                            <div class="call-box">
                                <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="call-box">
                                <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="call-box">
                                <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="call-box">
                                <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="call-box">
                                <div class="profile offline"><img class="bg-img" src='{{asset("assets/images/contact/2.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="call-box">
                                <div class="profile online"><img class="bg-img" src='{{asset("assets/images/contact/1.jpg")}}' alt="Avatar" /></div>
                                <div class="details">
                                    <h5>Jony Lynetin</h5>
                                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                </div>
                                <div class="call-status">
                                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src='{{asset("assets/js/jquery-3.3.1.min.js")}}'></script>
    <script src='{{asset("assets/js/owl.carousel.js")}}'></script>
    <script src='{{asset("assets/js/popper.min.js")}}'></script>
    <script src='{{asset("assets/js/tippy-bundle.iife.min.js")}}'></script>
    <script src='{{asset("assets/js/bootstrap.js")}}'></script>
    <script src='{{asset("assets/js/switchery.js")}}'></script>
    <script src='{{asset("assets/js/easytimer.min.js")}}'>
    </script>
    <script src='{{asset("assets/js/index.js")}}'>
    </script>
    <script src='{{asset("assets/js/feather-icon/feather.min.js")}}'></script>
    <script src='{{asset("assets/js/feather-icon/feather-icon.js")}}'></script>
    <script src='{{asset("assets/js/ckeditor/ckeditor.js")}}'></script>
    <script src='{{asset("assets/js/ckeditor/styles.js")}}'></script>
    <script src='{{asset("assets/js/ckeditor/adapters/jquery.js")}}'></script>
    <script src='{{asset("assets/js/ckeditor/ckeditor.custom.js")}}'></script>

    <script src='{{asset("assets/js/jquery.magnific-popup.js")}}'></script>
    <script src='{{asset("assets/js/zoom-gallery.js")}}'></script>
    <script src='{{asset("assets/js/script.js")}}'></script>
 
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    @if(Session::get('xong'))

        <script>
            toastr.success("{{ Session::get('xong') }}")
        </script>

    @endif
    <script>
        var pusher = new Pusher('b708a607270d00087a1f', {
      cluster: 'ap3',
      authEndpoint: '/auth',
      auth: {headers: {'X-CSRF-Token': "{{ csrf_token() }}"}}
    });

    @foreach($listGruop as $r)
        var cn{{$r->chanel}} = pusher.subscribe('private-private-{{$r->chanel}}');
        
        cn{{$r->chanel}}.bind('test', function(data) {
             $("#groupchat li.active")[0].click();      
             $(".messages").animate({
                             scrollTop: 10000000
                         }, "fast"); 
            });
    @endforeach
    @foreach($listFriend as $r)
 

    var cn{{$r->chanel}} = pusher.subscribe('private-private-{{$r->chanel}}');
      
    cn{{$r->chanel}}.bind('test', function(data) {
        console.log(data)
        if(data.data.data=="callVideoNow"&&{{session()->get('id')}}!=data.data.id)
        {
            $("#aaaaaa").click();
        }
        if(data.data.data=="yes"&&data.data.call=="video")
        {
            window.open("http://127.0.0.1:8000/videochat/s", "", "width=1500px,height=900px");
        }
        if(data.data.data=="no"&&data.data.call=="video")
        {
            $(".cancelcall").click();
        }
        $("#chat-list li.active")[0].click();
       var k=$("#chat-list li.active")[0].outerHTML
                $("#chat-list").prepend(k)
                $("#chat-list li.active")[1].remove();
           
                         $(".messages").animate({
                             scrollTop: 10000000
                         }, "fast");
                         $("#chat-list li.active").find(".mes").html(data.data)

      });
      
  
   
   @endforeach
   </script>


  <script src='{{asset("assets/js/date-picker/datepicker.js")}}'></script>
    <script src='{{asset("assets/js/date-picker/datepicker.en.js")}}'></script>
    <script src='{{asset("assets/js/date-picker/datepicker.custom.js")}}'></script>
</body>

</html>