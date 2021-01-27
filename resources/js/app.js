require('./bootstrap');

axios.get('/sanctum/csrf-cookie')
    .then(res => {
        axios.post('/login', {
            email: 'test@test',
            password: 'qwerty1234'
        })
            .then(data => data.text())
            .then(data => console.log(data))
    })
