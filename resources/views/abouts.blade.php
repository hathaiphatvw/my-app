@extends('layout')

@section('title','เกี่ยวกับเรา')

@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <P>ผู้พัฒนาระบบ : {{$name}}</P>
    <P>วันที่ก่อตั้ง : {{$date}}</P>
    <hr>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem eveniet, quis odit architecto illum
        dicta
        earum totam aliquam id, corrupti consectetur delectus corporis sapiente minus. Amet optio inventore ipsa ut!
    </p>
    <a href="/">หน้าแรก</a>
    <a href="/blogs">บทความ</a>
@endsection

