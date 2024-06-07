<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = "task";

    protected $fillable = ['name', 'deadline', 'status', 'description'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    // mendefinisikan data tugas
    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-05-29',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12.',
    //     ], [
    //         'id' => 2,
    //         'name' => 'Matematika',
    //         'deadline' => '2024-05-30',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan soal-soal matematika di buku PR halaman 20-25.',
    //     ], [
    //         'id' => 3,
    //         'name' => 'Fisika',
    //         'deadline' => '2024-05-31',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35.',
    //     ], [
    //         'id' => 4,
    //         'name' => 'Kimia',
    //         'deadline' => '2024-06-01',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit commodi mollitia adipisci assumenda magni quod, pariatur itaque impedit reprehenderit nam ratione, eligendi explicabo magnam incidunt nemo odit laboriosam? Dolores illo a molestiae illum quo corrupti nesciunt atque facilis aliquam maiores modi tempore repellendus voluptate eos harum esse reiciendis sapiente delectus corporis asperiores laudantium beatae magni, vel at. Voluptates facere excepturi quibusdam quam eius nesciunt assumenda similique. Tenetur, asperiores obcaecati. Placeat nobis dolores, minus cupiditate sunt nihil quis perspiciatis magnam, omnis deserunt delectus, maiores dignissimos aliquam possimus officiis esse! Ducimus, et.',
    //     ]
    // ];

    // method untuk mendapatkan semua data tugas
    // public static function getAll()
    // {
    //     return self::$tasks;
    // }
}
