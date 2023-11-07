<x-layout>
    <x-nav />
    <x-slider />
    <div class="row">
        @foreach ($products as $item)
        <div class="col-lg-3">
            <div class="card p-3 my-3">
                <img width="100%" height="300px" style="object-fit: contain" src="{{asset('storage/' . $item->image)}}" alt="">
                <h2>Name:{{$item->name}}</h2>
                <h2>Price:{{$item->price}}</h2>

            </div>
        </div>
        @endforeach
        {{$products->links("pagination::bootstrap-4")}}
    </div>

</x-layout>
