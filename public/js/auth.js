document.addEventListener('click', function (e) {

    const action = e.target.dataset.action;

    if (!action) return;

    if (action === 'login') {
        login();
    }

});

function logar() {
//    window.location = '/dashboard';
console.log('foi');
}
