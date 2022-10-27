@auth
    <div class="sidebar-section about-author center-text">
        <div class="author-image"><img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('images/advertise-1-400x500.jpg' ) }}" alt="Autohr Image"></div>

        <ul class="social-icons">
            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
        </ul><!-- right-area -->

        <h4 class="author-name"><b class="light-color">{{Auth::user()->username}}</b></h4>
        <p>{{ Auth::user()->bio}}</p>

        <div class="signature-image"><img src="../images/signature-image.png" alt="Signature Image"></div>
        <a class="read-more-link" href="#"><b>READ MORE</b></a>

    </div><!-- sidebar-section about-author -->
@endauth

