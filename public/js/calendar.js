$('#calender').datetimepicker({
    inline: true,
    format: 'L'
});

// variables
let startDate = document.getElementById('start');
let endDate = document.getElementById('end');
startDateValue = endDateValue = null;

// calender event
let nextButon = document.getElementsByClassName('next')[0];
let prevButton = document.getElementsByClassName('prev')[0];
let pickerButton = document.getElementsByClassName('picker-switch')[0];
let pickerSwitch = document.getElementsByClassName('picker-switch')[0];

nextButon.classList.add('disabled');
nextButon.innerHTML = "";
prevButton.classList.add('disabled');
prevButton.innerHTML = "";
//pickerSwitch.remove();

// date event
startDate.onchange = validateDate;
endDate.onchange = validateDate;
nextButon.addEventListener('click', setDays);
prevButton.addEventListener('click', setDays);
pickerButton.onchange = setDays;

function validateDate(el)
{
    let target = el.target;
    let id = target.id;
    let date = new Date(target.value);
    let days = document.getElementsByClassName('day');
    resetColor(days);
    if (id == "start") {
        startDateValue = date;
    }
    if (id == "end") {
        endDateValue = date;
    }
    if (startDateValue > endDateValue) {
        return endDate.value = ''
    }
    setDays()
}

function setDays() {
    if (endDateValue && startDateValue) {
        let days = document.getElementsByClassName('day');
        Array.from(days).forEach((day) => {
            let dayExplode = day.dataset.day.split('/');
            let monthString = dayExplode[0];
            let dayString = dayExplode[1];
            let yearString = dayExplode[2];
            if (endDateValue.getMonth() == startDateValue.getMonth()) {
                if (dayString >= startDateValue.getDate() && dayString <= endDateValue.getDate() && monthString == (startDateValue.getMonth() + 1)) {
                    setColor(day);
                }
            } else {
                if (
                    (dayString >= startDateValue.getDate() && monthString == (startDateValue.getMonth() + 1)) ||
                    (dayString <= endDateValue.getDate() && monthString == (endDateValue.getMonth() + 1))
                ) {
                    setColor(day);
                }
            }
        });
    }
}

function setColor(day) {
    day.style.backgroundColor = 'black';
}

function setColorReservation(day) {
    day.style.backgroundColor = 'green';
}

function resetColor(days) {
    Array.from(days).forEach((day) => {
        day.style.backgroundColor = '';
    });
}

// Si reservation
let reservations = document.getElementsByClassName('date-info');
console.log(reservations);
for (let r of reservations) {
    let startDateValue = new Date(r.dataset.startdate);
    let endDateValue = new Date(r.dataset.enddate);
    let days = document.getElementsByClassName('day');
    Array.from(days).forEach((day) => {
        let dayExplode = day.dataset.day.split('/');
        let monthString = dayExplode[0];
        let dayString = dayExplode[1];
        let yearString = dayExplode[2];
        if (endDateValue.getMonth() == startDateValue.getMonth()) {
            if (dayString >= startDateValue.getDate() && dayString <= endDateValue.getDate() && monthString == (startDateValue.getMonth() + 1)) {
                setColorReservation(day);
            }
        } else {
            if (
                (dayString >= startDateValue.getDate() && monthString == (startDateValue.getMonth() + 1)) ||
                (dayString <= endDateValue.getDate() && monthString == (endDateValue.getMonth() + 1))
            ) {
                setColorReservation(day);
            }
        }
    });
}
