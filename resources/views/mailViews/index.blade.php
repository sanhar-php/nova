<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>ООО ЗСС Маяк</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
@include('menu')

<div class="container">

    <div class="row">

        <div class="col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Tasks</a></li>
                </ul>
            </div>

            {{date("Y-m-d")}}
</div>
        <div class="col-md-10">

                    <!-- Split button -->

                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Refresh">
                        &nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span>&nbsp;&nbsp;&nbsp;</button>
                    <!-- Single button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
                            More <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Mark all as read</a></li>
                            <li class="divider"></li>
                            <li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <span class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></span>
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </button>
                        </div>
                    </div>
                </div>

            <hr>
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="glyphicon glyphicon-edit"></i> Compose</a>
                    <hr>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><span class="badge pull-right">{{$countMails}}</span> Входящие (Ya.ru) </a>
                        </li>
                        <li><a href="#">Starred</a></li>
                        <li><a href="#">Important</a></li>
                        <li><a href="#">Sent Mail</a></li>
                        <li><a href="#"><span class="badge pull-right">3</span>Drafts</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-md-10">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Primary</a></li>
                        <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                                Social</a></li>
                        <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>
                                Promotions</a></li>
                        <li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">
                </span></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <div class="list-group">
                                @foreach ($mails as $mail)

                                    <a href="/mail/get/{{$mail->id}}" class="list-group-item">

                                        <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                display: inline-block;">{{$mail->fromName}}</span> <span class="">{{$mail->subject}}</span>
                                        <span class="text-muted" style="font-size: 11px;">{{$mail->id}}- {{$mail->messageId}}</span> <span class="badge">{{$mail->date}}</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span></a>

                                @endforeach
                                <a href="#" class="list-group-item">

                                    <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                display: inline-block;">Mark Otto</span> <span class="">Nice work on the lastest version</span>
                                    <span class="text-muted" style="font-size: 11px;">- More content here</span> <span class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span></a>
                                <a href="#" class="list-group-item">

                                    <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                        display: inline-block;">Jason Markus</span> <span class="">This is big title</span>
                                    <span class="text-muted" style="font-size: 11px;">- I saw that you had..</span> <span class="badge">12:09 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                        </span></span></a>
                                <a href="#" class="list-group-item read">

                                    <span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px;
                                                display: inline-block;">Jane Patel</span> <span class="">This is big title</span>
                                    <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span class="badge">11:30 PM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                                </span></span></a>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="profile">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <span class="text-center">This tab is empty.</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="messages">
                            ...</div>
                        <div class="tab-pane fade in" id="settings">
                            This tab is empty.</div>
                    </div>

                    <div class="row-md-12">

                        <div class="well">
                            <a href="http://www.bootply.com/XXmcPas41w">Edit on Bootply</a>
                        </div>

                    </div>
                </div>
            </div>



    </div>



    <!-- Main component for a primary marketing message or call to action -->
    <div class="footer">
        <p>© ООО ЗСС Маяк 2016</p>
    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body></html>