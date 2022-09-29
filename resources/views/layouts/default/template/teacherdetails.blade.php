@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>TEACHERS BIOGRAPHY</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
            <div class="blog_inner bloggridWrp">
          
            <div class="row" style="min-height: 250px;">

                    <div class="col-lg-3 text-center">
                        <div class="class_center" style="position: absolute; top:50%; height:10em; margin-top:-5em;left: 30%;">
                                <div class="class_Img mb-2" ><img src="{{ asset('uploads')}}/images/teacher/{{ $teachers->image }}" alt="" style=" border: 2px solid; width: auto">
                                </div>
                                 <h3 style="font-size: 12px;font-weight: 600;margin:0;">{!!$teachers->name!!}</h3>
                                   <p style="font-size: 10px;">{!!$teachers->designation!!}</p>
                                
                        </div>
                    </div>
                    <div class="col-lg-1" style="border-left: 3px solid #232936;"></div>
                     <div class="col-lg-8" >
                    
                       {!!$teachers->details!!}
                         

                     </div>
                      
            </div>
        
            </div>
    </div>
</div>
</div>
@include('layouts.default.footer')
