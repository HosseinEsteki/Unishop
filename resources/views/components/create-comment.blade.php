@auth
    <h5 {{ $attributes->class(['mb-30 padding-top-1x text-right']) }}>افزودن دیدگاه جدید</h5>
    <form class="row" method="post" action="{{route('comments.store')}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="col-sm-6">
            <div class="form-group text-right">
                <label for="review_subject">عنوان</label>
                <input class="form-control form-control-rounded" type="text" id="review_subject" name="title" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group text-right">
                <label for="review_rating">امتیاز</label>
                <select class="form-control form-control-rounded" id="review_rating" name="rate">
                    <option>5 ستاره</option>
                    <option>4 ستاره</option>
                    <option>3 ستاره</option>
                    <option>2 ستاره</option>
                    <option>1 ستاره</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group text-right">
                <label for="review_text">متن دیدگاه </label>
                <textarea class="form-control form-control-rounded" id="review_text" rows="8"
                          required></textarea>
            </div>
        </div>
        <div class="col-12 text-right">
            <button class="btn btn-outline-primary" type="submit">ارسال دیدگاه</button>
        </div>
    </form>
@else
    <div class="row">
        <a class="btn btn-outline-primary text-center col-2" href="{{route('login')}}">ثبت دیدگاه</a>
    </div>
@endauth

