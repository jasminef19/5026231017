<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>

        body {
        font-family: 'Poppins', sans-serif;
        }
        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #135789;
            color: white;
            padding-top: 20px;
            transition: width 0.3s;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space out items */
        }
        
        .sidebar .logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 0; /* Remove gap between image and text */
            font-size: 20px;
            text-align: center;
            font-weight: bold;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .sidebar .logo .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 1px;
            margin-top: 25px;
        }
        
        .sidebar .logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 15px;
        }

        .sidebar .logo .profile-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Menjadikan teks sejajar ke kiri */
            margin-left: 10px; /* Memberi jarak antara gambar dan teks */
            margin-top: 25px;
        }

        .sidebar .logo .profile-text {
            color: white;
            font-size: 16px;
        }

        .sidebar .logo .profile-email {
            color: gray;
            font-size: 14px;
            display: block;
        }
        
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            transition: background 0.3s;
            margin: 5px 10px; /* Consistent margin for all menu items */
            border-radius: 8px; /* Add rounded corners */
        }
        
        .sidebar a:hover {
            background: #53606c;
        }
        
        .sidebar .active {
            background: rgba(12, 55, 95, 0.5);
            color: white; /* Ensure text is visible */
            border-radius: 8px; /* Add rounded corners */
            transition: background 0.3s, margin 0.3s; /* Smooth transition */
        }

        .sidebar .logout {
            background: rgba(255, 255, 255, 0.5);
            color: white !important;
            border: 1 px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            padding: 10px 20px;
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }

        .sidebar .logout:hover {
            background: rgba(255, 255, 255, 0.5);
        }
        
        /* Toggle Button Styles */
        .toggle-checkbox {
            display: none;
        }
        
        .toggle-btn {
            position: absolute;
            top: 20px;
            font-size: 24px;
            cursor: pointer;
            background: none;
            border: none;
            color: white;
            transition: left 0.3s;
        }
        
        .close-btn {
            left: 200px;
            top: 3px;
        }
        
        .open-btn {
            left: 4px;
            top: 3px;
            display: block;
            background-color: #0d47a1;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        /* Content Styles */
        .content {
            margin-left: 270px;
            margin-top: 30px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        .white-box {
            width: 700px; /* Set width to create a square */
            height: auto; /* Allow height to adjust based on content */
            border-radius: 8px;
            margin: 30px auto; /* Center the box horizontally */
            text-align: center; /* Center the text inside the white box */
            padding: 20px; /* Add padding for spacing */
        }

        .blue-rectangle {
            background-color: #135789; /* Blue color */
            width: 200px; /* Set width for the rectangle */
            height: 40px; /* Set height for the rectangle */
            margin: 20px auto 0; /* Center the rectangle horizontally */
            border-radius: 4px; /* Optional: rounded corners */
            display: flex;
            align-items: center;
            justify-content: center;
            color: white; /* Text color */
            font-weight: normal; /* Bold text */
        }
        
        /* Toggle Sidebar */
        .toggle-checkbox:checked ~ .sidebar {
            width: 0;
        }
        
        .toggle-checkbox:checked ~ .sidebar .close-btn {
            display: none;
        }
        
        .toggle-checkbox:checked ~ .open-btn {
            display: block;
        }
        
        .toggle-checkbox:not(:checked) ~ .open-btn {
            display: none;
        }
        
        .toggle-checkbox:checked ~ .content {
            margin-left: 20px;
        }

        /* Hide Logout when sidebar is closed */
        .toggle-checkbox:checked ~ .sidebar .text-danger {
        display: none;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
            }
            .close-btn {
                left: 0;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<!-- Sidebar -->
<input type="checkbox" id="toggleSidebarCheckbox" class="toggle-checkbox">
<div id="sidebar" class="sidebar">
    <div>
        <label for="toggleSidebarCheckbox" class="btn toggle-btn close-btn">
            <i class="fa fa-angle-double-left"></i> 
        </label>
        <div class="logo">
            <img src="Frame 40792-6.png" class="profile-img">
            <div class="profile-info">
                <span class="profile-text">User</span>
                <span class="profile-email">user@mail.com</span> <!-- Added email below the name -->
            </div>
        </div>
        <a href="#"><div><i class="far fa-check-square" style="font-size: 20px;"></i>&nbsp; Helperlog</div></a>
        <a href="#"class="active"><div><i class="fa-solid fa-magnifying-glass"></i>&nbsp; Helperfind</div></a>
        <a href="#"><div><i class="far fa-comment-alt"></i>&nbsp; Helperassist</div></a> 
    </div>
    <a href="#" class="logout" style="align-self: center; margin-bottom: 20px;"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<!-- Hamburger Menu for Opening Sidebar -->
<label for="toggleSidebarCheckbox" class="btn toggle-btn open-btn">
    <i class="fa fa-bars"></i> <!-- Hamburger icon -->
</label>
<!-- Content -->
<div class="content">
    <h2><i class= "fa fa-arrow-left"></i><b>&nbsp; Pengajuan Kontrak</b></h2>
    <div class="shadow lg p-3 mb-5 bg-body rounded white-box">
        <img src="Group 8449.png" alt="Image" style="max-width: 50%; height: auto; margin-bottom: 20px;">
        <h3><b>Ajuan Kontak Berhasil Dibuat</b></h3>
        <p>Ajuan kontrak anda dengan nomor id #xxxx untuk PRT atas nama YYY sudah berhasil dibuat dan sedang menunggu proses review oleh admin. Silahkan mengecek progres ajuan kontrak anda pada laman berikut</p>
        <div class="blue-rectangle">
            Cek progress kontrak
        </div> <!-- Blue rectangle with text added here -->
    </div>
</div>

</body>
</html>