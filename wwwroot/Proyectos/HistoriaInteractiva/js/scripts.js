let weapons = ["w1", "w2", "w3"];
let disguises = ["d1", "d2", "d3"];
let locations = ["l1", "l2", "l3"];
let goodEnding = ["d1w1l1", "d2w2l3", "d3w3l2"];
let badEndings = ["", "", ""];

function allowDrop(allowdropevent) {
    allowdropevent.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    let dato = document.getElementById(data).innerText;
    let destination = ev.target.id;
    let ending = "";
    console.log(destination);
    console.log(data);
    switch (destination) {
        case "Locations":
            if (locations.includes(data)) {
                ev.target.value = dato;
                sessionStorage.setItem("Location", data);
                sessionStorage.setItem("LocationAnswer", dato);
                ending += data;
            } else {
                alert("That's not a location");
            }
            break;
        case "Weapons":
            if (weapons.includes(data)) {
                ev.target.value = dato;
                sessionStorage.setItem("Weapon", data);
                sessionStorage.setItem("WeaponAnswer", dato);
                ending += data;
            } else {
                alert("That's not a weapon");
            }
            break;
        case "Disguises":
            if (disguises.includes(data)) {
                ev.target.value = dato;
                sessionStorage.setItem("Disguise", data);
                sessionStorage.setItem("DisguiseAnswer", dato);
                ending += data;
            } else {
                alert("That's not a disguise");
            }
            break;
    }
}

function restartAdventure() {
    document.getElementById("adventureForm").reset();
    sessionStorage.clear();
}


function setAnswers() {
    document.getElementById("Weapons").value = sessionStorage.getItem("WeaponAnswer");
    document.getElementById("Disguises").value = sessionStorage.getItem("DisguiseAnswer");
    document.getElementById("Locations").value = sessionStorage.getItem("LocationAnswer");

}

function checkAnswers() {
    let r1 = document.getElementById("Weapons");
    let r2 = document.getElementById("Disguises");
    let r3 = document.getElementById("Locations");
    let location = sessionStorage.getItem("Location");
    let weapon = sessionStorage.getItem("Weapon");
    let disguise = sessionStorage.getItem("Disguise");
    let ending = "";
    ending = disguise + weapon + location;
    sessionStorage.setItem("Ending", ending);
    console.log(ending);
    if (r1.value == null) {
        r1.style.borderColor = 'Red';
    }
    if (r2 == null) {
        r2.style.outlineColor = 'red';
    }
    if (r3.value == null) {
        r3.style.outlineColor = 'red';
    }
    if (location !== null && weapon !== null) {
        if (disguise !== null) {
            if (goodEnding.includes(ending)) {
                window.location.href = "result.html";
            } else {
                window.location.href = "badEnding.html";
            }
        }
    } else {
        window.alert("An option is empty")
    }
}

function resetAdventure() {
    sessionStorage.clear();
    window.location.href = "index.html";
}

function loadEnding() {
    let ending = document.getElementById('endScene');
    let ending1 = sessionStorage.getItem('Ending');
    switch (ending1) {
        case "d1w1l1":
            ending.innerHTML = `<video width="600" height="400" autoplay muted loop>
                    <source src="/video/loading_3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                </video> `;
            break;
        case "d2w2l3":
            ending.innerHTML = `<video width="600" height="400" autoplay muted loop>
                    <source src="/video/loading_2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                </video> `;
            break;
        case "d3w3l2":
            ending.innerHTML = `<video width="600" height="400" autoplay muted loop>
                    <source src='/video/loading_1.mp4' type='video/mp4'>
                        Your browser does not support the video tag.
                </video> `;
            break;

    }
    console.log(ending);
}