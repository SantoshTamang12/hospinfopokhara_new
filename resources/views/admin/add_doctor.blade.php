
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
     <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      @include('admin.sidebar')
@include('admin.navbar')
<div class="container-fluid page-body-wrapper">
<div class="container" align="center" style="padding-top:50px">
    <form>
        <div>
            <label>Hospital Name</label>
            <input type="text" style="color:black" name="name" placeholder="Write the name">
        </div>
</div>
</div> <!--  ... -->
        <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @inculde('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
