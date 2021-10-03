<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->truncate();
        $array = ['Trung đoàn','Đại đội','Trung đội','Tiểu đội','Tiểu đoàn','Sư đội','Phân đội','Tổ đội'];
        for ($i = 1 ; $i <= 579; $i++){
            $type = $array[random_int(0,7)];
            Group::create([
                'name'=>$type.' '.Ward::find($i)->name,
                'ward_id'=>$i,
                'type'=>$type
            ]);
        }
    }
}
