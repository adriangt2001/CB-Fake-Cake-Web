async function showCategory(id) {
    var resposta = await fetch('/php/controller/product_list.php?id='+id);
    var respostaTxt = await resposta.text();
    var element = $('#category-container');
    if (element.css('display') == 'flex') {
        document.getElementById('main-container').innerHTML = respostaTxt;
    }
    else {
        element.css({
            'display': 'flex',
            'flex-flow': 'row nowrap',
        });
        element.animate({
            'max-height': '100px'
        }, 'slow');
        element[0].insertAdjacentHTML('afterend', "<section id='main-container'>"+respostaTxt+"</section>");
    }
    
}

async function showProduct(id) {
    var resposta = await fetch('/php/controller/product_detail.php?id='+id);
    var respostaTxt = await resposta.text();
    document.getElementById('main-container').innerHTML = respostaTxt;
}

async function searchProduct() {
    var searchString = $('#searchInput').val();
    if (searchString.length === 0) {
        return;
    }

    var resposta = await fetch('/php/controller/product_search.php?searchString='+searchString);
    var respostaTxt = await resposta.text();
    if (respostaTxt.length === 0) {
        return;
    }
    var element = $('#category-container');

    if (element.css('display') == 'flex') {
        document.getElementById('main-container').innerHTML = respostaTxt;
    }
    else {
        element.css({
            'display': 'flex',
            'flex-flow': 'row nowrap',
        });
        element.animate({
            'max-height': '100px',
        }, 'slow');
        element[0].insertAdjacentHTML('afterend', "<section id='main-container'>"+respostaTxt+"</section>");
    }
}

async function showPurchases() {
    var resposta = await fetch('/php/controller/purchase_list.php');
    var respostaTxt = await resposta.text();
    document.querySelector('.main-container').innerHTML = respostaTxt;
}

async function showEditAccount() {
    var resposta = await fetch('/php/controller/account_settings_form.php');
    var respostaTxt = await resposta.text();
    document.querySelector('.main-container').innerHTML = respostaTxt;
}

async function showPurchase(id) {
    var resposta = await fetch('/php/controller/purchase_detail.php?comandaId='+id);
    var respostaTxt = await resposta.text();
    prevElement = document.getElementById('actual-comanda');
    if (prevElement != null) {
        prevElement.remove();
    }
    document.getElementById('comanda-'+id).insertAdjacentHTML('afterend', '<div id="actual-comanda">'+respostaTxt+'</div>');
}

$(function() {
    $('.carousel').hover(function () {
            $(this).find('img').css({
                'width': '75%',
                'height': '125%',
            });
            
        }, function () {
            $(this).find('img').css({
                'width': '50%',
                'height': '100%',
            });
        }
    );
    
    let index = 0;
    const totalImages = document.querySelector('.carousel-images').children.length;

    function nextImage() {
        index++;
        if (index >= totalImages) {
            index = 0;
        }
        document.querySelectorAll('.carousel-images').forEach((element)=>
            element.style.transform = 'translateX(' + (25 - index*50) + '%)'
        )
    };

    // Cambiar imagen cada 3 segundos
    setInterval(nextImage, 15000);
});

