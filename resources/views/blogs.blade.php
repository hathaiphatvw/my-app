@extends('layout')

@section('title', 'บทความ')

@section('content')
    <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">บทความทั้งหมด 📝</h2>
    <p style="margin-bottom: 2.5rem; color: var(--text-muted);">อ่านข่าวสาร สาระความรู้ และบันทึกประจำวันต่าง ๆ ได้ที่นี่ค่ะ</p>

    <div class="grid-2">
        @foreach ($blogs as $item)
            <div class="card" style="padding: 1.8rem; display: flex; flex-direction: column; justify-content: space-between; border-color: var(--card-border); background-color: #fff; box-shadow: var(--shadow-sm);">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.8rem; background: #fff0f2; color: #ff5e7e; padding: 0.35rem 0.9rem; border-radius: 50px; font-weight: 600;">บทความใหม่</span>
                        
                        @if ($item['status'] == true) 
                            <span style="font-size: 0.75rem; background: #eefdf5; color: #198754; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight: 600; border: 1px solid #d1f2e0;">เผยแพร่แล้ว</span>
                        @else
                            <span style="font-size: 0.75rem; background: #fff5f5; color: #dc3545; padding: 0.25rem 0.75rem; border-radius: 50px; font-weight: 600; border: 1px solid #ffd8d8;">ฉบับร่าง</span>
                        @endif
                    </div>
                    
                    <h3 style="font-size: 1.3rem; color: var(--text-main); margin-bottom: 0.8rem; line-height: 1.4; border-bottom: none;">{{ $item['title'] }}</h3>
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 1.5rem; line-height: 1.7;">{{ $item['content'] }}</p>
                </div>
                
                <div style="border-top: 1.5px dashed var(--card-border); padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-size: 0.85rem; color: var(--text-muted);">เขียนโดย Hathaiphat</span>
                    <a href="#" style="color: var(--primary-hover); text-decoration: none; font-size: 0.95rem; font-weight: 600; transition: var(--transition-bouncy);">อ่านเพิ่มเติม &rarr;</a>
                </div>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 3rem; text-align: center;">
        <a href="/" class="btn btn-secondary">ย้อนกลับหน้าแรก</a>
    </div>
@endsection

