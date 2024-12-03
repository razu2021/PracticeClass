<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Rules\Uppercase;

class formController extends Controller
{
    //


    // basic form data insert 
    public function basic(Request $request){
        
        echo "name :" . $request->name;
        echo "<br>";
        echo "email :".$request->email;
        echo "<br>";
        echo "phone" .$request->phone;
        echo "<br>";
        
        print_r($request->skil) ;
        echo "<br>";
        echo "Gender: ". $request->gender;
        echo "<br>";
        echo "Country : ".$request->country;
        echo "<br>";
        echo "Age: " .$request->age;
        echo "<br>";
        echo "Acception : ".$request->condition;
        echo "<br>";

    }
// basic form end here 


public function from_validation(Request $request){
    $request->validate([
        'name' => ['required', new Uppercase],
        'email'=>'required',
        'phone'=>'required',
        'skil'=>'required',
        'gender'=>'required',
        'country'=>'required',
        'age'=>'required',
        'condition'=>'required',
    ],[
        'name.required'=>'Name is Required ',
        'name.Uppercase'=>'your name must be Uppercase '
    ]
    );

    $info = [
    'name' =>  $request->name ,
    'email' =>  $request->email ,
    'phone' =>  $request->phone ,
    'skil' =>  $request->skil ,
    'gender' =>  $request->gender ,
    'country' =>  $request->country ,
    'age' =>  $request->age ,
    'condition' =>  $request->condition ,
    
  
    ];

   return redirect()->back()->with('info',$info);

// function end here 
}











    public function insert(Request $request){

        
     
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
     
        
        //dd($info);
      
        /*=====================  Return redirect back with Massages  */
         if(!empty($info['name']) && !empty($info['email']) && !empty($info['phone'])){
            Session::flash('message','Form submitted successfully!');
            return redirect()->back()->with('info', $info);
         }else{
            Session::flash('error','Form submission failed!');
            return redirect()->back()->with('error',' Form submitted  Failed !');
        }

         

        /*==============  return redirect back with data  */
        //  if(!empty($info)){
        //     Session::flash('success','Form submitted successfully!');
        //     return redirect()->back()->with('info',$info);
        //  }else{
        //     Session::flash('error','Form submission failed!');
        //     return redirect()->back()->with('error',' Form submitted  Failed !');
        // }
         
      /*================  return redirect back only data with the session ========== */
      
      //  return redirect()->back()->with('info',$info);



        


    }


    

}
