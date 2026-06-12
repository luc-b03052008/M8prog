@if(empty($shoes))
    <div class="card">No shoes available.</div>
@else
    <div class="grid">
        @foreach($shoes as $shoe)
            <div class="card">
                <div style="height:120px;background:#eee;border-radius:4px;margin-bottom:8px;display:flex;align-items:center;justify-content:center">Image</div>
                <div style="font-weight:600">{{ $shoe['name'] }}</div>
                <div style="color:#666">{{ $shoe['type'] }} — €{{ number_format($shoe['price'],2) }}</div>
            </div>
        @endforeach
    </div>
@endif
