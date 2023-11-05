<x-layout>
    <div class="d-flex">
        <x-admin_sidebar />
        <div class="form w-75 mx-auto">
            <form action="" class="w-50 mx-auto rounded-2 p-4 mt-4" style="border:1px solid">
                <h1 class="display-3 fw-medium text-center">
                    Add New Product
                </h1>
                <label for="">Name</label>
                <input class="form-control" type="text" name="name">
                <label for="">Price</label>
                <input class="form-control" type="number" name="price" id="">
                <label for="">Description</label>
                <textarea class="form-control" cols="30" rows="5" type="text" name="desc" id=""></textarea>
                <label for="">Category</label>
                <select name="category" class="form-control" id="">
                    <option value="">Gaming</option>
                    <option value="">Makeup</option>
                    <option value="">Books</option>
                    <option value="">Clothing</option>
                </select>
                <label for="">Images</label>
                <input class="form-control" type="file" name="image" id="">
                <button class="btn btn-success w-100 my-2" style="background: black ">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
