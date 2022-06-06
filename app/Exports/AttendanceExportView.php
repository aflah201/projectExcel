<?php

namespace App\Exports;

use App\Attendance;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AttendanceExportView implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('pages.attendance.index', [
            'index' => Attendance::all(),
        ]);
    }
}