<x-layout>
    <!-- Page Header -->
    <div class="page-header">
       <div class="row align-items-center">
           <div class="col">
               <h3 class="page-title">education</h3>
               <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                   <li class="breadcrumb-item active">education</li>
               </ul>
           </div>
           <div class="col-auto float-right ml-auto">
               <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                       class="fa fa-plus"></i> Add a education</a>
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
                           <th scope="col"> Name</th>
                           <th scope="col">start date</th>
                           <th scope="col">end date</th>
                           <th scope="col">description</th>
                           <th scope="col">action</th>
                       </tr>
                   </thead>
                   <tbody>
                    @foreach ($eductions as $edu )

                       <tr>
                           <th scope="row">{{ $edu->id }}</th>
                           <td>{{ $edu->name }}</td>
                           <td>{{ $edu->startDate }}</td>
                           <td>{{ $edu->endDate }}</td>
                           <td>{{ $eduu->description }}</td>
                           <td> <a href="#" class="btn btn-outline-primary" ><i
                            class="fa fa-trash"></i> </a></td>
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
         <h1 class="modal-title fs-5" id="exampleModalLabel">education</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <form action="{{ route('education.store') }}" method="POST">
        @method('post')
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
            <input type="date" name="endDate" class="form-control"
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
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
    </form>
   </div>
 </div>

</x-layout>
