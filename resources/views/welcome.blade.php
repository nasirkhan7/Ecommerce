<x-layout>
    <x-nav />
    <x-slider />
    <div class="row m-auto">
        @foreach ($products as $item)
        <div class="col-lg-3">
            <div class="card p-3 my-3">
                <h2>{{$item->category}}</h2>
                <img width="100%" height="400px" style="object-fit: contain" src="{{asset('storage/' . $item->image)}}"
                    alt="">
                <h4>Name:{{$item->name}}</h4>
                <h4>Price:{{$item->price}}</h4>
                <a href="/single/{{$item->id}}" class="btn btn-dark w-100 my-2">
                View Details</a>

            </div>
        </div>
        @endforeach
    </div>
    {{$products->links("pagination::bootstrap-4")}}

</x-layout>
