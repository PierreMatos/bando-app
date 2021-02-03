




























<li class="nav-item">
    <a href="{{ route('postTypes.index') }}"
       class="nav-link {{ Request::is('postTypes*') ? 'active' : '' }}">
        <p>Post Types</p>
    </a>
</li>






<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>


