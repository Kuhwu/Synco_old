<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Sync-o</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>        
<header class="header">
    <div class="header__container">
        <a href="#" class="header__logo">Sync-o</a>

        <div class="header__search">
            <input type="search" placeholder="Search" class="header__input">
            <i class='bx bx-search header__icon'></i>
        </div>

        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </div>
</header>

<div class="nav" id="navbar">
    <nav class="nav__container">
        <div>
            <a href="#" class="nav__link nav__logo">
                <i class='bx bxs-disc nav__icon' ></i>
                <span class="nav__logo-name">Sync-o</span>
            </a>

            <div class="nav__list">
                <div class="nav__items">
                    <h3 class="nav__subtitle">Profile</h3>

                    <a href="homepage" class="nav__link">
                        <i class='bx bx-home nav__icon' ></i>
                        <span class="nav__name">Home</span>
                    </a>
                    
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link active">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Profile</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="friendlist.html" class="nav__dropdown-item">Friend List</a>
                                <a href="#" class="nav__dropdown-item">Account</a>
                            </div>
                        </div>
                    </div>
                  </div>
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-bell nav__icon' ></i>
                            <span class="nav__name">Create</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content">
                                <a href="projectcreation.html" class="nav__dropdown-item">Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
    <!-- ===== ===== Profile ===== ===== -->

    <div class="student-profile py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent text-center">
                  @if($data->profile_photo)
                    <img class="profile_img" src="{{ asset('uploads/profile_images/' . $data->profile_photo) }}" alt="User Profile">
                  @else
                  <img class="profile_img" src="{{ asset('uploads/default_images/default_profile.jpg') }}" alt="Default Profile Image">
                  @endif
                  <h3>{{$data->username}}</h3>
                </div>
                <div class="card-body">
                  <p class="mb-0"><strong class="pr-1">Account ID #:</strong>{{$data->id}}</p>
                  <p class="mb-0"><strong class="pr-1">Course:</strong>{{$data->profession}}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                </div>
                <div class="card-body pt-0">
                  <table class="table table-bordered">
                    <tr>
                      <th width="30%">First Name</th>
                      <td width="2%">:</td>
                      <td>{{$data->firstname}}</td>
                    </tr>
                    <tr>
                      <th width="30%">Last Name	</th>
                      <td width="2%">:</td>
                      <td>{{$data->lastname}}</td>
                    </tr>
                    <tr>
                      <th width="30%">Gender</th>
                      <td width="2%">:</td>
                      <td>{{$data->gender}}</td>
                    </tr>
                    <tr>
                      <th width="30%">Location</th>
                      <td width="2%">:</td>
                      <td>{{$data->location}}</td>
                    </tr>
                    <tr>
                      <th width="30%">Birthdate</th>
                      <td width="2%">:</td>
                      <td>{{$data->birthdate}}</td>
                    </tr>
                  </table>
                </div>
              </div>
                <div style="height: 26px"></div>
              <div class="card shadow-sm">
                <div class="card-header bg-transparent border-0">
                  <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                </div>
                <div class="card-body pt-0">
                    <p>{{$data->bio}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>