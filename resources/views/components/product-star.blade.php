<div {{ $attributes->class(['rating-stars']) }}>
    @php($rate=$product->rate)
    @for($i=1;$i<=5;$i++)
        <i class="icon-star @if($i<=$rate) filled @endif"></i>
    @endfor
</div>
