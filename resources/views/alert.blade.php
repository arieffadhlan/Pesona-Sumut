@if (session()->has('success'))
     <div class="container">
          <div class="row">
               <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>{{ session()->get('success') }}!</strong>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
               </div>
          </div>
     </div>
@endif
@if (session()->has('error'))
     <div class="container">
          <div class="row">
               <div class="col-md-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         <strong> {{ session()->get('error') }}!</strong>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                         </button>
                    </div>
               </div>
          </div>
     </div>
@endif
@if (session()->has('success-home'))
     <div class="container d-flex justify-content-center" style="position: absolute">
          <div class="col-lg-10">
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('success-home') }}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
          </div>
     </div>
@endif
