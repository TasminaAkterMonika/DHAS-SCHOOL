<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}</td>
						<td>{{ $row->name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Roll', (isset($fields['roll']['language'])? $fields['roll']['language'] : array())) }}</td>
						<td>{{ $row->roll}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Gov Id', (isset($fields['gov_id']['language'])? $fields['gov_id']['language'] : array())) }}</td>
						<td>{{ $row->gov_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dob', (isset($fields['dob']['language'])? $fields['dob']['language'] : array())) }}</td>
						<td>{{ $row->dob}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Class', (isset($fields['class']['language'])? $fields['class']['language'] : array())) }}</td>
						<td>{{ $row->class}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Weight', (isset($fields['weight']['language'])? $fields['weight']['language'] : array())) }}</td>
						<td>{{ $row->weight}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Height', (isset($fields['height']['language'])? $fields['height']['language'] : array())) }}</td>
						<td>{{ $row->height}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Father Name', (isset($fields['father_name']['language'])? $fields['father_name']['language'] : array())) }}</td>
						<td>{{ $row->father_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Father Occupation', (isset($fields['father_occupation']['language'])? $fields['father_occupation']['language'] : array())) }}</td>
						<td>{{ $row->father_occupation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mother Name', (isset($fields['mother_name']['language'])? $fields['mother_name']['language'] : array())) }}</td>
						<td>{{ $row->mother_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mother Occupation', (isset($fields['mother_occupation']['language'])? $fields['mother_occupation']['language'] : array())) }}</td>
						<td>{{ $row->mother_occupation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Address', (isset($fields['address']['language'])? $fields['address']['language'] : array())) }}</td>
						<td>{{ $row->address}} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Ps', (isset($fields['ps']['language'])? $fields['ps']['language'] : array())) }}</td>
						<td>{{ $row->ps}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('District', (isset($fields['district']['language'])? $fields['district']['language'] : array())) }}</td>
						<td>{{ $row->district}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Postal Code', (isset($fields['postal_code']['language'])? $fields['postal_code']['language'] : array())) }}</td>
						<td>{{ $row->postal_code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type Of Disability', (isset($fields['type_of_disability']['language'])? $fields['type_of_disability']['language'] : array())) }}</td>
						<td>{{ $row->type_of_disability}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Disability Description', (isset($fields['disability_description']['language'])? $fields['disability_description']['language'] : array())) }}</td>
						<td>{{ $row->disability_description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Admission Date', (isset($fields['admission_date']['language'])? $fields['admission_date']['language'] : array())) }}</td>
						<td>{{ $row->admission_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Class Teacher Name', (isset($fields['class_teacher_name']['language'])? $fields['class_teacher_name']['language'] : array())) }}</td>
						<td>{{ $row->class_teacher_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Birth Certificate Number', (isset($fields['birth_certificate_number']['language'])? $fields['birth_certificate_number']['language'] : array())) }}</td>
						<td>{{ $row->birth_certificate_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Birth Certificate Image', (isset($fields['birth_certificate_image']['language'])? $fields['birth_certificate_image']['language'] : array())) }}</td>
						<td>{{ $row->birth_certificate_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nid', (isset($fields['nid']['language'])? $fields['nid']['language'] : array())) }}</td>
						<td>{{ $row->nid}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Nid Image', (isset($fields['nid_image']['language'])? $fields['nid_image']['language'] : array())) }}</td>
						<td>{{ $row->nid_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Passport', (isset($fields['passport']['language'])? $fields['passport']['language'] : array())) }}</td>
						<td>{{ $row->passport}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Passport Image', (isset($fields['passport_image']['language'])? $fields['passport_image']['language'] : array())) }}</td>
						<td>{{ $row->passport_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Primary Contact Number', (isset($fields['primary_contact_number']['language'])? $fields['primary_contact_number']['language'] : array())) }}</td>
						<td>{{ $row->primary_contact_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Secoendary Contact Number', (isset($fields['secoendary_contact_number']['language'])? $fields['secoendary_contact_number']['language'] : array())) }}</td>
						<td>{{ $row->secoendary_contact_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sponsor Name', (isset($fields['sponsor_name']['language'])? $fields['sponsor_name']['language'] : array())) }}</td>
						<td>{{ $row->sponsor_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Special Skill', (isset($fields['special_skill']['language'])? $fields['special_skill']['language'] : array())) }}</td>
						<td>{{ $row->special_skill}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Blood Group', (isset($fields['blood_group']['language'])? $fields['blood_group']['language'] : array())) }}</td>
						<td>{{ $row->blood_group}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	