
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
        <!-- partial -->
@include('admin.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
    @inculde('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>