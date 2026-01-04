
document.addEventListener('DOMContentLoaded', function() {
  const overlay = document.getElementById('overlay01');
  const overlayInner = document.getElementById('overlay-inner01');

  // オーバーレイ表示切り替え
  function overlayToggle() {
    overlay.classList.toggle('overlay-on');
  }

  // 「詳しく見る」ボタンにイベント設定
  const openButtons = document.getElementsByClassName('overlay-event01');
  for (let i = 0; i < openButtons.length; i++) {
    openButtons[i].addEventListener('click', function() {
      // data属性から情報取得
      const title = this.getAttribute('data-title');
      const text = this.getAttribute('data-text');
      const img = this.getAttribute('data-img');

      // オーバーレイの中身を更新
      overlayInner.querySelector('h1').textContent = title;
      overlayInner.querySelector('p').textContent = text;
      overlayInner.querySelector('img').src = img;

      overlayToggle();
    }, false);
  }

  // 閉じるボタン（overlay-closeクラス）
  const closeBtn = document.querySelector('.overlay-close');
  closeBtn.addEventListener('click', function(e) {
    e.stopPropagation();
    overlay.classList.remove('overlay-on');
  }, false);

  // オーバーレイ内クリックで閉じない
  overlayInner.addEventListener('click', function(event) {
    event.stopPropagation();
  }, false);
});
