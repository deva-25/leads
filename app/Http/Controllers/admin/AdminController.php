<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use View;

class AdminController extends Controller
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	function AdminLogin(Request $req)
	{
		$UserName = $req->input('txtUserName');
		$Password = $req->input('txtPssword');
		
		$login = DB::table('tbl_admin')
                     ->select('id')
                     ->where('username', '=', $UserName)
					 ->where('password', '=', $Password)
                     ->count();
					 
					if($login > 0){
                        $req->session()->put('key',$login);
                        return view('admin.home');//I get value expected, this is ok.
                    }
					else
					{
						return redirect()->back()->with('status', '1')->withErrors(['Invalid Credentials!! Please try with a valid One!!', 'The Message']);
					}
		
		//return view('admin.home');
	}
	function admindoctor()
	{
		$data['data'] = DB::table('tbl_doctor_reg')->get();
				
		if(count($data) > 0)
		{
			return view('admin.doctor', $data);
		}
		else
		{
			return view('admin.doctor');
		}
	}
	function AdminDoctorApprove(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_doctor_reg')->where('doc_id', $Del_id)->update(['doc_status' => '1']);
		
		return redirect()->back()->withErrors(['The Doctor Was Approved!!', 'The Message']);
	}
	function AdminDoctorReject(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_doctor_reg')->where('doc_id', $Del_id)->update(['doc_status' => '0']);
		
		return redirect()->back()->withErrors(['The Doctor Was Rejected!!', 'The Message']);
	}
	public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
	function adminfarmer()
	{
		$data['data'] = DB::table('tbl_farmer_reg')->get();
				
		if(count($data) > 0)
		{
			return view('admin.farmer', $data);
		}
		else
		{
			return view('admin.farmer');
		}
	}
	function AdminFarmerApprove(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_farmer_reg')->where('id', $Del_id)->update(['status' => '1']);
		
		return redirect()->back()->withErrors(['The Farmer Was Approved!!', 'The Message']);
	}
	function AdminFarmerReject(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_farmer_reg')->where('id', $Del_id)->update(['status' => '0']);
		
		return redirect()->back()->withErrors(['The Farmer Was Rejected!!', 'The Message']);
	}
	function adminproduct()
	{
		$data['data'] = DB::table('tbl_product')->get();
				
		if(count($data) > 0)
		{
			return view('admin.product', $data);
		}
		else
		{
			return view('admin.product');
		}
	}
	function AdminProductApprove(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_product')->where('id', $Del_id)->update(['status' => '1']);
		
		return redirect()->back()->withErrors(['The Product Was Approved!!', 'The Message']);
	}
	function AdminProductReject(Request $req)
	{
		$Del_id = $req->input('hid_Del_id');
		
		DB::table('tbl_product')->where('id', $Del_id)->update(['status' => '0']);
		
		return redirect()->back()->withErrors(['The Product Was Rejected!!', 'The Message']);
	}
	function AdminChPsw(Request $req)
	{
		$oldPsw = $req->input('txtoldPsw');
		$NewPsw = $req->input('txtnewPsw');
		$ConfirmPsw = $req->input('txtconPsw');
		$AdminId = '1';
		
		if($NewPsw == $ConfirmPsw)
		{
		$login = DB::table('tbl_admin')
                     ->select('id')
					 ->where('password', '=', $oldPsw)
                     ->count();
					 
					if($login > 0){
                        DB::table('tbl_admin')->where('id', $AdminId)->update(['password' => $ConfirmPsw]);
		 
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
	function databank()
	{
		$data['data'] = DB::table('tbl_farmer_reg')->get();
				
		if(count($data) > 0)
		{
			return view('databank', $data);
		}
		else
		{
			return view('databank');
		}
	}
	function viewFarmerDatabank($farmer_id)
	{
		$data['data'] = DB::table('tbl_farmer_reg')
                      ->select('*')
					  ->where('id', '=', $farmer_id)
                      ->get();
				
		if(count($data) > 0)
		{
			return view('viewFarmerDatabank', $data);
		}
		else
		{
			return view('viewFarmerDatabank');
		}
	}
	function viewGallary($farmer_id)
	{
		$data['data'] = DB::table('tbl_gallary')
                      ->select('*')
					  ->where('userId', '=', $farmer_id)
                      ->get();
				
		if(count($data) > 0)
		{
			return view('viewFarmerGallary', $data);
		}
		else
		{
			return view('viewFarmerGallary');
		}
	}
	function viewUsRemedy(Request $req)
	{
		$data['data'] = DB::table('tbl_remedy')->get();
		
		if(count($data) > 0)
		{
			return view('viewremedy', $data);
		}
		else
		{
			return view('viewremedy');
		}
	}
	
}
