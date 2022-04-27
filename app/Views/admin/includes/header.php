<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?=base_url('/css/sidebar.css')?>" />
    <link rel="stylesheet" href="<?=base_url('/css/table.css')?>" />
    <script src="<?=base_url('/js/sidebar.js')?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">Admin Panel</span> </a>
                <div class="nav_list">
                    <a href="blogs" class="nav_link active">
                        <i class='bx bx-news nav_icon'></i>
                        <span class="nav_name">Manage Blogs</span>
                    </a>
                    <a href="sliders" class="nav_link">
                        <i class='bx bx-images nav_icon'></i>
                        <span class="nav_name">Manage Sliders</span>
                    </a>
                    <a href="gallery" class="nav_link">
                        <i class='bx bx-image nav_icon'></i>
                        <span class="nav_name"> Manage Gallary </span>
                    </a>
                    <a href="users" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Mangage user</span>
                    </a>
                </div>
            </div> <a href="signout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->