<div class="page-header">
    <div class="breadcrumb-container">
        <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="icon-house_siding"></i><a href="/">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <div class="header-actions-container">
        <div class="search-container">
            <div class="input-group"><input type="text" class="form-control"
                    placeholder="Search..."><button class="btn" type="button"><i
                        class="icon-search"></i></button></div>
        </div>
        <ul class="header-actions">
            <li class="dropdown"><a href="#" id="userSettings" class="user-settings"
                    data-toggle="dropdown" aria-haspopup="true"><span
                        class="user-name d-none d-md-block">{{ $user->name }}</span><span
                        class="avatar"><img src="https://stanforduni.us/wp-content/uploads/2020/05/default-avatar.png" alt="User Avatar"><span
                            class="status online"></span></span></a>
                <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                    <div class="header-profile-avatar"><img src="https://stanforduni.us/wp-content/uploads/2020/05/default-avatar.png" alt="Avatar"></div>
                    <div class="header-profile-block">
                        <h5>{{ $user->name }}</h5>
                        <p>Admin</p>
                    </div>
                    <div class="header-profile-actions">
                        <a href="/settings" class="gradient-green"><i
                                class="icon-edit_road"></i>Settings</a>
                        <a href="/logout" class="gradient-red"><i
                                class="icon-power_settings_new"></i>Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>