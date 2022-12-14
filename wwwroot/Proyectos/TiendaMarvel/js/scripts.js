const time = '&ts=1';
const hash = '&hash=60e4e2d76dbd6f04c3100251b0e34972';
let homeNews = "https://gateway.marvel.com:443/v1/public/comics?format=comic&dateRange=2022-05-10%2C2022-11-04&hasDigitalIssue=false&orderBy=title&limit=25" + time + "&apikey=07eeaa7e085c3e5ad138efea6703b75e" + hash;
const marvel = {
    render: () => {

        const container = document.querySelector('#marvel-row');
        let contentHTML = '';
        // fetch(homeCarousel)
        //     .then(res => res.json())
        //     .then((json)=> {
        //         for (const hero of json.data.results) {
        //             let urlHero = hero.urls[0].url;
        //             if(hero.id==92833){
        //                 contentCarousel += `<div className="carousel-item text-center active">
        //                 <img src="${hero.thumbnail.path}.${hero.thumbnail.extension}" className="d-block w-100" alt="${hero.name}">
        //                     <div class="carousel-caption d-none d-md-block">
        //                         <h5 class=" text-light">${hero.title}</h5>
        //
        //                     </div>
        //             </div>`
        //             }
        //             else{
        //             contentCarousel += `<div className="carousel-item text-center">
        //                 <img id="${hero.id}" src="${hero.thumbnail.path}.${hero.thumbnail.extension}" className="d-block w-100" alt="${hero.name}">
        //                     <div class="carousel-caption d-none d-md-block">
        //                         <h5 class=" text-light">${hero.title}</h5>
        //                     </div>
        //             </div>`}
        //         }
        //         containerCarousel.innerHTML=contentCarousel;
        //     })
        fetch(homeNews)
            .then(res => res.json())
            .then((json) => {
                console.log(json, 'RES.JSON');
                for (const hero of json.data.results) {
                    let name = hero.title;
                    name = name.slice(0, 5);
                    let price = hero.prices[0].price;
                    // console.log(price);
                    if (hero.prices[0].price === 0) {
                        hero.prices[0].price = 9.99;
                    }
                    if (hero.description == null) {
                        hero.description = "Coming soon";
                    }
                    contentHTML += `<div class="col p-3" >
                                <div class="card tarjetas text-warning"  id="${hero.digitalId}" style="width: 18rem; height: 40rem; overflow: auto"  data-bs-toggle="modal" data-bs-target="#cardModal">
                                <img class="card-img-top img-thumbnail" id="${hero.id}" onclick="changeImg(${hero.id})" src="${hero.thumbnail.path}.${hero.thumbnail.extension}" alt="${hero.name}">
                                <div class="card-header"><h5 class="card-title"  >${hero.title}</h5></div>
                                <div class="card-text" >${hero.description}<br>Price: <p > ${hero.prices[0].price}</p></div>
                                <div class="card-footer text-center prices" > <button class="btn btn-primary " type="button" onclick="addToCart('${hero.digitalId}')">Add to cart <i class="fa-solid fa-cart-shopping"></i></button></div>
                                </div>
                                </div>`;

                }
                container.innerHTML = contentHTML;

            })

    }
}
marvel.render();

function changeImg(id) {
    document.getElementById('oop').src = document.getElementById(id).src;
}

function addToCart(digitalId) {
    let card = document.getElementById(digitalId);
    let comicPrice = card.querySelector("p").innerText;
    let comicName = card.querySelector("h5").innerText;
    sessionStorage.setItem(comicName, comicPrice);
    let cart1 = document.getElementById('productName');
    let names = '';
    names += ` <p>${comicName}---------<span>${comicPrice}</span></p>`;
    cart1.innerHTML += names;
}

function calculatePrice() {
    let cart1 = document.getElementById('productName');
    let showPrice = document.getElementById('totalPrice');
    let arrayNames = Object.keys(sessionStorage);
    let arrayPrices = Object.values(sessionStorage);
    console.log(arrayNames);

    const sumFunction = (a, b) => a + b;
    let total = 0;
    cart1 = cart1.querySelectorAll("span");
    if (cart1 === null) {
        if (sessionStorage !== null) {
            let arrayNames = Object.keys(sessionStorage);
            let arrayPrices = Object.values(sessionStorage);
            console.log(arrayNames);
            let cart1 = document.getElementById('productName');
            let names = '';

            Object.keys(sessionStorage).forEach((key) => {
                console.log(localStorage.getItem(key));
                names += ` <p>${sessionStorage.getItem(key)}---------<span>${key}</span></p>`;
                cart1.innerHTML += names;
            });

            cart1 = cart1.querySelectorAll("span");
            cart1.forEach(cart => total = sumFunction(total, parseFloat(cart.innerText)))
            sessionStorage.setItem("total", total);
        }

    } else {
        cart1.forEach(cart => total = sumFunction(total, parseFloat(cart.innerText)))
        sessionStorage.setItem("zztotal", total.toFixed(2));
    }
    showPrice.innerText = total.toFixed(2) + " €";

    console.log(total);
}

