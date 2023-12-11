<?php

namespace App\Http\Controllers;

use App\PhoneBook;
use Illuminate\Http\Request;


class PhoneBookController extends Controller
{

    public function store(Request $request)
    {


      $phonebook=new PhoneBook;

      /* ************************** DATA VALIDATE ***********************/

      $this->validate($request,[
        'name'=>'required|max:100|min:5',
        'phone_number'=>'required|max:100|min:5',
      ]);


      /* ************************** DATA SEND TO DATABASE *************************** */
        $phonebook->name=$request->name;
        $phonebook->phone_number=$request->phone_number;
        $phonebook->save();
        return redirect()->back();

        /* *************************ALL DATA RETRIVE ***************************** */
        $data=PhoneBook::all();
        //dd($request->all());
        return view('PhoneBook')->with('lists',$data);
        //return redirect()->back();

}

        /* ************************** ID CACh WITH BOOLIAN TRUE ************************ */
public function updatework($id)
{
  $work=PhoneBook::find($id);
  $work->phone_number_work=1;
  $work->save();
  return redirect()->back();
}
      /* ************************** ID CACh WITH BOOLIAN FAULS ************************ */
public function updatenotwork($id)
{
  $work=PhoneBook::find($id);
  $work->phone_number_work=0;
  $work->save();
  return redirect()->back();
}
    /* *************************** ID CACh DELETE TARGET ID *************************** */
public function deletework($id)
{
  $delete=PhoneBook::find($id);
  $delete->delete();
  return redirect()->back();
}

   /* ***************************** UPDATE ROW VIEW NEW VINDOW *************************** */
public function update($id)
{
  $work=PhoneBook::find($id);

  return view('updatework')->with('update',$work);
}

 /* ********************************** REPLACE NEW UPDATE ****************************** */
public function updatedata(Request $request)

{
  $id=$request->id;
  $name=$request->name;
  $phone_number=$request->phone_number;

  $work=PhoneBook::find($id);
  $work->name=$name;
  $work->phone_number=$phone_number;
  $work->save();

  $data=PhoneBook::all();
  return view('PhoneBook')->with('lists',$data); // interface.....
}

}


//PhoneBook
//updatework
//return redirect()->back();
 //dd($request->all());
