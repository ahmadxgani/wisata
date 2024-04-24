<x-mazer-sidebar :href="route('dashboard')" :logo="asset('assets/static/images/logo/logo.png')">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Destinasi" />
    <x-mazer-sidebar-item icon="bi bi-database-fill" :link="route('kategori.index')" name="Kategori"/>
    <x-mazer-sidebar-item icon="bi bi-person-circle" :link="route('dashboard')" name="Akun">
        <x-mazer-sidebar-subitem :link="route('account.profile')" name="Profile" :active="false"/>
        <x-mazer-sidebar-subitem :link="route('account.logout')" name="Logout" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
