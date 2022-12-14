function getDate(time) {
    let formatOption = document.querySelector('input[name="calendar"]:checked').value;
    let dResult = document.getElementById("dateResult");
    let date = time;
    console.log(formatOption);
    let options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
    let optionsSimplified = {weekday: 'short', year: 'numeric', month: 'short', day: 'numeric'};
    switch (formatOption) {
        case"0":
            dResult.innerHTML = date.toLocaleDateString();
            break;
        case "1":
            dResult.innerHTML = date.toLocaleDateString('es-ES', options);
            break;
        case "2":
            dResult.innerHTML = date.toLocaleDateString('es-ES', optionsSimplified);
            break;
    }
}

function getTime(extra) {
    let formatOption = document.querySelector('input[name="hours"]:checked').value;
    let hResult = document.getElementById("hourResult");
    let time = new Date();
    let newDate = getNewDate(time, extra);
    let meridian = "";
    let hours = addZeroBefore(newDate.getHours());
    let minutes = addZeroBefore(newDate.getMinutes());
    let seconds = addZeroBefore(newDate.getSeconds());
    createClock(newDate);
    getDate(newDate);
    switch (formatOption) {
        case "0":
            if (hours > 12) {
                hours = hours % 12;
                meridian = " PM";
            } else {
                meridian = " AM";
            }
            hResult.innerHTML = hours + ":" + minutes + ":" + seconds + meridian;
            break;
        case "1":
            hResult.innerHTML = hours + ":" + minutes + ":" + seconds;
            break;
    }
}

function addZeroBefore(n) {
    return (n < 10 ? '0' : '') + n;
}

function getNewDate(time, hours) {
    time.setTime(time.getTime() + hours * 60 * 60 * 1000);
    return time;
}

function addInterval(extra) {
    clearInterval(inicio);
    inicio = setInterval(function () {
        getTime(extra)
    }, 1000, false);
}

let inicio = setInterval(getTime, 500, false);

var clockImage = new Image();
var clockImageLoaded = false;
clockImage.onload = function () {
    clockImageLoaded = true;
}
clockImage.src = 'img/5053.png';

function addBackgroundImage() {
    context.drawImage(clockImage, canvas.width / 2 * -1, canvas.height / 2 * -1, canvas.width, canvas.height);
}

function degreesToRadians(degrees) {
    return (Math.PI / 180) * degrees
}

function drawHourHand(theDate) {
    var hours = theDate.getHours() + theDate.getMinutes() / 60;

    var degrees = (hours * 360 / 12) % 360;

    context.save();
    context.fillStyle = 'black';
    context.strokeStyle = '#555';

    context.rotate(degreesToRadians(degrees));

    drawHand(70, 7, 3);

    context.restore();

}

function drawMinuteHand(theDate) {
    var minutes = theDate.getMinutes() + theDate.getSeconds() / 60;

    context.save();
    context.fillStyle = 'black';
    context.strokeStyle = '#555';
    context.rotate(degreesToRadians(minutes * 6));

    drawHand(110, 7, 5);

    context.restore();
}

function drawHand(size, thickness, shadowOffset) {
    thickness = thickness || 4;

    context.shadowColor = '#555';
    context.shadowBlur = 10;
    context.shadowOffsetX = shadowOffset;
    context.shadowOffsetY = shadowOffset;

    context.beginPath();
    context.moveTo(0, 0); // center
    context.lineTo(thickness * -1, -10);
    context.lineTo(0, size * -1);
    context.lineTo(thickness, -10);
    context.lineTo(0, 0);
    context.fill();
    context.stroke();
}

function drawSecondHand(theDate) {
    var seconds = theDate.getSeconds();

    context.save();
    context.fillStyle = 'red';
    context.globalAlpha = 0.8;
    context.rotate(degreesToRadians(seconds * 6));

    drawHand(100, 4, 8);

    context.restore();
}

function createClock(date) {
    addBackgroundImage();
    drawHourHand(date);
    drawMinuteHand(date);
    drawSecondHand(date);
}

function clockApp() {
    if (!clockImageLoaded) {
        setTimeout('clockApp()', 100);
        return;
    }
    context.translate(canvas.width / 2, canvas.height / 2);
    createClock();
    setInterval('createClock()', 1000)
}

