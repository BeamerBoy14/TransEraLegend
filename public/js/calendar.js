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

// date event
startDate.onchange = validateDate;
endDate.onchange = validateDate;
nextButon.onclick = setDays;
prevButton.onclick = setDays;
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
        console.log('---------------------------------------------------------------')
        Array.from(days).forEach((day) => {
            console.log(day.dataset.day)
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
    day.style.backgroundColor = 'red';
}

function resetColor(days) {
    Array.from(days).forEach((day) => {
        day.style.backgroundColor = '';
    });
    
}

