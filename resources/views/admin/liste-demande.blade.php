<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: block;
            width: 200px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">   
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            

            
        <!-- partial -->
            <div class="container" align="center"
               style="padding-top: 100px;">


               @if (session()->has('message'))

               <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert">
                       x
                   </button>
                   {{session()->get('message')}}

               </div>
                   
               @endif
               <table class="table">
                <thead class="table-light">
                  <tr>
                    <td>N</td>
                    <td>Nom et Prénoms</td>
                    <td>Nom du doc</td>
                    <td>E-mail</td>
                    <td>Numéro</td>
                    <td>Etat</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($demande as $d)
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->user->nom}}  {{$d->user->prenom}}</td>
                    <td>{{$d->type}}</td>
                    <td>{{$d->user->email}}</td>
                    <td>{{$d->user->telephone}}</td>
                    <td>{{$d->etat}}</td>
                    <td><i  class="bi bi-pencil"></i>  </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>