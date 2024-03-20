<x-layout>
    <!-- Page Header -->
    <div class="page-header">
       <div class="row align-items-center">
           <div class="col">
               <h3 class="page-title">Site</h3>
               <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                   <li class="breadcrumb-item active">Site</li>
               </ul>
           </div>
           <div class="col-auto float-right ml-auto">
               <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                       class="fa fa-plus"></i> Add a Site</a>
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
                           <th scope="col">First Name</th>
                           <th scope="col">Last Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Country</th>
                           <th scope="col">ZIP</th>
                           <th scope="col">Status</th>
                       </tr>
                   </thead>
                   <tbody>
                    
                       <tr>
                           <th scope="row">1</th>
                           <td>John</td>
                           <td>Doe</td>
                           <td>jhon@email.com</td>
                           <td>USA</td>
                           <td>123</td>
                           <td>Member</td>
                           <td>
                                    <form action="{{ Route('site.destroy', $bl->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-primary"><i
                                                class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
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
         <h1 class="modal-title fs-5" id="exampleModalLabel">site</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>


       <div class="modal-body">

        <div class="mb-3">
            <label for="formFile" class="form-label">logo</label>
            <input class="form-control" type="file" name="logo" id="formFile">
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="service" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea">service Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="contact" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> contact Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="blog" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> Blog Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="projet" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> Projet Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="email" class="form-control" id="floatingInput"
                placeholder="name">
            <label for="floatingInput">email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="phone" class="form-control" id="floatingInput"
                placeholder="phone">
            <label for="floatingInput">phone</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="office" class="form-control" id="floatingInput"
                placeholder="name">
            <label for="floatingInput">office</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="website" class="form-control" id="floatingInput"
                placeholder="website">
            <label for="floatingInput">website</label>
        </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>

</x-layout>
