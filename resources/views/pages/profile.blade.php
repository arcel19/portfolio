<x-layout>
    <!-- Page Header -->
    <div class="page-header">
       <div class="row align-items-center">
           <div class="col">
               <h3 class="page-title">Profile</h3>
               <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                   <li class="breadcrumb-item active">Profile</li>
               </ul>
           </div>
           <div class="col-auto float-right ml-auto">
               <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                       class="fa fa-plus"></i> Add a Profile</a>
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
         <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" name="address" class="form-control" id="floatingInput"
                placeholder="name">
            <label for="floatingInput">address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput"
                placeholder="email">
            <label for="floatingInput">email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" name="date_of_birth" class="form-control"
                placeholder="date of birth">
            <label for="floatingPassword">date od birth</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="phone" class="form-control"
                placeholder="phone">
            <label for="floatingPassword">phone</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Photo1</label>
            <input class="form-control" type="file" name="photo1" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Photo2</label>
            <input class="form-control" type="file" name="photo2" id="formFile">
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
   </div>
 </div>

</x-layout>
