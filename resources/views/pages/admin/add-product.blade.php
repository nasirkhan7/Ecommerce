<x-layout>
    <div class="d-flex">
        <x-admin_sidebar />
        <x-flash/>
        <div class="form w-75 mx-auto">
            <form action="/insert-product" enctype="multipart/form-data" method="POST" class="w-50 mx-auto rounded-2 p-4 mt-4"
                style="border:1px solid">
                {{-- crosssiterequestforjery --}}
                @csrf
                <h1 class="display-3 fw-medium text-center">
                    Add New Product
                </h1>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name">
                {{-- bulidindirective --}}
                @error('name')
                <p class="text-danger fw-bolder">
                    {{$message}}
                </p>
                @enderror
                <label for="">Price</label>
                <input class="form-control" type="number" name="price" id="">
                @error('price')
                <p class="text-danger fw-bolder">
                    {{$message}}
                </p>
                @enderror
                <label for="">Description</label>
                <textarea class="form-control" cols="30" rows="5" type="text" name="desc" id=""></textarea>
                @error('desc')
                <p class="text-danger fw-bolder">
                    {{$message}}
                </p> @enderror
                <label for="">Category</label>
                <select name="category" class="form-control" id="">
                    <option value="Gaming">Gaming</option>
                    <option value="Makeup">Makeup</option>
                    <option value="Books">Books</option>
                    <option value="Clothing">Clothing</option>
                </select>
                @error('category')
                <p class="text-danger fw-bolder">
                    {{$message}}
                </p>
                @enderror
                <label for="">Images</label>
                <input class="form-control" type="file" name="image" id="">
                @error('image')
                <p class="text-danger fw-bolder">
                    {{$message}}
                </p>
                @enderror
                <button class="btn btn-success w-100 my-2" style="background: black ">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
