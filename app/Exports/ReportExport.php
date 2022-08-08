<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ReportExport implements FromView
{
    public function __construct($records, $header_state, $header)
    {
        $this->records = $records;
        $this->header_state = $header_state;
        $this->header = $header;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $records = $this->records;
        $header_state = $this->header_state;
        $header = $this->header;
        return view('backend.report-xlsx', compact('records','header_state', 'header'));
    }
}
