<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\studentdataEXCEL;
use App\Imports\StudentImport;


class StudentController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Student::where('ind_id_number','LIKE','%' .$request->search.'%')->paginate(3);  

        }else{
            $data = Student::paginate(3);  
        }
        
        return view('studentdata',compact('data'));
    }

    public function addstudent(){
        return view('addstudent');
    }

    public function insertdata(Request $request){
       //dd($request->all());
        Student::create($request->all());
        return redirect()->route('student')->with('add-success','Data successfully added! ');
    }

    public function showdata($id){
        $data = Student::find($id);
        //dd($data);
        return view('showdata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Student::find($id);
        $data->update($request->all());
        return redirect()->route('student')->with('update-success','Data successfully updated! ');
    }

    public function deletedata($id){
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('student')->with('delete-success','Data successfully deleted! ');
    }

    public function exportpdf(){
        $data = Student::all();

        view()->share('data',$data);
        $pdf = PDF::loadview('studentdataPDF');
        return $pdf->download('cempetencedata.pdf');
    }

    public function exportexcel(){
        return Excel::download(new studentdataEXCEL, 'Competence_Listname.xlsx');
    }

    public function importexcel(Request $request){
        $data = $request->file('file');
        $filename = $data ->getClientOriginalName();
        $data->move('StudentCompetence', $filename);

        Excel::import(new StudentImport, \public_path('/StudentCompetence/'.$filename));
         return \redirect()->back();
    }
}
