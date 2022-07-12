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


    $(document).on('click', 'th', function () {

        const kolona = $(this).attr('kolona');
        const sort = $(this).attr('sort');

        if (kolona == 'edit') {
            alert('Ova kolona se ne može sortirati!');
            return;
        }


        $.ajax(
            {
                url: 'sortTrening.php',
                method: 'post',
                data: { kolona: kolona, sort: sort },

                success: function (rzt) {
                    {
                        $("#bdy").empty();
                        $("#bdy").html(rzt);
                    }
                }
            }
        )

        if (sort == 'asc')
            $(this).attr('sort', 'desc');
        if (sort == 'desc')
            $(this).attr('sort', 'asc');
    })


}
