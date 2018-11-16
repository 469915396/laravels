
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('org/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('org/assets')}}/css/theme.min.css">

    <title>Dashkit</title>
</head>
<body>

<!-- MODALS
================================================== -->
<!-- Modal: Members -->
<div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Title -->
                            <h4 class="card-header-title" id="exampleModalCenterTitle">
                                Add a member
                            </h4>

                        </div>
                        <div class="col-auto">

                            <!-- Close -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                    </div> <!-- / .row -->
                </div>
                <div class="card-header">

                    <!-- Form -->
                    <form>
                        <div class="input-group input-group-flush input-group-merge">
                            <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <span class="fe fe-search"></span>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-body">

                    <!-- List group -->
                    <ul class="list-group list-group-flush list my--3">
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Miyah Myles</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Ryu Duke</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Glen Rouse</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-warning">●</span> Busy
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                        <li class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <a href="profile-posts.html" class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                    </a>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="mb-1 name">
                                        <a href="profile-posts.html">Grace Gross</a>
                                    </h4>

                                    <!-- Time -->
                                    <p class="small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                                <div class="col-auto">

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-sm btn-white">
                                        Add
                                    </a>

                                </div>
                            </div> <!-- / .row -->

                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Search -->
<div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Form -->
                <form class="mb-4">
                    <div class="input-group input-group-merge">
                        <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fe fe-search"></span>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- List group -->
                <div class="my--3">
                    <div class="list-group list-group-flush list">
                        <a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Airbnb
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a href="team-overview.html" class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Medium Corporation
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->
                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/assets')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Homepage Redesign
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/assets')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Travels & Time
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="project-overview.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar avatar-4by3">
                                        <img src="{{asset('org/assets')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Safari Exploration
                                    </h4>

                                    <!-- Time -->
                                    <p class="small text-muted mb-0">
                                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Dianna Smiley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-success">●</span> Online
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                        <a href="profile-posts.html" class="list-group-item px-0">

                            <div class="row align-items-center">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Title -->
                                    <h4 class="text-body mb-1 name">
                                        Ab Hadley
                                    </h4>

                                    <!-- Status -->
                                    <p class="text-body small mb-0">
                                        <span class="text-danger">●</span> Offline
                                    </p>

                                </div>
                            </div> <!-- / .row -->

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal: Activity -->
<div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <!-- Title -->
                <h4 class="modal-title">
                    Notifications
                </h4>

                <!-- Close -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
                </button>

            </div>
            <div class="modal-body">

                <!-- List group -->
                <div class="list-group list-group-flush my--3">
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                        <div class="row">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <div class="avatar avatar-sm">
                                    <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>

                            </div>
                            <div class="col ml--2">

                                <!-- Content -->
                                <div class="small text-muted">
                                    <strong class="text-body">Grace Gross</strong> subscribed to you.
                                </div>

                            </div>
                            <div class="col-auto">

                                <small class="text-muted">
                                    2m
                                </small>

                            </div>
                        </div> <!-- / .row -->

                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- SIDEBAR
================================================== -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
            <img src="{{asset('org/assets')}}/img/logo.svg" class="navbar-brand-img 
          mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="settings.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <i class="fe fe-home"></i> 林哥哥
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="fe fe-file"></i> 学习资料
                    </a>
                    <div class="collapse " id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                                    Profile
                                </a>
                                <div class="collapse " id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="profile-posts.html" class="nav-link ">
                                                Posts
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="profile-groups.html" class="nav-link ">
                                                Groups
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="profile-projects.html" class="nav-link ">
                                                Projects
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="profile-files.html" class="nav-link ">
                                                Files
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="profile-subscribers.html" class="nav-link ">
                                                Subscribers
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                                    Project
                                </a>
                                <div class="collapse " id="sidebarProject">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="project-overview.html" class="nav-link ">
                                                Overview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-files.html" class="nav-link ">
                                                Files
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-reports.html" class="nav-link ">
                                                Reports
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-new.html" class="nav-link ">
                                                New project <span class="badge badge-soft-success ml-auto">New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                                    Team
                                </a>
                                <div class="collapse " id="sidebarTeam">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="team-overview.html" class="nav-link ">
                                                Overview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-projects.html" class="nav-link ">
                                                Projects
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-members.html" class="nav-link ">
                                                Members
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-new.html" class="nav-link ">
                                                New team <span class="badge badge-soft-success ml-auto">New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="orders.html" class="nav-link ">
                                    Orders <span class="badge badge-soft-success ml-auto">New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="feed.html" class="nav-link ">
                                    Feed
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="settings.html" class="nav-link ">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="invoice.html" class="nav-link ">
                                    Invoice <span class="badge badge-soft-success ml-auto">New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link ">
                                    Pricing <span class="badge badge-soft-success ml-auto">New</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="fe fe-user"></i>好好学习
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                                    Sign in
                                </a>
                                <div class="collapse" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="sign-in-cover.html" class="nav-link">
                                                Cover
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-in-illustration.html" class="nav-link">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-in.html" class="nav-link">
                                                Basic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                                    Sign up
                                </a>
                                <div class="collapse" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="sign-up-cover.html" class="nav-link">
                                                Cover
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-up-illustration.html" class="nav-link">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="sign-up.html" class="nav-link">
                                                Basic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                                    Password reset
                                </a>
                                <div class="collapse" id="sidebarPassword">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="password-reset-cover.html" class="nav-link">
                                                Cover
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="password-reset-illustration.html" class="nav-link">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="password-reset.html" class="nav-link">
                                                Basic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                                    Error
                                </a>
                                <div class="collapse" id="sidebarError">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="error-illustration.html" class="nav-link">
                                                Illustration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="error.html" class="nav-link">
                                                Basic
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#sidebarLayouts" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLayouts">
                        <i class="fe fe-layout"></i> Layouts
                    </a>
                    <div class="collapse show" id="sidebarLayouts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">
                                    Sidenav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-side-topnav.html" class="nav-link ">
                                    Sidenav + top nav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-topnav.html" class="nav-link">
                                    Topnav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarDashboard" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboard">
                                    Without hero chart
                                </a>
                                <div class="collapse show" id="sidebarDashboard">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-no-hero.html" class="nav-link ">
                                                Sidenav
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-side-topnav-no-hero.html" class="nav-link active">
                                                Sidenav + top nav
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-topnav-no-hero.html" class="nav-link">
                                                Topnav
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-3">

            <!-- Heading -->
            <h6 class="navbar-heading text-muted">
                Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link " href="getting-started.html">
                        <i class="fe fe-clipboard"></i> Getting started
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                        <i class="fe fe-book-open"></i> Components
                    </a>
                    <div class="collapse " id="sidebarComponents">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="components.html#alerts" class="nav-link">
                                    Alerts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#avatars" class="nav-link">
                                    Avatars
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#badges" class="nav-link">
                                    Badges
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#breadcrumb" class="nav-link">
                                    Breadcrumb
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#buttons" class="nav-link">
                                    Buttons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#button-group" class="nav-link">
                                    Button group
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#cards" class="nav-link">
                                    Cards
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#charts" class="nav-link">
                                    Charts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#dropdowns" class="nav-link">
                                    Dropdowns
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#forms" class="nav-link">
                                    Forms
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#icons" class="nav-link">
                                    Icons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#lists" class="nav-link">
                                    Lists
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#loaders" class="nav-link">
                                    Loaders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#modal" class="nav-link">
                                    Modal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#navs" class="nav-link">
                                    Navs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#navbar" class="nav-link">
                                    Navbar
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#page-headers" class="nav-link">
                                    Page headers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#pagination" class="nav-link">
                                    Pagination
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#popovers" class="nav-link">
                                    Popovers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#progress" class="nav-link">
                                    Progress
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#social-posts" class="nav-link">
                                    Social post
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#tables" class="nav-link">
                                    Tables
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#tooltips" class="nav-link">
                                    Tooltips
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#typography" class="nav-link">
                                    Typography
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="components.html#utilities" class="nav-link">
                                    Utilities
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="changelog.html">
                        <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.1.2</span>
                    </a>
                </li>
            </ul>



        </div> <!-- / .navbar-collapse -->

    </div> <!-- / .container-fluid -->
</nav>

<!-- MAIN CONTENT
================================================== -->
<div class="main-content">

    <!-- TOPBAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-white d-none d-md-flex">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand mr-auto" href="index.html">
                Dashboard
            </a>

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
                <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

                    <!-- Input -->
                    <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-search"></i>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list my--3">
                                <a href="team-overview.html" class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="{{asset('org/assets')}}/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Airbnb
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a href="team-overview.html" class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="{{asset('org/assets')}}/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Medium Corporation
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="{{asset('org/assets')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Homepage Redesign
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="{{asset('org/assets')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Travels & Time
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="{{asset('org/assets')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Safari Exploration
                                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Dianna Smiley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-success">●</span> Online
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                                                Ab Hadley
                                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-danger">●</span> Offline
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div> <!-- / .dropdown-menu -->

                </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-md-flex">

                    <!-- Toggle -->
                    <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                        Notifications
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Link -->
                                    <a href="#!" class="small">
                                        View all
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .card-header -->
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my--3">
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Glen Rouse</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Grace Gross</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                                2m
                                            </small>

                                        </div>
                                    </div> <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div> <!-- / .dropdown-menu -->

                </div>

                <!-- Dropdown -->
                <div class="dropdown">

                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="settings.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="sign-in.html" class="dropdown-item">Logout</a>
                    </div>

                </div>

            </div>

        </div> <!-- / .container-fluid -->
    </nav>

    <!-- CARDS -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">

                <!-- Performance -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Performance
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[0,10,5,15,10,20,15,25,20,30,25,40]}]}}'>
                                        <a class="nav-link active" href="#" data-toggle="tab">
                                            All
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[7,35,12,27,34,17,19,30,28,32,24,39]}]}}'>
                                        <a class="nav-link" href="#" data-toggle="tab">
                                            Direct
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#performanceChart" data-update='{"data":{"datasets":[{"data":[2,12,35,25,36,25,34,16,4,14,15,37]}]}}'>
                                        <a class="nav-link" href="#" data-toggle="tab">
                                            Organic
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="performanceChart" class="chart-canvas"></canvas>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8">

                <!-- Orders -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Orders
                                </h4>

                            </div>
                            <div class="col-auto mr--3">

                                <!-- Caption -->
                                <span class="text-muted">
                      Show affiliate:
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Toggle -->
                                <div class="custom-control custom-checkbox-toggle">
                                    <input type="checkbox" class="custom-control-input" id="cardToggle" data-toggle="chart" data-target="#ordersChart" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#d2ddec","label":"Affiliate"}]}}'>
                                    <label class="custom-control-label" for="cardToggle"></label>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart">
                            <canvas id="ordersChart" class="chart-canvas"></canvas>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-4">

                <!-- Devices -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Devices
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Tabs -->
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart" data-update='{"data":{"datasets":[{"data":[60,25,15]}]}}'>
                                        <a href="#" class="nav-link active" data-toggle="tab">
                                            All
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="chart" data-target="#devicesChart" data-update='{"data":{"datasets":[{"data":[15,45,20]}]}}'>
                                        <a href="#" class="nav-link" data-toggle="tab">
                                            Direct
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                    <div class="card-body">

                        <!-- Chart -->
                        <div class="chart chart-appended">
                            <canvas id="devicesChart" class="chart-canvas" data-target="#devicesChartLegend"></canvas>
                        </div>

                        <!-- Legend -->
                        <div id="devicesChartLegend" class="chart-legend"></div>

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Budget
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      $24,500
                    </span>

                                <!-- Badge -->
                                <span class="badge badge-soft-success mt--1">
                      +3.5%
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Total Hours
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      763.5
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Progress
                                </h6>

                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">

                                        <!-- Heading -->
                                        <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>

                                    </div>
                                    <div class="col">

                                        <!-- Progress -->
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-6 col-xl">

                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="card-title text-uppercase text-muted mb-2">
                                    Effective Hourly
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                      $85.50
                    </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-clock text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-xl-4">

                <!-- Projects -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Projects
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Link -->
                                <a href="#!" class="small">View all</a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="card-body">

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="{{asset('org/assets')}}/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Homepage Redesign</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 5hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="{{asset('org/assets')}}/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Travels & Time</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 3hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="{{asset('org/assets')}}/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Safari Exploration</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 10hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr>

                        <div class="row align-items-center">
                            <div class="col-auto">

                                <!-- Avatar -->
                                <a href="project-overview.html" class="avatar avatar-4by3">
                                    <img src="{{asset('org/assets')}}/img/avatars/projects/project-5.jpg" alt="..." class="avatar-img rounded">
                                </a>

                            </div>
                            <div class="col ml--2">

                                <!-- Title -->
                                <h4 class="card-title mb-1">
                                    <a href="project-overview.html">Personal Site</a>
                                </h4>

                                <!-- Time -->
                                <p class="card-text small text-muted">
                                    <time datetime="2018-05-24">Updated 4hr ago</time>
                                </p>

                            </div>
                            <div class="col-auto">

                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#!" class="dropdown-item">
                                            Action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Another action
                                        </a>
                                        <a href="#!" class="dropdown-item">
                                            Something else here
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- / .row -->

                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->

            </div>
            <div class="col-12 col-xl-8">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Goals
                                </h4>

                            </div>
                            <div class="col-auto">

                                <!-- Button -->
                                <a href="#!" class="btn btn-sm btn-white">
                                    Export
                                </a>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0" data-toggle="lists" data-lists-values='["goal-project", "goal-status", "goal-progress", "goal-date"]'>
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-project">
                                        Goal
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-progress">
                                        Progress
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted sort" data-sort="goal-date">
                                        Due date
                                    </a>
                                </th>
                                <th class="text-right">
                                    Team
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td class="goal-project">
                                    Update the API
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    55%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">07/24/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group">
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Release v1.2-Beta
                                </td>
                                <td class="goal-status">
                                    <span class="text-warning">●</span> In progress
                                </td>
                                <td class="goal-progress">
                                    25%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">08/26/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    GDPR Compliance
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/19/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    v1.2 Documentation
                                </td>
                                <td class="goal-status">
                                    <span class="text-danger">●</span> Cancelled
                                </td>
                                <td class="goal-progress">
                                    0%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/25/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fe fe-more-vertical"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="goal-project">
                                    Plan design offsite
                                </td>
                                <td class="goal-status">
                                    <span class="text-success">●</span> Completed
                                </td>
                                <td class="goal-progress">
                                    100%
                                </td>
                                <td class="goal-date">
                                    <time datetime="2018-10-24">06/30/18</time>
                                </td>
                                <td class="text-right">
                                    <div class="avatar-group justify-content-end">
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Dianna Smiley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-2.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-3.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                        <a href="#!" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                            <img src="{{asset('org/assets')}}/img/avatars/profiles/avatar-4.jpg" class="avatar-img rounded-circle border border-white" alt="...">
                                        </a>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container-fluid -->

</div> <!-- / .main-content -->

<!-- JAVASCRIPT
================================================== -->

<!-- Libs JS -->
<script src="{{asset('org/assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('org/assets')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('org/assets')}}/libs/chart.js/dist/Chart.min.js"></script>
<script src="{{asset('org/assets')}}/libs/chart.js/Chart.extension.min.js"></script>
<script src="{{asset('org/assets')}}/libs/highlight/highlight.pack.min.js"></script>
<script src="{{asset('org/assets')}}/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="{{asset('org/assets')}}/libs/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="{{asset('org/assets')}}/libs/list.js/dist/list.min.js"></script>
<script src="{{asset('org/assets')}}/libs/quill/dist/quill.min.js"></script>
<script src="{{asset('org/assets')}}/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="{{asset('org/assets')}}/libs/select2/dist/js/select2.min.js"></script>

<!-- Theme JS -->
<script src="{{asset('org/assets')}}/js/theme.min.js"></script>

</body>
</html>