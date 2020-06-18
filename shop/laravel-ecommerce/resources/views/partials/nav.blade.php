 <a-layout-header :style="{ background: '#fff'}">
    <a-row :gutter="15" type="flex">
        <a-col  :span="6">
            <a href="{{ route('home') }}">
                <div class="" style="font-family: 'Dejavi Serif Book; font-size: 21pt">DelShop</div>
            </a>
        </a-col>
        <a-col :span="18">
            <avored-nav
                :menus="{{ $menus }}"
                >
            
            </avored-nav>
        </a-col>
    </a-row>
</a-layout-header>
