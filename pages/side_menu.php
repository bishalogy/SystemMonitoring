<style>
.side-menus-label {
    background: transparent;
    text-align: center;
    font-weight: bold;
    font-size: 18px;
}

#sidemenu_body_menu_slider a {
    display: flex;
}

#sidemenu_body_menu_slider a i {
    width: 50px;
    background: ;
}

#sidemenu_body_menu_slider a div {
    width: 120px;
    background: ;
}
</style>
<div class="container-fluid h-100 p-0 m-0">
    <div class="h-75 d-flex align-items-center">

        <div class="container p-0" style="position:relative;top:-100px">
            <nav id="sidemenu_body_menu_slider" class="navbar navbar-light">
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link side_menu_link" href="#item-1"><i class="fas fa-home fa-2x theme_text_color"></i>
                        <div class="side-menus-label theme_text_color">Home</div>
                    </a>
                    <a class="nav-link side_menu_link" href="#item-2"><i
                            class="fab fa-buffer fa-2x theme_text_color"></i>
                        <div class="side-menus-label theme_text_color">Features</div>
                    </a>
                    <a class="nav-link side_menu_link" href="#item-3"><i
                            class="fas fa-hands-helping fa-2x theme_text_color"></i>
                        <div class="side-menus-label theme_text_color">Support</div>
                    </a>
                    <a class="nav-link side_menu_link" href="#item-4"><i class="fas fa-fire fa-2x theme_text_color"></i>
                        <div class="side-menus-label theme_text_color">Community</div>
                    </a>
                </nav>
            </nav>
        </div>

    </div>
    <div class="h-25 position-relative p-1">
        <style>
        .side_menu_btn_setting:hover {

            transform: rotate(45deg)
        }
        </style>
        <div class="container d-flex flex-row justify-content-between w-100 p- " style="position:absolute;bottom:20px">
            <button type="button" class="p-0 m-0 btn btn-link side_menu_btn_setting" data-toggle="modal"
                data-target="#side_menu_settings">
                <i class="fas fa-cog fa-2x theme_text_color" style="font-size:30px"></i>
            </button>
            <button id="sideMenuLeft" type="button" class="btn btn-link" onclick="sideMenuMouseOver(this)">
                <i class="fas fa-chevron-circle-left theme_text_color " style="font-size:20px"></i>
            </button>
            <button id="sideMenuRight" class="btn btn-link " type="button" onclick="sideMenuMouseOut(this)"
                style="display:none">
                <i class="fas fa-chevron-circle-right theme_text_color" style="font-size:20px;"></i>
            </button>

        </div>


    </div>

</div>

<div class="modal fade" id="side_menu_settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Configurations</h5>
                <!-- <button type="button" class="close border-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="container border rounded p-2">
                    <p>Theme's</p>
                    <select class="form-control" id="sidemenutheme" onchange="funcSideMenuTheme(this.value)">
                        <option value='default'>Default</option>
                        <option value='light'>Light</option>
                        <option value='dark'>Dark</option>
                        <option value='modern'>Modern</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>