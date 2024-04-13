<x-mazer-sidebar :href="route('dashboard')" :logo="asset('assets/static/images/logo/logo.png')">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Manage Destination" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Account">
        <x-mazer-sidebar-subitem :link="route('component.accordion')" name="Profile" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('logout')" name="Logout" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
