@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>ABOUT SCHOOL</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
        <div class="blog_inner bloggridWrp">

        <div class="row"> 
              @foreach($schooldetails as $schooldetail)
                <div class="col-lg-12 ">
                
                 {{-- <div class="class_left"> --}}
                    {{-- <div class="class_Img"><img src="{{ asset('uploads')}}/images/schooldetail/{{ $schooldetail->image }}" alt="">
                    </div> --}}
                    <p> {!!$schooldetail->description!!}</p>
                {{-- </div> --}}
                </div>
           @endforeach
         </div>
    </div>
  </div>
</div>
</div>
<!-- Inner Content Start --> 

  @include('layouts.default.footer')