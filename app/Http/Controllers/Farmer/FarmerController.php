<?php

namespace App\Http\Controllers\Farmer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use View;

class FarmerController extends Controller
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	function FarmerLogin(Request $req)
	{
		
		$UserName = $req->input('txtUserName');
		$Password = $req->input('txtPssword');
		
		$login = DB::table('tbl_farmer_reg')
                     ->select('id')
                     ->where('Username', '=', $UserName)
					 ->where('Password', '=', $Password)
					 ->where('status', '=', 1)
                     ->count();
			$data = DB::table('tbl_farmer_reg')
                     ->select('*')
                     ->where('Username', '=', $UserName)
					 ->where('Password', '=', $Password)
					 ->where('status', '=', 1)
                     ->get();
					 
					if($login > 0 ){
                        $req->session()->put('key',$data);
                        return view('farmer.home');//I get value expected, this is ok.
                    }
					else
					{
						return redirect()->back()->with('status', '1')->withErrors(['Invalid Credentials Or Waiting for Approval!! Please try After Some times!!', 'The Message']);
					}
	}
	function FarmerReg(Request $req)
	{
		$Name = $req->input('txtName');
		$Address = $req->input('txtAddress');
		$Email = $req->input('txtEmail');
		$Contact = $req->input('txtContact');
		$Quali = $req->input('txtQuali');
		$Spce = $req->input('txtSpec');
		$Area = $req->input('txtExp');
		$About = $req->input('txtAbout');
		$Username = $req->input('txtUsername');
		$Password = $req->input('txtPassword');
		$Dob = $req->input('txtDob');
		$Sex = $req->input('farsex');
		
		
		$data = array('Name'=>$Name, 'Address'=>$Address, 'Email'=>$Email, 'Contact'=>$Contact,'Quali'=>$Quali,'Spce'=>$Spce,'Area'=>$Area,'About'=>$About,'dob'=>$Dob,'sex'=>$Sex,'Username'=>$Username,'Password'=>$Password);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('tbl_farmer_reg')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "farrmer/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('tbl_farmer_reg')
            ->where('id', $ids)
            ->update(['photo' => $file_name]);
				
				//	}
			}
		return redirect()->back()->withErrors(['Registration!! Completed Succesfully!! Waitng for admins approval!!!', 'The Message']);
	}
	function farmerComplaint(Request $req)
	{
		
		$data['doctor'] = DB::table('tbl_doctor_reg')->where('doc_status', '=', '1')->get();
		$data['complaint'] = DB::table('ttbl_desease')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.farmerComplaint', $data);
		}
		else
		{
			return view('farmer.farmerComplaint');
		}
	}
	
	function FarmerAddComplaint(Request $req)
	{
		$Desease = $req->input('txtDesease');
		$AffectedArea = $req->input('txtAffectedArea');
		$symtm = $req->input('txtsymtm');
		$Doctor = $req->input('SelDoctor');
		$Description = $req->input('txtDescription');
		$UserId = $req->input('UserId');
		
		$data = array('userid'=>$UserId, 'Desease'=>$Desease, 'AffectedArea'=>$AffectedArea, 'symtm'=>$symtm,'Doctor'=>$Doctor,'Description'=>$Description);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('ttbl_desease')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "Far_Deseases/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('ttbl_desease')
            ->where('id', $ids)
            ->update(['image' => $file_name,'thumb' => $file_name]);
				
				//	}
			} 
		return redirect()->back()->withErrors(['Addedd Succesfully!!!', 'The Message']);
	}
	function FarmerComplaintDelete(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('ttbl_desease')->where('id', '=', $Del_id)->delete();
		
		return redirect()->back()->withErrors(['The Complaint Deleted Successfully!!', 'The Message']);
	}
	function farmerGotFeedback(Request $req)
	{
		
		$data['doctor'] = DB::table('tbl_doctor_reg')->where('doc_status', '=', '1')->get();
		$data['complaint'] = DB::table('ttbl_desease')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.feedback', $data);
		}
		else
		{
			return view('farmer.feedback');
		}
	}
	function farmerRemedy(Request $req)
	{
		
		$data['doctor'] = DB::table('tbl_doctor_reg')->where('doc_status', '=', '1')->get();
		//$data['complaint'] = DB::table('ttbl_desease')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.remedy', $data);
		}
		else
		{
			return view('farmer.remedy');
		}
	}
	function FarmerRemedySearch(Request $req)
	{
		$DocId = $req->input('SelDoctor');
		$data['data'] = DB::table('tbl_remedy')->where('DoctorId', '=', $DocId)->get();
		$data['doctor'] = DB::table('tbl_doctor_reg')->where('doc_status', '=', '1')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.remedy', $data);
		}
		else
		{
			return view('farmer.remedy');
		}
	}
	function FartmerChPsw(Request $req)
	{
		$oldPsw = $req->input('txtoldPsw');
		$NewPsw = $req->input('txtnewPsw');
		$ConfirmPsw = $req->input('txtconPsw');
		$farmerId = $req->input('txtfarmerId');
		
		if($NewPsw == $ConfirmPsw)
		{
		$login = DB::table('tbl_farmer_reg')
                     ->select('id')
					 ->where('Password', '=', $oldPsw)
                     ->count();
					 
					if($login > 0){
                        DB::table('tbl_farmer_reg')->where('id', $farmerId)->update(['Password' => $ConfirmPsw]);
		 
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
	function FarmerAddProduct(Request $req)
	{
		$ProductName = $req->input('txtProductName');
		$ActRate = $req->input('txtActRate');
		$DisRate = $req->input('txtDisRate');
		$Warranty = $req->input('txtWarranty');
		$Description = $req->input('txtDescription');
		$UserId = $req->input('UserId');
		
		$data = array('UserId'=>$UserId, 'ProductName'=>$ProductName, 'ActRate'=>$ActRate, 'DisRate'=>$DisRate,'Warranty'=>$Warranty,'Description'=>$Description);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('tbl_product')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "products/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('tbl_product')
            ->where('id', $ids)
            ->update(['image' => $file_name]);
				
				//	}
			} 
		return redirect()->back()->withErrors(['Addedd Succesfully!!!', 'The Message']);
	}
	function farmerProduct(Request $req)
	{
		$data['data'] = DB::table('tbl_product')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.product', $data);
		}
		else
		{
			return view('farmer.product');
		}
	}
	function FarmerProductDelete(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_product')->where('id', '=', $Del_id)->delete();
		
		return redirect()->back()->withErrors(['The Product Deleted Successfully!!', 'The Message']);
	}
	function findProduct(Request $req)
	{
		$data['data'] = DB::table('tbl_product')->where('status', '=', '1')->get();
		
		if(count($data) > 0)
		{
			return view('index', $data);
		}
		else
		{
			return view('index');
		}
	}
	function farnerViewDoctor()
	{
		$data['data'] = DB::table('tbl_doctor_reg')->get();
				
		if(count($data) > 0)
		{
			return view('farmer.viewDoctor', $data);
		}
		else
		{
			return view('farmer.viewDoctor');
		}
	}
	function farmerGallary(Request $req)
	{
		
		$data['data'] = DB::table('tbl_gallary')->get();
		
		if(count($data) > 0)
		{
			return view('farmer.farmerGallary', $data);
		}
		else
		{
			return view('farmer.farmerGallary');
		}
	}
	function FarmerAddGallary(Request $req)
	{
		$Caption = $req->input('txtCaption');
		$Description = $req->input('txtDescription');
		$UserId = $req->input('UserId');
		
		$data = array('userId'=>$UserId, 'caption'=>$Caption, 'description'=>$Description);
		
		//Get Last insert id from t_ticket and save images with this id to images table
		
		$ids = DB::table('tbl_gallary')->insertGetId($data);
		
		$image = array();
			//foreach($_FILES['image']['name'] as $key=>$val){        
				$upload_dir = "gallary/";
				$file_name = time().$_FILES['image']['name'];
				$upload_image = $upload_dir.$file_name;
				
				if(move_uploaded_file($_FILES['image']['tmp_name'],$upload_image)){
					$images[] = $upload_image;
					// insert uploaded images details into MySQL database.
					/* $insert_sql = "INSERT INTO uploads(id, file_name, upload_time) 
						VALUES('', '".$file_name."', '".time()."')";
					mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn)); */
				
				
				
				//INSERT  UPLOADED IMAGES DETAILS TABLE
				
				 DB::table('tbl_gallary')
            ->where('id', $ids)
            ->update(['image' => $file_name]);
				
				//	}
			} 
		return redirect()->back()->withErrors(['Addedd Succesfully!!!', 'The Message']);
	}
	function FarmerGallaryDelete(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_gallary')->where('id', '=', $Del_id)->delete();
		
		return redirect()->back()->withErrors(['The Item Deleted Successfully!!', 'The Message']);
	}
	
}
