@props([
    /** @var \App\Models\Product */
    'product'
])

@auth
    @php($wishlist=auth()->user()->wishLists->where('product_id',$product->id)->first())
    @if($wishlist!=null)
        <form action="{{ route('dashboard.wishlist.destroy',$wishlist->id) }}" method="post" style="display: contents">
            @csrf
            @method('DELETE')
            <button class='btn btn-outline-secondary btn-sm btn-wishlist active' data-toggle="tooltip"
                    title="علاقه مندی" type="submit">
                <i class="icon-heart"></i>
            </button>
        </form>
    @else
        <form action="{{ route('dashboard.wishlist.store') }}" method="post" style="display: contents">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                    title="علاقه مندی" type="submit">
                <i class="icon-heart "></i>
            </button>
        </form>
    @endif
@else
    <a href="{{ route('dashboard.wishlist.store') }}" class="btn btn-outline-secondary btn-sm btn-wishlist"
       data-toggle="tooltip"
       title="علاقه مندی"><i class="icon-heart "></i></a>
@endauth
