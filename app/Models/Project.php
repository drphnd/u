<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'code',
        'course'
    ];

    private static  $projects = [
        ['id' => "1",
        'title' => "Calculator",
        'code' => "cal",
        'course' => "Alpro"
    ],
    ['id' => "2",
        'title' => "Accounting",
        'code' => "acc",
        'course' => "WebProg"
    ],
    ['id' => "3",
        'title' => "Student Report",
        'code' => "stu",
        'course' => "WebProg"
    ]
    ];

    public static function allData(){
        // return self::$projects;
        // return collect(self::$projects);
        return Project::all();
    }

    public static function dataWithCode($code){
        $allProjects = static::allData();
        return $allProjects->firstWhere('code', $code);
        // $allProjects = self::$projects;
        // foreach ($allProjects as $pro) {
        //     if($pro['code'] == $code){
        //         return $pro;
        //     }
        // }
    }

    // public static function find($id):array
    // {
    //     $allProjects = static::allData();
    //     $pro = Arr::first($allProjects, function ($pro) use ($id) {
    //         return $pro['id'] == $id; // mencari id dari array
    //         return $pro['id'] == $id;
    //     });

    //     if(!$pro){
    //         abort(404);
    // }else{
    //     return $id;
    // }
// }

public function client(): BelongsTo{
    return $this->belongsTo(Client::class);
}

}
