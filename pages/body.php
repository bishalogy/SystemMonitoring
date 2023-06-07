<style>
.menuListItems {
    height:100%;
}

.circle {
    border-radius: 50%;
    border: 2px solid white;
    background-color: deepskyblue;
    width: 300px;
    height: 300px;
    position: absolute;
    opacity: 0;
    animation: scaleIn 5s infinite cubic-bezier(.36, .11, .89, .32);
}

@keyframes scaleIn {
    from {
        transform: scale(.5, .5);
        opacity: .1;

    }

    to {
        transform: scale(2.5, 2.5);
        opacity: 0;
        border: 150px solid dark;
    }
}

.item {
    z-index: 100;
    padding: 5px;
}

.item button {
    animation: scaleIn1 5s infinite ease-out;
    font-style: italic;
}

@keyframes scaleIn1 {
    0% {
        transform: scale(1);

    }

    50% {
        transform: scale(1.1);

    }
}

.go_btn:hover {
    transition: 0.5s;
    transform: translateX(15px);
}
</style>
<div class="container-fluid p-0 m-0 w-100">

    <div class="w-100" data-spy="scroll" data-target="#sidemenu_body_menu_slider" data-offset="0"
        style="position:relative;height:100vh;overflow-y:scroll;scroll-behavior:smooth">

        <div id="item-1" class="menuListItems position-relative w-100">
            <?php include "Body/home.php"?>
        </div>
        <div id="item-2" class="menuListItems">
            <?php include "Body/features.php"?>
        </div>
        <div id="item-3" class="menuListItems " style="height:900px">
            <?php include "Body/support.php" ?>
        </div>
        <div id="item-4" class="menuListItems position-relative">
            <?php include "Body/community.php" ?>
        </div>
    </div>
</div>