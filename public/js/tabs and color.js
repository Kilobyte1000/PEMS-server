let houseTab = document.getElementById("house_prefect_tab")
let sportsTab = document.getElementById("sports_prefect_tab")
let houseButton = document.getElementById("houseButton")
let sportsButton = document.getElementById("sportsButton")

houseButton.click()

choiceSelected=0

houseBoySelected=false
houseGirlSelected=false
SportsBoySelected=false
SportsGirlSelected=false


function openTab(evt, tabName) {

    if (tabName === 'house_prefect_tab')
    {
        houseTab.className = "visible"
        sportsTab.className = ""
        sportsButton.className = ""
    }
    else
    {
        sportsTab.className = "visible"
        houseTab.className = ""
        houseButton.className = ""
    }
    evt.currentTarget.className = "active"
}

function writeHouseBoy(el) {
    document.getElementById("house_boy").innerHTML = el.nextElementSibling.innerHTML;
    if(!houseBoySelected) {
        houseBoySelected = true
        ifAllSelectedVisible()
    }
}

function writeHouseGirl(el) {
    document.getElementById("house_girl").innerHTML = el.nextElementSibling.innerHTML;
    if (!houseGirlSelected) {
        houseGirlSelected = true
        ifAllSelectedVisible()
    }
}

function writeSportsBoy(el) {
    document.getElementById("sports_boy").innerHTML = el.nextElementSibling.innerHTML;
    if (!SportsBoySelected) {
        SportsBoySelected = true
        ifAllSelectedVisible()
    }
}

function writeSportsGirl(el) {
    document.getElementById("sports_girl").innerHTML = el.nextElementSibling.innerHTML;
    if (!SportsGirlSelected) {
        SportsGirlSelected = true
        ifAllSelectedVisible()
    }
}

function ifAllSelectedVisible() {
    if (choiceSelected === 3) {
        document.getElementById('submit').style.display = 'block';
    } else {
        choiceSelected++
    }
}

document.getElementsByTagName('body').item(0).className = house;
