<?php

namespace App\Imports;

use Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\TempMailAddress;

class ImportData implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!isset($row['email']) || empty($row['email'])) {
        \Log::warning('Skipped row with missing email:', $row);
        return null;
    }

    return new TempMailAddress([
        'email' => trim($row['email']),
    ]);
    }

}
