@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'studentlist?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Student List</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images/studentlist") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
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
										<label for="Roll" class=" control-label col-md-4 text-left"> Roll </label>
										<div class="col-md-6">
										  <input  type='text' name='roll' id='roll' value='{{ $row['roll'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gov Id" class=" control-label col-md-4 text-left"> Gov Id </label>
										<div class="col-md-6">
										  <input  type='text' name='gov_id' id='gov_id' value='{{ $row['gov_id'] }}' 
						     class='form-control form-control-sm ' /> 
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
										<label for="Class" class=" control-label col-md-4 text-left"> Class </label>
										<div class="col-md-6">
										  <select name='class' rows='5' id='class' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gender" class=" control-label col-md-4 text-left"> Gender </label>
										<div class="col-md-6">
										  
					<?php $gender = explode(',',$row['gender']);
					$gender_opt = array( 'Male' => 'Male' ,  'Female' => 'Female' ,  'Others' => 'Others' , ); ?>
					<select name='gender' rows='5'   class='select2 '  > 
						<?php 
						foreach($gender_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['gender'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
										<label for="Weight" class=" control-label col-md-4 text-left"> Weight </label>
										<div class="col-md-6">
										  <input  type='text' name='weight' id='weight' value='{{ $row['weight'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Height" class=" control-label col-md-4 text-left"> Height </label>
										<div class="col-md-6">
										  <input  type='text' name='height' id='height' value='{{ $row['height'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Father Name" class=" control-label col-md-4 text-left"> Father Name </label>
										<div class="col-md-6">
										  <input  type='text' name='father_name' id='father_name' value='{{ $row['father_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Father Occupation" class=" control-label col-md-4 text-left"> Father Occupation </label>
										<div class="col-md-6">
										  <input  type='text' name='father_occupation' id='father_occupation' value='{{ $row['father_occupation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mother Name" class=" control-label col-md-4 text-left"> Mother Name </label>
										<div class="col-md-6">
										  <input  type='text' name='mother_name' id='mother_name' value='{{ $row['mother_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mother Occupation" class=" control-label col-md-4 text-left"> Mother Occupation </label>
										<div class="col-md-6">
										  <input  type='text' name='mother_occupation' id='mother_occupation' value='{{ $row['mother_occupation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Address" class=" control-label col-md-4 text-left"> Address </label>
										<div class="col-md-6">
										  <input  type='text' name='address' id='address' value='{{ $row['address'] }}' 
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
										<label for="Ps" class=" control-label col-md-4 text-left"> Ps </label>
										<div class="col-md-6">
										  <input  type='text' name='ps' id='ps' value='{{ $row['ps'] }}' 
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
										<label for="Postal Code" class=" control-label col-md-4 text-left"> Postal Code </label>
										<div class="col-md-6">
										  <input  type='text' name='postal_code' id='postal_code' value='{{ $row['postal_code'] }}' 
						     class='form-control form-control-sm ' /> 
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
										<label for="Disability Description" class=" control-label col-md-4 text-left"> Disability Description </label>
										<div class="col-md-6">
										  <textarea name='disability_description' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['disability_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Admission Date" class=" control-label col-md-4 text-left"> Admission Date </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('admission_date', $row['admission_date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Class Teacher Name" class=" control-label col-md-4 text-left"> Class Teacher Name </label>
										<div class="col-md-6">
										  <input  type='text' name='class_teacher_name' id='class_teacher_name' value='{{ $row['class_teacher_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Birth Certificate Number" class=" control-label col-md-4 text-left"> Birth Certificate Number </label>
										<div class="col-md-6">
										  <input  type='text' name='birth_certificate_number' id='birth_certificate_number' value='{{ $row['birth_certificate_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Birth Certificate Image" class=" control-label col-md-4 text-left"> Birth Certificate Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="birth_certificate_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="birth_certificate_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["birth_certificate_image"],"/uploads/images/birthimage") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nid" class=" control-label col-md-4 text-left"> Nid </label>
										<div class="col-md-6">
										  <input  type='text' name='nid' id='nid' value='{{ $row['nid'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Nid Image" class=" control-label col-md-4 text-left"> Nid Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="nid_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="nid_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["nid_image"],"/uploads/images/nid") !!}
						</div>
					 
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
										<label for="Passport" class=" control-label col-md-4 text-left"> Passport </label>
										<div class="col-md-6">
										  <input  type='text' name='passport' id='passport' value='{{ $row['passport'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Passport Image" class=" control-label col-md-4 text-left"> Passport Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="passport_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="passport_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["passport_image"],"/uploads/images/passport") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Primary Contact Number" class=" control-label col-md-4 text-left"> Primary Contact Number </label>
										<div class="col-md-6">
										  <input  type='text' name='primary_contact_number' id='primary_contact_number' value='{{ $row['primary_contact_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Secoendary Contact Number" class=" control-label col-md-4 text-left"> Secoendary Contact Number </label>
										<div class="col-md-6">
										  <input  type='text' name='secoendary_contact_number' id='secoendary_contact_number' value='{{ $row['secoendary_contact_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Sponsor Name" class=" control-label col-md-4 text-left"> Sponsor Name </label>
										<div class="col-md-6">
										  <input  type='text' name='sponsor_name' id='sponsor_name' value='{{ $row['sponsor_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Special Skill" class=" control-label col-md-4 text-left"> Special Skill </label>
										<div class="col-md-6">
										  <input  type='text' name='special_skill' id='special_skill' value='{{ $row['special_skill'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Blood Group" class=" control-label col-md-4 text-left"> Blood Group </label>
										<div class="col-md-6">
										  
					<?php $blood_group = explode(',',$row['blood_group']);
					$blood_group_opt = array( 'O+' => 'O+' ,  'O-' => 'O-' ,  'A+' => 'A+' ,  'A-' => 'A-' ,  'B+' => 'B+' ,  'B-' => 'B-' ,  'AB+' => 'AB+' ,  'AB-' => 'AB-' , ); ?>
					<select name='blood_group' rows='5'   class='select2 '  > 
						<?php 
						foreach($blood_group_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['blood_group'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('status', $row['status']) !!}</fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#class").jCombo("{!! url('studentlist/comboselect?filter=studentinfo:id:class') !!}",
		{  selected_value : '{{ $row["class"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("studentlist/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop