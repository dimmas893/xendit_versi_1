<h2 class="text-primary font-medium text-lg mt-3">Choose your payment method by VirtualAccounts </h2>
<div class="grid grid-cols-5 gap-3 mt-6">
    <div class="col-span-4">
        <div class="grid grid-cols-4 gap-3">
            @foreach ($bayar as $channel)
                      @csrf
                      <button type="submit" class="bg-white p-5 h-32 w-36 rounded-md shadow-soft flex items-center">
                          <div>
                              <img src="" class="w-full h-10 object-contain" alt="">
                              <p class="mt-3 text-xs text-gray-600">Atas Nama = {{$channel->email}}</p>
                              <p class="mt-3 text-xs text-gray-600">Pembayaran = {{$channel->bank_code}} {{$channel->payment_channel}}</p>
                              <p class="mt-3 text-xs text-gray-600">No Pembayaran = {{$channel->account_number}}</p>
                              <p class="mt-3 text-xs text-gray-600">Total Bayar= {{$channel->price}}</p>
                          </div>
                      </button>
            @endforeach
        </div>
    </div>
    <div class="col-span-1">
        <img class="object-contain rounded-md" src="" alt="">
        <p class="mt-3 text-primary text-lg"></p>
        <p class="text-sm font-bold text-primary mt-1"></p>
    </div>
</div>