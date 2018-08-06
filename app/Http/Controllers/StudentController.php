<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //validate for data 
        $this->validate($request, ['student_first_name' => 'required|max:25', 'student_last_name' => 'required|max:50', 'gender' => 'required', ]);
        $student = new Student();
        $student->student_first_name = $request->student_first_name;
        $student->student_last_name = $request->student_last_name;
        $student->award_year = $request->award_year;
        $student->award_code = $request->award_code;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->elementary_school_id = $request->elementary_school_id;
        $student->sixth_grade_teacher_id = $request->sixth_grade_teacher_id;
        // $student->student_first_name = $request->biographical_summary;
        $student->awardee_status = $request->awardee_status;
        if ($student->save()) {
            return redirect()->route('students.show');
        } else {
            return redirect()->route('students.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}