  <x-app-layout>

 <!DOCTYPE html>
<html lang="en">
  <head>
  <style type="text/css">

label
{

  display: inline-block;
  width:  150px;


}

</style>

  
    <!-- Required meta tags -->
 @include('admin.css')
      <!-- partial:partials/_sidebar.html -->
     

      @include('admin.sidebar')
      <!-- partial -->
  
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

        <div class="container" align ="center" style="padding-top: 100px;">
        @if(session()->has('message'))
        <div class="alert alert-success">

        <button type="button"class="close"data-dismiss="alert">
          x
        </button>

        {{session()->get('message')}}

        </div>

        @endif

        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" >
        <H1 style="padding: 10px; font-size:40px; color:LightSkyBlue;">Add Doctors</H1>
        @csrf
            <div style="padding: 15px;">
            <label>Doctor Name</label>
            <input type="text"  style="color:black"  name="name" placeholder="Write the name" required="">
            </div>

            <div style="padding: 15px;">
            <label>Phone#</label>
            <input type="number"  style="color:black"  name="number" placeholder="Write the Phone" required="">
            </div>


            <div style="padding:15px;"> 
          
            <label>Speciality</label>

          <select name="speciality" style="color: black; width: 232px;" Required="">
            <option value="">--Select Option--</option>
            <option value="Coronavirus disease (COVID-19)">Coronavirus disease (COVID-19)</option>
            <option value="Cholera">Cholera</option>
            <option value="Dengue">Dengue</option>
            <option value="Chikungunya virus">Chikungunya virus</option>
            <option value="Ear">Ear</option>
            <option value="Hepatitis">Hepatitis</option>
          </select>
          </div>

          <div style="padding: 15px;">
            <label>Room#</label>
            <input type="text"  style="color:black"  name="room" placeholder="Write the Room " required="">
          </div>
            
          <div style="padding: 15px; ">
            <label>Doctor Image</label>
            <input type="file" name="file"  required="">
          </div>

          <div style="padding: 15px; "> 
            <input type="submit" value="Submit" class="btn btn-primary">

          </div>

          </form>
        </div>

        <!-- partial -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
  @include('admin.script')
    <!-- End custom js for this page -->
  </body>

</x-app-layout>
