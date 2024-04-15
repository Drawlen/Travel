document.querySelector('form').addEventListener('submit',e=>{
    e.preventDefault()

    const data ={
        name: document.querySelectorAll('input')[0].value,
        /*div.user-panel.main input[name=login]*/
        number: document.querySelectorAll('input')[1].value,
        email: document.querySelectorAll('input')[2].value,
    }

    sendForm(data);
});

async function sendForm(data){
    const res = await fetch('./requests.php', {
        method:'POST',
        headers:{'Content-type': 'application/json'},
        body: JSON.stringify(data)
    });

    const result = await res.json();

    if (res.status === 201) {
        alert('Заявка отправлена')
    } else {

    }

}