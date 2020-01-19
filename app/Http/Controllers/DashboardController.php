<?php

namespace App\Http\Controllers;
use App\domain;
use App\Registration;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        If (Auth()->user()->user_status== 'admin'){
            $domain = domain::where('status','expired')->count();
            $totaluser = Registration::get()->count();
            $regstatus = Registration::where('status','uncompleted')->count();
            $activuser = Registration::where('status','active')->count();
    
            $orders = Registration::orderBy('created_at', 'asc')->get();
            
            return view('/nswipadmin/dashboard', compact('domain','totaluser','regstatus','activuser','orders'));
            
       }else{
        return redirect('/user_dashboard/index');
       }
       
        
        // ->with('domain',$domain)->with('totalUser', $totalUser)->with('regStatus',$registrationStatus);
    }

    public function getData(){
        
    }


}
