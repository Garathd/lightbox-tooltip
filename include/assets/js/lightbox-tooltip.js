jQuery(document).ready(function($) {
    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
      el.addEventListener("click", function() {
        const modalId = this.dataset.open;
        document.getElementById(modalId).classList.add(isVisible);
      });
    }

    for (const el of openEls) {
      el.addEventListener("mouseover", function() {
        const modalId = this.dataset.open;
        const isHover = this.dataset.hover;
          if(isHover == "true") {
            document.getElementById(modalId).classList.add(isVisible);
          }
      });
    }

    for (const el of closeEls) {
      el.addEventListener("click", function() {
        this.parentElement.parentElement.parentElement.classList.remove(isVisible);
      });
    }

    document.addEventListener("click", e => {
      if (e.target == document.querySelector(".gdx-modal.is-visible")) {
        document.querySelector(".gdx-modal.is-visible").classList.remove(isVisible);
      }
    });

    document.addEventListener("keyup", e => {
      // if we press the ESC
      if (e.key == "Escape" && document.querySelector(".gdx-modal.is-visible")) {
        document.querySelector(".gdx-modal.is-visible").classList.remove(isVisible);
      }
    });
});