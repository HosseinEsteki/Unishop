<div class="text-right">
    @foreach($contacts as $contact)
        <div class="row">
            <div class="col-md-7">
                <div class="display-3 text-muted opacity-75 mb-30">{{$contact->title}}</div>
            </div>
            <div class="col-md-5">
                <ul class="list-icon">
                    <li><i class="icon-mail"></i>
                        <a class="navi-link" href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                    </li>
                    <li class="dir-ltr"><i class="icon-bell"></i><a class="navi-link"
                                                                    href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                    </li>
                    <li><i class="icon-clock"></i>1 - 2 روز کاری</li>
                </ul>
            </div>
        </div>
        @if(!$loop->last)
            <hr class="margin-top-2x margin-bottom-2x">
        @endif
    @endforeach
    <h3 class="margin-top-3x text-center mb-30" style="font-family:'b-yekan'">مشخصات و ادرس فروشگاههای ما</h3>
    <div class="row">
        @foreach($addresses as $address)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30">
                    <div class="google-map" data-height="250" data-address="514 S. Magnolia St. Orlando, FL 32806, USA"
                         data-zoom="15" data-disable-controls="true" data-scrollwheel="false"
                         data-marker="img/map-marker.png" data-marker-title="We are here!"
                         data-styles="[{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#ff0000&quot;}]}]"></div>
                    <div class="card-body">
                        <ul class="list-icon">
                            <li><i class="icon-map"></i>{{$address->address}}
                            </li>
                            <li class="dir-ltr"><i class="icon-bell"></i><a class="navi-link"
                                                                            href="tel:{{$address->phone}}"> {{$address->phone}}</a>
                            </li>
                            <li><i class="icon-mail"></i><a class="navi-link"
                                                            href="mailto:{{$address->email}}">{{$address->email}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
