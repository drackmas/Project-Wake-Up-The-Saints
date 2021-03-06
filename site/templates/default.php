<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A set of horizontal menus that switch to vertical and which hide at small window widths.">
    <title>Responsive Horizontal-to-Vertical Menu &ndash; Layout Examples &ndash; Pure</title>
    <?= css([
      'assets/pure-min.css',
      'assets/grids-responsive-min.css'
    ]) ?>
</head>
<body>

<style>
.custom-wrapper {
    /*  Background Panel Color Red */
    background-color: #FF0000;
    margin-bottom: 1em;
    -webkit-font-smoothing: antialiased;
    height: 2em;
    overflow: hidden;
    -webkit-transition: height 0.5s;
    -moz-transition: height 0.5s;
    -ms-transition: height 0.5s;
    transition: height 0.5s;
}

.custom-wrapper.open {
    height: 14em;
}

.custom-menu-3 {
    text-align: right;
}

.custom-toggle {
    width: 34px;
    height: 34px;
    position: absolute;
    top: 0;
    right: 0;
    display: none;
}

.custom-toggle .bar {
    /*  Hamburger Icon Color; */
    background-color: #000000; 

    display: block;
    width: 20px;
    height: 2px;
    border-radius: 100px;
    position: absolute;
    top: 18px;
    right: 7px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    transition: all 0.5s;
}

.custom-toggle .bar:first-child {
    -webkit-transform: translateY(-6px);
    -moz-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
}

.custom-toggle.x .bar {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.custom-toggle.x .bar:first-child {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

@media (max-width: 47.999em) {

    .custom-menu-3 {
        text-align: left;
    }

    .custom-toggle {
        display: block;
    }

}
</style>
<div class="custom-wrapper pure-g" id="menu">
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu">
            <a href="#" class="pure-menu-heading custom-brand">Brand</a>
            <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu pure-menu-horizontal custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
        <div class="pure-menu pure-menu-horizontal custom-menu-3 custom-can-transform">
            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Yahoo</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">W3C</a></li>
            </ul>
        </div>
    </div>
</div>
<script>
(function (window, document) {
var menu = document.getElementById('menu'),
    rollback,
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    menu.classList.remove('closing');
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        menu.classList.add('closing');
        rollBack = setTimeout(toggleHorizontal, 500);
    }
    else {
        if (menu.classList.contains('closing')) {
            clearTimeout(rollBack);
        } else {
            toggleHorizontal();
        }
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
    e.preventDefault();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);

</script>
<style>
.main {
    padding: 2em;
    color: black;
}
</style>

<div class="main">

    <h1><?= $page->title() ?></h1>

</div>


</body>
</html>
