<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Exports\AttendanceExport;
use App\Exports\AttendanceExportView;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class AttendanceController extends Controller
{
    /**
     * Construct
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'is_admin']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Attendance::with('user');

            return DataTables::eloquent($data)
                ->addColumn('action', function ($data) {
                    return view('layouts._action', [
                        'model' => '',
                        'edit_url' => '',
                        'show_url' => route('attendance.show', $data->id),
                        'delete_url' => '',
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }

        // $users = User::paginate(5);
        return view('pages.attendance.index');
    }

    // public function index()
    // {
    //     $data = Attendance::all();
    //     // return $data;
    //     // $attendance = Attendance::with('user');
    //     return view('pages.attendance.index', compact('data'));
    // }

    public function show($id)
    {
        $attendance = Attendance::with(['user', 'detail'])->findOrFail($id);
        return view('pages.attendance.show', compact('attendance'));
    }

    public function attendanceExport()
    {
        return Excel::download(new AttendanceExport, 'attendance-report.xlsx');
    }

    public function attendanceExportView()
    {
        return Excel::download(new AttendanceExportView, 'attendance-report.xlsx');
    }
}