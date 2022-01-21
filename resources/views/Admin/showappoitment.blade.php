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
                <tr style="background-color:RoyalBlue" >
                    <th style="padding:20px;">Patient Name</th>
                    <th style="padding:20px;">Email</th>
                    <th style="padding:20px;">Phone#</th>
                    <th style="padding:20px;">Doctor Name</th>
                    <th style="padding:20px;">Date</th>
                    <th style="padding:20px;">Description</th>
                    <th style="padding:20px;">Appointment Status</th>
                    <th style="padding:20px;">Approved</th>
                    <th style="padding:20px;">Cancelled</th>
                    
                </tr>
                @foreach($data as $showdata)
                <tr align="center" style="background-color:Tan; color:black;">
                    <td>{{$showdata->name}}</td>
                    <td>{{$showdata->email}}</td>
                    <td>{{$showdata->phone}}</td>
                    <td>{{$showdata->select_doctor}}</td>
                    <td>{{$showdata->date}}</td>
                    <td>{{$showdata->message}}</td>
                    <td>{{$showdata->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved',$showdata->id)}}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('Cancelled',$showdata->id)}}">Cancelled</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>

       <table>


       </table>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
</x-app-layout>
