<div class="m-top">
    <div class="toolbar toolbar--material">
    <!-- <div class="toolbar__left toolbar--material__left">
        <span class="toolbar-button toolbar-button--material">
        <a href="#"><i class="zmdi zmdi-menu"></i></a>
        </span>
        <ons-toolbar-button icon="md-face" style="color:white"></ons-toolbar-button>
    </div> -->

    <ons-splitter>
    <ons-splitter-side id="menu" side="left" width="220px" collapse swipeable>
        <ons-page>
        <ons-list>
            <ons-list-item onclick="fn.load('home.html')" tappable>
            Home
            </ons-list-item>
            <ons-list-item onclick="fn.load('myorder.html')" tappable>
            My Order
            </ons-list-item>
            <ons-list-item onclick="fn.load('history.html')" tappable>
            History
            </ons-list-item>
            <ons-list-item onclick="fn.load('manageaccount.html')" tappable>
            Manage Account
            </ons-list-item>
            <ons-list-item onclick="fn.load('logout.html')" tappable>
            Logout
            </ons-list-item>
        </ons-list>
        </ons-page>
    </ons-splitter-side>
    <ons-splitter-content id="content" page="home.html"></ons-splitter-content>
    </ons-splitter>

    <template id="home.html">
        <ons-page>
            <ons-toolbar>
            <!-- menu -->
            <div class="left">
                <ons-toolbar-button onclick="fn.open()">
                <ons-icon icon="md-menu" style="color:white"></ons-icon>
                </ons-toolbar-button>
            </div>

            <!-- main -->
            <div class="center" style="color:white">
                Open
            </div>
            <div class="toolbar__right toolbar--material__right">
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
                <span class="notification notification--material">10</span>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
                </span>
            </div>
            </ons-toolbar>
            <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
            Swipe right to open the menu!
            </p>
        </ons-page>
    </template>

    <template id="myorder.html">
        <ons-page>
            <ons-toolbar>
            <div class="left">
                <ons-toolbar-button onclick="fn.open()">
                <ons-icon icon="md-menu"></ons-icon>
                </ons-toolbar-button>
            </div>
            <!-- my order -->
            <div class="center" style="color:white">
                Settings
            </div>
            <div class="toolbar__right toolbar--material__right">
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
                <span class="notification notification--material">10</span>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
                </span>
            </div>
            </ons-toolbar>
        </ons-page>
    </template>

    <template id="history.html">
        <ons-page>
            <ons-toolbar>
            <div class="left">
                <ons-toolbar-button onclick="fn.open()">
                <ons-icon icon="md-menu"></ons-icon>
                </ons-toolbar-button>
            </div>
            <div class="center" style="color:white">
                My History
            </div>
            <div class="toolbar__right toolbar--material__right">
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
                <span class="notification notification--material">10</span>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
                </span>
            </div>
            </ons-toolbar>
        </ons-page>
    </template>

    <template id="manageaccount.html">
        <ons-page>
            <ons-toolbar>
            <div class="left">
                <ons-toolbar-button onclick="fn.open()">
                <ons-icon icon="md-menu"></ons-icon>
                </ons-toolbar-button>
            </div>
            <!-- my order -->
            <div class="center" style="color:white">
                Manage Account
            </div>
            <div class="toolbar__right toolbar--material__right">
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
                <span class="notification notification--material">10</span>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
                </span>
            </div>
            </ons-toolbar>
        </ons-page>
    </template>

    <template id="logout.html">
        <ons-page>
            <ons-toolbar>
            <div class="left">
                <ons-toolbar-button onclick="fn.open()">
                <ons-icon icon="md-menu"></ons-icon>
                </ons-toolbar-button>
            </div>
            <div class="center" style="color:white">
                Logout
            </div>
            <div class="toolbar__right toolbar--material__right">
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
                <span class="notification notification--material">10</span>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-favorite"></i></a>
                </span>
                <span class="toolbar-button toolbar-button--material">
                <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
                </span>
            </div>
            </ons-toolbar>
        </ons-page>
    </template>

    <!-- <div class="toolbar__center toolbar--material__center">
        Makana
    </div>
    <div class="toolbar__right toolbar--material__right">
        <span class="toolbar-button toolbar-button--material">
        <a href="#"><i class="zmdi zmdi-notifications-none"></i></a>
        <span class="notification notification--material">10</span>
        </span>
        <span class="toolbar-button toolbar-button--material">
        <a href="#"><i class="zmdi zmdi-favorite"></i></a>
        </span>
        <span class="toolbar-button toolbar-button--material">
        <a href="#"><i class="zmdi zmdi-more-vert"></i></a>
        </span>
    </div> -->
    </div>
</div>


<script>
window.fn = {};

window.fn.open = function() {
  var menu = document.getElementById('menu');
  menu.open();
};

window.fn.load = function(page) {
  var content = document.getElementById('content');
  var menu = document.getElementById('menu');
  content.load(page)
    .then(menu.close.bind(menu));
};
</script>