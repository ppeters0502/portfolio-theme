<body>
    <div id="wrapper" class="hfeed">
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper" role="navigation">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >PatPeters.org</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>/?page_id=603">Blog</a>
            </li>
            <li>
                <a href="<?php bloginfo('url');?>#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>
</div>
<?php wp_head();?>


