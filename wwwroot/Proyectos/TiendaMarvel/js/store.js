const time = '&ts=1';
const hash = '&hash=60e4e2d76dbd6f04c3100251b0e34972';
let homeNews = "https://gateway.marvel.com:443/v1/public/comics?format=comic&dateDescriptor=thisMonth&limit=25&" + time + "&apikey=07eeaa7e085c3e5ad138efea6703b75e" + hash;

const marvelStore = {
    render: () => {
        const container = document.querySelector('#marvel-row')
        let contentHTML = '';
        fetch(homeNews)
            .then(res => res.json())
            .then((json) => {
                console.log(json, 'RES.JSON');
                for (const hero of json.data.results) {
                    let price = hero.prices[0].price;
                    console.log(price);
                    if (hero.prices[0].price === 0) {
                        hero.prices[0].price = 9.99;
                    }
                    if (hero.description == null) {
                        hero.description = "Coming soon";
                    }
                    contentHTML += `<div class="col p-3 ">
                                <div class="card tarjetas text-warning"  style="width: 18rem; height: 40rem; overflow: auto"  data-bs-toggle="modal" data-bs-target="#cardModal">
                                <img class="card-img-top img-thumbnail" id="${hero.id}" onclick="changeImg(${hero.id})" src="${hero.thumbnail.path}.${hero.thumbnail.extension}" alt="$hero.name">
                                <div class="card-header"><h5 class="card-title">${hero.title}</h5></div>
                                <div class="card-text">${hero.description}<br>Price: € ${hero.prices[0].price}</div>
                                <div class="card-footer text-center"> <button class="btn btn-primary " type="button">Add to cart <i class="fa-solid fa-cart-shopping"></i></button></div>
                                </div>
                                </div>`;

                }
                container.innerHTML = contentHTML;
            })

    }
}
marvelStore.render();

function changeImg(id) {
    document.getElementById('oop').src = document.getElementById(id).src;
}

function calculatePrice() {
    let cart1 = document.getElementById('productName');
    let showPrice = document.getElementById('totalPrice');
    const sumFunction = (a, b) => a + b;
    let total = 0;
    cart1 = cart1.querySelectorAll("span");
    cart1.forEach(cart => total = sumFunction(total, parseFloat(cart.innerText)))
    showPrice.innerText = total + " €";
    sessionStorage.setItem("total", total);
    console.log(total);
}
