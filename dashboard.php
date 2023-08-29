<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="dasboard.css">

    <!-- material icon cdn -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }
    </style>
</head>

<body>

    <!-- begining of aside -->

    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/cropped-AKSG-Logo-PNG.png">
                    <h2>AKS<span class="danger">CSC</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">
                        close
                    </span>
                </div>
            </div>
            <div class="sidebar">
                <a href="" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">account_circle</span>
                    <h3>Admin</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Staff</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">monitoring</span>
                    <h3>Analytics</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">analytics</span>
                    <h3>Reports</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Add staff </h3>
                </a>
                <a href="">
                    <span class="material-symbols-outlined">logout </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <!-- end of aside bar -->
        <main>
            <h1>DASHBOARD</h1>

            <div class="date">
                <input type="date" name="" id="">
            </div>

            <div class="insights">
                <div class="staffs">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total staffs</h3>
                            <h1> 200 </h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="36" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                <!-- End of staffs -->
                <div class="staffs-admin">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Punctuality Rate </h3>
                            <h1></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="36" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>48%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                <!-- End of staffs -->
                <div class="staffs-record">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Staffs Records</h3>
                            <h1>Morale</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="36" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>69%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">last 24 hours</small>
                </div>
                <!-- End of staffs -->
            </div>
            <!-- end of insights -->

            <div class="recent">
                <h2>Recent sign in</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Staff Name</th>
                            <th>Staff ID</th>
                            <th>time in </th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mr Jameson</td>
                            <td>AKSCSC 004</td>
                            <td>6:59 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>MR Mattew</td>
                            <td>AKSCSC 032</td>
                            <td>7:00 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Samuel Godswill</td>
                            <td>AKSCSC 001</td>
                            <td>7:01 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>MR Edet</td>
                            <td>AKSCSC 012</td>
                            <td>7:02 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Mr Ime</td>
                            <td>AKSCSC 002</td>
                            <td>7:06 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>MR Aliu</td>
                            <td>AKSCSC 006</td>
                            <td>7:10 am</td>
                            <td class="warning">signed in</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="show-all">Show all</a>
            </div>
        </main>
        <!-- end of main -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey <b>Samuel</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="IMG_2377.PNG" alt="">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->
            
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="IMG_2377.PNG" alt="">
                        </div>
                        <div class="massage">
                            <p><b>Mr jameson</b> just signed in</p>
                            <small class="text-muted">7 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="IMG_2377.PNG" alt="">
                        </div>
                        <div class="massage">
                            <p><b>Godswill </b>sent A mail. please check</p>
                            <small class="text-muted">12 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="IMG_2377.PNG" alt="">
                        </div>
                        <div class="massage">
                            <p><b>Mr Edet </b> just signed out </p>
                            <small class="text-muted">18 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- staffs analytics -->
            <div class="staffs">
                <h2>staffs analytics</h2>
                <div class="item">
                    <div class="icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Old staffs</h3>
                            <small class="text-muted">today</small>
                        </div>
                        <h5 class="success"> +39%</h5>
                    </div>
                </div>
                <div class="item second">
                    <div class="icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>New staffs</h3>
                            <small class="text-muted">today</small>
                        </div>
                        <h5 class="danger">-15%</h5>
                    </div>
                </div>
                <div class="item ">
                    <div class="icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Overall</h3>
                            <small class="text-muted">today</small>
                        </div>
                        <h5 class="success">+45%</h5>
                    </div>
                </div>
                <div class="item add-staff">
                    <span class="material-symbols-outlined">add </span>
                    <h3>Add staff</h3>
                </div>    
            </div>
         
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>