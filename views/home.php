<section class="container" id="container">
    <div class="row pt-5 pb-5" id="categories">

    </div>
</section>
<script>
    $(document).ready(function(){
        $.ajax({
            url: "/v1/get/categories",
            type: "GET",
            success: function (data) {
                const result = JSON.parse(data)
                const categories = result.response.data;
                let categoriesHtml = ''
                let childrenHtml = ''
                let paginate_array = []
                for (const property in categories) {
                    if (categories[property] && categories[property].length) {
                        const childs = categories[property]
                        childrenHtml = ''
                        for (let i = 0; i < childs.length; i++) {
                            childrenHtml += "<li  id='"+childs[i]+"' class='d-flex align-items-center justify-content-between category-item'> <span>" + childs[i] +"</span></li>"
                        }
                    }
                    const elHtml = "<div class='col-sm-6 col-md-4 mb-4 item_card d-flex  justify-content-center'><div class='p-3 w-100'><h2 class='card-title text-center'>" + property +"</h2><div class='card-body card_body p-0' id='style-scroll'><ul> " + childrenHtml +" </ul> </div> </div> </div>"
                    categoriesHtml += elHtml
                    paginate_array.push(elHtml)
                }
                $('#container').pagination({
                    dataSource: paginate_array,
                    pageSize: 6,
                    callback: function (data, pagination) {
                        $('#categories').html(data.join(''))
                        $('.category-item').click(function() {
                            window.location.href = `/categories?name=${$(this).attr('id')}`
                        })
                    }
                })
            }
        });
    });
</script>