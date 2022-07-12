$(function () {
    fja();
});


function fja() {

    $(document).on('click', '#search-bn', function () {

        $.ajax(
            {
                url: 'searchTrening.php',
                method: 'post',
                data: { search: $('#search').val() },

                success: function (rzt) {
                    {
                        $("#bdy").empty();
                        $("#bdy").html(rzt);
                    }
                }
            }
        )
    })


}
