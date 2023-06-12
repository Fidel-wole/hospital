<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url('/css/register_doctor.css') }}>
    <link rel="stylesheet" href={{ url('/css/admins.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    @include('superAdmin/header');
    <section class="main">
        @include('superAdmin/navbar')
        <div class="main--content">
            <div class="hmm">
                <div class="overview">
                    <div class="title">
                        <h2 class="section--title">Overview</h2>
                        <select name="date" id="date" class="dropdown">
                            <option value="today">Today</option>
                            <option value="lastweek">Last Week</option>
                            <option value="lastmonth">Last Month</option>
                            <option value="lastyear">Last Year</option>
                            <option value="alltime">All Time</option>
                        </select>
                    </div>
                    <div class="cards">
                        <div class="card card-1">
                            <div class="card--data">
                                <div class="card--content">
                                    <h5 class="card--title">Total Doctors</h5>
                                    <h1>152</h1>
                                </div>
                                <i class="ri-user-2-line card--icon--lg"></i>
                            </div>
                            <div class="card--stats">
                                <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                                <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                                <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                            </div>
                        </div>
                        <div class="card card-2">
                            <div class="card--data">
                                <div class="card--content">
                                    <h5 class="card--title">Total Patients</h5>
                                    <h1>1145</h1>
                                </div>
                                <i class="ri-user-line card--icon--lg"></i>
                            </div>
                            <div class="card--stats">
                                <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                                <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
                                <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
                            </div>
                        </div>
                        <div class="card card-3">
                            <div class="card--data">
                                <div class="card--content">
                                    <h5 class="card--title">Schedule</h5>
                                    <h1>102</h1>
                                </div>
                                <i class="ri-calendar-2-line card--icon--lg"></i>
                            </div>
                            <div class="card--stats">
                                <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
                                <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>31</span>
                                <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>23</span>
                            </div>
                        </div>
                        <div class="card card-4">
                            <div class="card--data">
                                <div class="card--content">
                                    <h5 class="card--title">Beds Available</h5>
                                    <h1>15</h1>
                                </div>
                                <i class="ri-hotel-bed-line card--icon--lg"></i>
                            </div>
                            <div class="card--stats">
                                <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8%</span>
                                <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>11</span>
                                <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="doctors">
                    <div class="title">
                        <h2 class="section--title">Doctors</h2>
                        <div class="doctors--right--btns">
                            <select name="date" id="date" class="dropdown doctor--filter">
                                <option>Filter</option>
                                <option value="free">Free</option>
                                <option value="scheduled">Scheduled</option>
                            </select>
                            <button class="add"><i class="ri-add-line"></i>Add Doctor</button>
                        </div>
                    </div>
                    <div class="doctors--cards">
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor1.jpg" alt="">
                                </div>
                            </div>
                            <p class="free">Free</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor2.jpg" alt="">
                                </div>
                            </div>
                            <p class="scheduled">Scheduled</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor3.jpg" alt="">
                                </div>
                            </div>
                            <p class="scheduled">Scheduled</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor4.jpg" alt="">
                                </div>
                            </div>
                            <p class="free">Free</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor7.jpg" alt="">
                                </div>
                            </div>
                            <p class="scheduled">Scheduled</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor6.jpg" alt="">
                                </div>
                            </div>
                            <p class="free">Free</p>
                        </a>
                        <a href="#" class="doctor--card">
                            <div class="img--box--cover">
                                <div class="img--box">
                                    <img src="assets/doctor7.jpg" alt="">
                                </div>
                            </div>
                            <p class="scheduled">Scheduled</p>
                        </a>
                    </div>
                </div>
                <div class="recent--patients">
                    <div class="title">
                        <h2 class="section--title">Recent Patients</h2>
                        <a href="{{ url('register_patient') }}"><button class="add"><i class="ri-add-line"></i>Add
                                Patient</button></a>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date in</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>61kg</td>
                                    <td class="pending">pending</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>George Washington</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>54kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>John Adams</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>56kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>Thomas Jefferson</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>11kg</td>
                                    <td class="rejected">Rejected</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>James Madison</td>
                                    <td>29/07/2022</td>
                                    <td>Male</td>
                                    <td>69kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                                <tr>
                                    <td>Andrew Jackson</td>
                                    <td>28/07/2022</td>
                                    <td>Male</td>
                                    <td>88kg</td>
                                    <td class="confirmed">Confirmed</td>
                                    <td><span><i class="ri-edit-line edit"></i><i
                                                class="ri-delete-bin-line delete"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="header">
                    <header>Registration</header>
                    <p class="cancel">&times;</p>
                </div>

                <form action="register_doctor" method="POST" onsubmit="submit()">
                    <div class="success" id="success">
                        @if (Session::get('success'))
                            {{ Session::get('success') }}
                        @endif
                    </div>
                    @csrf
                    <div class="fail">
                        @if (Session::get('fail'))
                            {{ Session::get('fail') }}
                        @endif
                    </div>

                    <div class="form first">
                        <div class="details personal">
                            <span>Personal details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Firstame</label>
                                    <input type="text" name="firstname" placeholder="Enter Firstname">
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Firstame</label>
                                    <input type="text" name="lastname" placeholder="Enter lastnname">
                                    @error('lastname')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Firstame</label>
                                    <input type="text" name="middlename" placeholder="Enter Middlename">
                                    @error('middlename')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" name="date_of_birth" placeholder="Enter Date of birth">
                                    @error('date_of_birth')
                                        {{ $message }}
                                    @enderror
                                </div>


                                <input type="hidden" name="age">

                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Enter Email">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Enter Address">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Phone number</label>
                                    <input type="text" name="phone_number" placeholder="Enter Phone Number">
                                    @error('phone_number')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Sex</label>
                                    <select name="sex">
                                        <option>Please select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                    @error('sex')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Marital Status</label>
                                    <select name="marital_status">
                                        <option>Please select</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Divorce</option>
                                    </select>
                                    @error('marital_status')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Area of Specialization</label>
                                    <select name="specialization">
                                        <option>Please select</option>
                                        <option>Surgery</option>
                                        <option>Cardiology</option>
                                        <option>Dentist</option>
                                        <option>Medical Doctor</option>
                                        <option>Pathology</option>
                                        <option>Anastesiology</option>
                                        <option>Plastic Surgery</option>
                                        <option>Psychiatry</option>
                                        <option>Neurology</option>
                                        <option>Radiology</option>
                                        <option>Urology</option>
                                        <option>Pediatrics</option>
                                    </select>
                                    @error('specialization')
                                        {{ $message }}
                                    @enderror
                                </div>
                                        <div class="input-field">
                                            <label>Role</label>
                                            <select name="role">
                                                <option>Admin</option>
                                                <option>superAdmin</option>
                                                
                                            </select>
                                            @error('role')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        

                     
                                    <div class="nextBtn">
                                        <span class="btnText"> Next </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form second">
                                {{-- <div class="details personal">
                            <span>Personal details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div>

                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div>

                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div>
                            </div>
                        </div> --}}
                                <div class="details ID">
                                    <span>Set Patient Password</span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Enter Password" />
                                        </div>
                                        {{-- <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div>

                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div>

                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Date of birth</label>
                                    <input type="date" placeholder="Enter Full name"  />
                                </div>
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Enter Full name"  />
                                </div> --}}
                                    </div>
                                    <div class="buttons">
                                        <div class="backBtn">
                                            <span class="btnText"> Back </span>
                                        </div>
                                        <button class="" type="submit">
                                            <span class="btnText"> Next </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
            {{-- <div class="main-container">
            <div class="form-container">
                <div class="form-body">
                    <h2 class="title">New Patient Registrati</h2>





                    @if (Session::get('success'))
                        {{ Session::get('success') }}
                    @endif
                    <form action="signup" method="POST" class="the-form" encType="multipart/form-data">
                        @csrf
                        <label htmlFor="firstname">Firstname</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname">
                        <span>
                            @error('firstname')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="middlename">Middlename</label>
                        <input type="text" name="middlename" id="middlename" placeholder="Enter your middlename">
                        <span>
                            @error('middlename')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="lastname">Lastname</label>

                        <input type="text" name="lastname" id="lastname" />
                        <span>
                            @error('lastname')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="email">Email</label>
                        <input type="email" name="email" id="email" autoComplete="email">
                        <span>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="number">Phone number</label>
                        <input type="number" name="phone_number" id="phone_number">
                        <span>
                            @error('phone number')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="Enter your address">
                        <span>
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                        <label>Gender</label>

                        <select name="sex">
                            <option value="male" name="sex">Male</option>
                            <option value="female" name="sex">Female</option>
                            <option value="others" name="sex">Others</option>
                        </select>
                        <span>
                            @error('sex')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your Password">
                        <span>
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                        <label htmlFor="confirmPassword">Password</label>
                        <input type="password" name="password_confirmation" id="confirmPassword"
                            placeholder="Enter your Password">

                        <input type="submit" value="Sign In" />
                    </form>
                </div>

                <div class="htmlForm-footer">
                    <div>
                        <span>Don't have an account?</span>{" "}
                        <a href="">Sign Up</a>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    </section>
    <script src="js/admins.js"></script>
</body>

</html>
