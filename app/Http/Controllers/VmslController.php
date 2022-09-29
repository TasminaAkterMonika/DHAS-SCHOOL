<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cit;
use DB;

use App\Models\aboutus;
use App\Models\classes;
use App\Models\teacher;
use App\Models\teacherdetails;
use App\Models\shortbanner;
use App\Models\gallery;
use App\Models\studentinfo;
use App\Models\schooldetail;
use App\Models\contactus;
use App\Models\goal;
use App\Models\event;
use App\Models\upevent;
use App\Models\Admissionrequest;
use App\Models\managing;
use App\Models\advisory;
use App\Models\project;
use App\Models\career;
use App\Models\adrequirement; 
use App\Models\Login;
use App\Models\Core\Users;
use App\Models\Core\program;
use App\Models\Websitesettings;
use App\Models\Vacancyannouncement;
use App\Models\Contactrequest;
use App\Models\studentlist;
use App\Notifications\arifPasswordResetNotification;
use Hash;
use Helper;

use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\Str;
class VmslController extends Controller{
	

	
	
	public function reCaptcha( $request)	{
		if(!is_null($request['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . config('sximo.cnf_recaptchaprivatekey') . '&response='.$request['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
           return $data;
        }else{
           return false;
        }		
	}
	
	
public function savecareer(Request $request ){
    
    $file = $request->file('cv');
    $this->validate($request, [
        'firstname' => 'required',
        'lastname'=>'required',
        'email'=>'required | email',
        'phone'=>'required',
        'job_post'=>'required',
        'cv'=>'required | mimes:doc,docx,pdf'
    ]);
    
    $allowedfileExtension=['pdf','doc','docx'];
    $extension = $file->getClientOriginalExtension();
    $check = in_array($extension,$allowedfileExtension);
    
    if($check){
        $data = array_map('strip_tags', $request->input());
        unset($data['job_title']);
        unset($data['_token']);
        
        if($request->hasFile('cv')){
            $newName = round(microtime(true)+rand(11,99)).'.'.$extension;
            $data ['cv'] = $newName;
            
            $destinationPath = 'uploads/cv';
            $uploaded = $file->move($destinationPath,$newName);
            if($uploaded){
                $response = DB::table('con_career')->insert($data);
                $emailVars = [];
                $emailVars['firstname'] = $request->input('firstname');
                $emailVars['job_title'] = $request->input('job_title');
                $emailVars['company'] = $this->config['cnf_appname'];
                $recipient = $request->input('email');
                $message = view('emails.career_request',array('data'=> $emailVars));
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: '.$this->config['cnf_appname'].' < career@shasthoshurokkha.org >' . "\r\n";
                mail($recipient, 'Thank You For Your Application', $message, $headers);
            }
        }
    }
    
    if($response){
        return redirect()->back()->with('success', 'Successfully submitted your request. Please check your email for further procedure.');   
    }

}
	
	
	public function contact_data(Request $request){
	    
	    if(config('sximo.cnf_recaptcha') =='true') {
			$return = $this->reCaptcha($request->all());
			
			if($return){
				if($return['success'] !='true'){
				     return back()->with('message', 'Invalid reCpatcha');
					return response()->json(['status' => $return['success'], 'message' =>'Invalid reCpatcha']);	
				}
				
			}else{
			     return back()->with('message', 'Invalid reCpatcha');
			}
		}
	    
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        if ($this->validate($request, $rules)) {
            $data['first_name']    = $request->first_name;
            $data['last_name']    = $request->last_name;
            $data['email']   = $request->email;
            $data['phone']   =  $request->phone;
            $data['message'] = $request->message;
            $data['status'] = 1;
           DB::table('contact')->insert($data);
        }
        return back()->with('message', 'Successfully message sent.');
	}
	
	public function contact_email(Request $request){
        $request->validate([
            'name'    => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        $from  = 'vmslfinl@server33.web-hosting.com';
        $to = $request->email;
        $email = $request->email;
        $subject = 'Customer Support';
        $message = $request->message;
        $name = $request->name;
        $body = "From: $name\n E-Mail: $from\n Message:\n $message";
        mail ($to, $subject, $body, $from);   
        echo " <div class='row formSentMsg'>
        		<div class='col-md-12 mt-2'>
                        <p style='margin-top:10px; font-style:italic; color:green;'>Message send Successfully..!</p>
                </div>
                </div>
                <script type='text/javascript'>
                   $('.formSentMsg').delay(5000).fadeOut(300);
                </script>
            ";
        
	}
	
	public function volunteer_account(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'email' => 'required|email',
            'profession' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'degree' => 'required',
            'experience' => 'required',
            'training' => 'required',
            'work_day' => 'required'
        ]);
        
      $data = new Ourvolunteers();
	    $image = $request->file('image');
	    if ($image) {
        	$image_name = date("Ymd".time());
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name.'.'.$ext;
        	$upload_path = public_path('/theme/img/team/');
        	//$image->move($upload_path, $image_full_name);
        	$data->image = $image_full_name;
	    }
        $data->name         = $request->name;
        $data->profession    = $request->profession;
        $data->short_description = $request->short_description;
        $data->description  = $request->description;
        $data->hobby        = $request->hobby;
        $data->degree       = $request->degree;
        $data->experience   = $request->experience;
        $data->training     = $request->training;
        $data->work_day     = $request->work_day;
        $data->facebook     = $request->facebook;
        $data->twitter      = $request->twitter;
        $data->linkedin     = $request->linkedin;
        $data->googleplus   = $request->googleplus;
        
        //$data->save();  
        
        $usedata             = new Users();
        $usedata->username   = $request->name;
        $usedata->email      = $request->email;
        $usedata->password   = Hash::make($request->password);
        $usedata->group_id   = 3;
        $usedata->created_at = now();
        $token = $usedata->remember_token = Str::random(32);
        $usedata->save();
        
        //$usedata->notify(new arifPasswordResetNotification($token));
        
        return back()->with('message', 'Success..! You are joined.');
        
	}
    public function verefy($token){
        echo $token;
    }
    
    
    
    public function about(){
        $data['title'] = 'About Us';
		$data['about'] = aboutus::where('status', 1)->orderBy('id', 'DESC')->FIRST();
        $data['teachers'] = teacher::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $data['gallerys'] = gallery::where('status', 1)->orderBy('id', 'DESC')->get();
        $data['shortbanner'] = shortbanner::where('status', 1)->orderBy('id', 'DESC')->get();
        $data['program'] = program::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.about', $data);
    }
  
    public function teacher_s(){
        
        $data['title'] = 'Teacher';
        $data['teachers'] =  teacher::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.teacher', $data);
    }


    public function teacherDetails($id){
        $teachers = teacher::find($id);
        $data['title'] = $teachers->name;
        $data['teachers'] = $teachers;
		$data['teacherdetailss'] = teacher::where('status', 1)->orderBy('id', 'ASC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.teacherdetails', $data);
    }


    public function gallery_s(){
        $data['title'] = 'Review';
		$data['gallerys'] =  gallery::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.gallery', $data);
    }

    public function class(){
        $data['title'] = 'Classes';
        $data['class_list'] =  classes::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.class_list', $data);
    }
    
    public function studentList($id){
        $class = classes::find($id);
        $data['title'] = $class->class;
        $data['class'] = $class;
        $data['student_list'] = studentlist::where('status', 1)->where('class', $id)->get();
        $data['ones'] =  studentlist::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.student-list', $data);
    }

    public function studentDetails($id){
        $student = studentlist::find($id);
        $data['title'] = $student->name;
        $data['detail'] = $student;
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.student-detail', $data);
    }

    public function project_s(){
        $data['title'] = 'Project';
        $data['projects'] =  project::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.project', $data);
    }

    public function donet_s(){
        $data['title'] = 'Donet Now';
        // $data['donets'] =  donet::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.donetnow', $data);
    }

    public function admission_s(){
        $data['title'] = 'Admission';
		// $data['schooldetails'] = schooldetail::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.admission', $data);
    }

   
    public function schooldetail_s(){
        $data['title'] = 'School Detail';
		$data['schooldetails'] = schooldetail::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.schooldetail', $data);
    }

    public function goal_s(){
        $data['title'] = 'Goal';
		$data['goals'] = goal::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.goal', $data);
    }

    
    public function event_s(){
        $data['title'] = 'Event';
		$data['events'] = event::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.event', $data);
    }

    public function upevent_s(){
        $data['title'] = 'Up Event';
		$data['upevents'] = upevent::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.upevent', $data);
    }

    public function contact_us(){
        $data['title'] = 'Contact Us';
		$data['contacts'] = contactus::where('status', 1)->orderBy('id', 'DESC')->get();
        $data['city'] = contactus::where('status', 1)->distinct('city')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.contactus', $data);
    }

    public function managing_s(){
        $data['title'] = 'Mannaging Committee';
		$data['managings'] = managing::where('status', 1)->orderBy('id', 'ASC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.managing', $data);
    }

    public function advisory_s(){
        $data['title'] = 'Advisory Committee';
		$data['advisorys'] = advisory::where('status', 1)->orderBy('id', 'ASC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.advisory', $data);
    }

    public function result_s(){
        $data['title'] = 'Result';
		// $data['results'] = result::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.result', $data);
    }

    public function notice_s(){
        $data['title'] = 'Notice';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.notice', $data);
    }

    public function activiti_s(){
        $data['title'] = 'Activitis';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.activiti', $data);
    }

    public function sport_s(){
        $data['title'] = 'Sport';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.sport', $data);
    }

    public function art_s(){
        $data['title'] = 'Art';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.art', $data);
    }

    public function music_s(){
        $data['title'] = 'Music';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.music', $data);
    }

    public function founder_s(){
        $data['title'] = 'Founder';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.founder', $data);
    }

    public function curriculam_s(){
        $data['title'] = 'Curriculam';
		// $data['notices'] = notice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.curriculam', $data);
    }

    public function career_s(){
        $data['title'] = 'Career';
        // $data['careers'] =  career::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.career', $data);
    }

    public function adrequirement_s(){
        $data['title'] = 'Admission Requirement';
        $data['adrequirements'] =  adrequirement::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.adrequirement', $data);
    }

    public function login_s(){
        $data['title'] = 'Login';
        // $data['login'] =  login::where('status', 1)->orderBy('id', 'ASC')->get();
        $data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.login', $data);
    }




    public function store_admission_request(Request $request){

        $validated = $request->validate([
            'name' => 'required',
    
            ]);
   
        $admission  = new Admissionrequest();
        $admission->name = $request->name;

        $admission->student_image= $request->image;
        $admission->dob = $request->birth;
        $admission->gender = $request->gender;
        $admission->age = $request->age;
        $admission->email = $request->email;
        $admission->fathers_name = $request->fname;
        $admission->f_occupation = $request->foccu;
        $admission->mothers_name = $request->mname;
        $admission->m_occupation = $request->moccu;
        $admission->nid_no = $request->nidno;
        $admission->passport = $request->passport;
        $admission->birth_certificate_no = $request->birthno;
        $admission->weight = $request->weight;
        $admission->previous_education_certificate= $request->pcn;
        $admission->type_of_disability = $request->tod;
        $admission->spacial_skill = $request->sskill;
        $admission->session = $request->session;
        $admission->hight = $request->hight;
        $admission->postal_code = $request->pcode;
        $admission->blood_group = $request->blood;
        $admission->application_for_class = $request->class;
        $admission->village = $request->village;
        $admission->post= $request->post;
        $admission->upazila = $request->upazila;
        $admission->district = $request->district;
        $admission->praimary_contact_number = $request->pcn;
        $admission->secondary_contact_number = $request->scn;
       
       
        $admission->save();
        
        $result = 'success';

        return Redirect()->back()->with('message', 'Your Application Has been Submitted. Thank You!');
    }    

}?>