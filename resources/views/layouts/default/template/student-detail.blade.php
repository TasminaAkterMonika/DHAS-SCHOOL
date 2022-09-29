@include('layouts.default.header')


<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1> {{ $title }}</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
            <div class="blog_inner bloggridWrp">     
            <div class="row" style="font-size: 12px;line-height: 26px;color: #52575e;">           
              <div class="col-lg-12">
                  <div class="text-center">
                  <img src="{{ asset('uploads')}}/images/studentlist/{{ $detail->image }}" alt="Image"  style="border: 2px solid; margin-bottom: 16px;" >
                  </div>
                     
                    <p style="text-align: center;background: #242950;color: #fff;">Personal Information</p>
                 
                  <div class="row" >
                        <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-5">Name</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->name!!}</div>
                            </div>

                              <div class="row">
                              <div class="col-md-5">Date of Birth</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{{$detail->dob}}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Fathers Name</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">  {!!$detail->father_name!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Occoupation</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->father_occupation!!}</div>
                            </div>

                                <div class="row">
                              <div class="col-md-5">NID</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->nid!!}</div>
                            </div>

                              <div class="row">
                              <div class="col-md-5">Birth Certificate Number</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->birth_certificate_number!!}</div>
                            </div>

                            
                         </div>
                        <div class="col-md-6">
                         <div class="row">
                              <div class="col-md-5">Gender</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->gender!!}</div>
                            </div>

                              <div class="row">
                              <div class="col-md-5">Age</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->age!!}</div>
                            </div>
                        
                            <div class="row">
                              <div class="col-md-5">Mother's Name</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->mother_name!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Occoupation</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->mother_occupation!!}</div>
                            </div>
                        
                            <div class="row">
                              <div class="col-md-5">Passport</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">  {!!$detail->passport!!}</div>
                            </div>
                          
                        </div>
                      </div>

                    <p style="text-align: center;background: #242950;color: #fff;">Educational Information</p>
                      
                      
                      <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-5">Class</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->class!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Roll N0</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->roll!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Goverment ID For Disabitis</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->gov_id!!} </div>
                            </div>

                         </div>
                        <div class="col-md-6">
                        <div class="row">
                              <div class="col-md-5">Admision Date</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->admission_date!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Class Teacher Name</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->class_teacher_name!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Special Skill</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->special_skill!!}</div>
                            </div>
                         
                        </div>
                      </div>

                    <p style="text-align: center;background: #242950;color: #fff;">Physical Information</p>


                     <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-5">Height</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->height!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Weight</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->weight!!}</div>
                            </div>
                            
                         </div>
                        <div class="col-md-6">
                        <div class="row">
                              <div class="col-md-5">Type Of Disability</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> 
                              <div id="myBtn"><a href="javascript:void(0)"style="text-decoration: none;">{!!$detail->type_of_disability!!}</a></div>
                              <!-- The Modal -->
                              <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                  <span class="close">&times;</span>
                                  <p>{!!$detail->disability_description!!}</p>
                                </div>
                               </div>

                                {{-- <p class="read-less-p" style="margin-bottom: 0px;"><a href="#">{!!$detail->type_of_disability!!}</p>  --}}
                                {{-- <span id="dots">...</span> --}}
                                {{-- <div id="more" class="d-none">{!!$detail->disability_description!!}</a></div> --}}
                                 {{-- <div class="text-center"> --}}
                               {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#readMoreModal"style="font-size: 9px;padding: 4px;background-color: #242950;border: #242950;">Read More</button> --}}
                              {{-- </div> --}}
                              
                               </div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Blood Group</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->blood_group!!}</div>
                            </div>
                        </div>
                      </div>
                                                          
                    <p style="text-align: center;background: #242950;color: #fff;">Contact Information</p>

                    
                     <div class="row">
                        <div class="col-md-6">

                            <div class="row">
                              <div class="col-md-5">Village</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->village!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Post</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->post!!}</div>
                            </div>

                              <div class="row">
                              <div class="col-md-5">Upazila</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->ps!!}</div>
                            </div>

                              <div class="row">
                              <div class="col-md-5">District</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->district!!}</div>
                            </div>

                            <div class="row">
                              <div class="col-md-5">Email</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">{!!$detail->email!!}</div>
                            </div>
                         </div>
                        <div class="col-md-6">
                        <div class="row">
                              <div class="col-md-5">Postal Code</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 ">  {!!$detail->postal_code!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Primary Contact Number</div>
                              <div class="col-md-2">:</div>
                             <div class="col-md-5 "> {!!$detail->primary_contact_number!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Secoendary Contact Number</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->secoendary_contact_number!!}</div>
                            </div>
                            <div class="row">
                              <div class="col-md-5">Sponsor Name</div>
                              <div class="col-md-2">:</div>
                              <div class="col-md-5 "> {!!$detail->sponsor_name!!}</div>
                            </div>
                        </div>
                      </div>
                
                                             
                      
              </div>
            </div>
               <div class="col-lg-12" style="padding-bottom: 119px;"></div>
            </div>
    </div>
</div>
</div>
<!-- Modal -->
{{-- <div class="modal fade " id="readMoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{!!$detail->type_of_disability!!}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!$detail->disability_description!!}
      </div>
      {{-- <div class="modal-footer"> --}}
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #121528;border: #121528;">Close</button>
      </div> --}}
    {{-- </div>
  </div>
</div> --}} 
{{-- <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    
    $('.read-less-p').removeClass('d-none');
    $('.read-less-p').addClass('d-block');

    $('#more').removeClass('d-block');
    $('#more').addClass('d-none');


  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";

    $('.read-less-p').removeClass('d-block');
    $('.read-less-p').addClass('d-none');

    $('#more').removeClass('d-none');
    $('#more').addClass('d-block');


  }
}
</script> --}}
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
@include('layouts.default.footer')

