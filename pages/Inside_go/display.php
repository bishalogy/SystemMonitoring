<div class="container-fluid p-0 m-0" id="go4">
    <div class="p-0 m-0" style="background:transparent">
        <div class="card-body pt-0">
            <p class="card-text pt-0">
                <table class="" id="display" style="text-transform:capitalize"></table>
                <script>
                $.getJSON("../data/Graphics/graphics1.json", function(result) {
                    $.each(result, function(i) {
                        $.each(result[i], function(j, obj) {
                            $.each(obj, function(id,
                                    key)

                                {
                                    display = document.getElementById("display")
                                    display.innerHTML +=
                                        `<tr><td class='font-weight-bold' style='width:250px'>` +
                                        id +
                                        `</td><td class='font-weight-bold'>` + key +
                                        `</td></tr>`
                                }

                            )
                            display.innerHTML += '<hr>'
                        })
                    })
                });
                </script>

            </p>

        </div>
    </div>
</div>
