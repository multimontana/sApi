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
                        let params = ''
                        if(product[0].params && product[0].params.Param)
                        for (let i = 0; i < product[0].params.Param.length; i++) {
                            console.log()
                            params += "<span>" + "<strong>" + product[0].params.Param[i].name + "</strong>" + " - "+ product[0].params.Param[i].value + "</span>"
                        }
                        $('#product-card').html(' <div class="mt-5 mb-5 d-flex align-items-start info_item"><img src="'+ product[0].picture +'" alt="Card image"><div class="info__item-content"><h1>'+ product[0].name +'</h1><div class="d-flex flex-column"> <div class="d-flex"><p class="mr-3"><strong>Цена</strong> <span class="font-italic">' + product[0].price +' ₽' + '</span></p><p><strong>Модель</strong> ' + product[0].vendor+'</p></div>'+ params +'</div></div> </div>')
                    }
                }
            });
        }
    </script>