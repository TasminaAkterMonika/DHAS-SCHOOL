@include('layouts.default.header')
<body>
<div class="boxed_wrapper">

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Project</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner ">

      <ul class="row unorderList">
            @foreach($projects as $project)
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg" style="background: #f7f7f7;"><a href="{{route('donets')}}"><img src="{{ asset('uploads')}}/images/project/{{ $project->image}}" alt="" style="border-radius: 100%;"></a>
              <div class="time_box" style="padding: 11px 78px;bottom: -54px; right:62px"><span>Goal : BDT </span></div>
              
            </div>
            <div class="path_box" style="padding: 69px 3px;">
              <h3><a href="#" style="padding: 73px;">Labs Programs</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li>
       
      </ul>
     @endforeach
    </div>
  </div>
</div>
<!-- Inner Content Start --> 
 @include('layouts.default.footer')