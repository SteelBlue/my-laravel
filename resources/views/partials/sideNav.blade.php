<div class="left_top_nav">
    <a href="{{ url() }}" data-toggle="tooltip" data-placement="right" title="Home">
        <i class="fa fa-2x fa-home"></i>
    </a>
    <a href="{{ url('contact') }}" data-toggle="tooltip" data-placement="right" title="Contact Me">
        <i class="fa fa-2x fa-comments"></i>
    </a>
    <a href="{{ url('about') }}" data-toggle="tooltip" data-placement="right" title="About Me">
        <i class="fa fa-2x fa-user"></i>
    </a>
    <a href="{{ url('experience') }}" data-toggle="tooltip" data-placement="right" title="Experience">
        <i class="fa fa-2x fa-code"></i>
    </a>
    <a href="{{ url('education') }}" data-toggle="tooltip" data-placement="right" title="Education">
        <i class="fa fa-2x fa-graduation-cap"></i>
    </a>
    <a href="{{ url('blog') }}" data-toggle="tooltip" data-placement="right" title="Blog">
        <i class="fa fa-2x fa-flask"></i>
    </a>
    <a href="/" data-toggle="tooltip" data-placement="right" title="Latest Article">
        <i class="fa fa-2x fa-hashtag"></i>
    </a>
    @if (Auth::check())
        <a href="{{ url('auth/logout') }}" data-toggle="tooltip" data-placement="right" title="Log Out">
            <i class="fa fa-2x fa-sign-out"></i>
        </a>
    @else
        <a href="{{ url('auth/login') }}" data-toggle="tooltip" data-placement="right" title="Login">
            <i class="fa fa-2x fa-sign-in"></i>
        </a>
    @endif
</div>