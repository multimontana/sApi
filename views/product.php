   <div id="product-card">

   </div>
    <script>
        const params = new URLSearchParams(window.location.search)
        if (params.get('id')) {
            $.ajax({
                url: `/v1/get/product?id=${params.get('id')}`,
                type: "GET",
                success: function (data) {
                    const result = JSON.parse(data)
                    const product = result.response.data
                    if (product && product.length) {
                        $('#product-card').html(' <div class="mt-5 mb-5 d-flex align-items-start info_item"><img src="'+ product[0].picture +'" alt="Card image"><div class="info__item-content"><h1>'+ product[0].name +'</h1><div class="d-flex flex-column"> <p><strong>Цена</strong> ' + product[0].price+'</p><p><strong>Модель</strong> ' + product[0].vendor+'</p></div></div> </div>')
                    }
                }
            });
        }
    </script>