
@include('layouts.default.header')
<body>
<div class="boxed_wrapper">


<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Admission</h1>
  </div>
</div>

<div class="innerContent-wrap">
  <div class="container">     
    <!-- Register Start -->
    <div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner bloggridWrp">
      <div class="row">
        <div class="col-lg-5">
          <ul class="row unorderList">
            <li class="col-lg-12">
              <div class="blog_box">
                <div class="blogImg"><img src="images/blog1.jpg" alt="">
                  
                </div>
                <div class="path_box">
                  <h3>Admission Requirement</a></h3>
                  <p>{{$adrequirement->description}}</p>
                </div>
              </div>
            </li>

          </ul>
          
        </div>
        <div class="col-lg-7">
          <div class="login-wrap " style="padding:10px">
            
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <h3 style="font-size: 16px;text-align: center;font-weight: 600;">Apply For Admission</h3>
            <p class="error" style="color:red"><span class="text-danger">*</span> Please fill in all the required fields.</p>
        <form id="" method="POST" action="{{route('submit.admission.request')}}" class="admission-form"> 
        @csrf
            <div class="row" >            

              <div class="col-md-6">
                      <div class="row">
                      <div class="col-lg-5">
                      <label for="name" style="font-size: 11px;"> Name<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                      
                        <div class="col-lg-5">
                      <label for="simage" style="font-size: 11px;">Student Image<span class="text-danger" >*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="file" name="image"  placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                        <div class="col-lg-5">
                      <label for="db" style="font-size: 11px;">Date Of Birth</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="date" name="birth" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>
                      

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Father's Name<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="fname" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Occupation<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="foccu" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">NID No.</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="nidno" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Birth Certificate No.<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="birthno" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Previous Education Certificate(if any)</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="file" name="pec"style="font-size: 8px;" >
                   
                      </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Special Skill</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="sskill" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Hight</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="hight" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="bloodgroup" style="font-size: 11px;">Blood Group</label>                    
                  
                          </div>
                      <div class="col-lg-7">
                        <div class="form-group">                        
                              <select name="blood" id="blood" style="font-size: 8px;"placeholder="" required>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                         <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                      </select>
                        </div>
                      </div>
                                           
                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;"> Village<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="village" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                          

                            <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Upazila<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="upazila" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                           <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Primary Contact Number<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="phone" name="pcn" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                           


                      </div>     
              </div>
               <div class="col-md-6">
                      <div class="row">

                      <div class="col-lg-5">
                      <label for="gender" style="font-size: 11px;">Gender<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                         <select name="gender" id="gender" style="font-size: 8px;"  placeholder="" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                       >
                      </select>
                          
                        </div>
                      </div>

                        <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Age</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="age" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="email" style="font-size: 11px;">Email</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Mother's Name<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="mname" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Occupation<span class="text-danger">*</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="select" name="moccu" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                        <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Passport</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="passport" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>


                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Weight</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="weight" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Type Of Disability</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="tod" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Session</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="session" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Postal Code<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="pcode" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                      <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Application For class<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                         
                           <select name="class" id="class" style="font-size: 8px;"placeholder="" required >
                        <option value="one">One</option>
                        <option value="two">Two</option>
                        <option value="three">Three</option>
                        <option value="four">Four</option>
                         <option value="five+">Five</option>
                        
                      </select>
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Post<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="post" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">District<span class="text-danger">*</span></label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="text" name="district" class="form-control" placeholder="" style="font-size: 8px;" required>
                        </div>
                      </div>

                       <div class="col-lg-5">
                      <label for="fname" style="font-size: 11px;">Secondary Contact Number</label>
                      </div>
                      <div class="col-lg-7">
                        <div class="form-group">
                          <input type="phone" name="scn" class="form-control" placeholder="" style="font-size: 8px;">
                        </div>
                      </div>                                          
                      </div>                     
              </div>   
            </div>
             <div class=text-right>
               
                    <div class="form-group">
                      <button type="submit" class="default-btn btn send_btn" style="font-size: 10px; padding: 2px 6px 3px 6px;"> Submit <span></span></button>
                    </div>
                  </div>
                  </form>


                <div class="row">
                  <div class="col-lg-12">
                    @if(session()->has('message'))
                        <div class="alert alert-success text-center" >
                            {{ session()->get('message') }}
                        </div>
                    @endif
                  </div>
                </div>

                 </div>
                 
          </div>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<script>
  
  
</script>
@include('layouts.default.footer')
