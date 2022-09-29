@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('admissionrequest/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('admissionrequest?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('admissionrequest/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('admissionrequest/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}</td>
						<td>{{ $row->name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Student Image', (isset($fields['student_image']['language'])? $fields['student_image']['language'] : array())) }}</td>
						<td>{{ $row->student_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dob', (isset($fields['dob']['language'])? $fields['dob']['language'] : array())) }}</td>
						<td>{{ $row->dob}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gender', (isset($fields['gender']['language'])? $fields['gender']['language'] : array())) }}</td>
						<td>{{ $row->gender}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Age', (isset($fields['age']['language'])? $fields['age']['language'] : array())) }}</td>
						<td>{{ $row->age}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Fathers Name', (isset($fields['fathers_name']['language'])? $fields['fathers_name']['language'] : array())) }}</td>
						<td>{{ $row->fathers_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('F Occupation', (isset($fields['f_occupation']['language'])? $fields['f_occupation']['language'] : array())) }}</td>
						<td>{{ $row->f_occupation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mothers Name', (isset($fields['mothers_name']['language'])? $fields['mothers_name']['language'] : array())) }}</td>
						<td>{{ $row->mothers_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('M Occupation', (isset($fields['m_occupation']['language'])? $fields['m_occupation']['language'] : array())) }}</td>
						<td>{{ $row->m_occupation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nid No', (isset($fields['nid_no']['language'])? $fields['nid_no']['language'] : array())) }}</td>
						<td>{{ $row->nid_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Passport', (isset($fields['passport']['language'])? $fields['passport']['language'] : array())) }}</td>
						<td>{{ $row->passport}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Birth Certificate No', (isset($fields['birth_certificate_no']['language'])? $fields['birth_certificate_no']['language'] : array())) }}</td>
						<td>{{ $row->birth_certificate_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Weight', (isset($fields['weight']['language'])? $fields['weight']['language'] : array())) }}</td>
						<td>{{ $row->weight}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Previous Education Certificate', (isset($fields['previous_education_certificate']['language'])? $fields['previous_education_certificate']['language'] : array())) }}</td>
						<td>{{ $row->previous_education_certificate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Of Disability', (isset($fields['type_of_disability']['language'])? $fields['type_of_disability']['language'] : array())) }}</td>
						<td>{{ $row->type_of_disability}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Spacial Skill', (isset($fields['spacial_skill']['language'])? $fields['spacial_skill']['language'] : array())) }}</td>
						<td>{{ $row->spacial_skill}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Session', (isset($fields['session']['language'])? $fields['session']['language'] : array())) }}</td>
						<td>{{ $row->session}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Hight', (isset($fields['hight']['language'])? $fields['hight']['language'] : array())) }}</td>
						<td>{{ $row->hight}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Postal Code', (isset($fields['postal_code']['language'])? $fields['postal_code']['language'] : array())) }}</td>
						<td>{{ $row->postal_code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Blood Group', (isset($fields['blood_group']['language'])? $fields['blood_group']['language'] : array())) }}</td>
						<td>{{ $row->blood_group}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Application For Class', (isset($fields['application_for_class']['language'])? $fields['application_for_class']['language'] : array())) }}</td>
						<td>{{ $row->application_for_class}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Village', (isset($fields['village']['language'])? $fields['village']['language'] : array())) }}</td>
						<td>{{ $row->village}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Post', (isset($fields['post']['language'])? $fields['post']['language'] : array())) }}</td>
						<td>{{ $row->post}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Upazila', (isset($fields['upazila']['language'])? $fields['upazila']['language'] : array())) }}</td>
						<td>{{ $row->upazila}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('District', (isset($fields['district']['language'])? $fields['district']['language'] : array())) }}</td>
						<td>{{ $row->district}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Praimary Contact Number', (isset($fields['praimary_contact_number']['language'])? $fields['praimary_contact_number']['language'] : array())) }}</td>
						<td>{{ $row->praimary_contact_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Secondary Contact Number', (isset($fields['secondary_contact_number']['language'])? $fields['secondary_contact_number']['language'] : array())) }}</td>
						<td>{{ $row->secondary_contact_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
