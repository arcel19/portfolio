<x-layout>
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Profile</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add a Profile</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">List of education </h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">adress</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">phone</th>
                            <th scope="col">photo1</th>
                            <th scope="col">photo2</th>
                            <th scope="col">facebook</th>
                            <th scope="col">github</th>
                            <th scope="col">twitter</th>
                            <th scope="col">linkedin</th>
                            <th scope="col">description</th>
                            <th scope="col">action</th>



                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            @foreach ($profile as $pro)
                                <td>{{ $pro->address }}</td>
                                <td>{{ $pro->zip_code }}</td>
                                <td>{{ $pro->email }}</td>
                                <td>{{ $pro->phone }}</td>
                                <td> <img class="rounded-circle" src="{{ '/storage/' . $pro->logo }}" alt=""
                                        style="width: 40px; height: 40px;"> </td>
                                <td> <img class="rounded-circle" src="{{ '/storage/' . $pro->photo }}" alt=""
                                        style="width: 40px; height: 40px;"> </td>
                                <td>{{ $pro->facebook }}</td>
                                <td>{{ $pro->github }}</td>
                                <td>{{ $pro->twitter }}</td>
                                <td>{{ $pro->linkedin }}</td>
                                <td>{{ $pro->description }}</td>
                                <td>
                                    <form action="{{ Route('profile.destroy', $pro->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary"><i
                                                class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            @endforeach

                        </tr>


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
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('profile.index') }}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="address" class="form-control" id="floatingInput"
                                placeholder="name">
                            <label for="floatingInput">address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="zip_code" class="form-control" id="floatingInput"
                                placeholder="zip_code">
                            <label for="floatingInput">zip_code</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="email">
                            <label for="floatingInput">email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="date_of_birth" class="form-control" placeholder="date of birth">
                            <label for="floatingPassword">date od birth</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" name="phone" class="form-control" placeholder="phone">
                            <label for="floatingPassword">phone</label>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo1</label>
                            <input class="form-control" type="file" name="photo">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo2</label>
                            <input class="form-control" type="file" name="logo">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="facebook" class="form-control" id="floatingInput"
                                placeholder="facebook">
                            <label for="floatingInput">facebook</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="twitter" class="form-control" id="floatingInput"
                                placeholder="twitter">
                            <label for="floatingInput">twitter</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="github" class="form-control" id="floatingInput"
                                placeholder="github">
                            <label for="floatingInput">github</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="linkedin" class="form-control" id="floatingInput"
                                placeholder="linkedin">
                            <label for="floatingInput">linkedin</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px;"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
