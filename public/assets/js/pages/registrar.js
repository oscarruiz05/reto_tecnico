function registrar(){
    let name = document.getElementById('name').value

    fetch('/register-user',{
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({name})
    })
    .then(res => res.json())
    .then((data) => {
        console.log(data)
        localStorage.setItem('juego',JSON.stringify({ronda:1, puntaje: 0, user: data}))
        window.location.href = '/play'
    })
}


