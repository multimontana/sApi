<section class="container">
    <div class="row pt-5 pb-5" id="categories">

    </div>
</section>
<script>
    function goToCategories(property) {
        alert(property)
    }
    $(document).ready(function(){
            $.ajax({
                url: "/v1/get/categories?offset=1&limit=100",
                type: "GET",
                success: function (data) {
                    const result = JSON.parse(data)
                    const categories = result.response.data;
                    let categoriesHtml = ''
                    for (const property in categories) {
                        categoriesHtml += "<div id='"+property+"' class='col-sm-6 col-md-4 mb-4 item_card d-flex align-items-center justify-content-center category-item'><div class='p-3 w-100'><h2 class='card-title text-center'>" + property +"</h2><div class='card-body  p-0'><ul> <li class='d-flex align-items-center justify-content-between'> <span>Компьютер</span> <span>1520</span></li> </ul> </div> </div> </div>"
                    }
                    $('#categories').html(categoriesHtml)
                    $('.category-item').click(function() {
                        window.location.href = `/categories?name=${$(this).attr('id')}`
                    })
                }
            });
    });
</script>