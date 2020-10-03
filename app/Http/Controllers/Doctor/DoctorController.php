<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use View;

class DoctorController extends Controller
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	function DoctorLogin(Request $req)
	{
		$UserName = $req->input('txtUserName');
		$Password = $req->input('txtPssword');
		
		$login = DB::table('tbl_doctor_reg')
                     ->select('id')
                     ->where('doc_username', '=', $UserName)
					 ->where('doc_password', '=', $Password)
					 ->where('doc_status', '=', 1)
                     ->count();
			$data = DB::table('tbl_doctor_reg')
                     ->select('*')
                     ->where('doc_username', '=', $UserName)
					 ->where('doc_password', '=', $Password)
					 ->where('doc_status', '=', 1)
                     ->get();
					 
					if($login > 0 ){
                        $req->session()->put('key',$data);
                        return view('doctor.home');//I get value expected, this is ok.
                    }
					else
					{
						return redirect()->back()->with('status', '1')->withErrors(['Invalid Credentials Or Waiting for Approval!! Please try After Some times!!', 'The Message']);
					}
	}
	function DoctorReg(Request $req)
	{
		$Name = $req->input('txtName');
		$Address = $req->input('txtAddress');
		$Email = $req->input('txtEmail');
		$Contact = $req->input('txtContact');
		$RegNo = $req->input('txtRegNo');
		$RegYr = $req->input('txtRegYear');
		$Quali = $req->input('txtQuali');
		$Spce = $req->input('txtSpec');
		$Exp = $req->input('txtExp');
		$About = $req->input('txtAbout');
		$Username = $req->input('txtUsername');
		$Password = $req->input('txtPassword');
		
		
		$data = array('doc_name'=>$Name, 'doc_address'=>$Address, 'doc_email'=>$Email, 'doc_contact'=>$Contact,'doc_regNo'=>$RegNo,'doc_regyear'=>$RegYr,'doc_quali'=>$Quali,'doc_spec'=>$Spce,'doc_exp'=>$Exp,'doc_about'=>$About,'doc_username'=>$Username,'doc_password'=>$Password);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('tbl_doctor_reg')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "doctorImg/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('tbl_doctor_reg')
            ->where('doc_id', $ids)
            ->update(['doc_image' => $file_name]);
				
				//	}
			}
		return redirect()->back()->withErrors(['Registration!! Completed Succesfully!! Waitng for admins approval!!!', 'The Message']);
	}
	function doctorAnalysis(Request $req)
	{
		$data['data'] = DB::table('ttbl_desease')->get();
		
		if(count($data) > 0)
		{
			return view('doctor.analysis', $data);
		}
		else
		{
			return view('doctor.analysis');
		}
	}
	function DoctorFeedback(Request $req)
	{
		$DeseaseId = $req->input('DeseaseId');
		$DoctorFeedback = $req->input('txtDoctorFeedback');
		
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
			DB::table('ttbl_desease')
            ->where('id', $DeseaseId)
            ->update(['doctorFeedback' => $DoctorFeedback,'status' => '1']);
		return redirect()->back()->withErrors(['Feedback Addedd Succesfully!!!', 'The Message']);
	}
	function DoctorAddRemedy(Request $req)
	{
		$Issue = $req->input('txtIssue');
		$Solution = $req->input('txtSolution');
		$DoctorDescription = $req->input('txtDoctorDescription');
		$DoctorId = $req->input('DoctorId');
		$DoctorName = $req->input('DoctorName');
		
		$data = array('DoctorId'=>$DoctorId, 'Issue'=>$Issue, 'Solution'=>$Solution, 'DoctorDescription'=>$DoctorDescription, 'docName'=>$DoctorName);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('tbl_remedy')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "doc_remedy/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('tbl_remedy')
            ->where('id', $ids)
            ->update(['image' => $file_name]);
				
				//	}
			} 
		return redirect()->back()->withErrors(['Remedy Addedd Succesfully!!!', 'The Message']);
	}
	function doctorRemedy(Request $req)
	{
		$data['data'] = DB::table('tbl_remedy')->get();
		
		if(count($data) > 0)
		{
			return view('doctor.remedy', $data);
		}
		else
		{
			return view('doctor.remedy');
		}
	}
	function DoctorRemedyDelete(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_remedy')->where('id', '=', $Del_id)->delete();
		
		return redirect()->back()->withErrors(['The Remedy Deleted Successfully!!', 'The Message']);
	}
	function DoctorChPsw(Request $req)
	{
		$oldPsw = $req->input('txtoldPsw');
		$NewPsw = $req->input('txtnewPsw');
		$ConfirmPsw = $req->input('txtconPsw');
		$doictoprId = $req->input('txtdoictoprId');
		
		if($NewPsw == $ConfirmPsw)
		{
		$login = DB::table('tbl_doctor_reg')
                     ->select('doc_id')
					 ->where('doc_password', '=', $oldPsw)
                     ->count();
					 
					if($login > 0){
                        DB::table('tbl_doctor_reg')->where('doc_id', $doictoprId)->update(['doc_password' => $ConfirmPsw]);
		 
		 				return redirect()->back()->withErrors(['Password Updated Successfully!!', 'The Message']);	
                    }
					else
					{
						return redirect()->back()->with('status', '1')->withErrors(['Invalid Credentials!! Please try with a valid One!!', 'The Message']);
					}
		}
		else
			{
				return redirect()->back()->with('status', '1')->withErrors(['Invalid Credentials!! Please try with a valid One!!', 'The Message']);
			}
		//return view('admin.home');
	}
}
