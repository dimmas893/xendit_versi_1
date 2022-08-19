<div>
<ul class="ull">
@foreach ($getPaymentChannels as $channel)
  <li style="<?php echo ($channel['is_enabled'] == false) ? 'display:none;' : '' ?> ">{{strtoupper($channel['name'])}} / {{$channel['currency']}} / {{$channel['channel_category']}}</li>
@endforeach
</ul>
</div>
{{-- <h2 class="text-primary font-medium text-lg mt-3">Choose your payment method by PaymentChannels </h2>
<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($getPaymentChannels as $channel)
                @if ($channel['is_enabled'] == true)
                  @if ($channel['channel_category'] == 'VIRTUAL_ACCOUNT')
               <form action="{{ route('store') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="bank" value="{{strtoupper($channel['name'])}}">
                      <input type="hidden" name="email" value="email">
                      <input type="hidden" name="price" value="10000">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Pay with  {{$channel['name']}}</p>
                          </div>
                      </button>
                  </form>
                  @endif
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div> --}}

<h2 class="text-primary font-medium text-lg mt-3">Choose your payment method by VirtualAccounts </h2>
<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($VirtualAccounts as $channel)
                @if ($channel['is_activated'] == true)
               <form action="{{ route('store') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="bank" value="{{$channel['code']}}">
                      <input type="hidden" name="name" value="{{$channel['name']}}">
                      <input type="hidden" name="email" value="email">
                      <input type="hidden" name="price" value="100000">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">{{$channel['code']}}</p>
                              <p class="mt-3 text-xs text-gray-600">Pay with  {{$channel['name']}}</p>
                          </div>
                      </button>
                  </form>
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div>









<h2 class="text-primary font-medium text-lg mt-3">Choose your payment method by getPaymentChannels </h2>
<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($getPaymentChannels as $channel)
                @if ($channel['is_enabled'] == true)
                  @if ($channel['channel_category'] == 'RETAIL_OUTLET')
               <form action="{{ route('store') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="method" value="{{$channel['name']}}">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Pay with  {{$channel['name']}}</p>
                          </div>
                      </button>
                  </form>
                  @endif
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div>


<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($getPaymentChannels as $channel)
                @if ($channel['is_enabled'] == true)
                  @if ($channel['channel_category'] == 'EWALLET')
               <form action="{{ route('store') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="method" value="{{$channel['name']}}">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Pay with  {{$channel['name']}}</p>
                          </div>
                      </button>
                  </form>
                  @endif
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div>

<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($getPaymentChannels as $channel)
                @if ($channel['is_enabled'] == true)
                  @if ($channel['channel_category'] == 'QRIS')
               <form action="{{ route('store') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="method" value="{{$channel['name']}}">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Pay with  {{$channel['name']}}</p>
                          </div>
                      </button>
                </form>
                  @endif
                @endif
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div>


               <form action="{{ route('invoice') }}" method="POST" class="cursor-pointer">
                      @csrf
                      <input type="hidden" name="method" value="">
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Pay with </p>
                          </div>
                      </button>
                </form>


<style>
.ull {
  list-style-type: none; /* Remove bullets */
  padding: 0; /* Remove padding */
  margin: 0; /* Remove margins */
}

.ull li {
  border: 1px solid #ddd; /* Add a thin border to each list item */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Add a grey background color */
  padding: 12px; /* Add some padding */
}
</style>