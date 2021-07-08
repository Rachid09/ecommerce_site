$(document).ready(function () {
    // $.ajaxSetup({
    //     headers: {
    //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    //     },
    // });
    //append category level
    console.log($("#maincategory_id"));
    $("#maincategory_id").on("change", function () {
        // 2nd (A)
        // do your code here
        // It will specifically called on change of your element
        // console.log("blalalallazeazeaez");
        var maincategory_id = $(this).val();
        $.ajax({
            type: "post",
            url: "append-category-level",
            data: { maincategory_id: maincategory_id },
            success: function (resp) {
                $("#append_categories_level").html(resp);
            },
            error: function () {
                alert("error");
            },
        });
        // console.log(maincategory_id);
        // alert(maincategory_id);
    });
});
