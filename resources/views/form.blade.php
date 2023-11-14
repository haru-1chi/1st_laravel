@extends('layout')
@section('title', 'เขียนบทความ')
@section('content')
    <h2 class="text text-center py-2">
        แบบฟอร์มเขียนบทความ</h2>
    <form>
        <div>
            <label for="title">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div>
            <label for="content">เนื้อหาบทความ</label>
            <textarea name="content" cols="=30" rows="5" class="form-control"></textarea>
        </div>
    </form>
@endsection
