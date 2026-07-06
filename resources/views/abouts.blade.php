@extends('layout')

@section('title', 'เกี่ยวกับเรา')

@section('content')
    <h2 style="font-size: 2rem; margin-bottom: 2rem;">เกี่ยวกับเรา ℹ️</h2>
    
    <div style="margin-bottom: 2.5rem;">
        <div class="info-group">
            <span class="info-label">ผู้พัฒนาระบบ</span>
            <span class="info-value" style="color: var(--primary-hover);">{{ $name }}</span>
        </div>
        <div class="info-group">
            <span class="info-label">วันที่ก่อตั้ง</span>
            <span class="info-value">{{ $date }}</span>
        </div>
    </div>

    <div style="background: var(--bg-light); padding: 1.5rem; border-radius: 16px; border: 1px dashed var(--card-border); margin-bottom: 2rem;">
        <p style="margin: 0; line-height: 1.8; font-size: 1rem;">
            ยินดีต้อนรับเข้าสู่เว็บไซต์ส่วนตัวของฉันค่ะ เว็บไซต์นี้พัฒนาขึ้นโดยใช้ Laravel Framework 
            และออกแบบด้วยสไตล์มินิมอลพาสเทลเพื่อมอบความรู้สึกอบอุ่น สดใส และเป็นมิตรแก่ผู้เยี่ยมชมทุกคน 
            หากต้องการสอบถามข้อมูลเพิ่มเติมสามารถเข้าชมประวัตินักศึกษาได้เลยค่ะ!
        </p>
    </div>

    <div style="display: flex; gap: 1rem;">
        <a href="/" class="btn btn-secondary">ย้อนกลับหน้าแรก</a>
        <a href="{{ route('blogs') }}" class="btn btn-primary">ดูบทความของฉัน</a>
    </div>
@endsection

