
function showAnswer(target_div) {
    if (document.getElementById(target_div).style.display == 'flex'){
        document.getElementById(target_div).style.display = 'none';
    }
    else{
        document.getElementById(target_div).style.display = 'flex';
    }

}
function showMenu() {
    document.getElementById('mobile_menu').style.display = 'flex';
}
function hideDiv(target_div) {
    document.getElementById(target_div).style.display = 'none';
}