<div class="header-wrap">
  <div class="container-fluid">
    <div class="row" style="height: 33px">
      <div class="col-lg-1 col-md-12 navbar-light">
        <div class="logo" style="position: relative;top: -6px;z-index: 99999; background: white; border-radius: 96%; padding: 3px; width:80%"> <a href="/"><img alt="" class="logo-default" src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
       <div class="col-lg-1 col-md-12">
       </div>
      <div class="col-lg-8 col-md-12">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link " href="#">ABOUT SCHOOL <span class="sr-only">(current)</span></a> 
                 <ul class="submenu">
                    <li><a href=" {{ route('schooldetails') }}">ABOUT SCHOOL</a></li>
                    <li><a href="{{ route('managings') }}">MANAGING COMMITTEE</a></li>
                    <li><a href="{{ route('advisorys') }}">ADVISORY COMMITTEE</a></li>
                     <li><a href="{{ route('founders') }}">FOUNDERS DETAILS</a></li>
                    <li><a href="{{ route('goals') }}">GOAL AND OBJECTIVES</a></li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">TEACHER</a>
                <ul class="submenu">
                    <li><a href="{{ route('teachers') }}">TEACHERS BIOGRAPHY</a></li>
                    {{-- <li><a href="{{ route('teacherdetailss') }}">Biography</a></li> --}}
                  </ul></li>
                <li class="nav-item"><a class="nav-link" href="#">STUDENT</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    {{-- <li><a href="{{ route('students') }}">Pictures</a></li> --}}
                    <li><a href="{{ route('class')}}">STUDENT INFORMATION</a></li>
                     <li><a href="{{ route('results') }}">RESULTS</a></li>
                      <li><a href="{{ route('notices') }}">NOTICE BOARD</a></li>
                       <li><a href="{{ route('activitis') }}">ACTIVITIS</a></li>
                      <li><a href="{{ route('sports') }}">SPORTS</a></li>
                       <li><a href="{{ route('arts') }}">ART</a></li>
                      <li><a href="{{ route('musics') }}">MUSIC</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">DONATION</a>
                  <ul class="submenu">
                    <li><a href="{{route('projects')}}">DONER LIST</a></li>
                    {{-- <li><a href="teachers-details.html"></a></li> --}}
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('curriculams') }}">CURRICULAM</a> <i class="fas fa-caret-down"></i>
                 
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Events</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                   
                    <li><a href="{{ route('upevents') }}">UPCOMMING EVENTS</a></li>
                     <li><a href="{{ route('events') }}">PREVIOUS</a></li>
                    <li ><a href="{{ route('gallerys') }}">GALLERY</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('admissions')}}">ADMISSION</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contacts')}}">CONTACT US</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="header_info">
          <div class="search"><a href="#"><i class="fas fa-search" style="padding:9px"></i></a></div>
          <div class="loginwrp"><a href="{{route('logins')}}">LOGIN/REGISTER</a></div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- <div id="flash_message">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
          <span>Flash message will be here.. </span>
      </div>
      <div class="col-md-2">
          <span>X</span>
      </div>

    </div>
  </div>
</div> --}}