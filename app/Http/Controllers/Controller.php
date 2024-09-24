<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\students;
use App\Models\parents;
use App\Models\enrollment;
use App\Models\studentrecords;
use App\Models\teachers;
use App\Models\requirments;
use App\Models\nutritionsandservices;
use App\Models\confirmation;
use App\Models\studentapproval;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //View functions Start 

    public function index()
    {
        return view('index');
    }

    public function form1()
    {
        return view('form1');
    }

    public function form2()
    {
        return view('form2');
    }

    public function enrollment()
    {
        return view('enrollment');
    }

    public function classes()
    {
        return view('classes');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function tables()
    {
        return view('tables');
    }

    public function redirect()
    {
        return view('redirect');
    }



    // View Functions End

    // ----- Form Functions Start ----- //


                public function store(Request $request)
                {
                    // Validate Student Data
                    $request->validate([
                        'First_Name' => 'required',
                        'Last_Name' => 'required',
                        'Middle_Initial' => 'nullable|max:1',
                        'Nickname' => 'nullable',
                        'Sex' => 'required',
                        'BirthOrder' => 'nullable',
                        'NoOfSiblings' => 'required|integer',
                        'DateOfBirth' => 'date',
                        'BirthPlace' => 'nullable',
                        'BirthRegistered' => 'nullable',
                        'Region' => 'nullable',
                        'Province' => 'nullable',
                        'City' => 'nullable',
                        'Barangay' => 'nullable',
                        'NoOfStreetAd' => 'nullable',
                        'Religion' => 'nullable',
                        'Ethnicity' => 'nullable',
                    ]);
                
                    // Create the student and retrieve the created instance
                    $student = students::create([
                        'First_Name' => $request->input('First_Name'),
                        'Last_Name' => $request->input('Last_Name'),
                        'Middle_Initial' => $request->input('Middle_Initial'),
                        'Nickname' => $request->input('Nickname'),
                        'Sex' => $request->input('Sex'),
                        'BirthOrder' => $request->input('BirthOrder'),
                        'NoOfSiblings' => $request->input('NoOfSiblings'),
                        'DateOfBirth' => $request->input('DateOfBirth'),
                        'BirthPlace' => $request->input('BirthPlace'),
                        'BirthRegistered' => $request->input('BirthRegistered'),
                        'Region' => $request->input('Region'),
                        'Province' => $request->input('Province'),
                        'City' => $request->input('City'),
                        'Barangay' => $request->input('Barangay'),
                        'NoOfStreetAd' => $request->input('NoOfStreetAd'),
                        'Religion' => $request->input('Religion'),
                        'Ethnicity' => $request->input('Ethnicity'),
                    ]);
                
                    // Check if student creation was successful
                    if ($student) {
                        // Validate Parent Data
                        $request->validate([
                            'Parent_First_Name' => 'required',
                            'Parent_Last_Name' => 'required',
                            'Parent_Middle_Initial' => 'nullable',
                            'Contact_Number' => 'nullable|numeric',
                            'Email' => 'nullable|email',
                        ]);
                
                        // Create the parent record with the foreign key from students
                        parents::create([
                            'Student_ID' => $student->id,  // Foreign key linking to students table
                            'First_Name' => $request->input('Parent_First_Name'),
                            'Last_Name' => $request->input('Parent_Last_Name'),
                            'Middle_Initial' => $request->input('Parent_Middle_Initial'),
                            'Contact_Number' => $request->input('Contact_Number'),
                            'Email' => $request->input('Email'),
                        ]);
                
                        // Validate Nutrition and Services Data
                        $request->validate([
                            'BreastFeeding' => 'nullable',
                            'SupplementalFeeding' => 'nullable',
                            'Disability' => 'nullable',
                            'DisabilityAssistance' => 'nullable',
                            'ListahanIdentified' => 'nullable',
                            'PantawidBeneficiary' => 'nullable',
                            'ECCDExperience' => 'nullable',
                        ]);
                
                        // Create the nutrition and services record with the foreign key from students
                        nutritionsandservices::create([
                            'Student_ID' => $student->id,  // Foreign key linking to students table
                            'BreastFeeding' => $request->input('BreastFeeding'),
                            'SupplementalFeeding' => $request->input('SupplementalFeeding'),
                            'Disability' => $request->input('Disability'),
                            'DisabilityAssistance' => $request->input('DisabilityAssistance'),
                            'ListahanIdentified' => $request->input('ListahanIdentified'),
                            'PantawidBeneficiary' => $request->input('PantawidBeneficiary'),
                            'ECCDExperience' => $request->input('ECCDExperience'),
                        ]);

                        requirments::create([
                            'Student_ID' => $student->id,  // Foreign key linking to students table
                        ]);

                        studentrecords::create([
                            'Student_ID' => $student->id,  // Foreign key linking to students table
                            'Enrollment_Date' => now(),    // Set Enrollment_Date to current date
                            'Report_Generated' => now(),   // Set Report_Generated to current date
                        ]);

                        enrollment::create([
                            'Student_ID' => $student->id,   // Foreign key linking to students table
                            'Daycare_Type' => 1,            // Default value set in the controller
                            'Status' => 'Pending',          // Default value set in the controller
                        ]);
                
                        return redirect()->route('redirect')->with('Success', 'Enrollment successfully submitted. Please wait for approval.');
                    } else {
                        return back()->with('Failed', 'Something went wrong.');
                    }
                }


// ----- Approval Function Start ------ //
// ----- Also includes the Return View for approval  ------ //

            public function approvalview()
            {
                $pendingApprovals = DB::table('students')
                ->join('studentrecords', 'students.id', '=', 'studentrecords.Student_ID')
                ->join('enrollment', 'students.id', '=', 'enrollment.Student_ID')
                ->select('students.id as Student_ID', 
                        DB::raw("CONCAT(students.First_Name, ' ', students.Last_Name) as Name"),
                        DB::raw("TIMESTAMPDIFF(YEAR, students.DateOfBirth, CURDATE()) as Age"),
                        'studentrecords.Enrollment_Date',
                        'enrollment.Status')
                ->where('students.Approved', 'no')
                ->get();

                // Pass the data to the view
                return view('approval', ['pendingApprovals' => $pendingApprovals]);
            }

// ----- Approval Function End ------ //

                    public function edit($Student_ID)
                    {
                        // Retrieve the student document data
                        $studentDocuments = DB::table('requirments')
                            ->where('Student_ID', $Student_ID)
                            ->first();

                        // Pass the data to the view
                        return view('edit', ['studentDocuments' => $studentDocuments, 'Student_ID' => $Student_ID]);
                    }
//---------------------------------------------------------//
                    public function updateDocuments(Request $request, $Student_ID)
{
                        // Validate the form inputs
                        $request->validate([
                            'PSABirthCertificate' => 'required',
                            'ValidID' => 'required',
                            'HealthCard' => 'required',
                            'Assessment' => 'required',
                            'SignedDocuments' => 'required',
                        ]);

                        // Update the documents status in the 'requirments' table
                        DB::table('requirments')
                            ->where('Student_ID', $Student_ID)
                            ->update([
                                'PSABirthCertificate' => $request->input('PSABirthCertificate'),
                                'ValidID' => $request->input('ValidID'),
                                'HealthCard' => $request->input('HealthCard'),
                                'Assessment' => $request->input('Assessment'),
                                'SignedDocuments' => $request->input('SignedDocuments'),
                            ]);

                        // Redirect back to the approval page with success message
                        return redirect()->route('approval')->with('success', 'Documents updated successfully.');
                    }



}


