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
                       </tr>
                       <tr>
                           <th scope="row">2</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>mark@email.com</td>
                           <td>UK</td>
                           <td>456</td>
                           <td>Member</td>
                       </tr>
                       <tr>
                           <th scope="row">3</th>
                           <td>Jacob</td>
                           <td>Thornton</td>
                           <td>jacob@email.com</td>
                           <td>AU</td>
                           <td>789</td>
                           <td>Member</td>
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
            <textarea class="form-control" name="service_description" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea">service Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="contact_description" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> contact Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="blog_description" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> Blog Description</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="projet_description" placeholder="Leave a comment here"
                id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea"> Projet Description</label>
        </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>

</x-layout>
