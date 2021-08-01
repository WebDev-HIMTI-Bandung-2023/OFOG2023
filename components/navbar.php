<nav id="topmenu" class="row position-fixed fixed-top justify-content-between align-items-center | m-auto text-white | flex flex-wrap fixed top-0 right-0 left-0 z-1030 justify-between items-center">
    <div class="col-2 p-0 || w-2/12">
        <a href="/">
            <img id="himti-icon" src="assets/img/icons/himti-icon.svg" alt="HIMTI BINUS">
        </a>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="col-10 text-end p-0 d-sm-none || w-10/12 text-right sm:hidden">
        <ul class="list-unstyled m-0 || list-none">
            <li class="d-inline-block fs-bold || inline-block font-bold" onClick="toggleMobileMenu()"><i class="bi bi-list" aria-hidden="true"></i> MENU</li>
        </ul>
    </div>
    <!-- Desktop Menu -->
    <div id="desktopMenu" class="col-12 col-sm-10 text-sm-end p-0 d-none d-sm-inline || w-full sm:w-10/12 sm:text-right hidden sm:inline">
        <hr class="d-sm-none || sm:hidden">
        <ul class="list-unstyled m-0 || list-none">
            <?php require_once('./components/menu-items.php');
            $current_url = $_SERVER[REQUEST_URI];
            foreach($MENU_ITEMS as $menu): ?>
                <li class="d-sm-inline-block || sm:inline-block">
                    <?php if ($menu['href'] == $current_url): ?>
                        <b>
                        <?php if (isset($menu['icon_fill'])) $menu['icon'] = $menu['icon_fill']; ?>
                    <?php else: ?>
                        <a href="<?= $menu['href'] ?>">
                    <?php endif; ?>
                    <?= isset($menu['icon']) ? '<i class="' . $menu['icon'] . '" aria-hidden="true"></i> ' : '' ?><?= $menu['label'] ?>
                    <?php if ($menu['href'] == $current_url): ?>
                        </b>
                    <?php else: ?>
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <!-- <div class="max-w-screen-2xl m-auto py-4 px-12 flex justify-between items-center text-white">
        <ul class="list-none">
            <li class="p inline-block "><a href="index.html">Home</a></li>
            <li class="p inline-block font-bold pl-10">About Us</li>
            <li class="p inline-block pl-10"><a href="index.html">Learn Coding</a></li>
            <li class="p inline-block pl-10"><a href="index.html">Tell Us</a></li>
            <li class="p inline-block pl-10"><a href="index.html">Events</a></li>
        </ul>
    </div> -->
</nav>

<script>
    // Minimum width
    const maxWidth = 575;
    var showMobileMenu = false;

    // Function to toggle mobile menu
    var topMenu = document.getElementById("topmenu");
    var desktopMenu = document.getElementById("desktopMenu");
    var mobileMenu = document.getElementById("mobileMenu");
    function toggleMobileMenu(){
        var screenWidth = window.innerWidth || 0
        if (screenWidth > maxWidth || showMobileMenu){
            // Close menu
            showMobileMenu = false;
            desktopMenu.className = desktopMenu.className.replace(" d-inline", " d-none").replace(" inline", " hidden");
            topMenuScroll();
        } else {
            // Open menu
            showMobileMenu = true;
            desktopMenu.className = desktopMenu.className.replace(" d-none", " d-inline").replace(" hidden", " inline");
            topmenu.style.backgroundColor = "#4159A7";
        }
    }

    var deviceMemory = navigator.deviceMemory || 2;

    function topMenuScroll(){
        var offset = window.pageYOffset;
        var threshold = 400;
        <?php if (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true): ?>
            if (showMobileMenu == true){
                // Ignore
                return
            } if (deviceMemory > 1){
                // Use smoother transitions
                var percent = offset / threshold;
                if (percent > 1) percent = 1;
                topmenu.style.backgroundColor = "rgba(65, 89, 167, " + percent + ")";
            } else if (offset <= threshold / 2){
                topmenu.style.backgroundColor = "#4159A7";
            } else {
                topmenu.style.backgroundColor = null;
            }
        <?php endif; ?>
    }

    <?php if (isset($NAVBAR_SET_IMMERSIVE) && $NAVBAR_SET_IMMERSIVE == true): ?>
        window.addEventListener("scroll", topMenuScroll, {passive: true});
    <?php else: ?>
        topmenu.style.backgroundColor = "#4159A7";
    <?php endif; ?>
</script>