@extends('includes.theme')



@section('content')
<br>


<div class="row m-t-25">
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c1">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2>3</h2>
                    <span><h3>Total Projects</h3></span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c2">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>
                <div class="text">
                    <h2>15</h2>
                    <span><h3>Active Tasks</h3></span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart2"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c3">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-calendar-note"></i>
                </div>
                <div class="text">
                    <h2>3</h2>
                    <span><h3>Overdue Tasks</h3></span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="overview-item overview-item--c4">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-money"></i>
                </div>
                <div class="text">
                    <h2>11</h2>
                    <span><h3>Todays Task</h3></span>
                </div>
            </div>
            <div class="overview-chart">
                <canvas id="widgetChart4"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <h4>Task Status</h4>
    </div>
    <div class="card-body">

        <h3>Lefufoo</h3>
        <div class="progress mb-3">
            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="12"
            aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        
    </div>
</div>


</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Task Status</h4>
        </div>
        <div class="card-body">


            <h3>CRM</h3>
            <div class="progress mb-3">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="30"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div> 
                                     
        </div>
    </div>


</div>





<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h4>Task Status</h4>
</div>
<div class="card-body">


<h3>POS</h3>
<div class="progress mb-3">
    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="80"
    aria-valuemin="0" aria-valuemax="100"></div>
</div> 

</div>
</div>


</div>





<div class="row">
<div class="col-lg-6">
<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
<div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
    <div class="bg-overlay bg-overlay--blue"></div>
    <h3>
        <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
        <button class="au-btn-plus">
            <i class="zmdi zmdi-plus"></i>
        </button>
    </div>
    <div class="au-task js-list-load">
        <div class="au-task__title">
            <p>Tasks for John Doe</p>
        </div>
        <div class="au-task-list js-scrollbar3">
            <div class="au-task__item au-task__item--danger">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Meeting about plan for Admin Template 2018</a>
                    </h5>
                    <span class="time">10:00 AM</span>
                </div>
            </div>
            <div class="au-task__item au-task__item--warning">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Create new task for Dashboard</a>
                    </h5>
                    <span class="time">11:00 AM</span>
                </div>
            </div>
            <div class="au-task__item au-task__item--primary">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Meeting about plan for Admin Template 2018</a>
                    </h5>
                    <span class="time">02:00 PM</span>
                </div>
            </div>
            <div class="au-task__item au-task__item--success">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Create new task for Dashboard</a>
                    </h5>
                    <span class="time">03:30 PM</span>
                </div>
            </div>
            <div class="au-task__item au-task__item--danger js-load-item">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Meeting about plan for Admin Template 2018</a>
                    </h5>
                    <span class="time">10:00 AM</span>
                </div>
            </div>
            <div class="au-task__item au-task__item--warning js-load-item">
                <div class="au-task__item-inner">
                    <h5 class="task">
                        <a href="#">Create new task for Dashboard</a>
                    </h5>
                    <span class="time">11:00 AM</span>
                </div>
            </div>
        </div>
        <div class="au-task__footer">
            <button class="au-btn au-btn-load js-load-btn">load more</button>
        </div>
    </div>
</div>
</div>
<div class="col-lg-6">
<div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
        <div class="bg-overlay bg-overlay--blue"></div>
        <h3>
            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
            <button class="au-btn-plus">
                <i class="zmdi zmdi-plus"></i>
            </button>
        </div>
        <div class="au-inbox-wrap js-inbox-wrap">
            <div class="au-message js-list-load">
                <div class="au-message__noti">
                    <p>You Have
                        <span>2</span>

                        new messages
                    </p>
                </div>
                <div class="au-message-list">
                    <div class="au-message__item unread">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">John Smith</h5>
                                    <p>Have sent a photo</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>12 Min ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__item unread">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap online">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">Nicholas Martinez</h5>
                                    <p>You are now connected on message</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>11:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__item">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap online">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">Michelle Sims</h5>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>Yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__item">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">Michelle Sims</h5>
                                    <p>Purus feugiat finibus</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>Sunday</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__item js-load-item">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap online">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">Michelle Sims</h5>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>Yesterday</span>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__item js-load-item">
                        <div class="au-message__item-inner">
                            <div class="au-message__item-text">
                                <div class="avatar-wrap">
                                    <div class="avatar">
                                        <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="name">Michelle Sims</h5>
                                    <p>Purus feugiat finibus</p>
                                </div>
                            </div>
                            <div class="au-message__item-time">
                                <span>Sunday</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="au-message__footer">
                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
            <div class="au-chat">
                <div class="au-chat__title">
                    <div class="au-chat-info">
                        <div class="avatar-wrap online">
                            <div class="avatar avatar--small">
                                <img src="images/icon/avatar-02.jpg" alt="John Smith">
                            </div>
                        </div>
                        <span class="nick">
                            <a href="#">John Smith</a>
                        </span>
                    </div>
                </div>
                <div class="au-chat__content">
                    <div class="recei-mess-wrap">
                        <span class="mess-time">12 Min ago</span>
                        <div class="recei-mess__inner">
                            <div class="avatar avatar--tiny">
                                <img src="images/icon/avatar-02.jpg" alt="John Smith">
                            </div>
                            <div class="recei-mess-list">
                                <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                            </div>
                        </div>
                    </div>
                    <div class="send-mess-wrap">
                        <span class="mess-time">30 Sec ago</span>
                        <div class="send-mess__inner">
                            <div class="send-mess-list">
                                <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="au-chat-textfield">
                    <form class="au-form-icon">
                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                        <button class="au-input-icon">
                            <i class="zmdi zmdi-camera"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection()