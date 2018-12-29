/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

( function() {
	// My code
  function make_openable(selector) {
    let item_open = false

    return {
      close: function() {
        item_open = false
        this.set_html()
      },
      open: function() {
        item_open = true
        this.set_html()
      },
      set_html() {
        const element = document.querySelector(selector)
        element.classList.remove("closed")
        if(!item_open)
          element.classList.add("closed")
      }
    }
  }

  let main_menu = make_openable('.menu')
  document.querySelector('.option.close').onclick = function() { main_menu.close() }
  const menu_button = document.querySelector('.menu-button')
  menu_button.onclick = function() { main_menu.open() }

  let video_overlay = make_openable('.video-overlay')
  document.querySelector('.video-overlay').onclick = function() {
    video_overlay.close()
    stopVideo()
  }

  document.querySelector('.img-play-overlay').onclick = function() {
    video_overlay.open()
  }

  // https://developers.google.com/youtube/iframe_api_reference
  var tag = document.createElement('script');
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
} )();

var player;
function onYouTubeIframeAPIReady() {
  console.log('init player')
  player = new YT.Player('player', {
    height: '390',
    width: '640',
    videoId: 'Rb0UmrCXxVA',
  });
}
function stopVideo() {
  player.stopVideo();
}
