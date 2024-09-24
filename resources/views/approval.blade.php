<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatima Day Care Center</title>
    <!-- Font Awesome Cdn Link -->

    <script src="https://kit.fontawesome.com/6f972b8bc4.js" crossorigin="anonymous"></script>

    <link href="css/style2.css" rel="stylesheet">

</head>
<body>
    <div class = "sidebar">
        <div class="logo"> </div>
        <ul class="menu">
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            </li>
            <li>
                <a href="{{route('tables')}}">
                <i class="fa-solid fa-table-list"></i>
                <span>Tables</span>
            </a>
            </li>
            <li class="active">
                <a href="{{route('approval')}}">
                <i class="fa-solid fa-table-list"></i>
                <span>Approval List</span>
            </a>
            <li>
                <a href="">
                    <i class="fas fa-chart-bar"></i>
                <span>Statistics</span>
            </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-briefcase"></i>
                <span>Careers</span>
            </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-question-circle"></i>
                <span>FAQ</span>
            </a>
            </li>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-star"></i>
                <span>Testimonial</span>
            </a>
            </li>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
            </li>
            <li class="logout">
                <a href="">
                    <i class="fas fa-cog"></i>
                <span>Logout</span>
            </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Fatima Day Care Center</span>
                <h2>Approval List</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                <i class="fa-solid 
                fa-search"></i>
                <input type="text" 
                placeholder="Search" />
            </div>
            <img src="images/logo2.png" 
            alt=""/>
           </div>
        </div>

        <div class="card--container">
            <h3 class="main--title">Today's Data</h3>
            <div class="card--wrapper">
                <div class="payment--card
                light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Total Students Enrolled
                            </span>
                            <span class="amount--value">0
                            </span>
                        </div>
                        <i class="fa-solid fa-user-graduate icon"></i>
                    </div>
                    <span class="card--detail"></span>
                </div>
                <div class="payment--card
                light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Current Students Enrolled
                            </span>
                            <span class="amount--value">0
                            </span>
                        </div>
                        <i class="fa-solid fa-user icon dark-purple"></i>
                    </div>
                    <span class="card--detail"></span>
                </div>
                <div class="payment--card
                light-green">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Placeholder
                            </span>
                            <span class="amount--value">0
                            </span>
                        </div>
                        <i class="fas fa-dollar-sign icon dark-green"></i>
                    </div>
                    <span class="card--detail"></span>
                </div>
                <div class="payment--card
                light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Placeholder
                            </span>
                            <span class="amount--value">0
                            </span>
                        </div>
                        <i class="fas fa-dollar-sign icon dark-blue"></i>
                    </div>
                    <span class="card--detail"></span>
                </div>
            </div>
        </div>
                    <div class="tabular--wrapper">
                    <h3 class="main--title" style="font-size:30px;">Pending Approvals</h3>
                    <div class="table--container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Enrollment Date</th>
                                    <th>Status</th>
                                    <th>Review</th>
                                    <th>Approve</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pendingApprovals as $approvalview)
                                <tr>
                                    <td>{{ $approvalview->Student_ID }}</td>
                                    <td>{{ $approvalview->Name }}</td>
                                    <td>{{ $approvalview->Age }}</td>
                                    <td>{{ $approvalview->Enrollment_Date }}</td>
                                    <td>{{ $approvalview->Status }}</td>
                                    <td>
                                        <a href="{{ route('edit', ['Student_ID' => $approvalview->Student_ID]) }}">Review Documents</a>
                                    </td>
                                    <td><button>Approve</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>

</body>
</html>