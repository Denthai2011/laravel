@extends('layout')
@section('title', 'เทส')
@section('head_n', 'จัดหมวดหมู่ห้องสมุด')
@section('content')
    <form method="POST" action="/insert">
        @csrf
        
        <span class="text-danger">ควรมีชื่อหนังสือย่างน้อย 1 ภาษา</span>
        <div class="form-group">
            <label for="Bcre_name">
                <p>ชื่อ</p>
            </label>
            <input type="text" name="Bcre_name">
            @error('Bcre_name')
                <div><span>{{ $message }}</span></div>
            @enderror
            <label><p>นามสกุล</p></label>
            <input type="text" name="Bcre_lname">
        </div>
        @error('Bcre_lname')
            <div><span>{{ $message }}</span></div>
        @enderror

        <div class="form-group">
            <label for="B_th">
                <p>ชื่อหนังสือภาษาไทย</p>
            </label>
            <input type="text" name="B_th">
            @error('B_th')
                <div><span>{{ $message }}</span></div>
            @enderror
        </div>

        <div class="form-group">
            <label for="B_en">
                <p>ชื่อหนังสือภาษาอังกฤษ</p>
            </label>
            <input type="text" name="B_en">
        </div>
        @error('B_en')
            <div><span>{{ $message }}</span></div>
        @enderror




        <input type="submit" value="บันทึก" class="btn btn-primary my-3">

    </form>
@endsection
