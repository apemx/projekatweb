function goBack() {
    history.back();
}
function toggleMenu() {
    var menu = document.getElementById('hidden-code');
    menu.classList.toggle('hidden');
}
document.getElementById('btn-log').addEventListener('click', function() {
    toggleMenu();
    console.log('CAO0');
});


document.getElementById('back').addEventListener('click', goBack);

