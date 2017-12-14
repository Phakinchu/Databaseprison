<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Login;
  
	class LoginController extends Controller
	{
        public function setlogin()
		{		
    
			return view('posts/loginindex',['title' => 'login']);	
        }

        

        public function loginresult(Request $request)
		{	
            session_start();
            $id = $request->input('id');
            $pwd = $request->input('pwd');
                if(Login::where('name','=',$id)->value('pass')==$pwd){
                   echo "success" ;
                   $status = Login::where('name','=',$id)->first() ;
                   $_SESSION["ses_userid"] = session_id();            //สร้าง session สำหรับเก็บค่า ID
                   $_SESSION["ses_username"] = $id;      //สร้าง session สำหรับเก็บค่า Username
                   $_SESSION["ses_status"] = $status;
                   echo"<form action=\"/admin\">
                   <input type=\"submit\" value=\"Go To Homepage Admin\">
                   </form>";
                }
                else {
                    echo "Fail";
                }
            }
            
        }
    
    // }
?>