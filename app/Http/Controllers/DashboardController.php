<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Classe;
use App\Models\Enrollment;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::User()->is_role ==  2) {
            // Super Admin
            $data['meta_title'] = 'Super Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            $data['totalUsers'] = User::where('is_role', '0')->count();
            $data['totalStudents'] = Student::count();
            $data['totalTeachers'] = Teacher::count();
            $data['totalSubjects'] = Subject::count();
            $data['totalClasses'] = Classe::count();
            $data['totalEnrollments'] = Enrollment::count();
            $data['totalPayments'] = Payment::count();
            $data['totalAttendances'] = Attendance::count();
            return view('superadmin.dashboard', $data);
        } elseif (Auth::User()->is_role ==  1) {
            // Admin
            $data['meta_title'] = 'Admin Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('admin.dashboard', $data);
        } elseif (Auth::User()->is_role ==  0) {
            // User
            $data['meta_title'] = 'User Dashboard Page';
            $data['getRecord'] = User::find(Auth::User()->id);
            return view('user.dashboard', $data);
        }
    }
}
