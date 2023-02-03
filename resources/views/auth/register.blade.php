<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{url('css/register.css')}}" />
</head>



<body>
  <section class=" container">
    <header>Registration Form</header>
    <form action="{{route('register')}}" method='post' class="form">

      @csrf

      @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" placeholder="Enter full name" name="name" required />
      </div>
      <div class="input-box">
        <label>Age</label>
        <input type="number" placeholder="Enter Age" name="age" min="18" max="60" required />
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="email" placeholder="Enter email address" name="email"  size="30" required />
      </div>

      <div class="input-box">
        <label>Password</label>
        <input type="password" placeholder="Enter password" name="password" required />
      </div>
      <div class="input-box">
        <label>Confirm Password</label>
        <input type="password" placeholder="Enter email address" name="password_confirmation" required />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" placeholder="Enter phone number" name="contact_number" required />
        </div>
        <!-- <div class="input-box">
          <label>Date of donation</label>
          <input type="date" placeholder="Enter date of donation" required />
        </div> -->
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender"  value='male'/>
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value='female'/>
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" value='others' />
            <label for="check-other">other</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" placeholder="Enter your address" required name='address' />
      </div>

      <label for="blood group">Select Blood Group</label>
      <div class="column">

        <div class="select-box">
          <select name='blood-group'>
            <option value='O+'>O+</option>
            <option value='O-'>O-</option>
            <option value='A+'>A+</option>
            <option value='A-'>A-</option>
            <option value='AB+'>AB+</option>
            <option value='AB-'>AB-</option>
          </select>
        </div>

        <div class='input-box'>
        <label for="blood group">Any disease</label>
      <div class="column">

        <div class="select-box">
          <select name='any_diseases'>
            <option value='1'>Yes</option>
            <option value='0'>No</option>
            
          </select>
        </div>
        </div>

      </div>

      <!-- <div class="column">
        <input type="text" placeholder="Enter your region" required />
        <input type="number" placeholder="Enter postal code" required />
      </div> -->
      <button>Submit</button>
    </form>
  </section>
</body>

</html>