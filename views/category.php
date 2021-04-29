<h1 class="card_title text-center">Телевизор</h1>
<div class="row pt-5 pb-5 pl-3 pr-3" id="products">
    <div class="card_info col-sm-6 col-md-4 mb-4 d-flex align-items-center justify-content-center">
        <div class="card  p-0 card_item w-100">
            <img class="card-img-top"
                 src="https://static9.depositphotos.com/1575949/1194/v/950/depositphotos_11947544-stock-illustration-widescreen-lcd-or-lcd-monitor.jpg"
                 alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Название карты</h5>
                <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и
                    составлять
                    основную часть содержимого карточки.</p>
                <button class="btn  btn_item">Информация</button>
            </div>
        </div>
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
                console.log(products)
                let productsHtml = ''
                for (let i = 0; i < products.length; i++) {
                    productsHtml += '<div class="card_info col-sm-6 col-md-4 mb-4 d-flex align-items-center justify-content-center"><div class="card  p-0 card_item w-100"><img class="card-img-top" src="'+ products[i].picture +'" alt="Card image cap"><div class="card-body"><h5 class="card-title">' + products[i].name +'</h5><p class="card-text">' + products[i].vendor +'</p><button id="'+ products[i].id +'" class="btn  btn_item product-item-info">Информация</button></div></div></div>'
                }
                $('#products').html(productsHtml)
                $('.product-item-info').click(function() {
                    window.location.href = `/product?id=${$(this).attr('id')}`
                })
            }
        });
    }
</script>