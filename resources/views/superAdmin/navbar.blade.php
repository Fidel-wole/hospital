<div class="sidebar">
    <ul class="sidebar--items">
        <li>
            <a href="/"  class="{{ Route::currentRouteName() == 'dashboard' ? 'active--link' : '' }}" >
                <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                <span class="sidebar--item">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#"class="{{ Route::currentRouteName() == 'schedule' ? 'active--link' : '' }}" >
                <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                <span class="sidebar--item">Schedule</span>
            </a>
        </li>
        <li>
            <a href="#" class="{{ Route::currentRouteName() == 'analytics' ? 'active--link' : '' }}" >
                <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                <span class="sidebar--item" style="white-space: nowrap;">Reliable Doctor</span>
            </a>
        </li>
        <li>
            <a href="/patients" class="{{ Route::currentRouteName() == 'patients' ? 'active--link' : '' }}" >
                <span class="icon icon-4"><i class="ri-user-line"></i></span>
                <span class="sidebar--item">Patients</span>
            </a>
        </li>
        <li>
            <a href="/register_patient" class="{{ Route::currentRouteName() == 'register_patient' ? 'active--link' : '' }}">
                <span class="icon icon-4"><i class="ri-user-line"></i></span>
                <span class="sidebar--item">Register patient</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
                <span class="sidebar--item">Activity</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon icon-6"><i class="ri-customer-service-line"></i></span>
                <span class="sidebar--item">Support</span>
            </a>
        </li>
    </ul>
    <ul class="sidebar--bottom-items">
        <li>
            <a href="#">
                <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                <span class="sidebar--item">Settings</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                <span class="sidebar--item">Logout</span>
            </a>
        </li>
    </ul>
</div>