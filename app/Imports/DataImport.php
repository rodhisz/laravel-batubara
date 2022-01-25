<?php

namespace App\Imports;

use App\Models\AmountTerbesar;
use App\Models\Data;
use App\Models\DataGi;
use App\Models\DataGr;
use App\Models\DataIto;
use App\Models\DataItoAll;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            Data::create([
                'project_site' => $row['project_site'],
                'fogc' => $row['fogc'],
                'gens' => $row['gens'],
                'mdle' => $row['mdle'],
                'sprt' => $row['sprt'],
                'tyre' => $row['tyre'],
                'grand_total' => $row['grand_total']
            ]);

            DataGr::create([
                'gr_project_site' => $row['gr_project_site'],
                'gr_fogc' => $row['gr_fogc'],
                'gr_gens' => $row['gr_gens'],
                'gr_mdle' => $row['gr_mdle'],
                'gr_sprt' => $row['gr_sprt'],
                'gr_tyre' => $row['gr_tyre'],
                'gr_grand_total' => $row['gr_grand_total'],
            ]);

            AmountTerbesar::create([
                'amount_terbesar_site' => $row['amount_terbesar_site'],
                'pertama' => $row['pertama'],
                'kedua' => $row['kedua'],
                'ketiga' => $row['ketiga'],
                'keempat' => $row['keempat'],
                'kelima' => $row['kelima'],
                'keenam' => $row['keenam'],
                'ketujuh' => $row['ketujuh'],
            ]);

            DataGi::create([
                'gi_project_site' => $row['gi_project_site'],
                'gi_fogc' => $row['gi_fogc'],
                'gi_gens' => $row['gi_gens'],
                'gi_mdle' => $row['gi_mdle'],
                'gi_sprt' => $row['gi_sprt'],
                'gi_tyre' => $row['gi_tyre'],
                'gi_grand_total' => $row['gi_grand_total'],
            ]);

            DataIto::create([
                'ito_site' => $row['ito_site'],
                'soh' => $row['soh'],
                'usage' => $row['usage'],
                'plan' => $row['plan'],
                'aktual' => $row['aktual'],
                'achievement' => $row['achievement'],
            ]);
        }
    }


    public function model(array $row)
    {
        return new DataItoAll([
            'ito_all_soh' => $row['ito_all_soh'],
            'ito_all_usage' => $row['ito_all_usage'],
            'ito_all_plan' => $row['ito_all_plan'],
            'ito_all_aktual' => $row['ito_all_aktual'],
            'ito_all_achievement' => $row['ito_all_achievement'],
        ]);
    }

}
