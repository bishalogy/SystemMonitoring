<div class="container-fluid p-0 m-0" id="go11">
    <div class="p-0 m-0" style="background:transparent">
        <div class="card-body pt-0">
            <p class="card-text pt-0">
                <table class="" id="mouse" style="text-transform:capitalize"></table>
                <script>
                $.getJSON("../data/Mouse/mouse.json", function(result) {
                    $.each(result, function(id, key) {
                        mouse = document.getElementById("mouse")
                        mouse.innerHTML +=
                            `<tr><td class='font-weight-bold' style='width:250px'>` +
                            id +
                            `</td><td class='font-weight-bold'>` + key +
                            `</td></tr>`

                    })
                });
                </script>

            </p>

        </div>
    </div>
</div>
