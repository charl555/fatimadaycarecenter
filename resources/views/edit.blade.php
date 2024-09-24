<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatima Day Care Center</title>
    <!-- Font Awesome Cdn Link -->

    <script src="https://kit.fontawesome.com/6f972b8bc4.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">

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
                    <i class="fas fa-user"></i>
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
                <h2>Dashboard</h2>
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
        
                    <div class="cardcontainer">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-header">Documents For: </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('updateDocuments', ['Student_ID' => $Student_ID]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="PSABirthCertificate">PSABirthCertificate:</label>
                                    <select name="PSABirthCertificate">
                                        <option value="No" {{ $studentDocuments->PSABirthCertificate == 'No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $studentDocuments->PSABirthCertificate == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ValidID">ValidID:</label>
                                    <select name="ValidID">
                                        <option value="No" {{ $studentDocuments->ValidID == 'No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $studentDocuments->ValidID == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="HealthCard">HealthCard:</label>
                                    <select name="HealthCard">
                                        <option value="No" {{ $studentDocuments->HealthCard == 'No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $studentDocuments->HealthCard == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Assessment">Assessment:</label>
                                    <select name="Assessment">
                                        <option value="No" {{ $studentDocuments->Assessment == 'No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $studentDocuments->Assessment == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="SignedDocuments">SignedDocuments:</label>
                                    <select name="SignedDocuments">
                                        <option value="No" {{ $studentDocuments->SignedDocuments == 'No' ? 'selected' : '' }}>No</option>
                                        <option value="Yes" {{ $studentDocuments->SignedDocuments == 'Yes' ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    

</body>
</html>