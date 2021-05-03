<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class superhero extends Controller
{
    public function index(){
      $data=DB::table('superhero')->paginate(10);
      $details=DB::table('superhero')->first();
      $skills=DB::table('skills')->paginate(10);
      return view('index')->with('data',$data)->with('skills',$skills)->with('skills',$skills);
    }

    public function search(Request $request)
  	{
  		// menangkap data pencarian

      $search = $request->get('searchQuest');

      		// mengambil data dari table superhero sesuai pencarian data
  		$data = DB::table('superhero')
  		->where('nama','like',"%".$search."%")
      ->orwhere('jenisKelamin','like',"%".$search."%")
  		->get();

      		// mengirim data pegawai ke view index
  		return json_encode($data);

  	}

  public function searchSkill(Request $request)
  {
    // menangkap data pencarian

    $search = $request->searchSkill;

        // mengambil data dari table superhero sesuai pencarian data
    $skills = DB::table('skills')
    ->where('skill','like',"%".$search."%")
    ->paginate();

        // mengirim data pegawai ke view index
    return view('index',['skills' => $skills]);

  }


  public function getSuperhero($id = 0){

    if($id==0){
       $superhero = superhero::orderby('id','asc')->select('*')->get();
    }else{
       $superhero = superhero::select('*')->where('id', $id)->get();
    }
    // Fetch all records
    $data['superhero'] = $superhero;

    echo json_encode($data);
    exit;
 }

}
