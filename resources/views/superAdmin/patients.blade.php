<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{url('/css/admins.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
@include('superAdmin/header');
    <section class="main">
@include('superAdmin/navbar')
        <div class="main--content">

            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Recent Patients</h2>
                    <button class="add"><i class="ri-add-line"></i>Add Doctor</button>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date in</th>
                                <th>Gender</th>
                                <th>Date of birth</th>
                                <th>Age</th>
                                <th>phone_number</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forEach($patients as $patient)
                            <tr>
                              
                                <a href="/patient_profile/{{$patient->id}}">
                                <td>{{$patient->fullname}}</td>
                                <td>{{$patient->created_at}}</td>
                                <td>{{$patient->sex}}</td>
                                <td>{{$patient->date_of_birth}}</td>
                                <td>{{$patient->age}}</td>
                                <td>{{$patient->phone_number}}</td>
                             
                              
                                <td><span> <a href="/patient_profile/{{$patient->id}}"><i class="ri-edit-line edit"></a></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            @endforeach
                               
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="js/admins.js"></script>
</body>

</html>
</body>
</html>