let juego = JSON.parse(localStorage.getItem('juego'))

window.addEventListener('load', ()=>{
    fetch('/game',{
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(juego)
    })
    .then(res => res.json())
    .then((data) => {
        questinoario(data)
    })
})

let pregunta = document.getElementById('question')
let respuestas = document.getElementById('respuestas')
let ronda = document.getElementById('ronda')
let puntaje = document.getElementById('puntaje')
let jugador = document.getElementById('jugador')

function questinoario(data){
    if(data == 'ganaste'){
        alert('Ganaste!')
        fetch('/game/success',{
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(juego)
        })
        .then(res => res.json())
        .then((data) => {
            console.log(data)
        })
        localStorage.removeItem('juego');
        window.location.href = '/'
        return
    }

    let question = data.questions[Math.floor(Math.random() * data.questions.length)];

    ronda.innerHTML = 'Ronda: '+juego.ronda+'/5'
    jugador.innerHTML = 'Jugador: '+juego.user.name
    puntaje.innerHTML = 'Puntaje: '+juego.puntaje
    pregunta.innerHTML = question.question

    let content = '';
    for (const item of question.answers) {
        content += `
        <div class="card mb-3" id="res_${item.id}">
            <a href="#" onclick="verificar(${item.id})">
                <div class="card-body text-center">
                    ${item.answer}
                </div>
            </a>
        </div>
        `;
    }
    respuestas.innerHTML = content
}

function verificar(id){

    let data = {id}
    let card = document.getElementById('res_'+id)

    fetch('/game/validar',{
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then((data) => {
        console.log(data)
        if(data.estado == true){

            card.classList.add('bg-success')

            juego.ronda = juego.ronda + 1
            juego.puntaje += 10

            ronda.innerHTML = 'Ronda: '+juego.ronda+'/5'
            puntaje.innerHTML = 'Puntaje: '+juego.puntaje

            localStorage.setItem('juego', JSON.stringify(juego))

            fetch('/game',{
                method: 'post',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(juego)
            })
            .then(res => res.json())
            .then((data) => {
                questinoario(data)
            })

        }else{
            alert('Perdiste!')
            card.classList.add('bg-danger')
            localStorage.removeItem('juego');
            window.location.href = '/'
        }

    })
}


function salir(){
    let exit = confirm('Quieres salir?')
    if(exit == true){
        fetch('/game/success',{
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(juego)
        })
        .then(res => res.json())
        .then((data) => {
            console.log(data)
        })
        localStorage.removeItem('juego');
        window.location.href = '/'
    }
    return
}
