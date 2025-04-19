<?php

namespace App\Exports;

use App\Models\AppModelsCoreTicket;
use Maatwebsite\Excel\Concerns\FromCollection;

class TicketsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AppModelsCoreTicket::all();
    }
}
