{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Catatan kas" icon="la la-question" :link="backpack_url('catatan-kas')" />
<x-backpack::menu-item title="Files" icon="la la-question" :link="backpack_url('file')" />
<x-backpack::menu-item title="Kas" icon="la la-question" :link="backpack_url('kas')" />
<x-backpack::menu-item title="Posts" icon="la la-question" :link="backpack_url('post')" />
<x-backpack::menu-item title="Prokers" icon="la la-question" :link="backpack_url('proker')" />
<x-backpack::menu-item title="Roles" icon="la la-question" :link="backpack_url('role')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />