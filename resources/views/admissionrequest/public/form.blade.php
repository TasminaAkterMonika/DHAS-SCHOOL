

		 {!! Form::open(array('url'=>'admissionrequest', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Admission Request</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name </label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Student Image" class=" control-label col-md-4 text-left"> Student Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="student_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="student_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["student_image"],"/uploads/images/admission") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Dob" class=" control-label col-md-4 text-left"> Dob </label>
										<div class="col-md-6">
										  <input  type='text' name='dob' id='dob' value='{{ $row['dob'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gender" class=" control-label col-md-4 text-left"> Gender </label>
										<div class="col-md-6">
										  <input  type='text' name='gender' id='gender' value='{{ $row['gender'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Age" class=" control-label col-md-4 text-left"> Age </label>
										<div class="col-md-6">
										  <input  type='text' name='age' id='age' value='{{ $row['age'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Fathers Name" class=" control-label col-md-4 text-left"> Fathers Name </label>
										<div class="col-md-6">
										  <input  type='text' name='fathers_name' id='fathers_name' value='{{ $row['fathers_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="F Occupation" class=" control-label col-md-4 text-left"> F Occupation </label>
										<div class="col-md-6">
										  <input  type='text' name='f_occupation' id='f_occupation' value='{{ $row['f_occupation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mothers Name" class=" control-label col-md-4 text-left"> Mothers Name </label>
										<div class="col-md-6">
										  <input  type='text' name='mothers_name' id='mothers_name' value='{{ $row['mothers_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="M Occupation" class=" control-label col-md-4 text-left"> M Occupation </label>
										<div class="col-md-6">
										  <input  type='text' name='m_occupation' id='m_occupation' value='{{ $row['m_occupation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nid No" class=" control-label col-md-4 text-left"> Nid No </label>
										<div class="col-md-6">
										  <input  type='text' name='nid_no' id='nid_no' value='{{ $row['nid_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Passport" class=" control-label col-md-4 text-left"> Passport </label>
										<div class="col-md-6">
										  <input  type='text' name='passport' id='passport' value='{{ $row['passport'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Birth Certificate No" class=" control-label col-md-4 text-left"> Birth Certificate No </label>
										<div class="col-md-6">
										  <input  type='text' name='birth_certificate_no' id='birth_certificate_no' value='{{ $row['birth_certificate_no'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Weight" class=" control-label col-md-4 text-left"> Weight </label>
										<div class="col-md-6">
										  <input  type='text' name='weight' id='weight' value='{{ $row['weight'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Previous Education Certificate" class=" control-label col-md-4 text-left"> Previous Education Certificate </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="previous_education_certificate" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="previous_education_certificate-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["previous_education_certificate"],"/uploads/images/admission") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Type Of Disability" class=" control-label col-md-4 text-left"> Type Of Disability </label>
										<div class="col-md-6">
										  <input  type='text' name='type_of_disability' id='type_of_disability' value='{{ $row['type_of_disability'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Spacial Skill" class=" control-label col-md-4 text-left"> Spacial Skill </label>
										<div class="col-md-6">
										  <input  type='text' name='spacial_skill' id='spacial_skill' value='{{ $row['spacial_skill'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Session" class=" control-label col-md-4 text-left"> Session </label>
										<div class="col-md-6">
										  <input  type='text' name='session' id='session' value='{{ $row['session'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Hight" class=" control-label col-md-4 text-left"> Hight </label>
										<div class="col-md-6">
										  <input  type='text' name='hight' id='hight' value='{{ $row['hight'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Postal Code" class=" control-label col-md-4 text-left"> Postal Code </label>
										<div class="col-md-6">
										  <input  type='text' name='postal_code' id='postal_code' value='{{ $row['postal_code'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Blood Group" class=" control-label col-md-4 text-left"> Blood Group </label>
										<div class="col-md-6">
										  <input  type='text' name='blood_group' id='blood_group' value='{{ $row['blood_group'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Application For Class" class=" control-label col-md-4 text-left"> Application For Class </label>
										<div class="col-md-6">
										  <input  type='text' name='application_for_class' id='application_for_class' value='{{ $row['application_for_class'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Village" class=" control-label col-md-4 text-left"> Village </label>
										<div class="col-md-6">
										  <input  type='text' name='village' id='village' value='{{ $row['village'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Post" class=" control-label col-md-4 text-left"> Post </label>
										<div class="col-md-6">
										  <input  type='text' name='post' id='post' value='{{ $row['post'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Upazila" class=" control-label col-md-4 text-left"> Upazila </label>
										<div class="col-md-6">
										  <input  type='text' name='upazila' id='upazila' value='{{ $row['upazila'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="District" class=" control-label col-md-4 text-left"> District </label>
										<div class="col-md-6">
										  <input  type='text' name='district' id='district' value='{{ $row['district'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Praimary Contact Number" class=" control-label col-md-4 text-left"> Praimary Contact Number </label>
										<div class="col-md-6">
										  <input  type='text' name='praimary_contact_number' id='praimary_contact_number' value='{{ $row['praimary_contact_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Secondary Contact Number" class=" control-label col-md-4 text-left"> Secondary Contact Number </label>
										<div class="col-md-6">
										  <input  type='text' name='secondary_contact_number' id='secondary_contact_number' value='{{ $row['secondary_contact_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}{!! Form::hidden('status', $row['status']) !!}</fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
