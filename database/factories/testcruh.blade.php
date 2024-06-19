@extends('layout')
@section('titel', 'เทส')
@section('head_n', 'จัดหมวดหมู่ห้องสมุด')
@section('content')
    <form method="POST" action="/bookinsert">
        <div class="form-group">
            <label for="B_th">
                <p>ชื่อหนังสือภาษาไทย</p>
            </label>
            <input type="text" name="B_th">
            <p>ชื่อหนังสือภาษาไทย</p>
        </div>

        <div class="form-group">
            <label for="B_en">
                <p>ชื่อหนังสือภาษาไทย</p>
            </label>
            <input type="text" name="B_en">
        </div>
        
        <div class="form-group">
            <label for="B_en">
                <p>ชื่อ-สกุล</p>
            </label>
            <input type="text" name="Bcre_name">
            <input type="text" name="Bcre_lname">
        </div>
        
        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        
    </form>
@endsection
