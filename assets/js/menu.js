function menuBotao(){
    document.getElementById('menuUl').style.display='block';
    document.getElementById('menuUl').style.left='50%';
    document.getElementById('menuUl').style.transition='.5s';
    document.getElementById('botaoMenuAbrir').style.display='none';
    document.getElementById('botaoMenuFechar').style.display='block';
}

function closeMenu(){
    document.getElementById('menuUl').style.display='none';
    document.getElementById('menuUl').style.left='0%';
    document.getElementById('menuUl').style.transition='.5s';
    document.getElementById('botaoMenuAbrir').style.display='block';
    document.getElementById('botaoMenuFechar').style.display='none';
}