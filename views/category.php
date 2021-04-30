<h1 class="card_title text-center"></h1>
<div id="container">
    <div class="row pt-5 pb-5 pl-3 pr-3" id="products">

    </div>
</div>
<script>
    const params = new URLSearchParams(window.location.search)
    if (params.get('name')) {
        $('.card_title').text(params.get('name'))
        $.ajax({
            url: `/v1/get/products/by/category?cn=${params.get('name')}`,
            type: "GET",
            success: function (data) {
                const result = JSON.parse(data)
                const products = result.response.data
                let productPaginateData = []
                for (let i = 0; i < products.length; i++) {
                    let productEl = '<div class="card_info col-sm-6 col-md-4 mb-4 d-flex  justify-content-center"><div class="card  p-0 card_item w-100"><img class="card-img-top" src="'+ products[i].picture +'" alt="Card image cap"><div class="card-body d-flex flex-column align-items-start justify-content-between"><div><h5 class="card-title">' + products[i].name +'</h5><p class="card-text">' + products[i].vendor +'</p></div><button id="'+ products[i].id +'" class="btn  btn_item product-item-info mt-3">Информация</button></div></div></div>'
                    productPaginateData.push(productEl)
                }
                if (productPaginateData && productPaginateData.length){
                    $('#container').pagination({
                        dataSource: productPaginateData,
                        pageSize: 6,
                        callback: function (data, pagination) {
                            console.log(data)
                            $('#products').html(data.join(''))
                            $('.product-item-info').click(function() {
                                window.location.href = `/product?id=${$(this).attr('id')}`
                            })
                        }
                    })
                }
            }
        });
    }
</script>