<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url('/css/publicpage.css') }}>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Dashboard</title>
</head>

<body>
    @auth
        @include('superAdmin/header');
        <section class="main">
            @include('superAdmin/navbar')
            <div class="main--content">
                <div class="overview">
                    <div class="title">
                        <h2 class="section--title">Your data</h2>
                        <select name="date" id="date" class="dropdown">
                            <option value="today">Today</option>
                            <option value="lastweek">Last Week</option>
                            <option value="lastmonth">Last Month</option>
                            <option value="lastyear">Last Year</option>
                            <option value="alltime">All Time</option>
                        </select>
                    </div>
                    <div class="cards">
                        <div class="card card-3">
                            <div class="card-data">
                                <b>{{ auth()->user()->fullname }}</b>
                                <p>
                                <p card--title>Email: {{ auth()->user()->email }}</p>
                                <p card--title>Address: {{ auth()->user()->address }}</p>
                                <p card--title>Mobile: {{ auth()->user()->phone_number }}</p>
                            </div>

                        </div>
                        <div class="card card-2">
                            <div class="card-data">
                                <div class="card-content">
                                    <h5 class="card--title">Blood group: {{ $profile->blood_group }}</h5>
                                    <p>
                                    <p card--title>Allergies: {{ $profile->allergies }}</p>

                                    <p card--title>Genotype: {{ $profile->genotype }}</p>
                                </div>

                            </div>

                        </div>

                        <div class="card card-4">
                            <div class="card-data">
                                <div class="card-content">
                                    <p class="card--title">Weight: 59kg</p>
                                    <p class="card--title">Height: 1.72m</p>
                                    <p class="card--title">Blood: A+</p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="doctors">
                    <div class="title">
                        <h2 class="section--title">Medical Report</h2>
                        <div class="doctors--right--btns">
                            <select name="date" id="date" class="dropdown doctor--filter">
                                <option>Filter</option>
                                <option value="free">Confirmed</option>
                                <option value="scheduled">Pending</option>
                            </select>
                            <button class="add"><i class="ri-add-line"></i></button>
                        </div>
                    </div>
                    <div class="medical--card">
                        <div class="cards medical--history">
                            <div class="card card-1">
                                <div class="card--data">
                                    <div class="">
                                        <h2>Blood Pressure</h2>
                                        <p>120/80mmhg</p>
                                    </div>

                                    <span class="material-symbols-outlined">

                                        blood_pressure
                                    </span>
                                </div>
                            </div>
                            <div class="card card-2">
                                <div class="card--data">
                                    <div class="">
                                        <h2>Heart Rate</h2>
                                        <p>120/80mmhg</p>

                                    </div>
                                    <span class="material-symbols-outlined">
                                        health_metrics
                                    </span>
                                </div>
                            </div>
                            <div class="card card-3">
                                <h2>Cholestrol</h2>
                                <p>120/80mmhg</p>
                            </div>
                            <div class="card card-4">
                                <h2>Glucose</h2>
                                <p>120/80mmhg</p>
                            </div>
                        </div>
                        <div class="symptoms">
                            <div class="diagnosis" style="margin-left:3%">
                                <h2>Diagnosis</h2>
                                {{-- some diagnosis text here --}}
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa incidunt dolores id
                                    mollitia commodi
                                    dignissimos adipisci nihil, perspiciatis laboriosam magni. Quam ad nihil necessitatibus,
                                    fuga eaque debitis quia provident aspernatur libero odio dolorum? Eveniet voluptate ea
                                    labore
                                    accusantium rem minima,
                                    excepturi laboriosam quis, perferendis accusamus dolor ratione maiores similique magnam.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recent--patients">
                    <div class="title">
                        <h2 class="section--title">Appointments</h2>
                        <div class="doctors--right--btns">
                            <select name="date" id="date" class="dropdown doctor--filter">
                                <option>Filter</option>
                                <option value="free">Confirmed</option>
                                <option value="scheduled">Pending</option>
                            </select>
                            <button class="add"><i class="ri-add-line"></i>Make an Appointment</button>
                        </div>
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

        @endauth
    </section>
    <script src="js/admins.js"></script>
</body>

</html>
