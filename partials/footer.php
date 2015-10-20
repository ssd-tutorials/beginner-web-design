<footer id="footerWrapper">

    <div class="row">

        <div class="large-3 medium-6 columns">

            <h4>SOCIAL PROFILES</h4>

            <ul>
                <li>
                    <a href="https://www.facebook.com/ssdtutorials" target="_blank">
                        <i class="fa fa-facebook fa-fw"></i> Facebook
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/ssulinski" target="_blank">
                        <i class="fa fa-twitter fa-fw"></i> Twitter
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/sebastiansulinski" target="_blank">
                        <i class="fa fa-linkedin fa-fw"></i> LinkedIn
                    </a>
                </li>
                <li>
                    <a href="https://vimeo.com/ssdtutorials" target="_blank">
                        <i class="fa fa-vimeo-square fa-fw"></i> Vimeo
                    </a>
                </li>
            </ul>

        </div>

        <div class="large-3 medium-6 columns">

            <h4>OUR ADDRESS</h4>

            <p>
                Some street 198, Some region<br />
                Frome, Somerset<br />
                BA11 1ZZ<br />
                Tel. 01373 000 000
            </p>

        </div>

        <div class="large-3 medium-6 columns">

            <h4>NAVIGATION</h4>

            <ul>
                <li>
                    <a href="/about"<?php if ($request == 'about') { echo ' class="active"'; } ?>>
                        About us
                    </a>
                </li>
                <li>
                    <a href="/menu"<?php if ($request == 'menu') { echo ' class="active"'; } ?>>
                        Menu
                    </a>
                </li>
                <li>
                    <a href="/loyalty-card"<?php if ($request == 'loyalty-card') { echo ' class="active"'; } ?>>
                        Loyalty Card
                    </a>
                </li>
                <li>
                    <a href="/contact"<?php if ($request == 'contact') { echo ' class="active"'; } ?>>
                        Contact us
                    </a>
                </li>
            </ul>

        </div>

        <div class="large-3 medium-6 columns">

            <h4>CREDITS</h4>

            <p>
                Web Design by<br />
                &copy; SSD Tutorials 2015<br />
                <a
                    href="https://twitter.com/ssulinski"
                    target="_blank"
                    ><i class="fa fa-twitter"></i> @ssulinski</a><br />
                <a
                    href="https://github.com/sebastiansulinski"
                    target="_blank"
                    ><i class="fa fa-github"></i> @sebastiansulinski</a>
            </p>

        </div>

    </div>

</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>