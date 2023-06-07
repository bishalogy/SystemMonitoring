<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Scan Me© - Does Faster</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/loading-bar.css">

    <style>
    *::-webkit-scrollbar {
        width: 10px;
        background-color: black;
    }

    *::-webkit-scrollbar-thumb {
        background-color: white;
    }

    *::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
        background-color: transparent;
    }

    * {
        box-sizing: border-box;
    }

    @font-face {
        font-family: Potra;
        src: url(fonts/Potra.otf);
    }
    </style>
</head>

<body>

    <div class="container-fluid bg-light p-0 d-flex" style="height:100vh">
        <div id="side_menu" class="h-100 ">
            <?php include "pages/side_menu.php" ?>
        </div>
        <div id="body_menu" class=" h-100 p-0 m-0" style="width:100%">
            <?php include "pages/body.php" ?>
        </div>
    </div>

    <script>
    theme_setting = {
        dark: {
            bg_color: ["#333", "#333", '#333', '#333'],
            side_menu_color: '#333',
            text_color: "",
            h_bg_color: 'blue',
            body_text: 'white'
        },
        light: {
            bg_color: ["rgba(200, 200, 200, 0.8)", "rgba(200, 200, 200, 0.8)", 'rgba(200, 200, 200, 0.8)',
                'rgba(200, 200, 200, 0.8)'
            ],
            side_menu_color: '#ddd',
            text_color: "black",
            h_bg_color: '#333',
            body_text: 'black'
        },
        default: {
            bg_color: ["#343a40", "#dc3545", '#ffc107', '#343a40'],
            side_menu_color: '#343a40',
            text_color: "",
            h_bg_color: 'blue',
            body_text: 'white'
        },
        modern: {
            bg_color: ["linear-gradient(#66a6ff , #89f7fe)", "linear-gradient(#89f7fe, #66a6ff)",
                'linear-gradient(#66a6ff, #89f7fe)', 'linear-gradient(#89f7fe, #66a6ff)'
            ],
            side_menu_color: 'linear-gradient(#66a6ff , #89f7fe)',
            text_color: "black",
            h_bg_color: 'black',
            body_text: 'black'
        }
    }
    var side_menu = document.getElementById("side_menu")
    var body_menu = document.getElementById("body_menu")
    side_menu_width = 290
    body_menu_width = screen.width - side_menu_width;
    side_menu.style.width = side_menu_width + 'px'
    //body_menu.style.width = body_menu_width + 'px'


    var bg_colors, text_color, h_bg_color
    var theme_select = 'default'
    funcSideMenuTheme(theme_select)

    function funcSideMenuTheme(ids) {
        theme_select = ids
        transition_t = 1.5
        side_menu.style.transition = '0.5s'
        if (ids == 'dark') {
            bg_colors = theme_setting.dark.bg_color
            h_bg_color = theme_setting.dark.h_bg_color
            text_color = theme_setting.dark.text_color
            body_text_color = theme_setting.dark.body_text
            side_menu_colors = theme_setting.dark.side_menu_color


        } else if (ids == 'light') {
            bg_colors = theme_setting.light.bg_color
            h_bg_color = theme_setting.light.h_bg_color
            text_color = theme_setting.light.text_color
            body_text_color = theme_setting.light.body_text
            side_menu_colors = theme_setting.light.side_menu_color
        } else if (ids == 'default') {
            bg_colors = theme_setting.default.bg_color
            h_bg_color = theme_setting.default.h_bg_color
            text_color = theme_setting.default.text_color
            body_text_color = theme_setting.default.body_text
            side_menu_colors = theme_setting.default.side_menu_color
        } else if (ids == 'modern') {
            bg_colors = theme_setting.modern.bg_color
            h_bg_color = theme_setting.modern.h_bg_color
            text_color = theme_setting.modern.text_color
            body_text_color = theme_setting.modern.body_text
            side_menu_colors = theme_setting.modern.side_menu_color
        }
        if (ids == 'modern') {
            side_menu.style.backgroundImage = side_menu_colors
        } else {
            side_menu.style.backgroundImage = ''
            side_menu.style.backgroundColor = side_menu_colors
        }
        theme_text_color = document.getElementsByClassName('theme_text_color')
        for (i = 0; i < theme_text_color.length; i++) {
            theme_text_color[i].style.color = text_color
            theme_text_color[i].setAttribute('style', '.theme_text_color: hover{border:1px solid}')
            //  theme_text_color[i].style.transition = transition_t + 's'
        }
        menuListItems = document.getElementsByClassName('menuListItems')
        for (i = 0; i < menuListItems.length; i++) {
            if (ids == 'modern') {
                menuListItems[i].style.backgroundImage = bg_colors[i]
            } else {
                menuListItems[i].style.backgroundImage = ''
                menuListItems[i].style.backgroundColor = bg_colors[i]
                menuListItems[i].style.transition = transition_t + 's'
            }
        }
        body_text_color_items = document.getElementsByClassName('body_text_color')
        for (i = 0; i < body_text_color_items.length; i++) {
            body_text_color_items[i].style.color = body_text_color
            body_text_color_items[i].style.transition = transition_t + 's'
        }
        //console.log(body_text_color)

    }


    side_menus_label = document.getElementsByClassName('side-menus-label')
    if (theme_select == "dark") {
        for (i = 0; i < side_menus_label.length; i++) {
            //  console.log(side_menus_label[i].className)
        }

    }

    sideMenuLeft = document.getElementById("sideMenuLeft")
    sideMenuRight = document.getElementById("sideMenuRight")

    function sideMenuMouseOver(side_menu_btn) {
        side_menu_btn.style.display = 'none';
        sideMenuRight.style.display = 'block'
        side_menus_label_transition = 0.0
        for (i = 0; i < side_menus_label.length; i++) {
            side_menus_label[i].innerHTML = ''
            side_menus_label[i].style.transition = 0.5 + 's'
            side_menus_label[i].style.opacity = 0
            side_menus_label[i].style.width = 0 + 'px'
            side_menus_label[i].style.overflow = 'hidden'
        }
        side_menu.style.transition = '0.5s'
        side_menu.style.width = 130 + 'px'

    }

    function sideMenuMouseOut(side_menu_btn) {
        menus = ['Home', 'Features', 'Support', 'Community']
        side_menu_btn.style.display = 'none';
        sideMenuLeft.style.display = 'block'

        side_menus_label = document.getElementsByClassName('side-menus-label')
        side_menus_label_transition = 0.0
        for (i = 0; i < side_menus_label.length; i++) {
            side_menus_label[i].innerHTML = menus[i]
            side_menus_label[i].style.transition = 0.3 + 's'
            side_menus_label[i].style.opacity = 1
            side_menus_label[i].style.width = 120 + 'px'
            side_menus_label[i].style.overflow = 'hidden'
        }
        side_menu.style.transition = '0.3s'
        side_menu.style.width = side_menu_width + 'px'
    }



    function sideMenuOver(a) {
        //  a.style.backgroundColor = h_bg_color
    }

    function sideMenuOut(a) {
        //   a.style.backgroundColor = 'transparent'
    }
    </script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <script src="scripts/loading-bar.js"></script>
</body>

</html>