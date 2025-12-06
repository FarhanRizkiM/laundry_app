document.addEventListener("DOMContentLoaded", function () {
  function getSliderColor(parent) {
    return parent.getAttribute("data-color") || "#5d87ff";
  }
  document.querySelectorAll(".slider-container").forEach((container) => {
    let text = container.querySelector(".slider-text");
    let color = getSliderColor(container);
    text.style.backgroundImage = `linear-gradient(to right, #ffffff 0%, ${color} 0%)`;
    text.style.webkitBackgroundClip = "text";
    text.style.webkitTextFillColor = "transparent";
  });
  document.querySelectorAll(".slider-action").forEach((input) => {
    input.addEventListener("input", function () {
      let value = this.value;
      let parent = this.parentElement;
      let fill = parent.querySelector(".slider-fill");
      let thumb = parent.querySelector(".slider-thumb");
      let text = parent.querySelector(".slider-text");
      let color = getSliderColor(parent);
      fill.style.width = value + "%";
      thumb.style.left = `calc(${value}% - ${value * 0.4}px)`;
      text.style.backgroundImage = `linear-gradient(to right, #ffffff ${value}%, ${color} ${value}%)`;
    });
    input.addEventListener("change", function () {
      if (this.value < 100) {
        // Reset
        this.value = 0;
        let p = this.parentElement;
        p.querySelector(".slider-fill").style.width = "0%";
        p.querySelector(".slider-thumb").style.left = "4px";
        let c = getSliderColor(p);
        p.querySelector(
          ".slider-text"
        ).style.backgroundImage = `linear-gradient(to right, #ffffff 0%, ${c} 0%)`;
      } else {
        // Sukses
        if (confirm("Barang dibawa kurir?")) {
          alert("Status: Delivering!");
          window.location.reload();
        } else {
          // BATAL → RESET SAMA KAYA GAGAL
          this.value = 0;
          let p = this.parentElement;
          p.querySelector(".slider-fill").style.width = "0%";
          p.querySelector(".slider-thumb").style.left = "4px";

          let c = getSliderColor(p);
          p.querySelector(
            ".slider-text"
          ).style.backgroundImage = `linear-gradient(to right, #ffffff 0%, ${c} 0%)`;
        }
      }
    });
  });
});
