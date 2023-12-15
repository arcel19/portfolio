<x-layout>
    <!-- Page Header -->
    <div class="page-header">
       <div class="row align-items-center">
           <div class="col">
               <h3 class="page-title">experience</h3>
               <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                   <li class="breadcrumb-item active">experience</li>
               </ul>
           </div>
           <div class="col-auto float-right ml-auto">
               <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                       class="fa fa-plus"></i> Add a experience</a>
           </div>
       </div>
   </div>
   <!-- /Page Header -->

   <div class="col-12">
       <div class="bg-light rounded h-100 p-4">
           <h6 class="mb-4">List of experience </h6>
           <div class="table-responsive">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col"> Name</th>
                           <th scope="col">start date</th>
                           <th scope="col">end date</th>
                           <th scope="col">description</th>
                           <th scope="col">action</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach ($experiences as $exp )

                       <tr>
                           <th scope="row">{{ $exp->id }}</th>
                           <td>{{ $exp->name }}</td>
                           <td>{{ $exp->startDate }}</td>
                           <td>{{ $exp->enddate }}</td>
                           <td>{{ $exp->description }}</td>
                           <td> <td> <form action="{{ Route('experience.destroy', $exp->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-primary" ><i
                            class="fa fa-trash"></i> </button>
                        </form></td></td>

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
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">Services</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <form action="{{ route('experience.store') }}" method="POST">
        @method('POST')
        @csrf
       <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput"
                placeholder="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="startDate" class="form-control"
                placeholder="start date">
            <label for="floatingPassword">start date</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="enddate" class="form-control"
                placeholder="end date">
            <label for="floatingPassword">end date</label>
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea">Description</label>
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
