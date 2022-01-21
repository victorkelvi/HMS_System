<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('apponitment')}}"  method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text"name="name" class="form-control" placeholder="Full name" Required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" name= "email" class="form-control" placeholder="Email address.." Required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date"  name="date" class="form-control" Required="">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="select_doctor" id="departement" class="custom-select" Required="">
              <option>---select doctor---</option>
            @foreach($doctor as $doctors)
            
              <option value="{{$doctors->name}}">{{$doctors->name}}---Speciality---{{$doctors->speciality}}</option>
            
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="phone"  name ="number" class="form-control" placeholder="Enter the phone#" Required="">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="---Optional---" ></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

