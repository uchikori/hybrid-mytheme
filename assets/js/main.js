function handleUrlChange() {
  openModal();
  loadMoreEvents();
}

function openModal() {
  // const isEventsArchivePage = window.location.pathname === "/events/";
  // console.log(isEventsArchivePage);

  // if (isEventsArchivePage) {
  const eventsLink = document.querySelectorAll(
    ".tribe-events-calendar-month__calendar-event-title-link"
  );
  eventsLink.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const tooltipContent = link.getAttribute("data-tooltip-content");
      const postID = tooltipContent.match(/(\d+)/)[0];
      console.log(postID);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", ajax_object.ajax_url, true); // WordPressのadmin-ajax.phpを指定
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onload = function () {
        if (xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);

          console.log(response);

          // モーダルにデータを挿入
          document.querySelector(".modal-title").textContent = response.title;
          document
            .querySelector(".modal-thumbnail")
            .setAttribute("src", response.thumbnail);
          document.querySelector(".modal-body").innerHTML = response.content;

          // モーダルを表示
          document.getElementById("postModal").style.display = "block";
        }
      };
      xhr.send("action=load_post_content&post_id=" + postID);
    });
  });
  // モーダルを閉じる処理
  document.querySelector(".close").addEventListener("click", function () {
    document.getElementById("postModal").style.display = "none";
  });
  // }
}

function loadMoreEvents() {
  const days = document.querySelectorAll(".tribe-events-calendar-month__day");

  console.log(days);

  days.forEach((day) => {
    const events = day.querySelectorAll(
      ".tribe-events-calendar-month__calendar-event"
    );

    if (events.length > 3) {
      for (let i = 0; i < events.length; i++) {
        if (i >= 3) {
          events[i].style.display = "none";
        }
      }

      const moreLink = document.createElement("button");
      const hiddenEventsCount = events.length - 3;
      moreLink.innerText = `他 ${hiddenEventsCount} 件のイベントを見る`;
      moreLink.className = "show-more-events";
      moreLink.style.cursor = "pointer";

      // イベントがクリックされた時に残りを表示
      moreLink.addEventListener("click", function () {
        for (let i = 3; i < events.length; i++) {
          events[i].style.display = "block";
        }
        moreLink.style.display = "none";
      });

      const dayCell = day.querySelector(".tribe-events-calendar-month__events");

      console.log(dayCell);
      console.log(moreLink);

      dayCell.insertAdjacentElement("afterend", moreLink);
    }
  });
}

// ページ読み込み時
document.addEventListener("DOMContentLoaded", handleUrlChange);

// ページ遷移時
window.addEventListener("popstate", handleUrlChange);

// URLを動的に変更する場合に変更を検知
(function () {
  const pushState = history.pushState;
  const replaceState = history.replaceState;

  history.pushState = function () {
    pushState.apply(history, arguments);
    handleUrlChange(); // pushStateが呼ばれたら関数を実行
  };

  history.replaceState = function () {
    replaceState.apply(history, arguments);
    handleUrlChange(); // replaceStateが呼ばれたら関数を実行
  };
})();
