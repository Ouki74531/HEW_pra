


//login
//モーダルエリアのclass名を取得
const login_modalOpen = document.getElementsByClassName('modalbtn')[0];
const login_modalArea = document.getElementsByClassName('modal logInFadeOut')[0];
const login_modalClose = document.getElementsByClassName('modal_back')[0];

// ボタンのclass名「openModal」の取得
login_modalOpen.addEventListener('click',()=>{
    login_modalArea.style.display='block'
});

// ボタンのclass名「closeModal」の取得
login_modalClose.addEventListener('click',()=>{
    login_modalArea.style.display='none'
});

//モーダル解除ボタンのClass名「closeModal」の取得
const modalClose = document.getElementsByClassName('closeModal')[0];


//モーダルウィンドウの解除
modalClose.addEventListener('click',()=>{
    login_modalArea.style.display = 'none';
});
