<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<style>
*::-webkit-scrollbar {
    width: 3px;
    background-color: transparent;
}

*::-webkit-scrollbar-thumb {
    background-color: #ddd;
}

*::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
    background-color: transparent;
}

li:hover {
    text-decoration: underline;
    cursor: pointer;
}
</style>
<div class="container d-flex flex-column font-weight-bold justify-content-center position-relative"
    style="height:;width:28vw;background:rgba(0,0,0,0.5)">
    <div class="container-fluid p-0 text-white position-relative " style="top:-100px">
        <ul>
            <li onclick="settings(1,'System Information')">System Informations</li>
            <li>CPU
                <ul>
                    <li onclick="settings(2,'CPU-General')">General</li>
                    <li onclick="settings(3,'CPU-Cache')">Cache</li>
                </ul>
            </li>
            <li onclick="settings(4,'Display')">Display</li>
            <li onclick="settings(5,'Sound')">Sound</li>
            <li>Storage
                <ul>
                    <li onclick="settings(6,'Storage-Drivers')">Drivers</li>
                    <li onclick="settings(7,'Storage-Disks')">Disks</li>
                </ul>
            </li>
            <li onclick="settings(8,'Networks')">
                Networks
            </li>
            <li>Input Devices
                <ul>
                    <li onclick="settings(10,'Input Devices-Keyboard')">Keyboard</li>
                    <li onclick="settings(11,'Input Devices-Mouse')">Mouse</li>
                </ul>
            </li>
            <li onclick="settings(9,'Battery')">Battery</li>
        </ul>
    </div>
</div>

<div class="container ml-2 p-0 text-white w-100 "
    style="height:90vh;border-right:0px solid ;background:rgba(0,0,0,0.5)">
    <div id="table_title" class="font-weight-bold m-0 pl-5 p-2 w-100 position-relative"
        style="font-size:30px;background:rgba(0,0,0,0.3);;z-index:100">System Informations</div>
    <div class="container mt-2 " style="height:80vh;overflow-y:auto;z-index:-10">
        <?php include "system_info.php"?>
        <?php include "cpu_general.php"?>
        <?php include "cpu_cache.php"?>
        <?php include "display.php"?>
        <?php include "sound.php"?>
        <?php include "drives.php"?>
        <?php include "disk.php"?>
        <?php include "networks.php"?>
        <?php include "battery.php"?>
        <?php include "keyboard.php"?>
        <?php include "mouse.php"?>

    </div>

</div>
<script>
function settings(val, title) {
    document.getElementById("table_title").innerHTML = title
    for (i = 1; i < 15; i++) {
        try {
            animation_style = 'fadeIn'
            document.getElementById('go' + i).style.display = 'none';
            document.getElementById('go' + i).classList.add("animated");
            document.getElementById('go' + i).classList.add(animation_style);
        } catch (e) {

        }
    }
    document.getElementById('go' + val).style.display = 'block'
}
settings(1, 'System Information')
</script>