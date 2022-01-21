<x-app-layout>

 <!DOCTYPE html>
<html lang="en">
  <head>


  
  @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
     

      @include('admin.sidebar')
      <!-- partial -->
  
        @include('admin.navbar')



        <!-- partial -->
   <div class="container-fluid page-body-wrapper">
   <div align="center" style="padding-top:100px;">


   <table>
                <tr style="background-color:RosyBrown" >
                    <th style="padding:20px;">Doctor Name</th>
                    <th style="padding:20px;">Doctor Phone#</th>
                    <th style="padding:20px;">Doctor speciality</th>
                    <th style="padding:20px;">Room#</th>
                    <th style="padding:20px;">Doctor image</th>
                    <th style="padding:20px;">Delete image</th>
                    <th style="padding:20px;">Update image</th>



                    </tr>
                    @foreach($data as $showdoctor)

                  <tr align="center" style="background-color:DarkSlateGrey; color:white;">
                      <td>{{$showdoctor->name}}</td>
                      <td>{{$showdoctor->phone}}</td>
                      <td>{{$showdoctor->speciality}}</td>
                      <td>{{$showdoctor->room}}</td>
                      <td><img  height="100" width="100" src="doctorimage/{{$showdoctor->image}}">
                    </td>
                    <td><a onclick="return confirm('Are you sure to delete this...!')" class="btn btn-danger" href="{{url('deletedoctor',$showdoctor->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$showdoctor->id)}}">Update</a></td>

                  </tr>
                  @endforeach

                  </table>



   </div>
   </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
</x-app-layout>
