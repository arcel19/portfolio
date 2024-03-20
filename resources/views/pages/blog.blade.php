<x-layout>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Blogs</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add a blog</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">List of blogs </h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Name</th>
                            <th scope="col">description</th>
                            <th scope="col">category</th>
                            <th scope="col">photo</th>
                            <th scope="col">action</th>




                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $bl)
                            <tr>
                                <th scope="row">{{ $bl->id }}</th>
                                <td>{{ $bl->name }}</td>
                                <td>{{ $bl->description }}</td>
                                <td>{{ $bl->category }}</td>
                                <td> <img class="rounded-circle" src="{{ '/storage/' . $bl->photo }}" alt=""
                                        style="width: 40px; height: 40px;"> </td>
                                <td>
                                    <form action="{{ Route('blog.destroy', $bl->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary"><i
                                                class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingInput"
                                placeholder="name">
                            <label for="floatingInput">Name</label>
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="category" class="form-control" id="floatingPassword"
                                placeholder="category">
                            <label for="floatingPassword">category</label>
                            @error('category')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control" type="file" name="photo" id="formFile">
                            @error('photo')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Description</label>
                            @error('description')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-layout>
