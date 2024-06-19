<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function insert(Request $request)
    {
        $request->validate([
            
            'Bcre_name' => 'required',
            'Bcre_lname' => 'required',
            'B_th' => 'required_without:B_en', // B_th จำเป็นต้องมีหาก B_en ไม่มีค่า
            'B_en' => 'required_without:B_th'  // B_en จำเป็นต้องมีหาก B_th ไม่มีค่า
        ]);

        // สามารถทำการบันทึกข้อมูลหรือประมวลผลต่อไปได้ที่นี่
        
    }
}
