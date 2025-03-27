const display = document.querySelector('#display')

function inserirNoDisplay(data) {
    display.value += data
}

function clearDisplay() {
    display.value = ''
}

function voltar() {
    display.value = display.value.slice(0, -1) 
}

function resultado() {
    try {
        display.value = eval(display.value)
    } catch {
        display.value = 'Error'
    }
}