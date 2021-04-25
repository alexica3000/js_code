$(document).ready(function() {
    $(document).on('click', '.show_more_works', function(e) {

        e.preventDefault();

        var _this = $(this);
        var lang = $('html').attr('lang');
        var url = '/' + lang + '/showMoreWorks';
        var page = _this.data('page');
        var typeProject = _this.data('typeproject');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            beforeSend: function(){
                $('.show_more_works').hide();
            },
            data: {
                page: page,
                typeProject: typeProject
            },
            success: function (response) {
                if (response.status == true) {
                    setTimeout(function () {
                        $('.renderWorksList').append(response.page);

                        if(response.next_page != 0){
                            $('.show_more_works').attr('data-page',response.next_page);
                            $('.show_more_works').data('page',response.next_page);
                            $('.show_more_works').fadeIn();
                        }
                        else{
                            $('.show_more_works').hide();
                        }
                    }, 500);
                }
            }
        })
    });
});