<x-layout>
    <!-- Page Header -->
    <div class="page-header">
       <div class="row align-items-center">
           <div class="col">
               <h3 class="page-title">awards</h3>
               <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                   <li class="breadcrumb-item active">awards</li>
               </ul>
           </div>
           <div class="col-auto float-right ml-auto">
               <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                       class="fa fa-plus"></i> Add an awards</a>
           </div>
       </div>
   </div>
   <!-- /Page Header -->

   <div class="col-12">
       <div class="bg-light rounded h-100 p-4">
           <h6 class="mb-4">List of awards </h6>
           <div class="table-responsive">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">clients</th>
                           <th scope="col">design</th>
                           <th scope="col">jobs</th>
                           <th scope="col">win</th>

                           <th scope="col">action</th>
                       </tr>
                   </thead>
                   <tbody>
                    @foreach ($awards as $aw )

                       <tr>
                           <th scope="row">{{ $aw->id }}</th>
                           <td>{{ $aw->client }}</td>
                           <td>{{ $aw->design }}</td>
                           <td>{{ $aw->jobs }}</td>
                           <td>{{ $aw->win }}</td>
                           <td> <form action="{{ Route('award.destroy', $aw->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-primary" ><i
                            class="fa fa-trash"></i> </button>
                        </form></td>

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
         <h1 class="modal-title fs-5" id="exampleModalLabel">Awards</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <form action="{{ route('award.store') }}" method="POST">
        @method('POST')
        @csrf
       <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="number" name="client" class="form-control" id="floatingInput"
                placeholder="#">
            <label for="floatingInput">client</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="design" class="form-control" id="floatingInput"
                placeholder="#">
            <label for="floatingInput">design</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="win" class="form-control" id="floatingInput"
                placeholder="#">
            <label for="floatingInput">Win</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="jobs" class="form-control" id="floatingInput"
                placeholder="#">
            <label for="floatingInput">jobs</label>
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
