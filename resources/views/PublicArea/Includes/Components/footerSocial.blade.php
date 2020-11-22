<ul>
    @foreach ($socials as $social)

    @if ($social->facebook!=null)
    <li>
        <a href="{{$social->facebook}}" title="Facebook" target="_blank">
            <i class="fab fa-facebook-f" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @if ($social->twitter!=null)
    <li>
        <a href="{{$social->twitter}}" title="Twitter" target="_blank">
            <i class="fab fa-twitter" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @if ($social->linkedin!=null)
    <li>
        <a href="{{$social->linkedin}}" title="Linkedin" target="_blank">
            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @if ($social->pinterest!=null)
    <li>
        <a href="{{$social->pinterest}}" title="pinterest" target="_blank">
            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @if ($social->instagram!=null)
    <li>
        <a href="{{$social->instagram}}" title="Instagram" target="_blank">
            <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @if ($social->youtube!=null)
    <li>
        <a href="{{$social->youtube}}" title="Youtube" target="_blank">
            <i class="fab fa-youtube" aria-hidden="true"></i>
        </a>
    </li>
    @endif
    @endforeach
</ul>
