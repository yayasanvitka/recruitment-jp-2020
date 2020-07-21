<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('dashboard') }}">
        <i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ backpack_url('customer') }}">
        <i class="la la-building nav-icon"></i> Customer
    </a>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="la la-cog"></i> Settings
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('/settings/segment') }}">
                <i class="la "></i> Segment
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('/settings/segment-type') }}">
                <i class="la "></i> Type
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ backpack_url('/settings/addresstypes') }}">
                <i class="la "></i> Address Type
            </a>
        </li>
    </ul>
</li>
