<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/register_patient.css') }}">
    <title>Document</title>
</head>

<body>
    @include('superAdmin/header')

    <section class="main">
        @include('superAdmin/navbar')
        <div class="main--content">
            <div class="container2">
                <header>Registration</header>
                <form action="signup" method="POST" onsubmit="submit()">
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
                                    <label>Full Name</label>
                                    <input type="text" name="fullname" placeholder="Enter Full name">
                                    @error('fullname')
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
                                    <label>Next of Kin</label>
                                    <input type="text" name="next_of_kin" placeholder="Enter Next of kin">
                                    @error('next_of_kin')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Phone Number of Next of Kin</label>
                                    <input type="text" name="next_of_kin_number" placeholder="Enter Phone Number">
                                    @error('next_of_kin_number')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="input-field">
                                    <label>Address of Next of Kin</label>
                                    <input type="text" name="next_of_kin_address" placeholder="Enter Address" />
                                    @error('next_of_kin_address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="details ID">
                            <span>Medical History</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Blood type</label>
                                    <select name="blood_type">
                                        <option>O</option>
                                        <option>A</option>
                                        <option>B</option>
                                        <option>OB</option>
                                    </select>
                                    @error('blood_type')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Allergies</label>
                                    <input type="text" name="allergy" placeholder="Fill in" />
                                    @error('allergy')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Genotype</label>
                                    <select name="genotype">
                                        <option>AA</option>
                                        <option>AS</option>
                                        <option>SS</option>
                                        <option>AC</option>
                                    </select>
                                    @error('genotype')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <div class="input-field">
                                    <label> Hereditary</label>
                                    <input type="text" name="hereditary" placeholder="Fill in" />
                                    @error('hereditary')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Weight</label>
                                    <input type="text" name="weight" placeholder="Fill in" />
                                    @error('weight')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="input-field">
                                    <label>Height</label>
                                    <input type="text" name="height" placeholder="Fill in" />
                                    @error('height')
                                        {{ $message }}
                                    @enderror
                                </div>


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
    </section>
    <script src="js/admins.js"></script>
    <script src="js/form.js"></script>
</body>

</html>
